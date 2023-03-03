@extends('layouts.admindashboard')
@section('content')
    <form method="post" action="{{ route('shopstaff.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="shop_id"> Shop</label>
            <select type="text" class="form-control  @error('shop_id') is-invalid @enderror" name="shop_id">
                <option selected hidden> Select Shop </option>
                @foreach($shops as $shop)
                    <option value="{{ $shop->id }}">{{ $shop->shop_name }}</option>
                @endforeach
            </select>
            @error('shop_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="user_id">User id</label>
            <select type="text" class="form-control  @error('user_id') is-invalid @enderror" name="shop_id">
                <option selected hidden> Select User </option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>            @error('user_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mt-4" >Submit</button>
    </form>
@endsection
