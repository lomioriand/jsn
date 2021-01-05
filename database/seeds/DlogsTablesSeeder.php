<?php

use Illuminate\Database\Seeder;
use App\Dlog;
use Carbon\Carbon;

class DlogsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dlog::create([
            'uid' => 1,
            'currency' => 'BGN',
            'amount' => '220',
            'date' => Carbon::now()
        ]);
    }
}
