@extends('app')

@section('content')

        {!! Form::open(['url'=>'/articles']) !!}
            <div class="form-group">

                {!! Form::label('title') !!}
                {!! Form::text('title',null,["class"=>'form-controller']) !!}

            </div>

        <div class="form-group">

            {!! Form::label('conten',"Content:") !!}
            {!! Form::textarea('content',null,["class"=>'form-controller']) !!}

        </div>
        {!! Form::submit('发表文章',["class"=>'btn btn-primary form-controller']) !!}

        {!! Form::close() !!}
        @if($errors->any())
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item list-group-item-danger">
                    {{$error}}
                </li>
            @endforeach
        </ul>
        @endif
    @stop