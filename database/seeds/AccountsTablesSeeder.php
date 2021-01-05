<?php

use Illuminate\Database\Seeder;
use App\Account;

class AccountsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account::create([
            'user_id' => 1,
            'card_number' => '161152204001',
            'cvc' => '311',
            'valid' => '11/21',
            'currency' => 'BGN',
            'amount' => 500
        ]);

        Account::create([
            'user_id' => 2,
            'card_number' => '161152204002',
            'cvc' => '419',
            'valid' => '03/22',
            'currency' => 'BGN',
            'amount' => 120
        ]);

        Account::create([
            'user_id' => 3,
            'card_number' => '161152204003',
            'cvc' => '801',
            'valid' => '03/21',
            'currency' => 'BGN',
            'amount' => 420
        ]);

    }
}
