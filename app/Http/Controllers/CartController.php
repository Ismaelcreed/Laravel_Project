<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::instance('cart')->content();
        return view('cart', ['cartItems' => $cartItems]);
    }

    public function addToCart(Request $request) 
    {
        $product = Product::find($request->id);
        $prix = $product->solde ? $product->solde : $product->prix_normal;

        Cart::instance('cart')->add($product->id , $product->nom ,$request->quantity , $prix)->associate('App\Models\Product');
            return redirect()->back()->with('message','Cet article a été envoyer dans votre panier');
    }
    public function updateCart(Request $request)
    {
        Cart::instance('cart')->update($request->rowId,$request->quantity);
        return redirect()->route('cart.index');
    }
    public function removeItem(Request $request){
        $rowId = $request->rowId;
        Cart::instance('cart')->remove($rowId);
        return redirect()->route('cart.index');
    }
    public function clearCart(){
        Cart::instance('cart')->destroy();
        return redirect()->route('cart.index');
    }
}
