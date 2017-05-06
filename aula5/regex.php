<?php
/**
 * Created by PhpStorm.
 * User: raphael
 * Date: 06/05/17
 * Time: 10:11
 */

$pattern = "/^([0-9]{3}\.){2}[0-9]{3}-[0-9]{2}$/";
//$pattern = "/([0-9]{3}\.){2}[0-9]{3}-[0-9]{2}/";
$string = '313.559.128-06';
//$string = '313.559.128-06sdasd313.559.128-06';
echo '<pre>';
var_dump(preg_match($pattern,$string));
preg_match($pattern,$string,$retorno);
echo '<hr>';

echo '<pre>';
var_dump($retorno);
echo '<hr>';

preg_match_all($pattern,$string,$retorno);
echo '<pre>';
var_dump($retorno);
echo '<hr>';

$string = 'JAVA e a linguagem mais legal';
echo preg_replace('/JAVA/','PHP',$string);
echo '<hr>';