@extends('layouts.main-layout')

@section('content')

  <h1>EDIT TYPOLOGY</h1>

  <form  action="{{ route('typology-update', $typology -> id)}}"method="post">

    @csrf
    @method('POST')

      <label for="name">Name</label>
      <input type="text" name="name" value="{{ $typology -> name}}">

      <br>

      <label for="description">Description</label>
      <input type="text" name="description" value=" {{ $typology -> description}}">

      <br>

      <label for="tasks[]">Choose tasks</label>

        @foreach ($tasks as $task)
         <div class="checkbox">

          <p>{{ $task -> title}}</p>

          <input
            name="tasks[]"
            type="checkbox"
            name=""
            value="{{ $task -> id}}"

          @foreach ($typology -> tasks as $task_id)
           @if ($task_id -> id  == $task -> id)

             checked

           @endif
          @endforeach

          >

        </div>
        @endforeach

      <br><br>

      <input type="submit" name="" value="Aggiorna">

  </form>

@endsection
