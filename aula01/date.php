<?php

echo date('d/m/Y H:i:s');
echo "<hr>";
echo time();
echo "<hr>";
echo microtime();
echo "<hr>";
echo strtotime('+5 days');
echo "<hr>";
echo date('d/m/Y H:i:s', strtotime('08011990'));
echo "<hr>";
echo date('d/m/Y', mktime(9,0,0,8,1,1990));
echo "<hr>";
echo (mktime(0,0,0,1,1,1990) - mktime(0,0,0,1,1,1970));
