<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@empIndex')
   -> name('emp-index');

Route::get('/employee/{id}', 'MainController@empShow')
   -> name('emp-show');

Route::get('/tasks', 'MainController@taskIndex')
   -> name('task-index');
