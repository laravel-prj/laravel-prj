<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $data = [
            [
                'name' => "admin2",
                'email' => 'admin2@gmail.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => "admin1",
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => "admin",
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
            ],
        ];
        DB::table('users')->insert($data);
    }
}
