<?php

use Illuminate\Database\Seeder;

class SubProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subproduct')->insert([
            'name' => 'Witte rijst',
            'price' => 0.0,
        ]);
        DB::table('subproduct')->insert([
            'name' => 'Bami',
            'price' => 0.0,
        ]);
        DB::table('subproduct')->insert([
            'name' => 'Nasi',
            'price' => 0.0,
        ]);
        DB::table('subproduct')->insert([
            'name' => 'Mihoen',
            'price' => 0.0,
        ]);
        DB::table('subproduct')->insert([
            'name' => 'Chinese Bami',
            'price' => 0.0,
        ]);

        // vervanging ipv rijst id 6+
        DB::table('subproduct')->insert([
            'name' => 'Bami ipv rijst',
            'price' => 0.9,
        ]);
        DB::table('subproduct')->insert([
            'name' => 'Nasi ipv rijst',
            'price' => 0.9,
        ]);
        DB::table('subproduct')->insert([
            'name' => 'Mihoen ipv rijst',
            'price' => 2.5,
        ]);
        DB::table('subproduct')->insert([
            'name' => 'Chinese Bami ipv rijst',
            'price' => 2.5,
        ]);
    }
}
