@extends('layouts.master')
@section('page_title', 'Create Hall Booking System')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Create Hall Booking</h6>
{{--            {!! Qs::getPanelOptions() !!}--}}
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form class="ajax-store" method="post" action="{{ route('students.hallBooking.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="my_class_id" class="col-lg-3 col-form-label font-weight-semibold">Select Hall Name</label>
                            <div class="col-lg-9">
                                <select class="form-control select-search" name="dorm_id" id="payment_method">
                                    <option value="">Select Hall Name</option>
                                    @foreach($halls as $value )
                                        <option value="{{ $value->id }}">{{ $value->name }} : Available Seat( {{ data_get($value, "available") ? : "No Seat Record" }} )</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--Payment Create Ends--}}

@endsection
