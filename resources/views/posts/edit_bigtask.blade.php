<!DOCTYPE html>
<html>
<head>
    <title>大タスク編集</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
        /* フォーム全体を中央寄せ */
        form {
            text-align: left;
        }

        /* ラベルと入力フィールドをブロック要素として表示 */
        label, input {
            display: block;
            margin-bottom: 10px; /* ラベルと入力フィールドの間にスペースを追加 */
        }

        /* フィールド幅の調整 */
        input[type="text"],
        input[type="number"] {
            width: 100%; /* 入力フィールドの幅を100%に設定 */
        }
        </style>
</head>
<body>
    <h1>大タスク編集</h1>
        <form action="{{ route('update_data', $bigtask->id)}}" id="form_{{ $bigtask->id }}" method="post">
        @csrf
        @method('PUT')

        <div>
            <label for="task_name">task_name:</label>
            <input type="text" name="bigtask[task_name]" value="{{ $bigtask->task_name }}">
        </div>

        <div>
            <label for="task_progress">task_progress:</label>
            <input type="text" name="bigtask[task_progress]" value="{{ $bigtask->task_progress }}">
        </div>

        <div>
            <label for="task_state">task_state:</label>
            <input type="number" name="bigtask[task_state]" value="{{ $bigtask->task_state }}">
        </div>

        <div>
            <label for="task_eval">task_eval:</label>
            <input type="text" name="bigtask[task_eval]" value="{{ $bigtask->task_eval }}">
        </div>

        <div>
            <label for="memo">memo:</label>
            <input type="text" name="bigtask[memo]" value="{{ $bigtask->memo }}">
        </div>

        <input type="submit" value='更新'>
    </form>
</body>
</html>
