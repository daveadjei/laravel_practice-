@extends('layouts.app')

@section('content')

<div class="container">

    <h2 class="form-signin-heading">Article</h2>
    @foreach($articles as $article)
        {{$article->title}}
        {{$article->text}}
        <hr>
    @endforeach
</div>
@endsection
