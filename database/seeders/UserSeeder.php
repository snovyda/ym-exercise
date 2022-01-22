<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Leonardo',
            'last_name' => 'Da Vinci',
            'email' => 'leo@davinci.com',
            'password' => app('hash')->make('monalisa'),
            'phone' => '+380445559999',
        ]);

        User::factory()
            ->count(9)
            ->create();
    }
}
