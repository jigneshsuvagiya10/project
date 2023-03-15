<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(cart $cart)
    {
        // \DB::enableQueryLog();
        // $cartdata = $cart::get()->where('user_id',Auth::user()->id);
        $cartdata = $cart::Join('products', 'carts.product_id', '=', 'products.id')->where('user_id', Auth::user()->id)->get();
        // dd($cartdata);
        // $cartdata = \DB::table('carts')->Join('products', 'carts.product_id', '=', 'products.id')->where('user_id', Auth::user()->id)->get();
        // $query = \DB::getQueryLog( );
        // $query = end($query);
        // dd($query);
        return view('cart', compact('cartdata'));

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
    public function addtocart($id, cart $cart)
    {
        $uid = Auth::user()->id;
        // dd($uid);
        $cart->product_id = $id;
        $cart->user_id = $uid;
        $cart->save();

        // return redirect("showproduct");
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,cart $cart)
    {
        // dd($id);
        $cartbyid = $cart::find($id);
        dd($cartbyid);
        // $cartbyid->delete();
    }
}
