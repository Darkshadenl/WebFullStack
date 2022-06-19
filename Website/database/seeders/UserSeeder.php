<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'code' => '0000',
            'password' => bcrypt('admin'),
            'role_id' => '4',
        ]);
        DB::table('users')->insert([
            'code' => 'admin',
            'password' => bcrypt('admin'),
            'role_id' => '4', // admin
        ]);
        DB::table('users')->insert([
            'code' => '6666',
            'password' => bcrypt('employee'),
            'role_id' => '2', // kassamedeewerker
        ]);
    }
}
