<?php

use Illuminate\Database\Seeder;

class Product_SubProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //bami nasi gerechten
        DB::table('product_sub_product')->insert([
            'product_id' => 7,
            'sub_product_id' => 2,
        ]);

        DB::table('product_sub_product')->insert([
            'product_id' => 7,
            'sub_product_id' => 3,
        ]);

        DB::table('product_sub_product')->insert([
            'product_id' => 8,
            'sub_product_id' => 2,
        ]);

        DB::table('product_sub_product')->insert([
            'product_id' => 8,
            'sub_product_id' => 3,
        ]);

        DB::table('product_sub_product')->insert([
            'product_id' => 9,
            'sub_product_id' => 2,
        ]);

        DB::table('product_sub_product')->insert([
            'product_id' => 9,
            'sub_product_id' => 3,
        ]);

        // combinatie gerechten (standaard met witte rijst)
        DB::table('product_sub_product')->insert([
            'product_id' => 10,
            'sub_product_id' => 1,
        ]);
        DB::table('product_sub_product')->insert([
            'product_id' => 10,
            'sub_product_id' => 6,
        ]);
        DB::table('product_sub_product')->insert([
            'product_id' => 10,
            'sub_product_id' => 7,
        ]);
        DB::table('product_sub_product')->insert([
            'product_id' => 10,
            'sub_product_id' => 8,
        ]);
        DB::table('product_sub_product')->insert([
            'product_id' => 10,
            'sub_product_id' => 9,
        ]);

        DB::table('product_sub_product')->insert([
            'product_id' => 11,
            'sub_product_id' => 1,
        ]);
        DB::table('product_sub_product')->insert([
            'product_id' => 11,
            'sub_product_id' => 6,
        ]);
        DB::table('product_sub_product')->insert([
            'product_id' => 11,
            'sub_product_id' => 7,
        ]);
        DB::table('product_sub_product')->insert([
            'product_id' => 11,
            'sub_product_id' => 8,
        ]);
        DB::table('product_sub_product')->insert([
            'product_id' => 11,
            'sub_product_id' => 9,
        ]);

        DB::table('product_sub_product')->insert([
            'product_id' => 12,
            'sub_product_id' => 1,
        ]);
        DB::table('product_sub_product')->insert([
            'product_id' => 12,
            'sub_product_id' => 6,
        ]);
        DB::table('product_sub_product')->insert([
            'product_id' => 12,
            'sub_product_id' => 7,
        ]);
        DB::table('product_sub_product')->insert([
            'product_id' => 12,
            'sub_product_id' => 8,
        ]);
        DB::table('product_sub_product')->insert([
            'product_id' => 12,
            'sub_product_id' => 9,
        ]);

    }
}
