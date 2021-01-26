<?php

use Illuminate\Database\Seeder;

class ProductLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\ProductLine::create([
          'id'=>1,
          'disc_in_text'=>'some product description',
          'disc_in_html'=>'<h6>some product description</h6>',
          'image'=>'product-image.jpg'
       ]);
       \App\ProductLine::create([
          'id'=>2,
          'disc_in_text'=>'some product description',
          'disc_in_html'=>'<h6>some product description</h6>',
          'image'=>'product-image.jpg'
       ]);
       \App\ProductLine::create([
          'id'=>3,
          'disc_in_text'=>'some product description',
          'disc_in_html'=>'<h6>some product description</h6>',
          'image'=>'product-image.jpg'
       ]);
    }
}
