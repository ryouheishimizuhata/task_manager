<!DOCTYPE html>  <!– ファイル宣言 全ての大タスクを表示して –>
<html>  <!– html開始タグ –>
<!-- body内だけを表示しています。 -->
    <body>
        <h1 class="title">大タスク作成</h1>
        <div class="content">
            <form action="/tasks/{{ $bigtask->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__title'>
                    <h2>タスク名</h2>
                    <input type='text' name='bigtask[task_name]' value="{{ $bigtask->task_name }}">
                </div>
                <div class='content__body'>
                    <h2>開始日</h2></h2>
                    <input type='date' name='bigtask[start_at]' value="{{ $bigtask->start_at }}">
                    <h2>終了予定日</h2></h2>
                    <input type='date' name='bigtask[end_at]' value="{{ $bigtask->end_at }}">
                </div>
                <input type="submit" value="保存">
            </form>
        </div>
    </body>
<html>