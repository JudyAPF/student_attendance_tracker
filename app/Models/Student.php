<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $table = 'students';

    protected $fillable = [
        'firstName',
        'lastName',
        'admissionNum',
        'classId',
        'blockId',
    ];

    use HasFactory;

    public function class()
    {
        return $this->belongsTo(CreateClass::class, 'classId', 'id');
    }

    public function block()
    {
        return $this->belongsTo(CreateBlock::class, 'blockId', 'id');
    }
}
