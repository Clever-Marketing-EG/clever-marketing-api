<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Field;
use App\Models\Member;
use App\Models\Process;
use App\Models\Project;
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Field::factory()
            ->has(
                Project::factory()
                    ->has(Process::factory()->count(5))
                    ->count(5)
            )
            ->has(Client::factory()
                ->count(5)
            )
            ->count(10)
            ->create();
    }
}
