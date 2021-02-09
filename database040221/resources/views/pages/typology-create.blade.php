@extends('layouts.main-layout')

@section('content')

  <h1>NEW TYPOLOGY</h1>

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

  <form action="{{ route('typology-store') }}" method="post">

    @csrf
    @method('POST')

      <label for="name">Name</label>
      <input type="text" name="name" value="">

      <br>

      <label for="description">Description</label>
      <input type="text" name="description" value="">

      <br>

      <label for="tasks[]">Choose tasks</label>

        @foreach ($tasks as $task)
         <div class="checkbox">

          <p>{{ $task -> title}}</p><input name="tasks[]"type="checkbox" name="" value="{{ $task -> id}}">

        </div>
        @endforeach


      <br><br>

      <input type="submit" name="" value="Salva">



  </form>

@endsection
