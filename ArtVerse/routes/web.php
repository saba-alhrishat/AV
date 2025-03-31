<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/', function () {
    return view('homepage');
});



Route::get('/aboutus', function () {
    return view('aboutus');
});



Route::get('/gallary', function () {
    return view('gallary');
});



Route::get('/artists', function () {
    return view('artists');
});




Route::get('/contactus', function () {
    return view('contactus');
});




Route::get('/cart', function () {
    return view('cart');
});




Route::get('/checkout', function () {
    return view('checkout');
});


Route::get('/user_dashboard', function () {
    return view('user_dashboard');
});


Route::get('/admin_dashboard', function () {
    return view('admin_dashboard');
});


Route::get('/testimonial', function () {
    return view('testimonial');
});



Route::get('/products', function () {
    return view('products');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});



