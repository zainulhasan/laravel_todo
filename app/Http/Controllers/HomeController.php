<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Todo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos=Todo::orderBy('id', 'DESC')->get();
        return view('home')->with(['todos' =>$todos]);
    }



    public function delete_todo($id)
    {
        $todo=Todo::find($id);
        $todo->delete();

        Session::flash('message', 'Todo has Been Deleted');
        return redirect()->route('home');
    }



    public function new_todo()
    {

        return view('new');
    }


    public function create_todo(Request $request)
    {
        $todo=$request->get('todo');
        Todo::create([

            'title' =>$todo,
            'user_id' => Auth::user()->id
        ]);



        Session::flash('message', 'Todo has Been Created');
        return redirect()->route('home');


    }
    
    
    
    
    public function getUser()
    {
        return Auth::user()->id;
    }
}
