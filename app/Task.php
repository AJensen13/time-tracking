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

    public function hoursWorked() {
        return ($this->minutes / 60);
    }

    public function logs() {
        return $this->hasMany('App\TimeLog');
    }
}
