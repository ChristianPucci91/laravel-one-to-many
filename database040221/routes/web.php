<?php

use Illuminate\Support\Facades\Route;

//EMPLOYEE

Route::get('/', 'MainController@empIndex')
   -> name('emp-index');

Route::get('/employee/{id}', 'MainController@empShow')
   -> name('emp-show');


//TASKS

Route::get('/tasks', 'MainController@taskIndex')
   -> name('task-index');

Route::get('/tasks/create' , 'MainController@taskCreate')
   -> name('task-create');
