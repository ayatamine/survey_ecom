<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Employee::create([
            'id'=>2,
            'office_code'=>1,
            'reports_to'=>1,
            'lastname'=>'lastname',
            'firstname'=>'firstname',
            'extension'=>'extension',
            'email'=>'email@email.com',
            'job_title'=>'comptable',
         ]);
    }
}
