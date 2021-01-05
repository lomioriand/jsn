<?php

use Illuminate\Database\Seeder;
use \App\Bill;

class BillsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bill::create([
            'user_id' => 1,
            'name' => 'A1',
            'type' => 'Bill',
            'status' => 'Paid',
            'amount' => 34.59
        ]);


        Bill::create([
            'user_id' => 1,
            'name' => 'Netflix',
            'type' => 'Subscripton',
            'status' => 'Awaits Payment',
            'amount' => 15
        ]);

        Bill::create([
            'user_id' => 1,
            'name' => 'Energo Pro',
            'type' => 'Subscripton',
            'status' => 'Awaits Payment',
            'amount' => 30
        ]);

        Bill::create([
            'user_id' => 1,
            'name' => 'TUV',
            'type' => 'Semester Fees',
            'status' => 'Awaits Payment',
            'amount' => 400
        ]);
    }
}
