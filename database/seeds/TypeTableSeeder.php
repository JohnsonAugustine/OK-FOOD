<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Type::insert([
            'name'  => 'Seafood',
            'image' => 'seafood.jpg',
            'created_at' => \Carbon\Carbon::now()
        ]);
    }
}
