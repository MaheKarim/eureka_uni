<?php

namespace App\Http\Controllers;

use App\Models\Dorm;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $halls = Dorm::all();
        return view('frontend.master', compact('halls'));
    }
}
