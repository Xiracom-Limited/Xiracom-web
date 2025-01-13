<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/Examparlour', function () {
    return view('Examparlour');
});


Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {

    return view('contact-us');

});

Route::get('/web-design', function () {

    return view('web-design');

});

Route::get('/jobs&internship', function () {

    return view('jobs&internship');

});

Route::get('/consultancy', function () {

    return view('consultancy');

});

Route::get('/Darasalink', function () {

    return view('Darasalink');

});

Route::get('/our-team', function () {

    return view('our-team');

});

Route::get('/Digital-marketing', function () {

    return view('Digital-marketing');

});

Route::get('/Request-quote', function () {

    return view('Request-quote');

});

Route::get('/Hardware-software', function () {

    return view('Hardware-software');

});

Route::get('/uiuxdesign', function () {

    return view('uiuxdesign');

});

Route::get('/ourclients&testimonials', function () {

    return view('ourclients&testimonials');

});

Route::get('/apiintergrations', function () {

    return view('apiintergrations');

});

Route::get('/navigation-bar', function () {

    return view('navigation-bar');
    
});

Route::get('/app-development', function () {

    return view('app-development');

});

Route::get('/bulk-sms', function () {

    return view('bulk-sms');

});

Route::get('/our-projects', function () {

    return view('our-projects');

});

Route::get('/skiza-tunes&SSID-codes', function () {

    return view('skiza-tunes&SSID-codes');

});

Route::get('/cyber-security', function () {

    return view('cyber-security');

});

Route::get('/welcome', function () {

    return view('welcome');

});

Route::get('/footer', function () {

    return view('footer');

});
