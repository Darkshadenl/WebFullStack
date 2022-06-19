<?php

use Illuminate\Database\Seeder;

class OldDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $sBase = "database/sql/";
      $aSqlFiles = [
       'category.sql',
       'product.sql',
       'subproduct.sql',
       'product_subproduct.sql',
       'invoice.sql',
       'invoice_product.sql',
      ];
      foreach ($aSqlFiles as $sFileName) {
        $sPath = base_path($sBase . $sFileName);
        DB::unprepared(file_get_contents($sPath));
      }
    }
}
