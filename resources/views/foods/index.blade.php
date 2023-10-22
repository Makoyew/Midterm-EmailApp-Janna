@extends('base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center my-5">
                <h1 class="text-white"><i class="fas fa-utensils text-success"></i> Delicious Foods</h1>
                <a class="btn btn-success" href="{{ route('foods.create') }}"> Add New Food</a>
            </div>

            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="row">
                @php
                    $i = 0;
                @endphp
                @foreach ($foods as $food)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow">
                            <img src="https://png.pngtree.com/thumb_back/fw800/background/20230901/pngtree-black-beans-and-cilantro-burrito-image_13171011.jpg" class="card-img-top" alt="{{ $food->name }}" style="max-height: 300px; max-width: 500px;">
                            <div class="card-body">
                                <h5 class="card-title text-center"><i class="fas fa-utensils text-success"></i> {{ $food->name }}</h5>
                                <p class="card-text">{{ $food->description }}</p>
                                <p class="card-text">Price: ${{ $food->price }}</p>
                                <p class="card-text">Quantity: {{ $food->quantity }}</p>
                            </div>
                            <div class="card-footer bg-white text-center">
                                <form action="{{ route('foods.destroy', $food->id) }}" method="POST">
                                    <a class="btn btn-success" href="{{ route('foods.edit', $food->id) }}"><i class="fas fa-edit"></i> Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
