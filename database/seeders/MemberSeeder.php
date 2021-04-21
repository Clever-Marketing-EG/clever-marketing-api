<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\Process;
use App\Models\Project;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::factory()
            ->has(
                Project::factory()
                    ->has(Process::factory()->count(5))
                    ->count(5)
            )
            ->count(10)
            ->create();
    }
}
