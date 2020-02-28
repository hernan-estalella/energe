<?php

use Illuminate\Database\Seeder;
use App\Zone;
use App\Radiation;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Zone::class, 3)->create()->each(function ($zone) {
            factory(Radiation::class, 1)->create(['zone_id'=>$zone->id]);
        });
    }
}
