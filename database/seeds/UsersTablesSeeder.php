<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Nutfi Ayhan',
            'email' => 'nutfi911@outlook.com',
            'password' => Hash::make('911'),
            'remember_token' => Str::random(10),
            'address' => 'Varna, 9800, Bulgaria',
            'phone' => '0888530123',
        ]);

        User::create([
            'name' => 'Nutfi Ayhan 2',
            'email' => 'nutfi911@icloud.com',
            'password' => Hash::make('911'),
            'remember_token' => Str::random(10),
            'address' => 'Shumen, 9700, Bulgaria',
            'phone' => '0888530123',
        ]);

        User::create([
            'name' => 'Jordan Dimitrov',
            'email' => 'jdbull@icloud.com',
            'password' => Hash::make('911'),
            'remember_token' => Str::random(10),
            'address' => 'Tutrakan, 7600, Bulgaria',
            'phone' => '0888530123',
        ]);
    }
}
