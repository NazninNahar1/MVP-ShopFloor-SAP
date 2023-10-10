<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StanstillGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                'name' => 'standstill group 1',
                'goal_line%' => '30.50%',
                'active' => true,
                'oee' => false,
                'nutzung' => true,
            ],
            [
                'name' => 'standstill group 2',
                'goal_line%' => '45.75%',
                'active' => false,
                'oee' => true,
                'nutzung' => true,
            ],

        ];


        DB::table('stanstill_groups')->insert($data);
    }
}
