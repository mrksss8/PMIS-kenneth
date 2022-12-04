@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('View Medicine') }}</h1>

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
                                    <th scope="col">ID Item</th>
                                    <th scope="col">Medicine Name</th>
                                    <th scope="col">Perboxes</th>
                                    <th scope="col">Persheet</th>
                                    <th scope="col">Perpiecee</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Delivery Date</th>
                                    <th scope="col">Expiration Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($medicines as $medicine)
                                    <tr>
                                        <td>{{$medicine->idname}}</td>
                                        <td>{{$medicine->medname}}</td>
                                        <td>{{$medicine->perboxes}}</td>
                                        <td>{{$medicine->persheet}}</td>
                                        <td>{{$medicine->perpiece}}</td>
                                        <td>{{$medicine->amount}}</td>
                                        <td>{{$medicine->category}}</td>
                                        <td>{{$medicine->deliverydate}}</td>
                                        <td>{{$medicine->expirationdate}}</td>
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
