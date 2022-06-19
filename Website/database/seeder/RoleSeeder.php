<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            'name' => 'Klant',
        ]);

        DB::table('role')->insert([
            'name' => 'Kassamedewerker',
        ]);

        DB::table('role')->insert([
            'name' => 'Serveerster',
        ]);

        DB::table('role')->insert([
            'name' => 'Admin',
        ]);
    }
}
