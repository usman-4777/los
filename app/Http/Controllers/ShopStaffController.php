<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\shop_staff;
use App\Models\User;
use Illuminate\Http\Request;

class ShopStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data ['shop_staff'] = shop_staff::with('shop', 'user')->get();
        return view('admindashboard.shop_staff.view_all_shop_staff')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['shops'] = Shop::all();
        $data['users'] = User::all();
        return view('admindashboard.shop_staff.add_shop_staff')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $validated = $request->validated();

        shop_staff:: create(['user_id'=> auth()->user()->id, 'shop_id' => $request->shop_id]);
        return redirect()->route('shopstaff.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\shop_staff  $shop_staff
     * @return \Illuminate\Http\Response
     */
    public function show(shop_staff $shop_staff)
    {
    return view('edit_shopstaff' , compact('shop_staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\shop_staff  $shop_staff
     * @return \Illuminate\Http\Response
     */
    public function edit(shop_staff $shop_staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\shop_staff  $shop_staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, shop_staff $shop_staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\shop_staff  $shop_staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(shop_staff $shop_staff)
    {
//        dd($shop_staff);
        $shop_staff->delete();
        return redirect()->route('shopstaff.index');

    }
}
