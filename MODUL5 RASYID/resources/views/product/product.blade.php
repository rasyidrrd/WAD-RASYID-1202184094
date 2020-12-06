@extends('layout.navbar')

@section('content')
        <div class="container" style="display:flex; flex-direction: column">
            @if($products->isEmpty())

            <div class="container">
                <p class="text-center mt-5">There is no data...</p>
                <div class="d-flex justify-content-around">
                    <a href="{{ route('product.create') }}" class="btn btn-secondary">Add Product</a>
                </div>
            @else
            <div style="margin-right: auto; margin-bottom: 1em; margin-top: 1em">
                <a href="{{ route('product.create') }}" style="text-decoration: none; color: white;" class='btn btn-secondary'>Add Product</a>
            </div>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $key => $item)
                    <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td style="display: flex;">
                        <div>
                            <a style="text-decoration: none; color: white; margin-right: .5em" href="{{ route('product.edit',$item->id) }}" class='btn btn-secondary'>Edit</a>
                        </div>
                        <form action="{{route('product.destroy', $item->id)}}" method="post">
                        @csrf @method('DELETE')
                        <button type="submit" class='btn btn-danger' style="text-decoration: none; color: white;">Delete</button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                @endif
        </div>
@endsection
