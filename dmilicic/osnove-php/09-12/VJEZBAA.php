<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$polje=array(1=>'Ford', 2=>'Opel', 3=>'VW');

echo '<table border="3" cellpading="5">';

foreach($polje as $key=>$val)
{
    echo '
    <tr>
        <td>'.$key.'</td>
        <td>'.$val.'</td>
    </tr>';
}    
echo '</table>';


$polje=array(1=>'plava', 2=>'crvena', 3=>'zelena');

echo '<table border="3" cellpading="5">';

foreach($polje as $key=>$val)
{
    echo '
    <tr>
        <td>'.$key.'</td>
        <td>'.$val.'</td>
    </tr>';
}    

















echo "<hr>";


$p1=array();

array_push($p1, '2014,');
array_push($p1, '2015,');
array_push($p1, '2016,');
array_push($p1, '2017,');


for ($i=0; $i <=2 ; $i++) { 
	echo $p1[$i];
        // isto kao echo $p1[0].$p1[1].$p1[2];
}
echo "<hr>ispis godina unatrag:<br>";
for ($i=count($p1)-1; $i >=0 ; $i--) { 
	echo $p1[$i];
}
echo "<hr>";

