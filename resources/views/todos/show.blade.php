@extends('layouts.app')

@section('body')

<div class="container">
    <h1 class="text-center my-2">   {{ $todo->name }}</h1>
    <div class="row justify-content-center">

        <div class="col-md-6">

              <div class="card">
                  <div class="card-header"><b>Details</b></div>
                  <div class="card-body">
                      {{ $todo->description }}
                  </div>

              </div>

            <a href="/todo/{{ $todo->id }}/edit" class="btn btn-info btn-sm my-2">Edit</a>
            <a href="/todo/{{ $todo->id }}/delete" class="btn btn-danger btn-sm my-2">Delete</a>


        </div>

    </div>
</div>


@endsection
