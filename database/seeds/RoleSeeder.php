<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Role::create(['name'=>'Loans Officer']);
        App\Role::create(['name'=>'Loans Assessor']);
        App\Role::create(['name'=>'Debt Controller']);
        App\Role::create(['name'=>'Chief Debt Controller']);
        App\Role::create(['name'=>'Administrator']);
        App\Role::create(['name'=>'Admin Loans Officer']);
        App\Role::create(['name'=>'Branch Monitor']);
        App\Role::create(['name'=>'Branch Head']);
        App\Role::create(['name'=>'Managing Director']);
        App\Role::create(['name'=>'Non-Executive Director']);
        App\Role::create(['name'=>'Operations Manager']);
        App\Role::create(['name'=>'System Admin']); 
    }
}
