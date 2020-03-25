<?php

use Illuminate\Database\Seeder;
use App\Constant;

class ConstantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exchange_rate = new Constant([
            'name' => 'exchange_rate',
            'value' => 63.52
        ]);

        $exchange_rate->save();
        
        $panel_potency = new Constant([
            'name' => 'panel_potency',
            'value' => 320
        ]);

        $panel_potency->save();
        
        $trees = new Constant([
            'name' => 'trees',
            'value' => 0.01
        ]);

        $trees->save();
        
        $kg_co2 = new Constant([
            'name' => 'kg_co2',
            'value' => 0.508
        ]);

        $kg_co2->save();
        
        $benefit = new Constant([
            'name' => 'benefit',
            'value' => 2000000
        ]);

        $benefit->save();
        
        $limit_kwp = new Constant([
            'name' => 'limit_kwp',
            'value' => 30000
        ]);

        $limit_kwp->save();
    }
}
