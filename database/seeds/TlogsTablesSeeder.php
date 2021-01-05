<?php

use Illuminate\Database\Seeder;
use App\Tlog;
use Carbon\Carbon;

class TlogsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tlog::create([
            'uid' => 1,
            'type' => 'OUT',
            'amount' => 21.20,
            'date' => Carbon::now(),
            'bene' => 'AliExpress'
        ]);
    }
}
