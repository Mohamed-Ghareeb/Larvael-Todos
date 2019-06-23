@extends('layout')

@section('content')

    <div class="row">
        <div class="col-lg-2 col-lg-offset-3">
            <form action="{{ route('todo.save', ['id' => $todo->id]) }}" method="post">
                {{ csrf_field() }}
                <input class="form-control input-lg" placeholder="Create a new Todo" type="text" name="todo" value="{{ $todo->todo }}">
            </form>
        </div>     
    </div>
    
    <hr>
@stop