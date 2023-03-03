@extends('layouts.admindashboard')
@section('content')

<div class="container mt-3">
    <h2>View all Products</h2>
    <a href="{{route('products.create')}}">add new products</a>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Price</th>
            <th>Short Description</th>
            <th>Image</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{@$product->title}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->short_description}}</td>
            <td>{{$product->image}}</td>
            <td><img height="50px" width="50px" src="{{asset('storage') . '/' . $product->image}}">

            <td>
                <a href="{{route('delete_product' , [$product->id])}}">Delete</a>

            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
</div>
@endsection
