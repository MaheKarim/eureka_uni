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
                <li class="nav-item"><a href="#new-class" class="nav-link" data-toggle="tab"><i class="icon-plus2"></i> Create New Halls</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="all-classes">
                    <table class="table datatable-button-html5-columns">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Student Name</th>
                            <th>Hall Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($halls as $c)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ data_get($c, "user.name") }}</td>
                                <td>{{ data_get($c, "dorm.name") }} [Available Seat: {{ data_get($c, "dorm.available") ? : "No Seat Record" }}]</td>
                                <td>{{ trans('payment_status.payment_status.'.$c->status) }}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            @if(Qs::userIsSuperAdmin())
                                            <div class="dropdown-menu dropdown-menu-left">
                                                <a href="{{ route('students.hallBooking.edit', $c->id) }}"
                                                   class="dropdown-item"><i class="icon-pencil"></i> Edit</a>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="tab-pane fade" id="new-class">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-info border-0 alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>

                                <span>When a Halls is created, a Section will be automatically created for the class, you can edit it or add more sections to the class at <a target="_blank" href="{{ route('sections.index') }}">Manage Sections</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <form class="ajax-store" method="post" action="{{ route('students.hallBooking.update') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="class_type_id" class="col-lg-3 col-form-label font-weight-semibold">Departments Type</label>
                                    <div class="col-lg-9">
                                        <select required data-placeholder="Select Class Type" class="form-control select" name="status" id="status">
                                            @foreach(trans('payment_status.payment_status') as $ct => $item)
                                                <option value="{{ $ct }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button id="ajax-btn" type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
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
