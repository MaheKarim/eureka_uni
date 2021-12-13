@extends('layouts.master')
@section('page_title', 'Edit Self Payment - ')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Edit Payment</h6>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form class="ajax-update" data-reload="#page-header" method="post" action="{{ route('myPayments.update') }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Payment Status <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <label> Payment Status</label>
                                <select name="payment_status" id="payment_status" class="form-control">
                                    @foreach(trans('payment_status.payment_status') as $key => $item)
                                        <option value="{{$key}}"> {{ $item }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit  <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
