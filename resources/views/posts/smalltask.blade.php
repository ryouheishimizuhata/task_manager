<!DOCTYPE html>  <!– ファイル宣言 –>
    <html>  <!– html開始タグ –>
        <head>  <!– head開始タグ –>
            <title>フォルダ一覧</title> <!– タイトル設置 –>
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head> <!– head終了タグ –>
    <body>
        <h1>{{$medtask->task_name}}を表示中</h1>
        <table border = "1"> <!- テーブル開始タグ：表の枠や罫線をつけるための処理 ->
            <tr> <!– テーブル開始タグ（列名） –>
                <th>id</th> 
                <th>medtask_id</th>
                <th>task_name</th>
                <th>task_progress</th>
                <th>task_state</th>
                <th>memo</th>
                <th>task_eval</th>
                <th>start_at</th>
                <th>end_at</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>deleted_at</th>
            </tr> <!– テーブル終了タグ（列名） –>
          @foreach($medtask->smalltasks as $smalltask)
            <tr>　<!– テーブル開始タグ（要素を追加） –>
                <td>{{$smalltask->id }}</td>  
                <td>{{$smalltask->medtask_id}}</td>
                <td>{{$smalltask->task_name}}</td>
                <td>{{$smalltask->task_progress}}</td>
                <td>{{$smalltask->task_state}}</td>
                <td>{{$smalltask->memo}}</td>
                <td>{{$smalltask->task_eval}}</td>
                <td>{{$smalltask->start_at}}</td>
                <td>{{$smalltask->end_at}}</td>
                <td>{{$smalltask->created_at}}</td>
                <td>{{$smalltask->updated_at}}</td>
                <td>{{$smalltask->deleted_at}}</td> 
                <td>
                    <form action="{{ route('delete_data_3', ['bigtask' => $bigtask->id, 'medtask'=> $medtask->id ,'id' => $smalltask->id])}}" id="form_{{ $smalltask->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deletesmalltask({{ $smalltask->id }})">削除</button>
                    </form>
                </td> 
                <td>
                    <button type="button"><a href="{{ route('edit_data_3', ['bigtask' => $bigtask->id, 'medtask'=> $medtask->id ,'id' => $smalltask->id]) }}">編集</a></button>
                </td> 
            </tr>　<!– テーブル終了タグ（要素を追加） –>
          @endforeach
        </table> <!- テーブル終了タグ ->
        
        <button type="button"><div class="create"><a href="/tasks/{{$medtask->bigtask_id}}/{{$medtask->id}}/create">新しい小タスクを追加</a></div></button>
    </body>

     <button type="button"><a href="/tasks/{{$medtask->bigtask_id}}">中タスク一覧に戻る</a>