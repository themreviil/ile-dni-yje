<?php

    $mktime = mktime (0,0,0,11,05,1999);

    $unix = time() - $mktime;

    $day = floor($unix / (60*60*24));
    $year = floor($unix / (365 * 24 * 60 * 60));

    echo 'Dni: '. $day . ' Lat: ' . $year; 
?>