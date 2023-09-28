<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medtask extends Model
{
    use HasFactory;

    public function smalltasks()   
    {
        return $this->hasMany(Smalltask::class);  
    }
    
    protected $fillable = [
    'bigtask_id',
    'task_name',
    'start_at',
    'end_at',
    ];
}
