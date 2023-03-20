<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(cart $cart,product $products)
    {
        $cartdata=DB::table('products')->join('carts','carts.product_id','=','products.id')->select('carts.*','products.name','products.price','products.image')->where('user_id', Auth::user()->id)->get();
        // $cartdata = DB::table('products')->Join('carts', 'products.id', '=', 'carts.product_id')->select()->where('user_id', Auth::user()->id)->get();
        // dd($cartdata);
        // $cartdata = \DB::table('carts')->Join('products', 'carts.product_id', '=', 'products.id')->where('user_id', Auth::user()->id)->get();
        // $query = \DB::getQueryLog( );
        // $query = end($query);
        // dd($query);
        return view('cart', compact('cartdata'));

    }
    public function order(cart $cart,product $products)
    {
        $orderdata=DB::table('products')->join('carts','carts.product_id','=','products.id')->select('carts.*','products.name','products.price','products.image')->where('user_id', Auth::user()->id)->get();
        // dd($cartdata);
        return view('order', compact('orderdata'));

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
    public function cartdata(cart $cart,product $products)
    {
        $oid =  optional(Auth::user())->id;
        dd($oid);
        // $cartd = $cart::get();
        // $cartd=DB::table('products')->join('carts','carts.product_id','=','products.id')->select('carts.*','products.name','products.price','products.image')->where('user_id', $oid)->get();
        // echo $cartd;
    }
    public function addtocart($id,request $request,cart $cart)
    {
        $uid = Auth::user()->id;
        // dd($uid);
        $cart->product_id = $id;
        $cart->user_id = $uid;
        $cart->quantity = $request->quantity;
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
        // dd($cartbyid);
        $cartbyid->delete();
        // return redirect("cart");
        // return redirect()->back();
        // return view('cart');
    }
}
