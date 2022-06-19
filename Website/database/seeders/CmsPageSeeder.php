<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CmsPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cms_page')->insert([
          'name' => 'nieuws',
        ]);
        DB::table('cms_page')->insert([
          'name' => 'contact',
        ]);
        DB::table('cms_page')->insert([
          'name' => 'home',
        ]);

        DB::table('cms_page_content')->insert([
          'title' => 'Nieuws',
          'content' => '<h3>De Gouden Draak is eenvoudig te vinden, vlak bij het centrum, 5 minuten lopen achter het centraal station.<br>Het restaurant-gedeelte is gesloten. U kan uw favoriete gerechten nog wel afhalen.</h3>',
          'language' => 'nl',
          'slug' => 'nieuws',
          'cms_page_id' => 1,
        ]);

        DB::table('cms_page_content')->insert([
          'title' => 'News',
          'content' => '<h3>The Golden Dragon is easy to find, near the center, a 5-minute walk behind the central station.<br>The restaurant area is closed. You can still pick up your favorite dishes.</h3>',
          'language' => 'en',
          'slug' => 'nieuws',
          'cms_page_id' => 1,
        ]);

        DB::table('cms_page_content')->insert([
          'title' => 'Contact',
          'content' => "<h3>De Gouden Draak is eenvoudig te vinden, vlak bij het centrum, 5 minuten lopen achter het centraal station.<br><br>Onderwijsboulevard 215, kamer OG112<br> 5223 DE 's-Hertogenbosch</h3>",
          'language' => 'nl',
          'slug' => 'contact',
          'cms_page_id' => 2,
        ]);

        DB::table('cms_page_content')->insert([
          'title' => 'Contact',
          'content' => "<h3>The Golden Dragon is easy to find, near the center, a 5-minute walk behind the central station.<br><br>Onderwijsboulevard 215, kamer OG112<br> 5223 DE 's-Hertogenbosch</h3>",
          'language' => 'en',
          'slug' => 'contact',
          'cms_page_id' => 2,
        ]);

        DB::table('cms_page_content')->insert([
          'title' => 'Home',
          'content' => "<h3>Al jaren is De Gouden Draak een begrip als het gaat om de beste afhaalgerechten in 's-Hertogenbosch.<br>Graag trakteren we u op authentieke gerechten uit de Cantonese keuken.</h3><br><h2><u>Speciale Studentenaanbieding</u></h2><h1>Chinese Rijsttafel (2 personen)</h1>
          <h3>Maak een keuze uit 3 van onderstaande keuzegerechten:<br><br><table width='60%'><tbody><tr><td width='40%' style='text-align:right'>Koe Loe Yuk</td><td width='20%'></td><td width='40%'>Foe Yong Hai</td></tr>
          <tr><td style='text-align:right'>Tjap Tjoy</td><td></td><td>Garnalen met Gebakken Knoflook</td></tr><tr><td style='text-align:right'>Babi Pangang</td><td></td><td>Kipfilet in Zwarte Bonen saus</td></tr></tbody></table><br>Met witte rijst. (Nasi of bami voor meerprijs mogelijk.)
          </h3>
          <h1>Prijs: €21,00</h1>",
          'language' => 'nl',
          'slug' => 'home',
          'cms_page_id' => 3,
        ]);

        DB::table('cms_page_content')->insert([
          'title' => 'Home',
          'content' => "<h3>De Gouden Draak has been a household name for years when it comes to the best take-away dishes in 's-Hertogenbosch. <br> We would like to treat you to authentic dishes from the Cantonese kitchen. </h3> <br> <h2> <u> Special Student Offer </u> </h2> <h1> Chinese Rice Table (2 persons) </h1>
          <h3>Make a choise out of 3 products below:<br><br><table width='60%'><tbody><tr><td width='40%' style='text-align:right'>Koe Loe Yuk</td><td width='20%'></td><td width='40%'>Foe Yong Hai</td></tr>
          <tr><td style='text-align:right'>Tjap Tjoy</td><td></td><td>Shrimps with Fried Garlic</td></tr><tr><td style='text-align:right'>Babi Pangang</td><td></td><td>Kipfilet in Black beans saus</td></tr></tbody></table><br>with white rice. (Nasi of bami for more is posible.)
          </h3>
          <h1>Price: €21,00</h1>",
          'language' => 'en',
          'slug' => 'home',
          'cms_page_id' => 3,
        ]);
    }
}
