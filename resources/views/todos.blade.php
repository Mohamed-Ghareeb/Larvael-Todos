@extends('layout')

@section('content')

    <div class="row">
        <div class="col-lg-2 col-lg-offset-3">
            <form action="/create/todo" method="post">
                {{ csrf_field() }}
                <input class="form-control input-lg" placeholder="Create a new Todo" type="text" name="todo">
            </form>
        </div>     
    </div>
    
    <hr>
    @foreach($todos as $todo)
        {{ $todo->todo }}   <button style="background: red;border: red; cursor: pointer;"><a href="{{ route('todo.delete', ['id' => $todo->id]) }}" style="background: red;text-decoration: none;color:white">X</a></button>
                            <button style="background: blue;border: blue; cursor: pointer;"><a href="{{ route('todo.update', ['id' => $todo->id]) }}" style="background: blue;text-decoration: none;color:white">update</a></button>

        @if(!$todo->completed)

            <button style="background: green;border: green; cursor: pointer;"><a href="{{ route('todo.completed', ['id' => $todo->id]) }}" style="background: green;text-decoration: none;color:white">Mark As Completed</a></button>

        @else 

            <span>Completed!</span>

        @endif                                

        <hr>

    @endforeach
@stop