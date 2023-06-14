@extends('website.base')
@section('content')
<table width=100%>
    <tr>
        <td colspan='3'>
            <p>
                <img src="Images/dragon-small.png" style="float:left;height:200px" alt="Golden Dragon">
                <img src="Images/dragon-small-flipped.png" style="float:right;height:200px" alt="Golden Dragon">
                <span style="font-size:40px;font-weight:bold;color:yellow">Chinees Indische Specialiteiten</span><br>
                <span style="font-size:50px;font-weight:bold;color:yellow">De Gouden Draak</span><br>
            </p>
            <p>
            <table style="margin:auto;font-size:20px;color:white" border="1px solid white">
                <tr background="Images/menu_bg_gradient.png">
                    <td valign="middle">
                        <a href="/menu" style="color:white">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menukaart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </a>
                    </td>
                    <td valign="middle">
                        <a href="/news" style="color:white">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nieuws&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </a>
                    </td>
                    <td valign="middle">
                        <a href="/contact" style="color:white">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </a>
                    </td>
                    <td valign="middle">
                        <a href="/order" style="color:white">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bestel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </a>
                    </td>
                </tr>
            </table>
            </p>
        </td>
    </tr>
    <tr style="padding-top:50px">
        <td colspan="3" height="50px">
        </td>
    </tr>
    <tr style="padding-top:50px">
        <td width="50px">
        </td>
        <td align="center" style='font-size:5;border:1px solid black;background:floralwhite'> <br>
            <h3>Al jaren is De Gouden Draak een begrip als het gaat om de beste afhaalgerechten in 's-Hertogenbosch.<br>
                Graag trakteren we u op authentieke gerechten uit de Cantonese keuken.</h3>
            <br>
            <h2><u>Speciale Studentenaanbieding</h2></u>
            <h1>Chinese Rijsttafel (2 personen)</h1>
            <h3>
                Maak een keuze uit 3 van onderstaande keuzegerechten:<br><br>
                <table width="60%">
                    <tr>
                        <td width="40%" style="text-align:right">
                            Koe Loe Yuk
                        </td>
                        <td width="20%">
                        </td>
                        <td width="40%">
                            Foe Yong Hai
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:right">
                            Tjap Tjoy
                        </td>
                        <td>
                        </td>
                        <td>
                            Garnalen met Gebakken Knoflook
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:right">
                            Babi Pangang
                        </td>
                        <td>
                        </td>
                        <td>
                            Kipfilet in Zwarte Bonen saus
                        </td>
                    </tr>
                </table>
                <br>
                Met witte rijst. (Nasi of bami voor meerprijs mogelijk.)
            </h3>
            <h1>Prijs: €21,00</h1>
        </td>
        <td width="50px">
        </td>
    </tr>
</table>
<br>
<div text-align="center"><a href="/contact">Naar Contact</a></div>
@endsection
