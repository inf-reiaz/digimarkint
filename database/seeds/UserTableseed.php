<?php

use Illuminate\Database\Seeder;

class UserTableseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name' => 'reiaz',
                'email' => 'reiaz@gmail.com',
                'password' => bcrypt('1234')
            ],
            [
                'name' => 'jane',
                'email' => 'jane@mail.com',
                'password' => bcrypt('jane')
            ],
        ]);
    }
}
