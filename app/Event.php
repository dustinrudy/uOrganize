<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title', 'description', 'owner_id'
    ];

    public function tasks() {

        return $this->hasMany(Task::class);
    }

    public function addTask($task) {

        $this->tasks()->create($task);

    }
}
