<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index() {
        $aTask = Task::get();
        return view('task.index', compact('aTask'));
    }

    public function show($id) {
        //$task = DB::table('task')->find($id);
        //dd($aTask);
        //return $aTask;
        $task = Task::find($id);
        return view('task.show', compact('task'));
    }

    public function show_2(Task $task) {
        return view('task.show', compact('task'));
    }
}
