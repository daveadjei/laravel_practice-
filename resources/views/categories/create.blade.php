@extends('layouts.app')
@section('content')

<div class="container">

      <form class="form-signin" method="post" action=" {{ action('CategoryController@store') }} ">
        <h2 class="form-signin-heading">Form</h2>
        <label for="inputEmail" class="sr-only">Name</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Name" required autofocus><br>
        <label for="inputPassword" class="sr-only">Code</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Code" required><br>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit me vole</button>
      </form>

    </div>
    @endsection