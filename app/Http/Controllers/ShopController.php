<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at' , 'DESC')->paginate(12);
        return view('shop',['products' => $products]);
    }
    public function productsDetails($etq)
    {
        $product = Product::where('etiquette' , $etq)->first();
        $rproducts = Product::where('etiquette','!=' , $etq)->inRandomOrder('id')->get()->take(8);
        return view('details' , ['product' => $product , 'rproducts' => $rproducts]);
    }
    public function getCartAndWishlistCount(){
        $cartCount = Cart::instance("cart")->content()->count();
        $wishlistCount = Cart::instance("wishlist")->content()->count();
        return response()->json(['status'=>200, 'cartCount'=>$cartCount,'wishlistCount'=>$wishlistCount]);
    }
}
