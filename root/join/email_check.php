<?php

    include"../../db.php";

    $email = $_POST['email'];

    $select_query = "SELECT email FROM member WHERE email='{$email}'";

    $sql = mq($select_query);

    $row_num = mysqli_num_rows($sql);

    if($row_num >= 1){
        echo json_encode(array('res'=>'bad'));
    }
    else{
        echo json_encode(array('res'=>'good'));
    }


?>