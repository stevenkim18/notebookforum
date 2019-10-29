<?php

    include "../../db.php";

    $id = $_POST['id'];

    $delete_query = "DELETE FROM comment WHERE id={$id}";

    $sql = mq($delete_query);


?>