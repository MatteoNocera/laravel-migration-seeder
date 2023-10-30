<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        $first_trains = Train::orderBy('date', 'asc')->take(6)->get();
        //dd($first_trains);

        return view('welcome', compact('first_trains'));
    }


    public function trains()
    {
        $trains = Train::all();
        //dd($trains);

        return view('trains', compact('trains'));
    }
}
