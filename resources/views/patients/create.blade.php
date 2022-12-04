@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('New Patient') }}</h1>

    @if (session('create'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('create') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {{-- @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif --}}


    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">

                    <div>
                        <canvas id="myChart"></canvas>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.1.0/chartjs-plugin-datalabels.min.js"
                        integrity="sha512-Tfw6etYMUhL4RTki37niav99C6OHwMDB2iBT5S5piyHO+ltK2YX8Hjy9TXxhE1Gm/TmAV0uaykSpnHKFIAif/A=="
                        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

                    <script>
                        const ctx = document.getElementById('myChart');

                        new Chart(ctx, {
                            type: 'pie',
                            data: {
                                labels: ['Male', 'Female'],
                                datasets: [{
                                    label: 'Gender',
                                    data: [{{ $male_cnt }}, {{ $female_cnt }}],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {

                                }
                            },
                            plugins: [ChartDataLabels]
                        });
                    </script>
                </div>
            </div>
        </div>

    </div>


    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('patient.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="fname" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Middle Name</label>
                                    <input type="text" class="form-control" name="mname">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="lname" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col">

                                <div class="form-group">
                                    <label>Last Name <span class="text-danger">*</span></label>

                                    <select class="custom-select" id="inputGroupSelect01" name="gender">
                                        <option selected disabled>Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Civil Status <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="civilstatus" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Religion <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="religion" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Contact Number <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="contactnumber" required>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label>Birth Date <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="birthdate" required>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label>Birth Place <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="birthplace" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Barangay <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="brgy" required>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label>Municipality <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="municipality" required>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label>Province <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="province" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Health Problem Cases <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="cases" required>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

    </div>
@endsection
