<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $users =User::all();
        $users->each(function($user){
            
        \App\Models\Project::factory(10)
        //associating the projects with the user
        ->for($user)
        //populating the tracks table with 5 tracks for each project
        ->hasTracks(5)
        ->create();
        }); 
    }
}
