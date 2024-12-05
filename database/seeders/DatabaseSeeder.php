<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Company::create([
            
            'token'=>"bgC0IO25RkleYXWeJKZ8",
            'vat'=>"123456789",
            'name'=>"mEGA bUHORO",
            'adress'=>"Buhoro shaxri",
            'brand'=>"Mega Buhoro"

        ]);
        \App\Models\Role::create(
            [
                'name'=>'Admin'            ]
        );
        
        \App\Models\User::create(
            [
                'name'=>'Admin',
                'surename'=>'Feruz',
                'mobile'=>'+998914487747',
                'email'=>'megabuxara@gmail.com',
                'password'=>Hash::make('123456789'),
                'role_id'=>1,
                'company_id'=>1
            ]

        );
    }
}
