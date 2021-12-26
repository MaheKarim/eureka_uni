@extends('layouts.master')
@section('page_title', 'Manage Students Hall Request')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Manage Hall Request</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#all-dorms" class="nav-link active" data-toggle="tab">Manage Students Hall Request</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="all-dorms">
                    <table class="table datatable-button-html5-columns">
                        <thead>
                        <tr>
                            <th>S/L Name</th>
                            <th>User Name</th>
                            <th>Hall Name</th>
                            <th>Available</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($halls as $d)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ data_get($d, "user.name") }}</td>
                                <td>{{ data_get($d, "dorm.name")}}</td>
                                <td>{{ data_get($d, "dorm.available")}}</td>
                                <td>{{ trans('payment_status.payment_status.'.$d->status)}}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-left">

                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
