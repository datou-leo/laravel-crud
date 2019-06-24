@extends('app')


@section('content')
      @if(count($peoples)>0)
    <ul>
        @foreach($peoples as $people)
                <li>{{$people}}</li>
            @endforeach
    </ul>
    @endif
    @stop

@section('footer')
        <script>
            alert('hello,world')
        </script>
    @stop
