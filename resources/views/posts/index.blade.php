<!DOCTYPE html>  <!– ファイル宣言 –>
    <html>  <!– html開始タグ –>
        <head>  <!– head開始タグ –>
            <title>フォルダ一覧</title> <!– タイトル設置 –>
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head> <!– head終了タグ –>
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
      @foreach($folders as $folder)
        <tr>　<!– テーブル開始タグ（要素を追加） –>
            <td>{{$folder->id }}</td>  
            <td>{{$folder->user_id}}</td>
            <td>{{$folder->task_name}}</td>
            <td>{{$folder->task_progress}}</td>
            <td>{{$folder->task_state}}</td>
            <td>{{$folder->memo}}</td>
            <td>{{$folder->task_eval}}</td>
            <td>{{$folder->start_at}}</td>
            <td>{{$folder->end_at}}</td>
            <td>{{$folder->created_at}}</td>
            <td>{{$folder->updated_at}}</td>
            <td>{{$folder->deleted_at}}</td> 
        </tr>　<!– テーブル終了タグ（要素を追加） –>
      @endforeach
    </table> <!- テーブル終了タグ ->

    </html>