@extends('layouts.app')


@section('body')

<h1 class="text-center">Todos Page</h1>


<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">

            @if(Session::has('delete-todo'))
            <div class="alert alert-danger">
                <a href="" class="close" data-dismiss="alert">x</a>
               {{ session('delete-todo') }}
            </div>

            @endif



            @if(Session::has('updated'))

                <div class="alert alert-success">
                    <a href="" class="close" data-dismiss="alert">x</a>
                    {{ session('updated') }}
                </div>




                @endif






        @if(count($todos) > 0)

                <div class="card card-default">

                    <div class="card-header">Todo</div>
                    <div class="card-body">


<ul class="list-group">
    @foreach($todos as $todo)

        <li class="list-group-item">{{ $todo->name }}

    @if($todo->completed == false)
        <a href="/todo/{{$todo->id}}/complete" style="color: white;" class="btn btn-warning btn-sm float-right">Complete</a>
    @endif

    <a href="{{ url('/todos', $todo->id) }}" class="btn btn-primary btn-sm float-right mr-2">View</a>


        </li>


    @endforeach

</ul>

                    </div>

                    <div class="card-footer text-center">
                        <div class="offset-5">{{ $todos->links() }}</div>
                    </div>

                </div>

            @endif


        </div>

    </div>


</div>

    <br>



@endsection

