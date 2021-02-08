@extends('layouts.main-layout')

@section('content')

  <h1>NEW TASK</h1>

  <form action="{{ route('task-store') }}" method="post">

    @csrf
    @method('POST')

      <label for="title">Title</label>
      <input type="text" name="title" value="">

      <br>

      <label for="description">Description</label>
      <input type="text" name="description" value="">

      <br>

      <label for="priority">Priority</label>
      <input type="text" name="priority" value="">

      <br>

      <label for="employee_id">Employee</label>
      <select name="employee_id">

        @foreach ($employees as $employee)

          <option value="{{$employee -> id}}">{{ $employee -> name}}</option>

        @endforeach

      </select>
      <br><br>

      <label for="typologies[]">Typolgies:</label>

      <br><br>
      @foreach ($typologies as $typology)

        {{ $typology -> name}}
        <input type="checkbox" name="typologies[]" value="{{ $typology -> id}}">

      @endforeach

      <input type="submit" name="" value="Salva">



  </form>

@endsection
