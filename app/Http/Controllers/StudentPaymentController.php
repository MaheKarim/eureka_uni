<?php

namespace App\Http\Controllers;

use App\Helpers\Qs;
use App\Models\StudentPayment;
use Auth;
use Illuminate\Http\Request;

class StudentPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.student-payments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $student_payments = new StudentPayment();
        $student_payments->fill($request->all());
        $student_payments->code = Auth::user()->code;
        $student_payments->student_id = Auth::user()->id;
        $student_payments->save();

        return Qs::jsonStoreOk();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentPayment  $studentPayment
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $payments = StudentPayment::all();
//        dd($payments);
        return view('pages.student-payments.index_admin', compact('payments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentPayment  $studentPayment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d = StudentPayment::find($id);
//        dd($d);
        return view('pages.student-payments.edit', compact('d'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentPayment  $studentPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $payment = StudentPayment::find($id);
        $payment->fill($request->only('payment_status'));
        $payment->update();

        return redirect()->route('payments.all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentPayment  $studentPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentPayment $studentPayment)
    {
        //
    }
}
