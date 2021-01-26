<?php

use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Office::create([
            'id'=>1,
            'phone'=>'0667841529',
            'address1'=>'address 1',
            'address2'=>'address 2',
            'city'=>'city example',
            'state'=>'the officer state',
            'postal_code'=>12,
            'country'=>'country name'
         ]);
        \App\Office::create([
            'id'=>2,
            'phone'=>'0667841529',
            'address1'=>'address 1',
            'address2'=>'address 2',
            'city'=>'city example',
            'state'=>'the officer state',
            'postal_code'=>15,
            'country'=>'country name'
         ]);
    }
}
