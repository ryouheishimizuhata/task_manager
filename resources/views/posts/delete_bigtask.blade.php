<!DOCTYPE html>  <!– ファイル宣言 –>
    <html>  <!– html開始タグ –>
        <head>  <!– head開始タグ –>
            <title>フォルダ一覧</title> <!– タイトル設置 –>
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head> <!– head終了タグ –>
    <body>
        <h1>大タスク一覧</h1> 
            <table border = "1"> <!- テーブル開始タグ：表の枠や罫線をつけるための処理 ->
                <tr> <!– テーブル開始タグ（列名） –>
                    <th>id</th> 
                    <th>user_id</th>
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
              @foreach($bigtask as $bigtask)
                <tr>　<!– テーブル開始タグ（要素を追加） –>
                    <td>
                        <a href="/tasks/{{ $bigtask->id }}">{{$bigtask->id }}</a>
                    </td>  
                    <td>{{$bigtask->user_id}}</td>
                    <td>{{$bigtask->task_name}}</td>
                    <td>{{$bigtask->task_progress}}</td>
                    <td>{{$bigtask->task_state}}</td>
                    <td>{{$bigtask->memo}}</td>
                    <td>{{$bigtask->task_eval}}</td>
                    <td>{{$bigtask->start_at}}</td>
                    <td>{{$bigtask->end_at}}</td>
                    <td>{{$bigtask->created_at}}</td>
                    <td>{{$bigtask->updated_at}}</td>
                    <td>{{$bigtask->deleted_at}}</td> 
                </tr>　<!– テーブル終了タグ（要素を追加） –>
              @endforeach
            </table> <!- テーブル終了タグ ->
    </body>
    
     <a href="/dashboard">マイページに戻る</a>

    </html>