<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $result = generate_employee_id();
    var_dump($result);
})->name('home');
