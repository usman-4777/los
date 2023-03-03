@extends('layouts.admindashboard')
@section('content')
<form method="post" action="{{ route('shop.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="shop_name"> Shop Name</label>
        <input type="text" class="form-control  @error('shop_name') is-invalid @enderror" name="shop_name">
        @error('shop_name')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="user id">User id</label>
        <input type="text" class="form-control  @error('user_id') is-invalid @enderror" name="user_id">
        @error('user_id')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>


{{--    <div class="form-group">--}}
{{--        <label for="shop Image"> Shop Image</label> <br>--}}
{{--        <input type="file" class="  @error('shop_image') is-invalid @enderror" name="shop_image">--}}
{{--        @error('shop_image')--}}
{{--        <span class="invalid-feedback" role="alert">--}}
{{--                <strong>{{ $message }}</strong>--}}
{{--            </span>--}}
{{--        @enderror--}}
{{--    </div>--}}
    <div class="form-group">
        <label for="opening_timing">Opening Timing</label>
        <input type="text" class=" form-control @error('opening_timing') is-invalid @enderror" name="opening_timing">
        @error('opening_timing')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
            <div class="form-group">
        <label for="closing_timing">Closing Timing</label>
        <input type="text" class="form-control  @error('closing_timing') is-invalid @enderror" name="closing_timing">
        @error('closing_timing')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="shop Image"> Shop Image</label> <br>
        <input type="file" class="  @error('shop_image') is-invalid @enderror" name="shop_image">
        @error('shop_image')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary mt-4" >Submit</button>
</form>
@endsection
