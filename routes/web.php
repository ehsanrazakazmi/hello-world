<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AdminTechController;
use App\Http\Controllers\TechnicianController;
use App\Http\Controllers\ChangePasswordController;

Route::get('/', [HomeController::class, 'public'])->name('public');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/adminpanel', [HomeController::class, 'home'])->name('adminpanel');
	Route::get('dashboard', function () {	return view('dashboard');})->name('dashboard');
	Route::get('billing', function () {return view('billing');})->name('billing');
	Route::get('profile', function () {	return view('profile');})->name('profile');
	Route::get('rtl', function () {return view('rtl');})->name('rtl');
	Route::get('tables', function () {	return view('tables');})->name('tables');
    Route::get('virtual-reality', function () {	return view('virtual-reality');})->name('virtual-reality');
    Route::get('static-sign-in', function () {return view('static-sign-in');})->name('sign-in');
    Route::get('static-sign-up', function () {return view('static-sign-up');})->name('sign-up');
    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {return view('dashboard');})->name('sign-up');

    Route::group(['prefix'=> 'categories'], function(){       
        Route::get('/', [CategoryController::class, 'index'])->name('adminpanel.categories');
        Route::post('/', [CategoryController::class, 'store'])->name('adminpanel.category.store');
        Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('adminpanel.category.destroy');
       });

    Route::group(['prefix'=> 'availability'], function(){      
        Route::get('/', [ColorController::class, 'index'])->name('adminpanel.availability');
        Route::post('/', [ColorController::class, 'store'])->name('adminpanel.availability.store');
        Route::delete('/{id}', [ColorController::class, 'destroy'])->name('adminpanel.availability.destroy');
        });

	Route::group(['prefix'=> 'technicians'], function(){   
        Route::get('/', [AdminTechController::class, 'index'])->name('adminpanel.technicians');
        Route::get('/create', [AdminTechController::class, 'create'])->name('adminpanel.technicians.create');
        Route::post('/create', [AdminTechController::class, 'store'])->name('adminpanel.technicians.store');
        Route::get('/{id}', [AdminTechController::class, 'edit'])->name('adminpanel.technicians.edit');
        Route::put('/{id}', [AdminTechController::class, 'update'])->name('adminpanel.technicians.edit');
        Route::delete('/{id}', [AdminTechController::class, 'destroy'])->name('adminpanel.technicians.destroy');
        });

    Route::group(['prefix'=> 'orders'], function(){   
        Route::get('/', [OrderController::class, 'index'])->name('orders');
        Route::get('/{id}', [OrderController::class, 'view'])->name('orders.view');
        Route::put('/{id}', [OrderController::class, 'updateStatus'])->name('orders.view');
        });
    

    Route::get('mail/contact', [mailController::class,"mailform"])->name('mail.create');
    Route::post('mail/sendemail', [mailController::class,"sendmail"])->name('sendmail');
    });

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
});

Route::get('/login', function () {return view('session/login-session');})->name('login');

// Resident Portal
Route::get('/home', [PagesController::class,'home'])->name('home')->middleware('shahbaz');
Route::get('/cart', [PagesController::class,'cart'])->name('cart')->middleware('shahbaz');
Route::get('/wishlist', [PagesController::class,'wishlist'])->name('wishlist');
Route::get('/account', [PagesController::class,'account'])->name('account');
Route::get('/checkout', [PagesController::class,'checkout'])->name('checkout');
Route::get('/success', [PagesController::class,'success'])->name('success');
Route::get('/products/{id}', [PagesController::class,'product'])->name('product');
Route::post('/stripe-checkout', [CheckoutController::class,'stripeCheckout'])->name('stripeCheckout');

//Cart
Route::post('/add-to-cart/{id}', [CartController::class,'addToCart'])->name('addToCart');
Route::post('/remove-from-cart/{id}', [CartController::class,'removeFromCart'])->name('removeFromCart');
Route::post('/add-to-wishlist/{id}', [WishlistController::class,'post'])->name('addToWishlist')->middleware('auth');
Route::post('/remove-from-wishlist/{id}', [WishlistController::class,'remove'])->name('removeFromWishlist')->middleware('auth');
// Auth
Route::post('/logout', [AuthController::class,'logout'])->name('logout')->middleware('auth');

//technician panel

Route::group(['prefix'=> 'technicianpanel', 'middleware'=>'guest'], function()  {
    Route::get('/', [TechnicianController::class, 'dashboard'])->name('technicianpanel');
    Route::get('/technician/pages/view/{id}', [TechnicianController::class, 'view'])->name('technicianpanel.pages.view');
    Route::post('/', [TechnicianController::class, 'store'])->name('technicianpanel.store');
    Route::get('/confirmed', [TechnicianController::class, 'confirmed'])->name('technicianpanel.confirmed');
    Route::put('/{id}', [TechnicianController::class, 'updateStatus'])->name('technicianpanel.status.update');
    

    // Route::group(['prefix'=>'profile'], function(){
    //     Route::get('/', [TechnicianController::class, 'profile'])->name('technicianpanel.profile');

            

    // });
});