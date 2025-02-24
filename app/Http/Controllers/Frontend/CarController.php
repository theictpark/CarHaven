<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $query = Car::where('availability', true);

        // Apply filters
        if ($request->has('brand') && $request->brand) {
            $query->where('brand', $request->brand);
        }

        if ($request->has('car_type') && $request->car_type) {
            $query->where('car_type', $request->car_type);
        }

        if ($request->has('max_price') && is_numeric($request->max_price)) {
            $query->where('daily_rent_price', '<=', $request->max_price);
        }

        // Get filtered cars
        $cars = $query->get();

        // Get unique brands and car types for filters
        $brands = Car::pluck('brand')->unique();
        $carTypes = Car::pluck('car_type')->unique();

        return view('frontend.rentals',  compact('cars', 'brands', 'carTypes'));
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('frontend.cars.show', compact('car'));
    }
}
