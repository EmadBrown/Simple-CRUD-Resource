@extends('layouts.app')

@section('content')
<a href="{{route('todo.index')}}" class="btn btn-default">Go Back</a>
    <div class="well">
    <h1> {{$todo->text }} </h1>
      <span class="label label-danger">{{ $todo->body}}</span>
    </div>
@endsection
