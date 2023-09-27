<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bigtask;
use App\Models\Medtask;
use App\Models\Smalltask;
use Auth;


class SmalltaskController extends Controller
{
    public function index($id, Medtask $medtask, Smalltask $smalltask)
    {
        return view('posts.smalltask')->with(['medtask' => $medtask]);
    }

    public function create(Bigtask $bigtask, Medtask $medtask)
    {
    // $bigtask と $medtask を使用したコード
    return view('posts.create_smalltask')->with(['medtask' => $medtask]);
    }
    
    public function store(Request $request, Medtask $medtask, Smalltask $smalltask)
    {
        $input = $request['smalltask'];
        $input['medtask_id'] = Auth::id(); 
        $smalltask->fill($input)->save();
        return redirect('/tasks/' .$medtask->bigtask_id. $smalltask->medtask_id);
    }
}