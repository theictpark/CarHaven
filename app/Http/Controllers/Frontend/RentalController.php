<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentalController extends Controller
{
    public function create($car_id)
    {
        $car = Car::findOrFail($car_id);
        return view('frontend.rentals.create', compact('car'));
    }

    // Store a new rental booking
    public function store(Request $request, $car_id)
    {
        $request->validate([
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after:start_date',
        ]);

        $car = Car::findOrFail($car_id);

        // Check if the car is available
        if (!$car->availability) {
            return redirect()->back()->with('error', 'This car is not available.');
        }

        // Calculate total cost
        $days = \Carbon\Carbon::parse($request->start_date)->diffInDays($request->end_date);
        $totalCost = $days * $car->daily_rent_price;

        // Create rental
        Rental::create([
            'user_id' => Auth::id(),
            'car_id' => $car->id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_cost' => $totalCost,
        ]);

        // Mark car as unavailable
        $car->update(['availability' => false]);

        return redirect()->route('rentals.history')->with('success', 'Booking successful.');
    }

    // Show user rental history
    public function history()
    {
        $rentals = Rental::where('user_id', Auth::id())->get();
        return view('frontend.rentals.history', compact('rentals'));
    }

    // Cancel a booking (if rental has not started)
    public function cancel($id)
    {
        $rental = Rental::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        if (\Carbon\Carbon::parse($rental->start_date)->isFuture()) {
            $rental->delete();
            $rental->car->update(['availability' => true]);

            return redirect()->back()->with('success', 'Booking canceled.');
        }

        return redirect()->back()->with('error', 'Cannot cancel an ongoing or completed rental.');
    }
}
