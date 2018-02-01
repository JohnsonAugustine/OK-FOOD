<?php

use Illuminate\Database\Seeder;

class MerchantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Merchant::insert([
            'name'  => 'Merchant One',
            'email' => 'merchant@example.com',
            'password' => bcrypt('merchant'),
            'created_at' => \Carbon\Carbon::now()
        ]);
    }
}
