<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use App\Task;

class MainController extends Controller
{
    // EMPLOYEE
    public function empIndex() {

      $employees = Employee::all();
      return view('pages.emp-index',compact('employees'));

    }

    public function empShow($id) {

     $employee = Employee::findOrFail($id);
     return view('pages.emp-show', compact('employee'));

    }

    // TASKS
    public function taskIndex() {

     $tasks = Task::all();
     return view('pages.task-index', compact('tasks'));

    }

    public function taskCreate() {

      $employees = Employee::all();
      return view('pages.task-create',compact('employees'));

    }

    public function taskStore(Request $request) {

     $newTask = Task::make($request -> all());
     $employee = Employee::findOrFail($request -> get('employee_id'));
     $newTask -> employee() -> associate($employee);
     $newTask -> save();

     return redirect() -> route('task-index');


    }
}
