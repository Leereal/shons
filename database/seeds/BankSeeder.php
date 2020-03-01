<?php

use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Bank::create(['name'=>'Barclays','account_number'=>'6857847746473','branch_code'=>'34334']);
        App\Bank::create(['name'=>'CABS','account_number'=>'454332323444','branch_code'=>'22332']);
        App\Bank::create(['name'=>'CBZ','account_number'=>'8787667676767','branch_code'=>'334332']);
        App\Bank::create(['name'=>'POSB','account_number'=>'3123232322','branch_code'=>'2332']);
        App\Bank::create(['name'=>'Nedbank','account_number'=>'22121322323324','branch_code'=>'98988']);
    }
}
