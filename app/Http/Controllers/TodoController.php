<?php

namespace App\Http\Controllers;
use App\Http\Requests\TodoRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Todo;

class TodoController extends Controller
{




    public function index(Todo $todos){
       // $todos=Todo::where('date',$date)->get();


        return view('todo.index');

    }

    public function check($id){
       $todo=Todo::where('id',$id)->first();
       $todo->update(['checked'=> true]);
       $todo->save();



    }

    public function store(TodoRequest $request){
        $this->create($request);

        return redirect('todo');
    }

    public function create(TodoRequest $request){
        $todo=Auth::user()->todos()->create($request->all());


        return $todo;
    }

    public function show(Todo $todos,$date){

        $todos=Todo::where(['date'=>$date,'user_id'=>Auth::user()->id])->get();


        return view('todo.specific', compact('todos','date'));


    }


}
