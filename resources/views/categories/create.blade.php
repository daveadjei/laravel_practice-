@extends('layouts.app')
@section('content')

<div class="container">

        <h2 class="form-signin-heading">Form</h2>

        <form method="post" action=" {{ action('CategoryController@store') }} ">
            {!! csrf_field() !!}
            <label class="sr-only">Name</label>
            <input class="form-control" name="name" placeholder="Name" required autofocus><br>
            <label for="inputPassword" class="sr-only">Code</label>
            <input class="form-control" name="code" placeholder="Code" required><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Submit me vole</button>
        </form>

    </div>
    @endsection