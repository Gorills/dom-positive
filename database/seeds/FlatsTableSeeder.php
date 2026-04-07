<?php

use Illuminate\Database\Seeder;

class FlatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::delete('delete from flats');
      DB::table('flats')->insert([
        ['rooms' => 2, 'sqm' => 61.75, 'floor' => 2, 'building' => 4, 'section' => 1, 'flatnumber' => 1, 'price' => 7200000, 'sold' => false, 'mortgage' => true],
        ['rooms' => 1, 'sqm' => 41.44, 'floor' => 2, 'building' => 4, 'section' => 1, 'flatnumber' => 2, 'price' => 6800000, 'sold' => false, 'mortgage' => true],
        ['rooms' => 1, 'sqm' => 41.68, 'floor' => 2, 'building' => 4, 'section' => 1, 'flatnumber' => 3, 'price' => 6500000, 'sold' => false, 'mortgage' => true],
        ['rooms' => 2, 'sqm' => 64.94, 'floor' => 2, 'building' => 4, 'section' => 1, 'flatnumber' => 4, 'price' => 7500000, 'sold' => false, 'mortgage' => true],
        
        ['rooms' => 2, 'sqm' => 61.75, 'floor' => 3, 'building' => 4, 'section' => 1, 'flatnumber' => 5, 'price' => 7200000, 'sold' => false, 'mortgage' => true],
        ['rooms' => 1, 'sqm' => 41.44, 'floor' => 3, 'building' => 4, 'section' => 1, 'flatnumber' => 6, 'price' => 6800000, 'sold' => false, 'mortgage' => true],
        ['rooms' => 1, 'sqm' => 41.68, 'floor' => 3, 'building' => 4, 'section' => 1, 'flatnumber' => 7, 'price' => 6500000, 'sold' => false, 'mortgage' => true],
        ['rooms' => 2, 'sqm' => 64.94, 'floor' => 3, 'building' => 4, 'section' => 1, 'flatnumber' => 8, 'price' => 7500000, 'sold' => false, 'mortgage' => true],
        
        ['rooms' => 2, 'sqm' => 61.75, 'floor' => 4, 'building' => 4, 'section' => 1, 'flatnumber' => 9, 'price' => 7200000, 'sold' => false, 'mortgage' => true],
        ['rooms' => 1, 'sqm' => 41.44, 'floor' => 4, 'building' => 4, 'section' => 1, 'flatnumber' => 10, 'price' => 6800000, 'sold' => false, 'mortgage' => true],
        ['rooms' => 1, 'sqm' => 41.68, 'floor' => 4, 'building' => 4, 'section' => 1, 'flatnumber' => 11, 'price' => 6500000, 'sold' => false, 'mortgage' => true],
        ['rooms' => 2, 'sqm' => 64.94, 'floor' => 4, 'building' => 4, 'section' => 1, 'flatnumber' => 12, 'price' => 7500000, 'sold' => false, 'mortgage' => true],
      ]);
    }
}
