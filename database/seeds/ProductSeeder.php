<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Product::create([
            'code'=>1,
            'productline_id'=>1,
            'name'=>'product 1',
            'scale'=>2,
            'vendor'=>'some vendor name',
            'pdt_description'=>'some description',
            'qty_in_stock'=>10,
            'buy_price'=>15,
            'msrp'=>'here is msrp',
         ]);
        \App\Product::create([
            'code'=>2,
            'productline_id'=>2,
            'name'=>'product 2',
            'scale'=>5,
            'vendor'=>'some vendor name',
            'pdt_description'=>'some description',
            'qty_in_stock'=>10,
            'buy_price'=>15,
            'msrp'=>'here is msrp',
         ]);
    }
}
