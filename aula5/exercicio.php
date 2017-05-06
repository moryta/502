<?php
/**
 * Created by PhpStorm.
 * User: raphael
 * Date: 06/05/17
 * Time: 10:39
 */

#REGEX CPF
#000.000.000-00
echo 'REGEX CPF<br>';
$pattern = "/^([0-9]{3}\.){2}[0-9]{3}-[0-9]{1,2}$/";
$string = '313.559.128-06';
echo '<pre>';
var_dump(preg_match($pattern,$string));

#REGEX EMAIL
#NOME@DOMINIO.COM
#NOME@DOMINIO.COM.BR
echo 'REGEX EMAIL<br>';
$pattern = '/^[0-9a-zA-Z._]+\@[0-9A-Za-z]+\.[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)?$/';
$string = 'raphael@moryta.com';
echo '<pre>';
var_dump(preg_match($pattern,$string));

#REGEX HORA
#12:59:59
echo 'REGEX HORA<br>';
$pattern = '/^([0-1][0-9]|2[0-3])(:[0-5][0-9]){2}$/';
$string = '23:12:24';
echo '<pre>';
var_dump(preg_match($pattern,$string));

#REGEX DATA
#00/00/0000
echo 'REGEX DATA<br>';
$pattern = '/^(0[1-9]|[1-2][0-9]|3[0-1])\/(0[1-9]|1[0-2])\/(19[0-9]{2}|2[0-9]{3})$/';
$string = '06/05/2017';
echo '<pre>';
var_dump(preg_match($pattern,$string));


