<?php

function get_ip()
{
    $value = '';
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $value = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $value = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (!empty($_SERVER['REMOTE_ADDR'])) {
        $value = $_SERVER['REMOTE_ADDR'];
    }

    return $value;
}
function item(){
    $num_golos = [];
        $golos = json_decode(file_get_contents('ajax/golos.txt'), true);
        foreach ($golos as $golo) {
            if (empty($num_golos[$golo])){
                $num_golos[$golo] = 1;
            }else{
                $num_golos[$golo] = ++$num_golos[$golo];
            }
        }
    return $num_golos;
}
function info_ip(){
    $golos = json_decode(file_get_contents('ajax/golos.txt'), true);
    if(empty($golos[get_ip()])){
        return true;
    }else{
        return false;
    }
}