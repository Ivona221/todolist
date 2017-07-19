@extends('app')

@section('content')



    <div class="container" >
        <h2>Tasks for {{$date}}</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Task name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($todos as $todo)
            <tr>

                <td><a href="{{action('TodoController@check',array('id'=>$todo->id))}}">{{  Form::checkbox('agree')}}</a></td>

                <td>{{$todo->task }}</td>
                <td><form action="/todo/{{ $todo->id }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button class="btn btn-danger">Delete Task  <span class="glyphicon glyphicon-trash"></span></button>
                    </form></td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>


@stop







