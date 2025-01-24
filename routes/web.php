<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\BookingController;
use App\Http\Controllers\backend\CatagoryController;
use App\Http\Controllers\FrontController;
use Inertia\Inertia;


Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/event', [FrontController::class, 'event'])->name('event');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::post('/store', [FrontController::class, 'store'])->name('cstor');
Route::get('/gallery', [FrontController::class, 'gallery'])->name('gallerying');
Route::get('/blog_details/{blgid}', [FrontController::class, 'blogDetails'])->name('blog_details');
Route::get('/event_details/{eeid?}', [FrontController::class, 'event_details'])->name('event_details');


//admin dashboard
Route::get('/admin/dashboard', function () {
    return view('backend.admin_dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin_dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

//admin routing;
Route::middleware('guest:admin')->prefix('admin')->group(function () {

    Route::get('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'login'])->name('admin.login');
    Route::post('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'check_user']);

    // Route::get('register', [App\Http\Controllers\Auth\Admin\RegisterController::class, 'create'])->name('admin.register');
    // Route::post('register', [App\Http\Controllers\Auth\Admin\RegisterController::class, 'store']);


});

Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::resource('/payment', App\Http\Controllers\backend\PaymentController::class);
    Route::resource('/booking', App\Http\Controllers\backend\BookingController::class);
    Route::get('/booking/status/{id}', [BookingController::class, 'changeStatus'])->name('changeStatus');
    Route::resource('/blog', App\Http\Controllers\backend\BlogController::class);
    Route::get('/comment', [App\Http\Controllers\backend\BlogController::class, 'comment'])->name('comment');
    Route::post('/comment/{did}', [App\Http\Controllers\backend\CommentController::class, 'destro'])->name('destro');
    Route::get('/gallery', [App\Http\Controllers\backend\BlogController::class, 'gallery'])->name('gallery');
    Route::post('/gallery/{gid?}', [App\Http\Controllers\backend\BlogController::class, 'dest'])->name('dest');
    Route::resource('/testimonial', App\Http\Controllers\backend\TestimonialController::class);
    Route::resource('/event', App\Http\Controllers\backend\EventController::class);
    Route::resource('/speaker', App\Http\Controllers\backend\SpeakerController::class);
    Route::resource('/organiser', App\Http\Controllers\backend\OrganiserController::class);
    Route::resource('/message', App\Http\Controllers\backend\MessageController::class);
    Route::resource('/events/city', App\Http\Controllers\backend\CityController::class);
    Route::resource('/attendee', App\Http\Controllers\backend\AttendeeController::class);
    Route::resource('/employee', App\Http\Controllers\backend\EmployeeController::class);
    Route::resource('/events/country', App\Http\Controllers\backend\CountryController::class);
    Route::get('/invoice/{iid?}', [App\Http\Controllers\backend\InvoiceController::class, 'invoice'])->name('invoice');

    // Route::resource('/general_admin', App\Http\Controllers\Auth\Admin\RegisterController::class);
    Route::resource('/general_admin', App\Http\Controllers\backend\AdminController::class);
    Route::post('logout', [App\Http\Controllers\Auth\Admin\LoginController::class, 'logout'])->name('admin.logout');

    Route::view('/dashboard', 'backend.admin_dashboard');
    //catagory route
    Route::resource('/catagory', CatagoryController::class);
});

//attendee routing;

Route::middleware('guest:attendee')->prefix('attendee')->group(function () {

    Route::get('login', [App\Http\Controllers\Auth\Attendee\LoginController::class, 'create'])->name('attendee.login');
    Route::post('login', [App\Http\Controllers\Auth\Attendee\LoginController::class, 'store']);

    Route::get('register', [App\Http\Controllers\Auth\Attendee\RegisterController::class, 'create'])->name('attendee.register');
    Route::post('register', [App\Http\Controllers\Auth\Attendee\RegisterController::class, 'store']);
});


Route::middleware('auth:attendee')->prefix('attendee')->group(function () {

    Route::post('logout', [App\Http\Controllers\Auth\Attendee\LoginController::class, 'destroy'])->name('attendee.logout');
    Route::get('/dashboard', [App\Http\Controllers\backend\attendee\HomeController::class, 'dash'])->name('homen');
    Route::get('/eventn', [App\Http\Controllers\backend\attendee\EventShowController::class, 'eventn'])->name('eventn');
    Route::get('/event_single/{idn?}', [App\Http\Controllers\backend\attendee\EventShowController::class, 'shown'])->name('event_singlen');
    Route::get('/speaker/{sidn?}', [App\Http\Controllers\backend\attendee\EventShowController::class, 'speakern'])->name('speakern');
    Route::get('/aboutn', [App\Http\Controllers\backend\attendee\EventShowController::class, 'aboutn'])->name('aboutn');
    Route::get('/blogn', [App\Http\Controllers\backend\attendee\BlogController::class, 'blogn'])->name('blogn');
    Route::get('/blogdetailsn/{bidn?}', [App\Http\Controllers\backend\attendee\BlogController::class, 'blogdetailsn'])->name('blogdetailsn');
    Route::post('/blogdetailsn', [App\Http\Controllers\backend\attendee\BlogController::class, 'blogstore'])->name('blogstore');
    Route::get('/bookingn/{bokid}', [App\Http\Controllers\backend\attendee\BookingController::class, 'bookingn'])->name('bookingn');
    Route::post('/bookingn', [App\Http\Controllers\backend\attendee\BookingController::class, 'cbooking'])->name('cbooking');
    Route::get('/paymentn', [App\Http\Controllers\backend\attendee\BookingController::class, 'paymentn'])->name('paymentn');
    Route::post('/paymentn', [App\Http\Controllers\backend\attendee\BookingController::class, 'paymentstore'])->name('paymentstore');
    Route::get('/mybooking', [App\Http\Controllers\backend\attendee\BookingController::class, 'mybooking'])->name('mybooking');
    Route::get('/mytransaction', [App\Http\Controllers\backend\attendee\BookingController::class, 'transaction'])->name('mytransaction');

    Route::get('/galleryn', [App\Http\Controllers\backend\attendee\BlogController::class, 'galleryn'])->name('galleryn');
    Route::post('/galleryn', [App\Http\Controllers\backend\attendee\BlogController::class, 'galleryup'])->name('galleryup');

    Route::get('/contactn', [App\Http\Controllers\backend\attendee\EventShowController::class, 'contactn'])->name('acontact');
    Route::post('/contactn', [App\Http\Controllers\backend\attendee\EventShowController::class, 'nstore'])->name('contact.storen');
    Route::get('/invoicen/{booid?}', [App\Http\Controllers\backend\attendee\PdfController::class, 'invoicen'])->name('invoicen');
});



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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
