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
        Member::factory(50)->create();
        for($i = 0; $i < 500; $i++) {
            $project = Project::find(rand(1,50));
            $member = Member::find(rand(1,50));

            $member->projects()->save($project);
        }
    }
}
