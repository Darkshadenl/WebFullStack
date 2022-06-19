<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoiceProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invoice_product')->insert([
            'name' => "Babi Pangang, Koe Loe Yuk en Saté",
            'price' => 15.80,
            'amount' => 1,
            'invoice_id' => 1,
            'category_id' => 4
        ]);

        DB::table('invoice_product')->insert([
            'name' => "	Bami of Nasi Goreng Speciaal",
            'price' => 8.5,
            'amount' => 2,
            'invoice_id' => 1,
            'category_id' => 3
        ]);
    }
}
