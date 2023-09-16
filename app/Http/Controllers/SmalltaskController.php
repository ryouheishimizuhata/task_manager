<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Smalltask;


class SmalltaskController extends Controller
{
    public function index($id,$medtask_id, Smalltask $smalltask)
    {
        $smalltask = $smalltask->where('medtask_id',$medtask_id)->get();
        return view('posts.smalltask')->with(['smalltask' => $smalltask]);
    }
}