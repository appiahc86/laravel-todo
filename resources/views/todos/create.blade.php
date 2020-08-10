@extends('layouts.app')


@section('body')

    <h1 class="text-center text-primary">Create Todo</h1>


    <div class="container">
        <div class="row justify-content-center">


        <div class="col-md-6">

            <div class="card">
                <div class="card-header"><b>Create New Todo</b></div>
                    <div class="card-body">

                        @if(count($errors) > 0)

                            <div class="alert alert-danger alert-sm">
                                <a href="" class="close" data-dismiss="alert">x</a>


                            <ul>

                                @foreach($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach


                            </ul>
                         </div>


                         @endif


                            @if(Session::has('created'))
                                <div class="alert alert-success">
                                    <a href="" class="close" data-dismiss="alert">x</a>
                                    {{ session('created') }}
                                </div>
                            @endif



                        {!! Form::open(['method'=>'POST', 'action'=>'TodosController@store']) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Name']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('description', 'Description') !!}
                            {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Description', 'rows'=>4]) !!}
                        </div>

                        <div class="form-group text-center">
                            {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
                        </div>

                        {!! Form::close() !!}

                    </div>

            </div>







        </div>

                    </div>



            </div>


@endsection
