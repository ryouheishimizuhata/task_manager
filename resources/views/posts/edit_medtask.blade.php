<!DOCTYPE html>
<html>
<head>
    <title>中タスク編集</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
        /* フォーム全体を中央寄せ */
        form {
            text-align: left;
        }

        /* ラベルと入力フィールドの間にスペースを追加 */
        label {
            margin-right: 10px; /* ラベルと入力フィールドの間のスペースを調整 */
            display: inline-block; /* インラインブロック要素として表示 */
            width: 100px; /* ラベルの幅を調整（必要に応じて変更） */
        }

        input[type="text"],
        input[type="number"] {
            width: 200px; /* 入力フィールドの幅を調整（必要に応じて変更） */
        }
        </style>
</head>
<body>
    <h1>中タスク編集</h1>
    <form action="{{ route('update_data_2',  ['bigtask' => $medtask->bigtask_id, 'id' => $medtask->id]) }}" method="POST">
        @csrf
        @method('PUT') <!-- LaravelのRESTfulアクションで使用 -->

        <div>
            <label for="task_name">タスク名:</label>
            <input type="text" name="medtask[task_name]" value="{{ $medtask->task_name }}">
        </div>

        <div>
            <label for="task_progress">進捗:</label>
            <input type="text" name="medtask[task_progress]" value="{{ $medtask->task_progress }}">
        </div>

        <div>
            <label for="task_state">ステータス:</label>
            <input type="text" name="medtask[task_state]" value="{{ $medtask->task_state }}">
        </div>

        <div>
            <label for="task_eval">評価:</label>
            <input type="number" name="medtask[task_eval]" value="{{ $medtask->task_eval }}">
        </div>

        <div>
            <label for="memo">メモ:</label>
            <input type="text" name="medtask[memo]" value="{{ $medtask->memo }}">
        </div>

        <!-- 他のフィールドも同様に -->

        <button type="submit">更新</button>
    </form>
</body>
</html>
