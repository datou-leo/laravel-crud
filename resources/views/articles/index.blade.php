@extends('app')

@section('content')
    @if(count($articles)>0)
        <ul>
            @foreach($articles as $article)
                <li>
                    <h1>
                        <a href="{{url('articles',$article->id)}}">{{$article->title}}</a>
                    </h1>
                    <h5>{{$article->content}}</h5>
                </li>
            @endforeach
        </ul>
    @endif
    @stop