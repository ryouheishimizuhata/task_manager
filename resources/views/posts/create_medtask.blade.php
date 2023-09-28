<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>中タスクを新しく作成</title>
    </head>
    <body>
        <h1>Task manager</h1>
        <form action="{{ route('store_data_2',$bigtask->id)}}" method="POST">
            @csrf
            <div class="task_name">
                <h2>Task Name</h2>
                <input type="text" name="medtask[task_name]" placeholder="タスク名"/>
            </div>
            <div class="start_at">
                <h2>start_at</h2>
                <input type="date" name="medtask[start_at]" placeholder="開始日を入力"></textarea>
            </div>
            <div class="end_at">
                <h2>end_at</h2>
                <input type="date" name="medtask[end_at]" placeholder="終了予定日を入力"></textarea>
            </div>
            <input type="submit" value="追加"/>
        </form>
        <div class="footer">
            <a href="/tasks/{{$bigtask->id}}">戻る</a>
        </div>
    </body>
</html>