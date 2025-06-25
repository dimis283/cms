<?php

use Illuminate\Support\Facades\Route;
use App\Models\Text;
use App\Http\Controllers\ContactController;
Route::get('/', function () {
    $texts = Text::orderBy('order', 'asc')->get();
   
    return view('home', ['texts' => $texts]);
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');
