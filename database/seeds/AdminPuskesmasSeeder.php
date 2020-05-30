<?php

use Illuminate\Database\Seeder;

class AdminPuskesmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin Puskesmas
        DB::table('users')->insert([
            'name' => 'Puskesmas Sokan',
            'email' => 'puskemas01@dinkesmelawi.com',
            'password' => Hash::make('covid9786'),
            ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Tanah Pinoh Barat',
            'email' => 'puskemas02@dinkesmelawi.com',
            'password' => Hash::make('covid6745'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Tanah Pinoh',
            'email' => 'puskemas03@dinkesmelawi.com',
            'password' => Hash::make('covid2543'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Sayan',
            'email' => 'puskemas04@dinkesmelawi.com',
            'password' => Hash::make('covid7589'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Belimbing Hulu',
            'email' => 'puskemas05@dinkesmelawi.com',
            'password' => Hash::make('covid0897'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Belimbing',
            'email' => 'puskemas06@dinkesmelawi.com',
            'password' => Hash::make('covid3890'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Pinoh Selatan',
            'email' => 'puskemas07@dinkesmelawi.com',
            'password' => Hash::make('covid1676'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Nanga Pinoh',
            'email' => 'puskemas08@dinkesmelawi.com',
            'password' => Hash::make('covid5367'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Pinoh Utara',
            'email' => 'puskemas09@dinkesmelawi.com',
            'password' => Hash::make('covid7654'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Ella Hilir',
            'email' => 'puskemas10@dinkesmelawi.com',
            'password' => Hash::make('covid3367'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Menukung',
            'email' => 'puskemas11@dinkesmelawi.com',
            'password' => Hash::make('covid8976'),
        ]);
    }
}
