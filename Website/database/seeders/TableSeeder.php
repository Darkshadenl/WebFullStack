<?php

use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table')->insert([
          'name' => 4,
        ]);
        DB::table('table')->insert([
          'name' => 5,
        ]);
        DB::table('table')->insert([
          'name' => 6,
        ]);
    }
}
