<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bigtask;


class BigtaskController extends Controller
{
    public function index()
    {
        $bigtask = Bigtask::all();
        return view('posts.bigtask')->with(['bigtask' => $bigtask]);
    }
}
