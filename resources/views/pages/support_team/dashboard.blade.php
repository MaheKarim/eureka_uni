@extends('layouts.master')
@section('page_title', 'My Dashboard')
@section('content')

    @if(Qs::userIsTeamSA())
       <div class="row">
           <div class="col-sm-6 col-xl-3">
               <div class="card card-body bg-blue-400 has-bg-image">
                   <div class="media">
                       <div class="media-body">
                           <h3 class="mb-0">{{ $users->where('user_type', 'student')->count() }}</h3>
                           <span class="text-uppercase font-size-xs font-weight-bold">Total Students</span>
                       </div>

                       <div class="ml-3 align-self-center">
                           <i class="icon-users4 icon-3x opacity-75"></i>
                       </div>
                   </div>
               </div>
           </div>

           <div class="col-sm-6 col-xl-3">
               <div class="card card-body bg-danger-400 has-bg-image">
                   <div class="media">
                       <div class="media-body">
                           <h3 class="mb-0">{{ $users->where('user_type', 'teacher')->count() }}</h3>
                           <span class="text-uppercase font-size-xs">Total Teachers</span>
                       </div>

                       <div class="ml-3 align-self-center">
                           <i class="icon-users2 icon-3x opacity-75"></i>
                       </div>
                   </div>
               </div>
           </div>

           <div class="col-sm-6 col-xl-3">
               <div class="card card-body bg-success-400 has-bg-image">
                   <div class="media">
                       <div class="mr-3 align-self-center">
                           <i class="icon-pointer icon-3x opacity-75"></i>
                       </div>

                       <div class="media-body text-right">
                           <h3 class="mb-0">{{ $users->where('user_type', 'admin')->count() }}</h3>
                           <span class="text-uppercase font-size-xs">Total Administrators</span>
                       </div>
                   </div>
               </div>
           </div>

           <div class="col-sm-6 col-xl-3">
               <div class="card card-body bg-indigo-400 has-bg-image">
                   <div class="media">
                       <div class="mr-3 align-self-center">
                           <i class="icon-user icon-3x opacity-75"></i>
                       </div>

                       <div class="media-body text-right">
                           <h3 class="mb-0">{{ $users->where('user_type', 'parent')->count() }}</h3>
                           <span class="text-uppercase font-size-xs">Total Parents</span>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       @endif
    @if(Qs::userIsStudent())
    {{--Events Calendar Begins--}}
    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-indigo-400 has-bg-image">
                <div class="media">
                    <div class="mr-3 align-self-center">
                        <i class="icon-user icon-3x opacity-75"></i>
                    </div>

                    <div class="media-body text-right">
                        <h3 class="mb-0">{{ $dorms->count() }}</h3>
                        <span class="text-uppercase font-size-xs">Total Halls/Dorms</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-success-400 has-bg-image">
                <div class="media">
                    <div class="mr-3 align-self-center">
                        <i class="icon-user icon-3x opacity-75"></i>
                    </div>

                    <div class="media-body text-right">
                        <h3 class="mb-0">{{ $dorms->sum('available') }}</h3>
                        <span class="text-uppercase font-size-xs">Total Halls/Dorms</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-success-400 has-bg-image">
                <div class="media">
                    <div class="mr-3 align-self-center">
                        <i class="icon-user icon-3x opacity-75"></i>
                    </div>

                    <div class="media-body text-right">
                        <h3 class="mb-0">{{ data_get($stu_rec, "my_class.name") }}</h3>
                        <span class="text-uppercase font-size-xs">Your Enroll Dept.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($pay_records as $pay_record)
        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-danger-400 has-bg-image">
                <div class="media">
                    <div class="mr-3 align-self-center">
                        <i class="icon-user icon-3x opacity-75"></i>
                    </div>

                    <div class="media-body text-right">
                        <h3 class="mb-0">{{ data_get($pay_record, "amt_paid") }}</h3>
                        <span class="text-uppercase font-size-xs">Paid Amount </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-info-400 has-bg-image">
                <div class="media">
                    <div class="mr-3 align-self-center">
                        <i class="icon-user icon-3x opacity-75"></i>
                    </div>

                    <div class="media-body text-right">
                        <h3 class="mb-0">{{ data_get($pay_record, "balance") }}</h3>
                        <span class="text-uppercase font-size-xs">Due</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-success-400 has-bg-image">
                <div class="media">
                    <div class="mr-3 align-self-center">
                        <i class="icon-user icon-3x opacity-75"></i>
                    </div>

                    <div class="media-body text-right">
                        <h3 class="mb-0">{{ data_get($pay_record, "payment.amount") }}</h3>
                        <span class="text-uppercase font-size-xs">Total Amount</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card card-body bg-primary-400 has-bg-image">
                <div class="media">
                    <div class="mr-3 align-self-center">
                        <i class="icon-user icon-3x opacity-75"></i>
                    </div>

                    <div class="media-body text-right">
                        <h3 class="mb-0">{{ data_get($pay_record, "ref_no") }}</h3>
                        <span class="text-uppercase font-size-xs">Ref.</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <table class="table table-success table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Hall Name</th>
            <th scope="col">Available Seat</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dorms as $dorm)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $dorm->name }}</td>
                <td>{{ $dorm->available }}</td>
                <td>{{ $dorm->description }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <br> <br> <br>

    <table class="table table-danger table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Payment (Fee) Type</th>
            <th scope="col">Course / Semester Fee(amount)</th>
            <th scope="col">Class Name</th>
            <th scope="col">Ref No</th>
            <th scope="col">Session</th>
        </tr>
        </thead>
        <tbody>
        @foreach($payments as $pay)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $pay->title }}</td>
                <td>{{ $pay->amount }}</td>
                <td>{{ $pay->my_class->name }}</td>
                <td>{{ $pay->ref_no }}</td>
                <td>{{ $pay->year }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
        <br> <br> <br>
    <table class="table table-info table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Send Number</th>
            <th scope="col">Amount</th>
            <th scope="col">Transaction ID</th>
            <th scope="col">Payment Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($payments_info as $d1)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $d1->send_number }}</td>
                <td>{{ $d1->amount }}</td>
                <td>{{ $d1->description }}</td>
                <td>{{ trans('payment_status.payment_status.'.$d1->payment_status) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    @endif
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Semester Events Calendar</h5>
         {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <div class="fullcalendar-basic"></div>
        </div>
    </div>
    {{--Events Calendar Ends--}}
    @endsection
