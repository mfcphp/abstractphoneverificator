<?php

    define('API_BASE', 'https://phonevalidation.abstractapi.com/v1/');
    define('API_KEY', 'INSERT HERE YOUR API KEY');

    function verify_phone_number($number){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, API_BASE.'?api_key='.API_KEY.'&phone='.$number);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $res = curl_exec($ch);
        curl_close($ch);
        return json_decode($res);
    }