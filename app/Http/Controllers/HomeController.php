<?php

namespace App\Http\Controllers;

use App\Helpers\Qs;
use App\Models\Dorm;
use App\Models\Payment;
use App\Models\PaymentRecord;
use App\Models\StudentPayment;
use App\Models\StudentRecord;
use App\Repositories\UserRepo;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected $user;
    public function __construct(UserRepo $user)
    {
        $this->user = $user;
    }


    public function index()
    {
        return redirect()->route('dashboard');
    }

    public function privacy_policy()
    {
        $data['app_name'] = config('app.name');
        $data['app_url'] = config('app.url');
        $data['contact_phone'] = Qs::getSetting('phone');
        return view('pages.other.privacy_policy', $data);
    }

    public function terms_of_use()
    {
        $data['app_name'] = config('app.name');
        $data['app_url'] = config('app.url');
        $data['contact_phone'] = Qs::getSetting('phone');
        return view('pages.other.terms_of_use', $data);
    }

    public function dashboard()
    {
        $d=[];
        $d['dorms'] = Dorm::all();
        if(Qs::userIsTeamSAT()){
            $d['users'] = $this->user->getAll();
        }
        $d['user'] =  User::where('id', Auth::user()->id)->first();

        $d['pay_records'] = PaymentRecord::where('student_id', '=', Auth::user()->id)->get();
        $d['stu_rec'] = StudentRecord::where('user_id', Auth::user()->id)->first();
        $d['payments'] = Payment::all();
        $d['payments_info'] = StudentPayment::where('student_id', Auth::user()->id)->get();
        return view('pages.support_team.dashboard', $d);
    }
}
