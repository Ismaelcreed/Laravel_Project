<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\AppController::class , 'index'])->name('app.index');
Route::get('/boutique', [App\Http\Controllers\ShopController::class , 'index'])->name('shop.index');
Route::get('/chaussure/{etiquette}', [App\Http\Controllers\ShopController::class , 'productsDetails'])->name('shop.product.details');
Route::get('/panier-like-count',[App\Http\Controllers\ShopController::class , 'getCartAndWishlistCount'])->name('shop.cart.wishlist.count');


Route::get('/panier' , [App\Http\Controllers\CartController::class , 'index'])->name('cart.index');
Route::post('/panier/stock',[App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.store');
Route::put('/panier/mis_a_jour',[App\Http\Controllers\CartController::class, 'updateCart'])->name('cart.update');
Route::delete('/panier/effacer',[App\Http\Controllers\CartController::class,'removeItem'])->name('cart.remove');
Route::delete('/panier/vider',[App\Http\Controllers\CartController::class,'clearCart'])->name('cart.clear');


Route::get('/cartographie' , [App\Http\Controllers\cartographie::class,'index'])->name('cartographie.index');
Route::get('/apropos',[App\Http\Controllers\aboutController::class,'index'])->name('about.index');

Route::get('/like/liste',[App\Http\Controllers\WishListController::class,'getAllWishlistedProducts'])->name('wishlist.list');
Route::post('/like/ajouté',[App\Http\Controllers\WishListController::class,'addProducttoWishList'])->name('wishlist.store');
Route::delete('/like/effacer',[App\Http\Controllers\WishListController::class,'removeProductFromWishlist'])->name('wishlist.remove');
Route::delete('/like/vider',[App\Http\Controllers\WishListController::class,'clearWishlist'])->name('wishlist.clear');
Route::post('/like/ajout_dans_panier',[App\Http\Controllers\WishListController::class,'moveToCart'])->name('wishlist.store');

Route::get('/payement',[App\Http\Controllers\StripeController::class,'checkout'])->name('checkout');
Route::post('/payement/valider',[App\Http\Controllers\StripeController::class,'createPaymentIntent'])->name('checkout.store');

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/moncompte' , [App\Http\Controllers\UserController::class , 'index'])->name('users.index');
    
});

Route::middleware(['auth' , 'auth.admin'])->group(function(){
    Route::get('/admin' , [App\Http\Controllers\AdminController::class , 'index'])->name('admin.index');
    Route::controller(App\Http\Controllers\ProductController::class)->prefix('products')->group(function(){
        Route::get('','index')->name('products');
        Route::get('create','create')->name('products.create');
    });
});  
