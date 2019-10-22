<?php
    //echo $_POST['REQUEST_METHOD'];

    //echo $_POST['id'];
    //echo $_POST['title'];
    //echo $_POST['content'];
    //echo $_POST['name'];

    header("Location:../board.php");

    include "../../db.php";

    $id = $_POST['id'];
    //$name = $_POST['name'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    // 제목과 내용 그리고 수정 날짜를 저장
    // sql문 스펠링 확인 잘하자!
    $update_query = "UPDATE board SET title='$title', content='$content', updated_date=NOW() WHERE id={$id}";

    $sql = mq($update_query);

    exit;

?>