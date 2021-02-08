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

      $employee -> tasks() -> save($task);

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
      $typologies = Typology::all();
      return view('pages.task-create',compact('employees','typologies'));

    }

    public function taskStore(Request $request) {

     $data = $request -> all();
     $newTask = Task::make($request -> all());
     $employee = Employee::findOrFail($request -> get('employee_id'));
     $newTask -> employee() -> associate($employee);
     $newTask -> save();

     $typologies = Typology::findOrFail($data['typologies']);
     $newTask -> typologies() -> attach($typologies);

     return redirect() -> route('task-index');

    }
    public function taskEdit($id) {

     $employees = Employee::all();
     $typologies = Typology::all();
     $task = Task::findOrFail($id);
     return view('pages.task-edit', compact('employees','task','typologies'));

    }

    public function taskUpdate(Request $request , $id) {

      $data = $request -> all();

      $task = Task::findOrFail($id);
      $employee = Employee::findOrFail($request -> get('employee_id'));
      $task -> update($data);
      $task -> employee() -> associate($employee);
      $task -> save();

      $typologies = Typology::findOrFail($data['typologies']);
      $task -> typologies() -> sync($typologies);
      
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

      $typology = Typology::create($request -> all());
      $typology -> save();

      $tasks = Task::findOrFail($data['tasks']);
      $typology -> tasks() -> attach($tasks);
      return redirect() -> route('typology-show', $typology -> id);

    }

    public function typologyEdit($id) {

      $typology = Typology::findOrFail($id);
      $tasks = Task::all();
      return view('pages.typology-edit',compact('typology','tasks'));

    }

    public function typologyUpdate(Request $request, $id) {

      $data = $request -> all();
      $typology = Typology::findOrFail($id);
      $typology -> update($data);
      $tasks = Task::findOrFail($data['tasks']);
      $typology -> tasks() -> sync($tasks);

      return redirect() -> route('typology-show', $typology -> id);

    }
}
