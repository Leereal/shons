<?php

use Illuminate\Database\Seeder;

class ModeOfPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\ModeOfPayment::create(['name'=>'Cash']);
        App\ModeOfPayment::create(['name'=>'POS']);
        App\ModeOfPayment::create(['name'=>'Payroll']);
        App\ModeOfPayment::create(['name'=>'Paynet']);
        App\ModeOfPayment::create(['name'=>'Ecocash']);
        App\ModeOfPayment::create(['name'=>'Telecash']);
        App\ModeOfPayment::create(['name'=>'One Money']);
    }
}
