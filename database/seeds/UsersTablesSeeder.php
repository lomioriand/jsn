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
            'remember_token' => Str::random(10)
        ]);
    }
}
