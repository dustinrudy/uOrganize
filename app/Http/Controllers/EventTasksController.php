<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Event;

class EventTasksController extends Controller
{


    public function store(Event $event) {

        $attributes = request()->validate(['description' => 'required']);

        $event->addTask($attributes);

        return back();
    }


    public function update(Task $task) {

        if(request()->has('completed')) {
            $task->complete();

        } else {
            $task->incomplete();
        }


        return back();
    }

}
