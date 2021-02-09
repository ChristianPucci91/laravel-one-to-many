@extends('layouts.main-layout')

@section('content')

  <h1>EDIT TASK: {{ $task -> id}}</h1>

  <br><br>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)

              <h3>

                <li>{{ $error }}</li>

              </h3>

            @endforeach
        </ul>
    </div>
  @endif

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

      <br><br>

      <label for="typologies[]">Typologies:</label>

      <br><br>
      @foreach ($typologies as $typology)

        {{$typology -> name}}

        <input
         type="checkbox"
         name="typologies[]"
         value="{{ $typology -> id}}"

         @foreach ($task -> typologies as $task_type)

           @if ($task_type -> id == $typology -> id)
             checked
           @endif

         @endforeach

         >


      @endforeach

      <input type="submit" name="" value="Aggiorna">



  </form>

@endsection
