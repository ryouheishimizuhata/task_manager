<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bigtask;
use App\Models\Medtask;
use Auth;


class MedtaskController extends Controller
{
    public function index(Bigtask $bigtask, Medtask $medtask) 
    {
        return view('posts.medtask')->with(['bigtask' => $bigtask]);
    }
    
    public function create(Bigtask $bigtask)
    {
        return view('posts.create_medtask')->with(['bigtask' => $bigtask]);
    }

    public function store(Request $request, Medtask $medtask)
    {
    // フォームから送信されたデータを取得
    $input = $request->input('medtask');
    $input['bigtask_id'] = Auth::id();
    $medtask->fill($input)->save();
    return redirect('/tasks/' . $medtask->bigtask_id);
    }

}