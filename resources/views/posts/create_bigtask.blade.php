<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>大タスクを新しく作成</title>
    </head>
    <body>
        <h1>Task manager</h1>
        <form action="/tasks" method="POST">
            @csrf
            <div class="task_name">
                <h2>Task Name</h2>
                <input type="text" name="bigtask[task_name]" placeholder="タスク名"/>
            <div class="user_id">
                <h2>user_id</h2>
                <input type="int" name="bigtask[user_id]" placeholder="ユーザーID"/>
            </div>
            <div class="start_at">
                <h2>start_at</h2>
                <input type="date" name="bigtask[start_at]" placeholder="開始日を入力"></textarea>
            </div>
            <div class="end_at">
                <h2>end_at</h2>
                <input type="date" name="bigtask[end_at]" placeholder="終了予定日を入力"></textarea>
            </div>
            <input type="submit" value="追加"/>
        </form>
        <div class="footer">
        <a href="/tasks/">戻る</a>
        </div>
    </body>
</html>