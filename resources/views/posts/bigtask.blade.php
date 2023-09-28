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
                        <button type="button"><a href="/tasks/{{ $bigtask->id }}">{{$bigtask->id }}</a></button>
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
                    <td>
                        <form action="{{ route('delete_data', $bigtask->id)}}" id="form_{{ $bigtask->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="deletebigtask({{ $bigtask->id }})">削除</button>
                        </form>
                    </td> 
                    <td>
                        <button type="button"><a href="/tasks/{{ $bigtask->id }}/edit">編集</a></button>
                    </td> 
                </tr>　<!– テーブル終了タグ（要素を追加） –>
              @endforeach
            </table> <!- テーブル終了タグ ->
    
    
        <button type="button"><div class="create"><a href="/tasks/create">新しい大タスクを追加</a></div></button>
    
        <button type="button"><a href="/dashboard">マイページに戻る</a></div></button>
     
    </body>
    
        <script>
            function deletebigtask(id) 
            {
                'use strict'
    
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) 
                {
                    document.getElementById(`form_${id}`).submit();
                }
            }
            
        </script>

    </html>