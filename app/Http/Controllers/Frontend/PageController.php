<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

class PageController extends Controller
{
    public function home()
    {
        $cars = Car::where('availability', true)->get();
        //dd($cars);
        return view('frontend.welcome', compact('cars'));
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('frontend.single', compact('car'));
    }


    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
