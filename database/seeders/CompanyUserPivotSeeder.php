<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyUserPivotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_user')->insert([
            'user_id' => 1,
            'company_id' => 1,
        ]);

        DB::table('company_user')->insert([
            'user_id' => 1,
            'company_id' => 2,
        ]);

        DB::table('company_user')->insert([
            'user_id' => 1,
            'company_id' => 3,
        ]);

        DB::table('company_user')->insert([
            'user_id' => 1,
            'company_id' => 4,
        ]);

        DB::table('company_user')->insert([
            'user_id' => 2,
            'company_id' => 5,
        ]);

        DB::table('company_user')->insert([
            'user_id' => 2,
            'company_id' => 6,
        ]);

        DB::table('company_user')->insert([
            'user_id' => 2,
            'company_id' => 7,
        ]);

        DB::table('company_user')->insert([
            'user_id' => 2,
            'company_id' => 8,
        ]);

        DB::table('company_user')->insert([
            'user_id' => 3,
            'company_id' => 1,
        ]);

        DB::table('company_user')->insert([
            'user_id' => 3,
            'company_id' => 8,
        ]);
    }
}
