<!DOCTYPE html>  <!– ファイル宣言 –>
    <html>  <!– html開始タグ –>
        <head>  <!– head開始タグ –>
            <title>フォルダ一覧</title> <!– タイトル設置 –>
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head> <!– head終了タグ –>
        <body>
            <h1>{{$bigtask->task_name}}を表示中</h1>
            <table border = "1"> <!- テーブル開始タグ：表の枠や罫線をつけるための処理 ->
                <tr> <!– テーブル開始タグ（列名） –>
                    <th>id</th> 
                    <th>bigtask_id</th>
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
              @foreach($bigtask->medtasks as $medtask)
                <tr>　<!– テーブル開始タグ（要素を追加） –>
                    @if ($medtask->id !== null)
                        <td><a href="/tasks/{{ $medtask->bigtask_id }}/{{ $medtask->id }}">{{$medtask->id }}</a></td>
                    @else
                        <td>{{$medtask->id}}</td>
                    @endif
                    <td>{{$medtask->bigtask_id}}</td>
                    <td>{{$medtask->task_name}}</td>
                    <td>{{$medtask->task_progress}}</td>
                    <td>{{$medtask->task_state}}</td>
                    <td>{{$medtask->memo}}</td>
                    <td>{{$medtask->task_eval}}</td>
                    <td>{{$medtask->start_at}}</td>
                    <td>{{$medtask->end_at}}</td>
                    <td>{{$medtask->created_at}}</td>
                    <td>{{$medtask->updated_at}}</td>
                    <td>{{$medtask->deleted_at}}</td> 
                </tr>　<!– テーブル終了タグ（要素を追加） –>
              @endforeach
            </table> <!- テーブル終了タグ ->
        </body>
    <div class="create"><a href="/tasks/{{$bigtask->id}}/create">新しい中タスクを追加</a></div>
    <a href="/tasks">大タスク一覧に戻る</a>

    </html>