<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'name' => 'Soep',
        ]);

        DB::table('category')->insert([
            'name' => 'Voorgerechten',
        ]);

        DB::table('category')->insert([
            'name' => 'Bami en Nasi gerechten',
        ]);

        DB::table('category')->insert([
            'name' => 'Combinatie gerechten',
        ]);

        DB::table('category')->insert([
            'name' => 'Mihoen gerechten',
        ]);

        DB::table('category')->insert([
            'name' => 'Chinese bami gerechten',
        ]);

        DB::table('category')->insert([
            'name' => 'Indische gerechten',
        ]);

        DB::table('category')->insert([
            'name' => 'Ei gerechten',
        ]);

        DB::table('category')->insert([
            'name' => 'Groenten gerechten',
        ]);

        DB::table('category')->insert([
            'name' => 'Vlees gerechten',
        ]);

        DB::table('category')->insert([
            'name' => 'Kip gerechten',
        ]);

        DB::table('category')->insert([
            'name' => 'Garnalen gerechten',
        ]);
    }
}
