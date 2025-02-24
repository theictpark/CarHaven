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

    public function store(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $car = Car::findOrFail($request->car_id);

        $existingRental = Rental::where('car_id', $car->id)
            ->where('status', 'Ongoing')
            ->where(function ($query) use ($request) {
                $query->whereBetween('start_date', [$request->start_date, $request->end_date])
                      ->orWhereBetween('end_date', [$request->start_date, $request->end_date])
                      ->orWhere(function ($q) use ($request) {
                          $q->where('start_date', '<=', $request->start_date)
                            ->where('end_date', '>=', $request->end_date);
                      });
            })
            ->exists();

        if ($existingRental) {
            return back()->with('error', 'This car is already booked for the selected dates.');
        }

        $days = now()->parse($request->end_date)->diffInDays(now()->parse($request->start_date)) + 1;
        $totalCost = $days * $car->daily_rent_price;

        Rental::create([
            'user_id' => Auth::id(),
            'car_id' => $car->id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_cost' => $totalCost,
            'status' => 'Ongoing',
        ]);

        return back()->with('success', 'Booking successful!');
    }

    public function history()
    {
        $rentals = Rental::where('user_id', Auth::id())->get();
        return view('frontend.rentals.history', compact('rentals'));
    }

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
