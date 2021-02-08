<?php

use Illuminate\Support\Facades\Route;

//EMPLOYEE

Route::get('/', 'MainController@empIndex')
   -> name('emp-index');

Route::get('/employee/show/{id}', 'MainController@empShow')
   -> name('emp-show');

Route::get('/employee/create','MainController@empCreate')
   -> name('emp-create');

Route::post('/employee/store','MainController@empStore')
   -> name('emp-store');


//TASKS

Route::get('/tasks', 'MainController@taskIndex')
   -> name('task-index');

Route::get('/tasks/show/{id}', 'MainController@taskShow')
   -> name('task-show');

Route::get('/tasks/create' , 'MainController@taskCreate')
   -> name('task-create');

Route::post('/tasks/store', 'MainController@taskStore')
  -> name('task-store');

Route::get('/tasks/edit/{id}', 'MainController@taskEdit')
  -> name('task-edit');

Route::post('/tasks/update/{id}', 'MainController@taskUpdate')
  -> name('task-update');

//TYPOLOGIES

Route::get('/typologies', 'MainController@typologyIndex')
  -> name('typology-index');

Route::get('typology/show/{id}', 'MainController@typologyShow')
  -> name('typology-show');

Route::get('typology/create','MainController@typologyCreate')
  -> name('typology-create');

Route::post('typology/store', 'MainController@typologyStore')
  -> name('typology-store');

Route::get('typology/edit/{id}','MainController@typologyEdit')
 -> name('typology-edit');

Route::post('typology/update/{id}','MainController@typologyUpdate')
  -> name('typology-update');
