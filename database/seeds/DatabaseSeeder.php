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
        // $this->call(UsersTableSeeder::class);

        // First truncate the tables
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Payment::query()->truncate();
        \App\AccountNumber::query()->truncate();
        \App\User::query()->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        // Fill table
        DB::table('users')->insert([
            'name' => 'Aaron Slots',
            'email' => 'aaronslots@gmail.com',
            'password' => Hash::make('secret1'),
        ]);

        DB::table('users')->insert([
        'name' => 'Phi van Nguyen',
        'email' => 'vpnguyen@avans.com',
        'password' => Hash::make('secret2'),
        ]);

        DB::table('users')->insert([
            'name' => 'Rik Meijers',
            'email' => 'rikmei@live.nl',
            'password' => Hash::make('secret3'),
        ]);

        DB::table('account_numbers')->insert([
            'account_number' => 'NL41ABNA4259614754',
            'user_id' => '1',
        ]);

        DB::table('account_numbers')->insert([
            'account_number' => 'NL46ABNA8910219718',
            'user_id' => '1',
        ]);

        DB::table('payments')->insert([
            'payment_name' => 'Phi',
            'description' => 'eten',
            'value' => '3',
            'currency' => '€',
            'date' => '2019-10-02',
            'note' => 'Extra information',
            'imageUrl' => 'https://bit.ly/2BQ1YNm',
            'account_number_id' => '1'
         ]);

    }
}
