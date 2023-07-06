<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use Illuminate\Http\Request;

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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/events', [App\Http\Controllers\EventsController::class, 'index'])->name('events');

Route::get('/reviews', [App\Http\Controllers\ReviewsController::class, 'index'])->name('reviews');
Route::get('/aboutus', [App\Http\Controllers\AboutUsController::class, 'index'])->name('aboutus');

Route::get('/contactus', [App\Http\Controllers\ContactUsController::class, 'index'])->name('contactus');
Route::post('/contactus', [App\Http\Controllers\ContactUsController::class, 'store'])->name('contact.us.store');

Route::get('/reservation', [App\Http\Controllers\ReservationController::class, 'index'])->name('reservation');

Route::post('/reservation', [App\Http\Controllers\ReservationController::class, 'store'])->name('reservation.store');




// Authenticate the user and redirect to the reservation page
Route::post('/login', function (Request $request) {
    // Validate the user's credentials
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Attempt to log the user in
    if (Auth::attempt($credentials)) {
        return redirect()->route('reservation');
    } else {
        return back()->withErrors([
            'email' => 'Invalid email or password',
        ]);
    }
})->name('login.post');

// Display the reservation page (only for authenticated users)
Route::get('/reservation', function () {
    if (!Auth::check()) {
        return redirect()->route('login');
    }

    return view('reservation');
})->name('reservation');