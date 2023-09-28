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

    public function destroy($id)
        {
            $data = Bigtask::find($id); 
            if ($data) {
                $data->delete();
                return redirect('/tasks')->with('success', '大タスクが削除されました');
            } else {
                // データが見つからない場合の処理（例: 404エラーなど）
                return redirect('/tasks')->with('error', '大タスクが見つかりませんでした');
            }
        }


    public function edit(Request $request, $id)
        {
            $bigtask = Bigtask::find($id); 
             return view('posts.edit_bigtask')->with(['bigtask' => $bigtask]);
        }
        
    public function update(Request $request, $id)
        {
            $bigtask = Bigtask::find($id); 
            $input = $request->all(); 
            $bigtask->fill($input)->save();
            
            return redirect('/tasks'); // 更新後、一覧にリダイレクト
        }

}
