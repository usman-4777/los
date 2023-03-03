@extends('layouts.admindashboard')
@section('content')
<div class="container">
    <h2>View all shops</h2>
    <a href="{{route('shop.create')}}">Add new shops  </a>
    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>shop_name</th>
            <th>user_id</th>
            <th>shop_image</th>
            <th>opening_timing</th>
            <th>closing-timing</th>
        </tr>
        </thead>
        <tbody>
        @foreach($shops as $shop)
        <tr>
            <th scope="row">{{$shop->id}}</th>
            <td>{{@$shop->shop_name}}</td>
            <td>{{@$shop->user_id}}</td>
            <td>{{@$shop->shop_image}}</td>
            <td>{{@$shop->opening_timing}}</td>
            <td>{{@$shop->closing_timing}}</td>
            <td><img height="50px" width="50px" src="{{asset('storage') . '/' . $shop->shop_image}}">
            </td>
            <td>
                    <a href="{{route("shop.edit" , [$shop->id])}}">Edit</a>
                <a href="{{route("delete_shop" , [$shop->id])}}">Delete</a>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
