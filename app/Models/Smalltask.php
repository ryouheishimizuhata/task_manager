<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smalltask extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'medtask_id',
    'task_name',
    'start_at',
    'end_at',
    ];
}
