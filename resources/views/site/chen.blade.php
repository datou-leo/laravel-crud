<!--
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        hello world my friend <h1>{{$name}}</h1><h1>{{$age}}</h1>
    </body>
</html>
-->
@extends('app')

@if($age==30)
@section('content')
        hello world my friend
    @stop
@endif