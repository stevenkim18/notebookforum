<?php

    // echo $_POST['REQUEST_METHOD'];

    $url = $_SERVER['DOCUMENT_ROOT']."/edit/edit_action.php";

    echo $url;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

    echo curl_exec($ch);

?>