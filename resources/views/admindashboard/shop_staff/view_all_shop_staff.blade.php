@extends('layouts.admindashboard')
@section('content')

<div class="container mt-3">
    <h2>View All Shops Staff</h2>
        <a href="{{route('add-shop-staff')}}">Add New Shop staff</a>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Shop Id</th>
            <th>User Id</th>
        </tr>
        </thead>
        <tbody>
        @foreach($shop_staff as $shopstaff)
        <tr>
            <th scope="row">{{$shopstaff->id}}</th>
            <td>{{$shopstaff->shop->shop_name}}</td>
            <td>{{$shopstaff->user->name}}</td>
            <td>
                <a href="{{route('delete_shopstaff', [$shopstaff->id])}}">Delate</a>
            </td>

        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
