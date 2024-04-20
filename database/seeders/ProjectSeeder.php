<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->truncate();
        //populating the projects table with 10 projects
        DB::table('tracks')->truncate();
        \App\Models\Project::factory(10)
        //populating the tracks table with 5 tracks for each project
        ->hasTracks(5)
        ->create();
    }
}
