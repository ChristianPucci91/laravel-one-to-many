@extends('layouts.main-layout')

@section('content')

  <h1>NEW EMP</h1>

  <form action="{{ route('emp-store') }}" method="post">

    @csrf
    @method('POST')

      <label for="name">Name</label>
      <input type="text" name="name" value="">

      <br>

      <label for="lastname">Lastname</label>
      <input type="text" name="lastname" value="">

      <br>

      <label for="dateOfBirth">Date of Birth</label>
      <input type="text" name="dateOfBirth" value="">

      <br>

      <label for="task_id">Tasks</label>
      <select name="task_id">

        @foreach ($tasks as $task)

          <option value="{{$task -> id}}">{{ $task -> title}}</option>

        @endforeach

      </select>

      <input type="submit" name="" value="Salva">



  </form>

@endsection
