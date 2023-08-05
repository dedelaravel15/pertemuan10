<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'teacher_id',
        'student_id'
    ];
    public function teacher()
    {
        return $this->hasOne(Teacher::class);

    }
    public function students()
    {
        return $this->hasMany(student::class);
    }
}
