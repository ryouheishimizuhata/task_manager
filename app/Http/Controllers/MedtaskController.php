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

    public function store(Request $request, Bigtask $bigtask, Medtask $medtask)
    {
    // フォームから送信されたデータを取得
    $input = $request->input('medtask');
    $input['bigtask_id'] = $bigtask->id;
    $medtask->fill($input)->save();
    return redirect('/tasks/' . $bigtask->id);
    }
    
    public function destroy($id)
        {
            $data = Medtask::find($id); 
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
            $medtask = Medtask::find($id); 
            return view('posts.edit_medtask')->with(['medtask' => $medtask]);
        }
        
    public function update(Request $request, $id)
        {
            $medtask = Medtask::find($id); 
            if (!$medtask) {
                abort(404); 
            }
            // フォームから送信されたデータを更新
            $input = $request->all(); // リクエストデータを配列に変換
            $medtask->fill($input)->save();
            
            return redirect('/tasks')->with('success', '大タスクが更新されました'); // 更新後、一覧にリダイレクト
        }

}