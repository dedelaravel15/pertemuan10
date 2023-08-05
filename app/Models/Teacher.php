<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'jenkel',
        'student_id'
    ];

    public function students()
    {
        return $this->hasMany(student::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
