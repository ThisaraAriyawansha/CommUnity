<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class PageController extends Controller
{
    public function indextask(){

        $data=Task::all();
        return view('tasks')->with('tasks',$data);
        //return view('tasks');
    }
}
