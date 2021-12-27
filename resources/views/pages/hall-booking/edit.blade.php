@extends('layouts.master')
@section('page_title', 'Manage Halls')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Manage Halls</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#all-classes" class="nav-link active" data-toggle="tab">Manage Halls</a></li>
            </ul>

            <div class="tab-content">
                <div class="row">
                    <div class="col-md-6">
                        <form class="ajax-store" method="post" action="{{ route('students.hallBooking.update', $hall->id) }}">
                            @csrf

                            <div class="form-group row">
                                <label for="status" class="col-lg-3 col-form-label font-weight-semibold">Status</label>
                                <div class="col-lg-9">
                                    <select required data-placeholder="Select Status Type" class="form-control select"
                                            name="status" id="status">
                                        @foreach(trans('payment_status.payment_status') as $ct => $item)
                                            <option value="{{ $ct }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="text-right">
                                <button id="ajax-btn" type="submit" class="btn btn-primary">Submit form <i
                                        class="icon-paperplane ml-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    {{--Class List Ends--}}

@endsection
