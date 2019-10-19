<?php
    header("Location:../board.php");

    include "../../db.php";

    $title = $_POST['title'];
    $content= $_POST['content'];
    $name = $_POST['name'];

    //sql 문은 오타 하나만 나와도 안되고 에러도 표시도 안남.
    //퀴리문은 신중하게 작성하자!
    $insert_sql = "INSERT INTO board (title, content, name, created_date, updated_date, views) VALUES ('$title', '$content', '$name', NOW(), NOW(), 0)";

    //echo $insert_sql;

    $sql = mq($insert_sql);

    //echo $sql;

    exit;

?>
<!doctype html>
<html lang="ko">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
<!--    TODO 다이얼로그 추가 하기-->
<!--    <script-->
<!--        src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"-->
<!--        integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="-->
<!--        crossorigin="anonymous"></script>-->
<!---->
<!--    <script type="text/javascript">-->
<!--        $(function () {-->
<!--           $("#dialog").dialog({-->
<!--               autoOpen : true,-->
<!--               width : 300,-->
<!--               modal : true-->
<!--           });-->
<!--        });-->
<!---->
<!--    </script>-->

</head>
<body>
    <div id="dialog" style="display: none;">Hello!</div>
</body>
</html>
