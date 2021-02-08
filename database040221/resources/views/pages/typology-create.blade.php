@extends('layouts.main-layout')

@section('content')

  <h1>NEW TYPOLOGY</h1>

  <form action="{{ route('typology-store') }}" method="post">

    @csrf
    @method('POST')

      <label for="name">Name</label>
      <input type="text" name="name" value="">

      <br>

      <label for="description">Description</label>
      <input type="text" name="description" value="">

      <br>

      <label for="employee_id">Employee</label>
      <select name="employee_id">

        @foreach ($employees as $employee)

          <option value="{{$employee -> id}}">{{ $employee -> name}}</option>

        @endforeach

      </select>

      <br>

      <label for="tasks[]">Choose tasks</label>

      @foreach ($tasks as $task)

        <input name="tasks[]"type="checkbox" name="" value="{{ $task -> id}}"> {{$task -> title}}

      @endforeach


      <br><br>

      <input type="submit" name="" value="Salva">



  </form>

@endsection
