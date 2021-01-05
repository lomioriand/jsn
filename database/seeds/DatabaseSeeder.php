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
        $this->call('UsersTablesSeeder');
        $this->call('AccountsTablesSeeder');
        $this->call('BillsTablesSeeder');
        $this->call('DlogsTablesSeeder');
        $this->call('TlogsTablesSeeder');
    }
}
