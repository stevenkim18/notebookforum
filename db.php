/*
 데이터베이스를 연결하는 파일
*/
<?php
    // 세션 시작
    session_start();
    // db 인코딩 타입을 utf8로 해줌. 한글이 꺠질 수 있기 떄문에
    header('Content_Type: text/html; charset=utf-8');

    // db에 mysql을 연결
    $db = new mysqli("192.168.0.56", "a11882", "Rlatmddn18!", 'notebookforum');

    // db문자열 utf-8 인코딩
    $db->set_charset("utf8");

    function mq($sql){
        global $db;
        return $db->query($sql);
    }

?>