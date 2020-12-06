@extends('layout.navbar')

@section('content')
    <div class="container" style="display:flex; flex-direction: column">
        @if($products->isEmpty())
        <div class="container">
            <p class="text-center mt-5">There is no data...</p>
            <div class="d-flex justify-content-around">
                <a href="{{ route('product.create') }}" class="btn btn-secondary">Order Now</a>
            </div>
        @else
            <div style="display: flex; flex-direction: column">
                <h2 style="margin: 1em auto;">Order</h2>
            </div>
            <div class="row">
                @foreach ($products as $item)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                    <img src="{{ $item->img_path }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{$item->description}}</p>
                        <h4 style="font-weight: bold">$ {{$item->price}} </h4>
                        <a href="{{ route('order.show',$item->id) }}" class="btn btn-success">Order Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        @endif
    </div>
@endsection
