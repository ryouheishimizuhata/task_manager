<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class medtaskSeeder extends Seeder
{
    public function run()
    {
        DB::table('medtasks')->insert([
                'bigtask_id' => 1,
                'task_name' => 'B',
                'task_progress' => '2回目の会議が終了',
                'task_state' => true,
                'memo' => '特になし',
                'task_eval' => 'good',
                'start_at' => '2023-9-30',
                'end_at' => '2023-10-10',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => new DateTime(),
         ]);
    }
}
