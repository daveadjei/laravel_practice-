@extends('layouts.app') @section('content')

<div class="container">

    <h2 class="form-signin-heading">Article</h2>

    <form method="post" action=" {{ action('ArticleController@store') }} ">
        {!! csrf_field() !!}
        <label class="sr-only">Name</label>
        <input class="form-control" name="name" placeholder="Name" required autofocus>
        <br>

        <div class="form-group">
            <label for="exampleInputEmail">Category</label>
            <select class="form-control" name="category">
                @foreach($categories as $category)
                    <option value=" {{$category->id}} "> {{$category->name}} </option>
                @endforeach
            </select>
        </div>
        <br>

        <label class="sr-only">Title</label>
        <input class="form-control" name="title" placeholder="Title" required autofocus>
        <br>
        <label class="sr-only">Text</label>
        <input class="form-control" name="text" placeholder="Text" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit article</button>
    </form>

</div>
@endsection