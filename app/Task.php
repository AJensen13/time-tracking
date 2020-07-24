<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'project_id',
        'name',
        'active',
        'completed'
    ];

    public function hoursLogged() {
        return (number_format(($this->hasMany('App\TimeLog')->sum('minutes') / 60), 2));
    }

    public function logs() {
        return $this->hasMany('App\TimeLog');
    }
}
