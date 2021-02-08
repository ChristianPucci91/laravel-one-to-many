<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use App\Task;
use App\Typology;

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

    public function empCreate() {

      $tasks = Task::all();
      return view('pages.emp-create',compact('tasks'));

    }

    public function empStore(Request $request) {

      $employee = Employee::create($request -> all());
      $task = Task::findOrFail($request -> get('task_id'));

        dd($employee,$task);

      $employee -> tasks() -> attach($task);

      $employee -> save();

      return redirect() -> route('emp-show', $employee -> id);
    }

    // TASKS
    public function taskIndex() {

     $tasks = Task::all();
     return view('pages.task-index', compact('tasks'));

    }

    public function taskShow($id) {

      $tasks = Task::findOrFail($id);
      return view('pages.task-show',compact('tasks'));
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
    public function taskEdit($id) {

     $employees = Employee::all();
     $task = Task::findOrFail($id);
     return view('pages.task-edit', compact('employees','task'));

    }

    public function taskUpdate(Request $request , $id) {

      $task = Task::findOrFail($id);
      $employee = Employee::findOrFail($request -> get('employee_id'));
      $task -> employee() -> associate($employee);
      $task -> update($request -> all());
      return redirect() -> route('task-index');

    }

    // TYPOLOGIES

    public function typologyIndex() {

      $typologies = Typology::all();
      return view('pages.typology-index',compact('typologies'));

    }

    public function typologyShow($id) {

     $typology = Typology::findOrFail($id);
     return view('pages.typology-show',compact('typology'));

    }

    public function typologyCreate() {

     $employees = Employee::all();
     $tasks = Task::all();
     return view('pages.typology-create',compact('employees','tasks'));

    }

    public function typologyStore(Request $request) {

      $data = $request -> all();
      dd($data);
    }
}
