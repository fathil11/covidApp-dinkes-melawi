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
            'password' => Hash::make('covid191'),
            ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Tanah Pinoh Barat',
            'email' => 'puskemas02@dinkesmelawi.com',
            'password' => Hash::make('covid192'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Tanah Pinoh',
            'email' => 'puskemas03@dinkesmelawi.com',
            'password' => Hash::make('covid193'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Sayan',
            'email' => 'puskemas04@dinkesmelawi.com',
            'password' => Hash::make('covid194'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Belimbing Hulu',
            'email' => 'puskemas05@dinkesmelawi.com',
            'password' => Hash::make('covid195'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Belimbing',
            'email' => 'puskemas06@dinkesmelawi.com',
            'password' => Hash::make('covid196'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Pinoh Selatan',
            'email' => 'puskemas07@dinkesmelawi.com',
            'password' => Hash::make('covid197'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Nanga Pinoh',
            'email' => 'puskemas08@dinkesmelawi.com',
            'password' => Hash::make('covid198'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Pinoh Utara',
            'email' => 'puskemas09@dinkesmelawi.com',
            'password' => Hash::make('covid199'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Ella Hilir',
            'email' => 'puskemas10@dinkesmelawi.com',
            'password' => Hash::make('covid1910'),
        ]);

        DB::table('users')->insert([
            'name' => 'Puskesmas Menukung',
            'email' => 'puskemas11@dinkesmelawi.com',
            'password' => Hash::make('covid1911'),
        ]);
    }
}
