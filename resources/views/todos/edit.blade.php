@extends('layouts.app')


@section('body')

    <h1 class="text-center text-primary">Edit Todo</h1>


    <div class="container">
        <div class="row justify-content-center">


            <div class="col-md-6">

                <div class="card">
                    <div class="card-header"><b>Edit</b></div>
                    <div class="card-body">


                    @if(count($errors) > 0)

                            <div class="alert alert-danger">
                                <a href="" class="close" data-dismiss="alert">x</a>


                                <ul>


                                @foreach($errors->all() as $error)

                                        <li>{{ $error }}</li>

                                    @endforeach


                                </ul>
                            </div>


                        @endif





                        {!! Form::model($todo,['method'=>'PATCH', 'action'=>['TodosController@update',$todo->id]]) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Name']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('description', 'Description') !!}
                            {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Description', 'rows'=>4]) !!}
                        </div>

                        <div class="form-group text-center">
                            {!! Form::submit('Update', ['class'=>'btn btn-success']) !!}
                        </div>

                        {!! Form::close() !!}

                    </div>

                </div>







            </div>

        </div>



    </div>


@endsection
