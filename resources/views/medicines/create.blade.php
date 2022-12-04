@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('New Medicine') }}</h1>

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
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('medicine.store') }}" method="POST">
                        @csrf
                            <div class="col">
                                <div class="form-group">
                                    <label>ID Item <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="idname" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Medicine Name</label>
                                    <input type="text" class="form-control" name="medname" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Perboxes <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="perboxes" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Persheet <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="persheet" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Perpiece <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="perpiece" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Perpiece <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="perpiece" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Amount <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="amount" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Category <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="category" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Delivery Date <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="deliverydate" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Expiration Date <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="expirationdate" required>
                                </div>
                            </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    <div class="row">

    </div>
@endsection
