@extends('layouts.admindashboard')
@section('content')
    <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 mt-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Enter title" name="title">
            @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>


    <div class="mb-3 mt-3">
    <label for="price" class="form-label">Price:</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" placeholder="Enter price" name="price">
    @error('price')
    <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
    @enderror
    </div>

        <div class="mb-3 mt-3">
            <label for="short_description" class="form-label">Enter Short description</label>
            <input type="text" class="form-control @error('short_description') is-invalid @enderror" placeholder="Enter short_description" name="short_description">
            @error('short_description')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>

<div class="mb-3 mt-3">
    <label for="Image" class="form-label">Image</label>
    <input type="file" class="form-control @error('image') is-invalid @enderror" placeholder="insert image" name="image">
    @error('image')
    <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>
<button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
