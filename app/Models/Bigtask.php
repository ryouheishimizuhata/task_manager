<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bigtask extends Model
{
    use HasFactory;
    
    public function medtasks()
    {
        return $this->hasMany(Medtask::class);  
    }
    
    protected $fillable = [
    'user_id',
    'task_name',
    'start_at',
    'end_at',
    ];
}