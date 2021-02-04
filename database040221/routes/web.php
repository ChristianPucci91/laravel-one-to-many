<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@empIndex')
   -> name('emp-index');
