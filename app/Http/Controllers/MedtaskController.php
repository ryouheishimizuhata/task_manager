<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medtask;


class MedtaskController extends Controller
{
    public function index($bigtask_id, Medtask $medtask) 
    {
        $medtask = $medtask->where('bigtask_id',$bigtask_id)->get();
        return view('posts.medtask')->with(['medtask' => $medtask]);
    }
}