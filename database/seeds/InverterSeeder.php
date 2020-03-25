<?php

use Illuminate\Database\Seeder;
use App\Inverter;

class InverterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i1 = new Inverter([
            'name' => 'ECO 27 90',
            'min_panels' => 80,
            'max_panels' => 90
        ]);

        $i1->save();

        $i2 = new Inverter([
            'name' => 'INVERSORES SYMO 20',
            'min_panels' => 55,
            'max_panels' => 65
        ]);

        $i2->save();

        $i3 = new Inverter([
            'name' => 'INVERSORES SYMO 10',
            'min_panels' => 40,
            'max_panels' => 50
        ]);

        $i3->save();        
    }
}
