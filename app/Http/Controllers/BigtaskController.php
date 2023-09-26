<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bigtask;
use Auth;


class BigtaskController extends Controller
{
    public function index()
    {
        $bigtask = Bigtask::all();
        return view('posts.bigtask')->with(['bigtask' => $bigtask]);
    }
    
    public function create(Bigtask $bigtask)
    {
        return view('posts.create_bigtask');
    }
    
    public function store(Request $request, Bigtask $bigtask)
    {
        $input = $request['bigtask'];
        $bigtask->fill($input)->save();
        return redirect('/tasks/' . $bigtask->id);
    }
    
    public function edit(Request $request, Bigtask $bigtask)
    {
    }
}
