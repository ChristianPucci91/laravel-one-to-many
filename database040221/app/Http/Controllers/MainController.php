<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class MainController extends Controller
{
    public function empIndex() {

      $employees = Employee::all();
      return view('pages.emp-index',compact('employees'));
    }
}
