<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Activity::factory()
            ->count(10)
            ->create()
        ;
    }
}
