<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{

    protected $table = 'attendance';

    protected $fillable = [
        'status',
    ];
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(Student::class, 'studentId', 'id');
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'instructorId', 'id');
    }

    public function class()
    {
        return $this->belongsTo(CreateClass::class, 'classId', 'id');
    }

}
