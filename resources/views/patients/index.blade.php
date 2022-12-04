@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('View Patient') }}</h1>

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


    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                        <table class="table">

                            <thead>
                                <tr>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Health Problem Case</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patients as $patient)
                                    <tr>
                                        <td>{{$patient->fname}}</td>
                                        <td>{{$patient->lname}}</td>
                                        <td>{{$patient->cases}}</td>
                                        <td>
                                            <a href="{{route('patient.show', $patient->id)}}" class="btn btn-primary">View</a>
                                            <button type="button" class="btn btn-secondary">Edit</button>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

    </div>
@endsection
