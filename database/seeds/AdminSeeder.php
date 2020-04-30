<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin 1',
            'email' => 'admin1@dinkesmelawi.com',
            'password' => Hash::make('melawicovid19'),
        ]);

        DB::table('users')->insert([
            'name' => 'Admin 2',
            'email' => 'admin2@dinkesmelawi.com',
            'password' => Hash::make('melawicovid19'),
        ]);
        DB::table('users')->insert([
            'name' => 'Admin 3',
            'email' => 'admin3@dinkesmelawi.com',
            'password' => Hash::make('melawicovid19'),
        ]);

        DB::table('users')->insert([
            'name' => 'Admin Post',
            'email' => 'post@dinkesmelawi.com',
            'password' => Hash::make('melawicovid19'),
        ]);

        DB::table('users')->insert([
            'name' => 'Admin Perbatasan',
            'email' => 'perbatasan@dinkesmelawi.com',
            'password' => Hash::make('melawicovid19'),
        ]);
    }
}
