@extends('base')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow p-4">
                <h2 class="text-center mb-4">Add New Food</h2>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Error!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('foods.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label"><strong>Name:</strong></label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter the food name">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label"><strong>Description:</strong></label>
                        <textarea class="form-control" style="height: 110px" name="description" id="description" placeholder="Enter the food description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label"><strong>Price ($) </strong></label>
                        <input type="number" name="price" class="form-control" id="price" placeholder="Enter the price" step="0.01">
                    </div>

                    <div class="mb-3">
                        <label for="quantity" class="form-label"><strong>Quantity</strong></label>
                        <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Enter the quantity">
                    </div>

                    <div class="d-flex justify-content-between">
                        <a class="btn btn-secondary" href="{{ route('foods.index') }}"><i class="fas fa-backward"></i> Cancel</a>
                        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
