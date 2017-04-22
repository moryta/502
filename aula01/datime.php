<?php

$data = new DateTime('+5 days');
echo $data->format('d/m/Y H:i:s');
$data->modify('2015-10-30');
echo "<hr>";
echo $data->format('d/m/Y H:i:s');
echo "<hr>";
$data->setDate(2015, 10, 15);
$data->setTime(7, 0, 0);
echo $data->format('d/m/Y H:i:s');

// TIME ZONE

$timezone = new DateTimeZone('America/Toronto');
echo "<hr>";
$data = new DateTime();
$data->setTimezone($timezone);
echo $data->format('d/m/Y H:i:s');
