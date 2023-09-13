<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bigtask;


class BigtaskController extends Controller
{
    public function index()
    {
        $bigtasks = Bigtask::all();
        return view('posts.index')->with(['folders' => $bigtasks]);
    }
}
