<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bigtask;
use App\Models\Medtask;
use App\Models\Smalltask;
use Auth;


class SmalltaskController extends Controller
{
    public function index(Bigtask $bigtask, Medtask $medtask, Smalltask $smalltask)
    {
        return view('posts.smalltask')->with(['bigtask' => $bigtask, 'medtask' => $medtask]);
    }

    public function create(Bigtask $bigtask, Medtask $medtask)
    {
        return view('posts.create_smalltask')->with(['bigtask' => $bigtask, 'medtask' => $medtask]);
    }

    
    public function store(Request $request, Bigtask $bigtask, Medtask $medtask, Smalltask $smalltask)
    {
        $input = $request['smalltask'];
        $input['medtask_id'] = $medtask->id; 
        $smalltask->fill($input)->save();
        return redirect('/tasks/'.$bigtask->id .'/'. $medtask->id);
    }
    
    public function destroy($id)
        {
            $data = Smalltask::find($id); 
            if ($data) 
            {
                $data->delete();
            }
        }       

    public function edit(Bigtask $bigtask, Medtask $medtask,Smalltask $smalltask)
        {
            return view('posts.edit_smalltask')->with(['bigtask' => $bigtask, 'medtask' => $medtask,'smalltask' => $smalltask]);
        }
        
    public function update(Request $request, $id)
        {
            $smalltask = Smalltask::find($id); 
            if (!$smalltask) {
                abort(404); 
            }
            // フォームから送信されたデータを更新
            $input = $request->all(); // リクエストデータを配列に変換
            $smalltask->fill($input)->save();
            
            return redirect('/tasks'); // 更新後、一覧にリダイレクト
        }
}