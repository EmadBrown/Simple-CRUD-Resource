@extends('layouts.app')

@section('content')
  <h1> Welcome Todo List </h1>
  @if(count($todos) > 0)
    @foreach ($todos as $todo)
      <div class="well">
        <div class="">
          <a href="{{route('todo.show', $todo->id)}}"><h3> {{$todo->text }}</h3></a>
          <span class="label label-warning">{{ $todo->body}}</span>
        </div>
        <a href="{{route('todo.edit', $todo->id)}}" type="button" class = "btn btn-primary">Edit</a>
           {!! Form::open(['route' => ['todo.destroy', $todo->id],  'method' => 'Delete']) !!}
             {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger'] , [ 'type' => "button"] ) }}
           {!! Form::close() !!}
    </div>
    @endforeach
  @endif
@endsection
