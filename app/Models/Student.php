<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public $table ='student';

    protected $fillable = array('*');

    public function course(){
        return $this->belongsToMany(Course::class,'course_student');
    }

}
