<?php
//    echo "게시물 번호".$_POST['post_num'];
//    echo "닉네임".$_POST['nickname'];
//    echo "댓글 내용".$_POST['comment'];

    include "../../db.php";

    $post_num = $_POST['post_num'];     // 게시물 번호
    $nickname = $_POST['nickname'];     // 개사물 작성자
    $comment = $_POST['comment'];       // 댓글 내용

    // 새로운 댓글 일때

    // 가장 맨 상단에 있는 댓글 가지고 오기
    $select_query = "SELECT seq FROM comment WHERE post_num={$post_num} ORDER BY seq DESC, depth LIMIT 1";

    $sql = mq($select_query);

    $latest_comment_num = $sql->fetch_array();

    // 최신 댓글 순서
    $seq = $latest_comment_num['seq'];

    // 댓글 데이터 저장
    $insert_query = "INSERT INTO comment (post_num, writer, contents, created_date, updated_date, seq, depth) 
                     VALUES ({$post_num}, '{$nickname}', '{$comment}', NOW(), NOw(), {$seq} + 1, 1)";

    //echo $insert_query;
    $sql = mq($insert_query);
    
    // 새로 갱신 댓글 리스트 불러오기
    $select_query = "SELECT * FROM comment WHERE post_num = {$post_num} ORDER BY seq DESC, depth";

    $sql = mq($select_query);

    $comment_list = '';

    while ($comment = $sql->fetch_array()){
        $comment_list = $comment_list."<div class='card mb-3'>
                                            <div class='card-body'>
                                                <div class='float-right'>
                                                    <a href=''><button type='button' class='btn btn-sm btn-link'>수정</button></a>
                                                    <a href=''><button type='button' class='btn btn-sm btn-link'>삭제</button></a>
                                                </div>
                                                <h6 class='card-subtitle text-muted'>{$comment['writer']}</h6>
                                                <p class='card-text'>{$comment['contents']}</p>
                                                <small class='card-text'>{$comment['created_date']}</small>
                                            </div>
                                        </div>";
    }

    echo $comment_list

    // 대댓글 일때
    
?>