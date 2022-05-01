<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::action('qcloud.sme.createResource', function (Request $request) {
    return $request->input();
});
