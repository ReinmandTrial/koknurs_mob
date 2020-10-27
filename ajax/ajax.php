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
if($_POST['action'] == 'golos'){
    $golos = json_decode(file_get_contents('golos.txt'), true);
    $golos[get_ip()] = $_POST['id'];
    file_put_contents('golos.txt', json_encode($golos));
    echo true;
}else{
    echo 'не один из параметров не выбран';
}