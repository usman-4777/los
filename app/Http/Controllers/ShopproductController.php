<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeshop_productRequest;
use App\Http\Requests\Updateshop_productRequest;
use App\Models\shop_product;

class ShopproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeshop_productRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeshop_productRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\shop_product  $shop_product
     * @return \Illuminate\Http\Response
     */
    public function show(shop_product $shop_product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\shop_product  $shop_product
     * @return \Illuminate\Http\Response
     */
    public function edit(shop_product $shop_product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateshop_productRequest  $request
     * @param  \App\Models\shop_product  $shop_product
     * @return \Illuminate\Http\Response
     */
    public function update(Updateshop_productRequest $request, shop_product $shop_product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\shop_product  $shop_product
     * @return \Illuminate\Http\Response
     */
    public function destroy(shop_product $shop_product)
    {
        //
    }
}
