<?php

namespace App\Http\Controllers;

use App\Enums\PaymentStatus;
use App\Models\Dorm;
use App\Models\HallBooking;
use Auth;
use Illuminate\Http\Request;
use Qs;

class HallBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authID = Auth::user()->id ;
        $halls = HallBooking::where('user_id', $authID )->get();

        return view('pages.hall-booking.index', compact('halls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $halls = Dorm::all();
        return view('pages.hall-booking.create', compact('halls'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hall = new HallBooking();
        $hall->user_id = Auth::user()->id;
        $hall->status = PaymentStatus::PENDING;
        $hall->fill($request->all());
        $hall->save();

        return Qs::jsonStoreOk();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HallBooking  $hallBooking
     * @return \Illuminate\Http\Response
     */
    public function show(HallBooking $hallBooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HallBooking  $hallBooking
     * @return \Illuminate\Http\Response
     */
    public function edit(HallBooking $hallBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HallBooking  $hallBooking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HallBooking $hallBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HallBooking  $hallBooking
     * @return \Illuminate\Http\Response
     */
    public function destroy(HallBooking $hallBooking)
    {
        //
    }
}
