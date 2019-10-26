<?php
    include "../db.php";

    // url로 넘겨 받은 id 찾음
    $select_query = "SELECT * from board WHERE id={$_GET['id']}";

    $sql = mq($select_query);

    // 찾아온 db 정보들을 연관 배열 형식으로 저장
    $board = $sql->fetch_array();

    // echo $board['title'];

    // 댓글 데이터를 가지고 오는 쿼리문
    // 최신의 쓴 댓글이 위로 올라오고    --> seq(순서) 는 내림 차순
    // 대댓글 아래로 오는 경우           --> depth 는 오름 차순으로 정렬
    $select_query = "SELECT * FROM comment WHERE post_num = {$_GET['id']} ORDER BY seq DESC, depth";

    $sql = mq($select_query);

    $comment_list = '';

//    while ($comment = $sql->fetch_array()){
//        $comment_list = $comment_list."<div id='comment{$comment['id']}'>
//                                            <div class='card mb-3'>
//                                                <div class='card-body'>
//                                                    <div class='float-right'>
//                                                        <button onclick='comment_edit({$comment['id']}, {$comment['contents']})' type='button' class='btn btn-sm btn-link comment_edit'>수정</button>
//                                                        <button id='comment_delete' type='button' class='btn btn-sm btn-link'>삭제</button>
//                                                    </div>
//                                                    <h6 class='card-subtitle text-muted'>{$comment['writer']}</h6>
//                                                    <p class='card-text'>{$comment['contents']}</p>
//                                                    <small class='card-text'>{$comment['created_date']}</small>
//                                                </div>
//                                            </div>
//                                        </div>";
//    }
?>
<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--공식 jQuery CDN 사이트에 가서 링크를 가지고 와야 작동-->
    <script src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

    <!--댓글 저장을 ajax로 넘겨주는 js 파일-->
    <script type="text/javascript" src="comment/comment_write.js"></script>

    <script type="text/javascript" src="comment/comment_edit.js"></script>

    <title>Document</title>
</head>
<body>
    <!--상단 네비게이션 바
    navbar : 네비게이션
    navbar-expand-lg : 반응형 웹 크기 / sm(스몰), me(미디엄), lg(라지)
    navbar-dark, bg-dark : 배경 색 / light(밝음) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!--네비게이션 로고
        navbar-brand : 네비게이션 로고-->
        <a class="navbar-brand" href="index.php">
            <img src="image/laptop.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            노트북 포럼
        </a>

        <!--화면이 작아졌을 때 오른쪽 상단에 삼선 메뉴 버튼이 생기게 함.-->
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#alt" aria-controls="alt" aria-expanded="false"
                aria-label="Toggle navigation">

            <!--navbar-toggler-icon : 삼선 메뉴 버튼-->
            <span class="navbar-toggler-icon"></span>

        </button>

        <!--메뉴들-->
        <div class="collapse navbar-collapse" id="alt">
            <div class="navbar-nav">
                <!--active : 메뉴 활성화-->
                <a class="nav-item nav-link" href="info.php">노트북 정보</a>
                <a class="nav-item nav-link" href="#">노트북 리뷰</a>
                <a class="nav-item nav-link" href="#">노트북 중고거래</a>
                <a class="nav-item nav-link active" href="board.php">자유게시판</a>
                <a class="nav-item nav-link" href="news.php">뉴스</a>
                <a class="nav-item nav-link" href="#">오픈채팅</a>
            </div>

            <div class="navbar-nav ml-auto justify-content-end">
                <?php
                    @session_start();
                    // 세션에 닉네임이 없을 때
                    if(!isset($_SESSION['nickname'])) {

                        ?>
                        <a class="btn btn-primary" href="login.php">로그인</a>
                        <?php
                    }
                    // 세션에 닉네임이 있을 때
                    else {
                        ?>
                        <div class="nav-item avatar dropdown">
                            <a class="nav-link dropdown-toggle" id="navbar_profile" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <img src="image/user_image.png" width="25px" class="rounded-circle z-depth-0"
                                     alt="avatar image">
                                <?= $_SESSION['nickname'] ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar_profile">
                                <a class="dropdown-item" href="login/logout_action.php">로그아웃</a>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </nav>

    <div class="container">
        <!--제목-->
        <h2 class="mt-5"><?=$board['title']?></h2>
        <!--작성자-->
        <h5 class="ml-2 mb-1"><?=$board['name']?></h5>
        <!--게시물 작성 날짜-->
        <h6 class="text-right text-muted mr-2"><?=$board['created_date']?></h6>
        <!--조회수-->
        <h6 class="text-right text-muted mr-2">조회수 <?=$board['views']?></h6>

        <hr class="mb-4">

        <!--내용-->
        <div class="container">
            <p>
                <?=$board['content']?>
            </p>
        </div>

        <hr class="my-4">

        <div class="container">
            <div class="float-right">
                <form method="post" action="delete/delete_action.php">
                    <a href="edit.php?id=<?=$board['id']?>"><button type="button" class="btn btn-success m-1">수정</button></a>
                    <!--http method delete 넘겨줌-->
                    <input type="hidden" name="REQUEST_METHOD" value="DELETE">
                    <!--삭제하기 위해서 아이디 값을 넘겨줌-->
                    <input type="hidden" name="id" value="<?=$board['id']?>">
                    <input type="submit" class="btn btn-danger" value="삭제">
                </form>
                <!--<a href="#"><button type="button" class="btn btn-danger m-1">삭제</button></a>-->
            </div>
        </div>

        <br><br>

        <div class="container bg-light" style="padding: 10px">
            <h5 class="my-2">댓글</h5>

            <!--댓글입력 창-->
            <form>
                <div class="input-group mb-4 ">
                    <!--php 태그에서 단순 변수만 넣어 줄 때는 <?/*php*/?> 말고 <?/*=*/?> 사용-->
                    <input type="hidden" id="post_num" value="<?=$_GET['id']?>">
                    <input type="hidden" id="nickname" value="<?=$_SESSION['nickname']?>">
                    <!--<input type="text" id="comment" class="form-control" placeholder="댓글을 입력해주세요">-->
                    <textarea id="comment" class="form-control" rows="3" placeholder="댓글을 입력해주세요"></textarea>
                    <div class="input-group-append">
                        <button id="comment_write" class="btn btn-secondary" type="button">등록</button>
                    </div>
                </div>
            </form>

            <!--댓글 내용-->
            <div id="comment_content">
                <? /*= $comment_list */ ?>
                <?php
                    while ($comment = $sql->fetch_array()) {
                        ?>
                        <div id='comment<?=$comment['id']?>'>
                            <div class='card mb-3'>
                                <div class='card-body'>
                                    <div class='float-right'>
                                        <!--자바스크립트 함수의 메게변수를 넘길때 문자열 일때는 "" 를 붙여준다!-->
                                        <!--$comment['contents']가 계속 안넘어 갔는데 "" 붘여주니 넘어감-->
                                        <button onclick='comment_edit(<?=$comment['id']?>, "<?=$comment['contents']?>")' type='button' class='btn btn-sm btn-link comment_edit'>수정</button>
                                        <button id='comment_delete' type='button' class='btn btn-sm btn-link'>삭제</button>
                                    </div>
                                    <h6 class='card-subtitle text-muted'><?=$comment['writer']?></h6>
                                    <p class='card-text'><?=$comment['contents']?></p>
                                    <small class='card-text'><?=$comment['created_date']?></small>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
                <div class='float-right'>
                    <button type='button' id="comment_edit_cancel" class='btn btn-sm btn-link'>수정취소</button>
                </div>
                <form>
                    <div class="input-group mb-4 ">
                        <textarea id="comment_edit_textarea" class="form-control" rows="3" placeholder="댓글을 입력해주세요"></textarea>
                        <div class="input-group-append">
                            <button id="comment_edit_action" class="btn btn-secondary" type="button">수정</button>
                        </div>
                    </div>
                </form>

<!--            <div class="card mb-3">-->
<!--                <div class="card-body">-->
<!--                    <div class="float-right">-->
<!--                        <a href="#"><button type="button" class="btn btn-sm btn-link">수정</button></a>-->
<!--                        <a href="#"><button type="button" class="btn btn-sm btn-link">삭제</button></a>-->
<!--                    </div>-->
<!--                    <h6 class="card-subtitle text-muted">김승우</h6>-->
<!--                    <p class="card-text">댓글</p>-->
<!--                    <small class="card-text">2019-01-01 13:10:21</small>-->
<!--                </div>-->
<!--            </div>-->
        </div>

    </div>

</body>
</html>
