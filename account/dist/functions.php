<?php

function show_date($date){
    $date = date_create($date);
    $date = date_format("d Y M",$date);
    echo $date;
}

function get_date($date){
    $date = date_create($date);
    $date = date_format("d Y M",$date);
    return $date;
}

?>