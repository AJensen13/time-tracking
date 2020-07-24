<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'name',
        'active',
        'completed'
    ];

    public function hoursLogged() {
        return (number_format(($this->hasManyThrough('App\TimeLog', 'App\Task')->sum('minutes') / 60), 2));
    }

    public function tasks() {
        return $this->hasMany('App\Task');
    }
}
