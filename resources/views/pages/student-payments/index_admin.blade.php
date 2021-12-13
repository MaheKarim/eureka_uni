@extends('layouts.master')
@section('page_title', 'Manage Students Self Payments')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Manage Students Self Payments</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#all-dorms" class="nav-link active" data-toggle="tab">Manage Students Self Payments</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="all-dorms">
                    <table class="table datatable-button-html5-columns">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Student ID</th>
                            <th>CODE</th>
                            <th>Send Number</th>
                            <th>Amount</th>
                            <th>Payment Method</th>
                            <th>Payment Status</th>
                            <th>Description</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($payments as $d)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d->user->name }}</td>
                                <td>{{ $d->code}}</td>
                                <td>{{ $d->send_number }}</td>
                                <td>{{ $d->amount }}</td>
                                <td>{{ trans('payment.payment_method.'.$d->payment_method) }}</td>
                                <td>{{ trans('payment_status.payment_status.'.$d->payment_status) }}</td>
                                <td>{{ data_get($d, "description") }}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-left">
{{--                                                @if(Qs::userIsTeamSA())--}}
                                                    <a href="{{ route('myPayments.edit', $d->id) }}" class="dropdown-item"><i class="icon-pencil"></i> Edit</a>
{{--

                                                        @if(Qs::userIsSuperAdmin())--}}
{{--                                                    --}}{{--Delete--}}
{{--                                                    <a id="{{ $d->id }}" onclick="confirmDelete(this.id)" href="#" class="dropdown-item"><i class="icon-trash"></i> Delete</a>--}}
{{--                                                    <form method="post" id="item-delete-{{ $d->id }}" action="{{ route('dorms.destroy', $d->id) }}" class="hidden">@csrf @method('delete')</form>--}}
{{--                                                @endif--}}

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
