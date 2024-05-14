<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $vehicles = Vehicle::all();
        dd($vehicles);
        return view('guests.home');
    }

    public function about()
    {
        return view('guests.about');
    }

    public function contacts()
    {
        return view('guests.contacts');
    }

}
