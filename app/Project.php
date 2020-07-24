<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
    ];

    public function hoursLogged() {
        return (number_format(($this->hasManyThrough('App\TimeLog', 'App\Task')->sum('minutes') / 60), 2));
    }

    public function tasks() {
        return $this->hasMany('App\Task');
    }
}
