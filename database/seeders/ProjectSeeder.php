<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Process;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::factory()
            ->has(Process::factory()->count(5))
            ->count(100)
            ->create();
    }
}
