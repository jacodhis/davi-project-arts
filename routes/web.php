<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\artscontroller;
use App\Http\Controllers\usersController;
use App\Http\Controllers\shoppingcartController;
use App\Http\controllers\MpesaController;
use App\Http\controllers\ChatsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//view profile forany user
Route::get('/profile/{user_id}',[usersController::class, 'profile'])->name('profile');
//update any users profile 
Route::PUT('/update-user-profile',[usersController::class, 'updateprofile'])->name('update-user');

//admin view users
Route::get('/users',[usersController::class, 'users'])->name('users');
//admin view artists
Route::get('/artists',[usersController::class, 'artists'])->name('artists');

//all arts except for the artist logged in
Route::get('/all-Arts',[artsController::class, 'index'])->name('all-Arts');
//my arts
Route::get('/arts/{user_id}',[artsController::class, 'arts'])->name('arts');
//artist can create an art
Route::get('createArt',[artsController::class, 'create'])->name('createArt');
//artist can upload art route
Route::post('/uploadart',[artsController::class, 'store'])->name('artupload');

//show single art
Route::get('/viewsingleart/{id}',[artsController::class, 'show'])->name('showArt');


//art shopping cart
Route::post('/shopping-cart/{id}',[shoppingcartController::class, 'cart'])->name('add-to-cart');
// Route::get('/mycart','shoppingcartController@mycart')->name('my-cart');
//other cart
Route::get('/cart',[shoppingcartController::class, 'my_cart'])->name('mycart');
Route::post('/cart-remove/{id}',[shoppingcartController::class, 'cart_remove'])->name('cart-remove');

//payment via mpesa
Route::post('pay-via-mpesa-online',[MpesaController::class, 'stk'])->name('stk');

//chat between artist and admin
Route::POST('/chat/create/{ArtId}',[ChatsController::class,'chart']);
Route::post('/chat/reply/{chat}',[ChatsController::class,'chartreply']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
