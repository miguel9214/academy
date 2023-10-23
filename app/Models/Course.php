<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
   
    public $table ='course';

    protected $fillable = array('*');

    public function student(){
        return $this->belongsToMany(Student::class,'course_student');
    }

}
