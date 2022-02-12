<?php

use App\Http\Controllers\ItemsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route("item.create");
});

Route::resource('/item', ItemsController::class);