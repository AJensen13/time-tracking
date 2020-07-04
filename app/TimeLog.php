<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeLog extends Model
{
    protected $fillable = [
        'task_id',
        'minutes'
    ];

    public function task() {
        return $this->belongsTo('App\Task');
    }
}
