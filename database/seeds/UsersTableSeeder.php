<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */    
    public function run()
    {  
        $lee =App\User::create([
            'name'=>'Liberty Mutabvuri',
            'email'=>'leereal08@gmail.com',
            'password'=>bcrypt('mutabvuri$8')           
        ]);   
        factory(App\User::class, 50)->create();
    }
}
