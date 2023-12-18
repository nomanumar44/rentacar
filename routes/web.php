<?php

use App\Models\User;
use App\Models\Tokens;
use App\Events\TokenUpdates;
use App\Mail\ContactUsMail;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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
    // Mail::to('nomanumar522@gmail.com')->send(new ContactUsMail());
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/broadcast-private',function(){
//     $tokens = Tokens::all();

//     return "Event has been sent!";
// });

require __DIR__.'/auth.php';

Route::view('/{any}', 'welcome')
    ->where('any', '.*');
