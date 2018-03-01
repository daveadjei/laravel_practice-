@extends('layouts.app')
@section('content')

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif You are logged in!
</div>

<div class="jumbotron">
    <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron
            and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p>
            <a class="btn btn-primary btn-lg" href="{{ action('CategoryController@create') }}" role="button">Enjoy the form vole &raquo;</a>
        </p>
    </div>
</div>


<div class="container">
      <!-- Example row of columns -->
    <div class="row">

    @foreach($categories as $category)

        <div class="col-md-4">
            <h2>{{ $category->name }}</h2>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>

    @endforeach

</div>
@endsection