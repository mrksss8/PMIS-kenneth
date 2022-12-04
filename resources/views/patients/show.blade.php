@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Patient Information') }}</h1>

    <div class="row">

        <div class="col-lg-4 order-lg-2">

            <div class="card shadow mb-4">
                <div class="card-profile-image mt-4">
                    <figure class="rounded-circle avatar avatar font-weight-bold" style="font-size: 60px; height: 180px; width: 180px;" {{--data-initial="{{ Auth::user()->name[0] }}--}}"></figure>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h5 class="font-weight-bold">{{--{{  Auth::user()->fullName }}--}}</h5>
                                <p>Patient</p>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="row">
                        <div class="col-md-4">
                            <div class="card-profile-stats">
                                <span class="heading">22</span>
                                <span class="description">Friends</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-profile-stats">
                                <span class="heading">10</span>
                                <span class="description">Photos</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-profile-stats">
                                <span class="heading">89</span>
                                <span class="description">Comments</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>

        <div class="col-lg-8 order-lg-1">

            <div class="card shadow mb-4">

                {{-- <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">My Account</h6>
                </div> --}}

                <div class="card-body">

                    <form method="POST" action="patient.view">

                        <h6 class="heading-small text-muted mb-4">Patient information</h6>

                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label">First Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$patient->fname}}" disabled disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label">Middle Name</label>
                                        <input type="text" id="mname" class="form-control" name="mname" value="{{$patient->mname}}" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label">Last Name</label>
                                        <input type="text" id="lname" class="form-control" name="lname" value="{{$patient->lname}}" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                
                                <div class="form-group focused">
                                    <label class="form-control-label">Gender</label>
                                    <input type="text" id="gender" class="form-control" name="gender" value="{{$patient->gender}}" disabled>
                                </div>
                                <div class="form-group focused">
                                    <label class="form-control-label">Contact Number</label>
                                    <input type="text" id="contactnumber" class="form-control" name="contactnumber" value="{{$patient->contactnumber}}" disabled>
                                </div>
                                <div class="form-group focused">
                                    <label class="form-control-label">Religion</label>
                                    <input type="text" id="religion" class="form-control" name="religion" value="{{$patient->religion}}" disabled>
                                </div>
                                
                            </div>

                            <div class="row">
                                <div class="form-group focused">
                                    <label class="form-control-label">Birth Date</label>
                                    <input type="date" id="birthdate" class="form-control" name="birthdate" value="{{$patient->birthdate}}" disabled>
                                </div>
                                <div class="form-group focused">
                                    <label class="form-control-label">Birth Place</label>
                                    <input type="text" id="birthplace" class="form-control" name="birthplace" value="{{$patient->birthplace}}" disabled>
                                </div>
                                <div class="form-group focused">
                                    <label class="form-control-label">Civil Status</label>
                                    <input type="text" id="civilstatus" class="form-control" name="civilstatus" value="{{$patient->civilstatus}}" disabled>
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group focused">
                                    <label class="form-control-label">Province</label>
                                    <input type="text" id="birthdate" class="form-control" name="birthdate" value="{{$patient->province}}" disabled>
                                </div>
                                <div class="form-group focused">
                                    <label class="form-control-label">Municipality</label>
                                    <input type="text" id="municipality" class="form-control" name="municipality" value="{{$patient->municipality}}" disabled>
                                </div>
                                <div class="form-group focused">
                                    <label class="form-control-label">Barangay</label>
                                    <input type="text" id="brgy" class="form-control" name="brgy" value="{{$patient->brgy}}" disabled>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Health Problem Cases</label>
                                        <input type="email" id="cases" class="form-control" name="cases" value="{{$patient->cases}}" disabled>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
