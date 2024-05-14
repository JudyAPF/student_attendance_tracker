<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $table = 'instructors';

    protected $fillable = ['user_id', 'phoneNo', 'classId', 'classArmId'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function class()
    {
        return $this->belongsTo(CreateClass::class, 'classId', 'id');
    }

    public function block()
    {
        return $this->belongsTo(CreateBlock::class, 'blockId', 'id');
    }
}
