<?php

    include"../../db.php";

    $nickname = $_POST['nickname'];

    //echo $nickname;

    $select_query = "SELECT nickname FROM member WHERE nickname='{$nickname}'";

    $sql = mq($select_query);

    $row_num = mysqli_num_rows($sql);

    //echo "받아온 개수 : ".$row_num."\n";

    if($row_num >= 1){
        echo json_encode(array('res'=>'bad'));
    }
    else{
        echo json_encode(array('res'=>'good'));
    }


?>