<?php

use Illuminate\Database\Seeder;

class TaxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Tax::insert([
            'tax' => 5,
            'delivery_cost' => 6000
        ]);
    }
}
