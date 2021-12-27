<?php

namespace App\Http\Controllers;

use App\Enums\PaymentStatus;
use App\Models\Dorm;
use App\Models\HallBooking;
use App\Repositories\HallRepo;
use Auth;
use Illuminate\Http\Request;
use Qs;

class HallBookingController extends Controller
{
    protected $hall;

    public function __construct(HallRepo $hall)
    {
        $this->hall = $hall;
    }

    public function index()
    {
        $authID = Auth::user()->id ;
        $halls = HallBooking::where('user_id', $authID)->get();
        if(Qs::userIsSuperAdmin()) {
            $halls = HallBooking::all();
        }

        return view('pages.hall-booking.index', compact('halls'));
    }


    public function create()
    {
        $halls = Dorm::all();
        return view('pages.hall-booking.create', compact('halls'));
    }


    public function store(Request $request)
    {
        $hall = new HallBooking();
        $hall->user_id = Auth::user()->id;
        $hall->status = PaymentStatus::PENDING;
        $hall->fill($request->all());
        $hall->save();

        return Qs::jsonStoreOk();
    }


    public function show()
    {
        $halls = HallBooking::all();

        return view('pages.hall-booking.all_page', compact('halls'));
    }


    public function edit($id)
    {
        $c['hall'] = $hall = $this->hall->find($id);

        return !is_null($hall) ? view('pages.hall-booking.edit', $c)
            : Qs::goWithDanger('pages.hall-booking.show');
    }


    public function update(Request $request, HallBooking $hall)
    {
        $hall->update($request->only(['status']));

        return Qs::jsonUpdateOk();
    }

    public function destroy(HallBooking $hallBooking)
    {
        //
    }
}
