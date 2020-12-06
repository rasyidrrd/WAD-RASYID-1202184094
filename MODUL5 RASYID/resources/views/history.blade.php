@extends('layout.navbar')

@section('content')
<div class="container" style="display:flex; flex-direction: column">
    @if($orders->isEmpty())
    <div class="container">
        <p class="text-center mt-5">There is no data...</p>
        <div class="d-flex justify-content-around">
            <a href="{{ route('product.create') }}" class="btn btn-secondary">Order Now</a>
        </div>

    </div>
    @else
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Product</th>
            <th scope="col">Buyer Name</th>
            <th scope="col">Contact</th>
            <th scope="col">Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $key => $item)
            <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $item->product->name }}</td>
            <td>{{ $item->buyer_name }}</td>
            <td>{{ $item->buyer_contact }}</td>
            <td>{{ $item->amount }}</td>
            </form>
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        @endif
</div>
@endsection
