<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::action('Test1', function (Request $request) {
    return $request->input();
});
