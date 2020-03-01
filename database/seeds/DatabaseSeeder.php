<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(BranchSeeder::class);
        // $this->call(RoleSeeder::class);
        $this->call(ModeOfPaymentSeeder::class);
        $this->call(BankSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(LoanCategorySeeder::class);
    }
}
