@extends('layouts.main-layout')

@section('content')

  <h1>EDIT TASK: {{ $task -> id}}</h1>

  <form action="{{ route('task-update', $task -> id) }}" method="post">

    @csrf
    @method('POST')

      <label for="title">Title</label>
      <input type="text" name="title" value="{{ $task -> title }}">

      <br>

      <label for="description">Description</label>
      <input type="text" name="description" value="{{ $task -> description }}">

      <br>

      <label for="priority">Priority</label>
      <input type="text" name="priority" value="{{ $task -> priority }}">

      <br>

      <label for="employee_id">Employee</label>
      <select name="employee_id">

        @foreach ($employees as $employee)

          <option value="{{$employee -> id}}"

            @if ($task -> employee -> id == $employee -> id)
               selected
            @endif

            >{{ $employee -> name}}

          </option>

        @endforeach

      </select>

      <input type="submit" name="" value="Aggiorna">



  </form>

@endsection
