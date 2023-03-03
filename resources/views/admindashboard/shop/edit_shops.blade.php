{{--<form method="Post" action="{{route('shops.store')}}" enctype="multipart/form-data">--}}
{{--    @csrf--}}
{{--    <div class="form-group">--}}
{{--        <label for="shop_name"> shop_name</label>--}}
{{--        <input type="text" class="form-control" name="shop_name">--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        <label for="owner_id">owner_id:</label>--}}
{{--        <input type="text" class="form-control" name="owner_id">--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        <label for="shop_name"> shop_name</label>--}}
{{--        <input type="text" class="form-control" name="shop_name">--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        <label for="shop_image">shop_image:</label>--}}
{{--        <input type="file" class="form-control" id="shop_image">--}}
{{--    </div>--}}

    @extends('layouts.admindashboard')
    @section('content')
        <form method="post" action="{{ route('shop.update',[$shop->id]) }}" enctype="multipart/form-data">
            @csrf
            @if($shop)
            @method('put')
            @endif
            <div class="form-group">
                <label for="shop_name"> Shop Name</label>
                <input type="text" class="form-control  @error('shop_name') is-invalid @enderror" name="shop_name"
                value="{{$shop->shop_name}}">
                @error('shop_name')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="owner_id"> Owner Id</label>
                <input type="text" class="form-control  @error('owner_id') is-invalid @enderror" name="owner_id"
                       value="{{$shop->shop_name}}">
                @error('owner_id')
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
                <input type="text" class=" form-control @error('opening_timing') is-invalid @enderror" name="opening_timing"
                       value="{{$shop->shop_name}}">

                @error('opening_timing')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="closing_timing">Closing Timing</label>
                <input type="text" class="form-control  @error('closing_timing') is-invalid @enderror" name="closing_timing"
                       value="{{$shop->shop_name}}">

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

            <button type="submit" class="btn btn-primary mt-4" >update</button>
        </form>
@endsection
