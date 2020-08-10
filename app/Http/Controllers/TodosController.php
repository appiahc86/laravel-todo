<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTodoRequest;
use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TodosController extends Controller
{

    public function index(){

        $todos = Todo::paginate(5);

        return view('todos.index')->with('todos',$todos);
    }

    public  function show($id){

        $todo = Todo::find($id);

        return view('todos.show')->with('todo', $todo);

    }

    public function create(){


        return view('todos.create');

    }

    public function store(CreateTodoRequest $request){

      $input = $request->all();
      $input['completed'] = false;

      Todo::create($input);

      Session::flash('created', 'Todo Created Successfully');

      return redirect(route('home'));

    }


    public function edit($id){

        $todo = Todo::find($id);

        return view('todos.edit')->with('todo', $todo);

    }

    public function update(CreateTodoRequest $request, $id){

        $todo = Todo::find($id);
        $input = $request->all();

      $todo->update($input);


      Session::flash('updated', 'Record Updated Successfully');
        return redirect(route('home'));

    }


    public function delete($id){

        $todo = Todo::findOrFail($id);
        $todo->delete();

        Session::flash('delete-todo', 'Record Deleted Successfully');
        return redirect(route('home'));

    }

    public function complete($id){

        $todo = Todo::find($id);
        $todo->update(['completed'=>true]);

        return redirect(route('home'));
    }



}
