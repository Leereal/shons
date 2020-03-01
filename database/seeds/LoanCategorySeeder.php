<?php

use Illuminate\Database\Seeder;

class LoanCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\LoanCategory::create(['name'=>'Short Term']);
        App\LoanCategory::create(['name'=>'Medium Term']);
        App\LoanCategory::create(['name'=>'Long Term']);
        App\LoanCategory::create(['name'=>'Mortgage']);
    }
}
