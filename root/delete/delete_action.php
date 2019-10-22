<?php

    //parse_str(file_get_contents("php://input"),$post_vars);
    //echo $post_vars['name'];

    //echo $_POST['REQUEST_METHOD'];

    header("Location:../board.php");

    include "../../db.php";

    $id = $_POST['id'];
    //echo $id;

    $delete_query = "DELETE FROM board WHERE id={$id}";

    $sql = mq($delete_query);

    exit;

?>