<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()

    {

        $this->call([
            IntervalsTableSeeder::class,
        ]);
        $this->command->info('Intervals table seeded!');

    }

}
