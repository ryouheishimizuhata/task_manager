<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(bigtaskSeeder::class);
        $this->call(medtaskSeeder::class);
        $this->call(smalltaskSeeder::class);
    }
}
