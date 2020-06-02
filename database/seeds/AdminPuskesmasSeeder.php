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
            'email' => 'puskesmas01@dinkesmelawi.com',
            'password' => Hash::make('covid191'),
            ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Tanah Pinoh Barat',
            'email' => 'puskesmas02@dinkesmelawi.com',
            'password' => Hash::make('covid192'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Tanah Pinoh',
            'email' => 'puskesmas03@dinkesmelawi.com',
            'password' => Hash::make('covid193'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Sayan',
            'email' => 'puskesmas04@dinkesmelawi.com',
            'password' => Hash::make('covid194'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Belimbing Hulu',
            'email' => 'puskesmas05@dinkesmelawi.com',
            'password' => Hash::make('covid195'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Belimbing',
            'email' => 'puskesmas06@dinkesmelawi.com',
            'password' => Hash::make('covid196'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Pinoh Selatan',
            'email' => 'puskesmas07@dinkesmelawi.com',
            'password' => Hash::make('covid197'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Nanga Pinoh',
            'email' => 'puskesmas08@dinkesmelawi.com',
            'password' => Hash::make('covid198'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Pinoh Utara',
            'email' => 'puskesmas09@dinkesmelawi.com',
            'password' => Hash::make('covid199'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Ella Hilir',
            'email' => 'puskesmas10@dinkesmelawi.com',
            'password' => Hash::make('covid1910'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Menukung',
            'email' => 'puskesmas11@dinkesmelawi.com',
            'password' => Hash::make('covid1911'),
        ]);
    }
}
