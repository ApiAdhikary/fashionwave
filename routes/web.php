<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\WelcomeController ;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\SubscriberController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Frontend\CompareController;


// Frontend routes
Route::get( '/' ,[WelcomeController::class, 'index']);     

//Common pages routes
Route::get('/about-us', [PagesController::class, 'aboutUs'])->name('about.us');
Route::get('/contact-us', [PagesController::class, 'contactUs'])->name('contact.us');
Route::post('/contactStore', [PagesController::class, 'storeContact'])->name('contact.store');
Route::get('/terms-conditions', [PagesController::class, 'termsAndConditions'])->name('terms.conditions');
Route::get('/privacy-policy', [PagesController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/faq', [PagesController::class, 'faq'])->name('faq');


Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
 Route::post('cart/add', [CartController::class, 'addToCart'])->name('cart.add');
 Route::delete('cart/remove', [CartController::class, 'removeProduct']);

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');

Route::post('/subscriber', [SubscriberController::class, 'store'])->name('subscribe.store');

Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
Route::post('wishlist', [WishlistController::class, 'store']);
Route::delete('wishlist', [WishlistController::class, 'destroy']);

Route::get('/compare', [CompareController::class, 'index'])->name('compare.index');
Route::post('compare', [CompareController::class, 'store']);
Route::delete('compare', [CompareController::class, 'destroy']);
