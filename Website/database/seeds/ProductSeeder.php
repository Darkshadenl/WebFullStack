<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // soep
        DB::table('product')->insert([
            'name' => 'Soep Ling Fa',
            'number' => '1',
            'price' => 3.80,
            'category_id' => 1,
        ]);

        DB::table('product')->insert([
            'name' => 'Kippensoep',
            'number' => '2',
            'price' => 2.90,
            'category_id' => 1,
        ]);

        DB::table('product')->insert([
            'name' => 'Tomatensoep',
            'number' => '3',
            'price' => 2.90,
            'category_id' => 1,
        ]);

        // voorgerechten
        DB::table('product')->insert([
            'name' => 'Loempia Ling Fa',
            'number' => '10',
            'price' => 6.20,
            'category_id' => 2,
        ]);

        DB::table('product')->insert([
            'name' => 'Loempia Compleet',
            'number' => '11',
            'price' => 6.20,
            'category_id' => 2,
        ]);

        DB::table('product')->insert([
            'name' => 'Loempia met Kip',
            'number' => '12',
            'price' => 3.90,
            'category_id' => 2,
        ]);

        // bami nasi gerechten
        DB::table('product')->insert([
            'name' => 'Bami of Nasi Goreng Ling Fa',
            'number' => '30',
            'price' => 13.30,
            'category_id' => 3,
        ]);

        DB::table('product')->insert([
            'name' => 'Bami of Nasi Goreng met ei',
            'number' => '31',
            'price' => 5.00,
            'category_id' => 3,
        ]);

        DB::table('product')->insert([
            'name' => 'Bami of Nasi Goreng Speciaal',
            'number' => '32',
            'price' => 8.50,
            'category_id' => 3,
        ]);

        //combinatie gerechten (test sub products) id 10 +
        DB::table('product')->insert([
            'name' => 'Babi Pangang, Foe Yong Hai en Saté',
            'number' => '40',
            'price' => 15.80,
            'category_id' => 4,
        ]);

        DB::table('product')->insert([
            'name' => 'Babi Pangang, Tjap Tjoy en Saté',
            'number' => '41',
            'price' => 15.80,
            'category_id' => 4,
        ]);

        DB::table('product')->insert([
            'name' => 'Babi Pangang, Koe Loe Yuk en Saté',
            'number' => '42',
            'price' => 15.80,
            'category_id' => 4,
        ]);
    }
}
