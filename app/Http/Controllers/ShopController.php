<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;
use App\Models\Developer;
use App\Models\Shop;
use App\Models\shop_staff;
use http\Env\Request;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data ['shops'] = Shop::all();
        return view('admindashboard.shop.view_all_shops')->with($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admindashboard.shop.add_shops');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreShopRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShopRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('shop_image')){
            $validated['shop_image'] = $request->file('shop_image')->storePublicly('uploads', ['disk' => 'public']);
        }
        Shop::create($validated);
        return redirect()->route('shop.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        return view('edit_shops' , compact('shop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
            $edit = Shop::findorFail($shop);
        return view('admindashboard.shop.edit_shops',compact('shop'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShopRequest  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShopRequest $request, Shop $shop)
    {
        if (Storage::disk('public')->exists($shop->shop_image)){
            Storage::disk('public')->delete($shop->shop_image);
        }
//        $shop->update($request->all());
//        return redirect()->route('shop.index');
//        $validated = $request->validated();
//        $validated['shop_image'] = $request->file('shop_image')->storePublicly('shop_image','public');
//        $shop->update($validated);
//      return redirect()->route('shop.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
//    public function destroy(Shop $shop)
//    {
//        $shop->delete();
//        return redirect()->route('shop.index');
//    }
    public function destroy($id){
        $del = shop::findOrFail($id);
        $del->delete();
        return redirect()->back();
    }
}

