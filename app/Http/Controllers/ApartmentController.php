<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index() 
    {
        $data = Apartment::with("people")->take(10)->get()->toArray();
        dd($data); 
        return view("apartment", compact("data"));
    }
}
