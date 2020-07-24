<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'project_id',
        'name',
        'completed'
    ];

    public function hoursLogged() {
        return (number_format(($this->hasMany('App\TimeLog')->sum('minutes') / 60), 2));
    }

    public function logs() {
        return $this->hasMany('App\TimeLog');
    }
}
