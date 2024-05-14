<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateBlock extends Model
{

    protected $table = 'blocks';

    protected $fillable = ['classId', 'blockName'];

    public function class()
    {
        return $this->belongsTo(CreateClass::class, 'classId', 'id');
    }

    use HasFactory;
}
