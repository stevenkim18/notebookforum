<?php
    include "../../db.php";
    $id = $_POST['id'];             // 댓글 아이디
    //echo $id;
    $contents = $_POST['contents']; // 댓글 내용
    //echo $contents;

    // db 에서 댓글 수정
    $update_query = "UPDATE comment SET contents='{$contents}', updated_date=NOW() WHERE id={$id}";
    //echo $update_query;
    $sql = mq($update_query);

    // db 에서 수정 된 정보들 불러오기
    $select_query = "SELECT * FROM comment WHERE id={$id}";

    $sql = mq($select_query);

    $comment = $sql ->fetch_array();
//    echo $comment['id'];
//    echo $comment['contents'];
//    echo $comment['writer'];
//    echo $comment['created_date'];

    // 수정된 댓글상자 html
    $edited_comment_html = "<div id='comment{$comment['id']}'>
                                <div class='card mb-3'>
                                    <div class='card-body'>
                                        <div class='float-right'>
                                        <button onclick='comment_edit({$comment['id']}, \"{$comment['contents']}\", \"{$comment['writer']}\", \"{$comment['created_date']}\")' type='button' class='btn btn-sm btn-link'>수정</button>
                                        <button id='comment_delete' type='button' class='btn btn-sm btn-link'>삭제</button>
                                        </div>
                                    <h6 class='card-subtitle text-muted'>{$comment['writer']}</h6>
                                    <p class='card-text'>{$comment['contents']}</p>
                                    <small class='card-text'>{$comment['created_date']}</small>
                                    </div>
                                </div>
                            </div>";
    echo $edited_comment_html

    // echo json_encode(array('res'=>'good'));


?>