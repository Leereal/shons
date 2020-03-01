<?php

use Illuminate\Database\Seeder;
Use App\Branch;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */    
    public function run()
    {  
        //Seeding Roles
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
        $operations = App\Role::create(['name'=>'Operations Manager']);
        $sysadmin = App\Role::create(['name'=>'System Admin']);

        //Seeding Branches
        $gweru = Branch::create([
        	'name'=>'Head Office',
        	'email'=>'enquiries@zimgeneral.co.zw',
            'telephone'=>'+263 54 222 3416',
            'cellphone'=>'+263 54 422 4546',
        	'address'=>'Suite No 5 , 1st Floor Moonlight Building 5th Street,Gweru , Zimbabwe',
        ]);
        $mutare = Branch::create([
        	'name'=>'Mutare',
        	'email'=>'enquiries@zimgeneral.co.zw',
            'telephone'=>'024 2565656',
            'cellphone'=>'+263 54 422 4546',
        	'address'=>'12 Kaguvi Street',
        ]);
        $masvingo = Branch::create([
        	'name'=>'Masvingo',
        	'email'=>'enquiries@zimgeneral.co.zw',
            'telephone'=>'0775 166 683',
            'cellphone'=>'+263 54 422 4546',
        	'address'=>'Cnr. Hughes Street & Simon Mazorodze , Zimre Centre,4th Floor Left Wing ',
        ]);
        $harare = Branch::create([
        	'name'=>'Harare',
        	'email'=>'enquiries@zimgeneral.co.zw',
            'telephone'=>'0242759981',
            'cellphone'=>'+263 54 422 4546',
        	'address'=>'7th Floor , West Wing, Karigamombe Centre Union Avenue ',
        ]);
        $bulawayo = Branch::create([
        	'name'=>'Bulawayo',
        	'email'=>'enquiries@zimgeneral.co.zw',
            'telephone'=>'0773 086 971',
            'cellphone'=>'+263 54 422 4546',
        	'address'=>'3rd Floor Masiya Building, Office 8 & 9 Corner Fort Street & 9th Avenue',
        ]);

        //Seeding Users
        $lee =App\User::create([
            'name'=>'Liberty Mutabvuri',
            'email'=>'leereal08@gmail.com',
            'password'=>bcrypt('mutabvuri$8')           
        ]);
        $jael =App\User::create([
            'name'=>'Jael Mutabvuri',
            'email'=>'jaeljayleen@gmail.com',
            'password'=>bcrypt('mutabvuri$8')           
        ]);

        //Attaching Roles to user
        $lee->roles()->attach($sysadmin);
        $jael->roles()->attach($operations);
        
        //Attaching Branches to user
        $lee->branches()->attach($gweru);
        $jael->branches()->attach($harare);
        factory(App\User::class, 50)->create();
    }
}
