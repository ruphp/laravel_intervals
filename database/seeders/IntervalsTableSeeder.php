<?php

namespace Database\Seeders;

use App\Models\Intervals;
use Exception;
use Illuminate\Database\Seeder;

class IntervalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 0; $i < 10000; ++$i) {

            $start = mt_rand(0, 500);
            $data['start'] = $start;
            $end = mt_rand($start, 1000);
            $data['end'] = ($end > $start)?$end:null;


            try {
                Intervals::create($data);
            }catch (Exception $exception){
                --$i;
            }
        }
    }
}
