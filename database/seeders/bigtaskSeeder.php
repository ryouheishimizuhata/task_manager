<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class bigtaskSeeder extends Seeder
{
    public function run()
    {
        DB::table('bigtasks')->delete();
        
        DB::table('bigtasks')->
        insert(['user_id' => 1,
                'task_name' => 'project A',
                'task_progress' => 'Bが終了',
                'task_state' => true,
                'memo' => '特になし',
                'task_eval' => 'good',
                'start_at' => '2023-04-30',
                'end_at' => '2023-10-31',
                'public' => true,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => new DateTime(),
         ]);
        
        DB::table('bigtasks')-> 
        insert(['user_id' => 1,
                'task_name' => 'project B',
                'task_progress' => 'Aが終了',
                'task_state' => true,
                'memo' => '特になし',
                'task_eval' => 'good',
                'start_at' => '2023-05-30',
                'end_at' => '2023-10-31',
                'public' => true,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => new DateTime(),
         ]);
        
        DB::table('bigtasks')-> 
        insert(['user_id' => 2,
                'task_name' => 'project X',
                'task_progress' => 'Vが終了',
                'task_state' => true,
                'memo' => '特になし',
                'task_eval' => 'good',
                'start_at' => '2023-06-30',
                'end_at' => '2023-10-31',
                'public' => true,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => new DateTime(),
         ]);
    }
}
