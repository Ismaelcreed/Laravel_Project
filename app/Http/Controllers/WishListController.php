<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;

class WishListController extends Controller
{
    public function getAllWishlistedProducts(){
        $items = Cart::instance("wishlist")->content();
        return view('wishlist',['items'=>$items]);
    }

    public function addProducttoWishList(Request $request)
    {
        Cart::instance("wishlist")->add($request->id,$request->nom,1,$request->price)->associate('App\Models\Product');
        return response()->json(['status'=>200,'message'=>'Vous avez adoré cet article!']);
    }

    public function removeProductFromWishlist(Request $request){
        $rowId = $request->rowId;
        Cart::instance('wishlist')->$rowId;
        return redirect()->route("wishlist.list");
    }

    public function clearWishlist(){
        Cart::instance('wishlist')->destroy();
        return redirect()->route("wishlist.list");
    }
    public function moveToCart(Request $request){
        $item = Cart::instance('wishlist')->get($request->rowId);
        Cart::instance('wishlist')->remove($request->rowId);
        Cart::instance('cart')->add($item->model->id,$item->model->nom,1,$item->model->prix_normal)->associate('App\Models\Product');
        redirect()->route('wishlist.list');
    }
    public function addtoCart(Request $request){
        $product = Product::find($request->id);
        $prix = $product->solde ? $product->solde : $product->prix_normal;

        Cart::instance('cart')->add($product->id , $product->nom ,$request->quantity , $prix)->associate('App\Models\Product');
            return redirect()->back()->with('message','Cet article a été envoyer dans votre panier');
    }
}
