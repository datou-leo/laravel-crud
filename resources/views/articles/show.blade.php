@extends('app')

@section('content')

    <h1>
        {{$article->title}}
    </h1>

        <h5>
          {{$article->content}}
        </h5>

    @stop