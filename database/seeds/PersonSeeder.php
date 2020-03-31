<?php

use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Person::class, 150)->create()->each(function ($person) {
            $log = factory(App\Log::class)->make();
            $person->logs()->save($log);
        });
    }
}
