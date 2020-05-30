<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lectures extends Model
{
    protected $table ="lectures";
    protected $guarded =[];

    public function notes(){
        return $this->belongsToMany('App\Models\Notes', 'lectures_notes','lecture_id','note_id');
    }

    public function departments(){
        return $this->belongsToMany('App\Models\Department', 'lecture_departments', 'lecture_id', 'department_id');
    }
}
