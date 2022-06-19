<?php

use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invoice')->insert([
            'vat' => 9,
            'created_at' => "2020-05-13 14:11:54",
            'updated_at' => "2020-05-13 14:11:54",
            'user_id' => 1
        ]);
    }
}
