<?php

ini_set('display_errors', 1 );

date_default_timzone_set('Indian/Comoro');

echo "<pre>";
$periodo = new DateInterval('P2Y4DT6H8M');
print_r($periodo);
echo '<hr>';

echo $periodo->format('%d dias');
echo '<hr>';
$date1 = new DateTime('2015-05-10');
$date2 = new DateTime();

$retorno = $date2->diff($date1);
echo $retorno->format('%R%a dias %Y  ');
echo '<hr>';

if ($date1 < $date2) {
    echo "data1 e menor";
}
echo '<hr>';
$date2->add($periodo);
echo $date2->format('d/m/Y');
