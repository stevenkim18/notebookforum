<?php
    // include --> 외부에서 파일을 불러옴. 불러온 파일이 없어도 실행 (require : 파일이 없으면 에러)
    //
    include "../db.php";

    // 내림 차순으로 정렬(최신글이 맨 위로 가게 하기 위해서)
    $select_query = "SELECT * from board ORDER BY id DESC";
    $sql = mq($select_query);
    //echo $sql;

    /*$list = '';

    // db에 자료가 없을 때까지 while 문 실행
    // $board 에 연관 배열 형태로 db의 데이터들을 저장
    while ($board = $sql->fetch_array()){

        // echo $board; --> ArrayArrayArrayArrayArrayArrayArray

        // table에 뿌려줄 html 태그를 생성해서 list에 저장
        $list = $list."<tr>
                            <td>{$board['id']}</td>
                            <td><a href='post.php?id={$board['id']}'>{$board['title']}</a></td>
                            <td>{$board['name']}</td>
                            <td>{$board['created_date']}</td>
                            <td>{$board['views']}</td>
                       </tr>";
    }*/

     // echo $list; id 제목 내용 날짜 조회수 순으로 데이터가 출력 됨.

    //echo "받아온 페이지 숫자".$_GET['page'];

    //페이징
    // url 받은 page 값이 있으면
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    // 없으면 (처음에 자유게시판을 들어오면 페이지가 1로 보이기 때문)
    else{
        $page = 1;
    }

   //echo "<br>페이지 숫자".$page;


    // 전체 행의 개수를 저장
    $total_post_num = mysqli_num_rows($sql);
    //echo "<br>총 게시물 수".$total_post_num;

    $one_page_post_num = 10; // 한 페이지 보여줄 개시물의 개수(10개씩)
    $one_block_page_num = 10; // 한 블록에 보여줄 페이지의 개수(1~10, 11~20....)

    $current_block_num = ceil($page/$one_block_page_num); // 현재 블록의 위치 ex) 1일 경우 1~10 페이지에 있음
    //ceil --> 소수점 올림
    //echo "<br> 현재 블록 위치".$current_block_num;
    
    $start_page_num = ($current_block_num-1) * 10 + 1; // 블록 시작 번호 1~10페이지를 보여줄 떄 1
    //echo "<br> 블록 시작 번호".$start_page_num;
    
    $end_page_num = $current_block_num * 10; // 블록 끝 번호 1~10페이지를 보여줄 때 10
    //echo "<br>블록 끝 번호".$end_page_num;

    $total_page_num = ceil($total_post_num/$one_page_post_num); // 페이지의 개수
    //echo "<br> 페이지 수".$total_page_num;

    $total_block_num = ceil($total_page_num/$one_block_page_num);   // 블럭의 개수
    //echo "<br> 블럭 수".$total_block_num;

    // 마지막 블럭 일때
    // 마지막 블럭 마지막 페이지는 페이징 한 페이지의 수
    if($end_page_num > $total_page_num){
        $end_page_num = $total_page_num;
    }

    // sql 문에서 게시글 데이터를 불러 올떄 시작이 되는 인덱스의 수
    // 0부터 시작함으로 1번~10번 게시물을 가지고 오려면 sql에서는 0~9의 게시물을 가지고 와야 함.
    $start_post_num = ($page-1) * $one_page_post_num;

    //페이징한 데이터들을 db에서 불러오기
    $select_query = "SELECT * from board ORDER BY id DESC LIMIT {$start_post_num}, {$one_page_post_num}";

    $sql = mq($select_query);

    $list ='';

//    $post_count=0;

    while ($board = $sql->fetch_array()){
        $list = $list."<tr>
                            <td>{$board['id']}</td>  
                            <td><a href='post.php?id={$board['id']}'>{$board['title']}</a></td>  
                            <td>{$board['name']}</td>  
                            <td>{$board['created_date']}</td>  
                            <td>{$board['views']}</td>      
                       </tr>";
        //    $post_count++;
    }
    //echo $post_count;

    // 하단 페이지 번호

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

    <title>노트북포럼:자유게시판</title>
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
                <a class="nav-item nav-link active" href="">자유게시판</a>
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
        <h1 class="mt-5">자유게시판</h1>

        <hr class="mt-2">

        <a href="write.php"><button type="button" class="btn btn-success float-right mb-2">글쓰기</button></a>

        <table class="table table-striped">
            <!--목차-->
            <thead>
            <tr>
                <th scope="col" style="width: 8%">#</th>
                <th scope="col" style="width: 55%">제목</th>
                <th scope="col" style="width: 15%">닉네임</th>
                <th scope="col" style="width: 15%">작성일</th>
                <th scope="col" style="width: 8%">조회수</th>
            </tr>
            </thead>
            <!--내용-->
            <tbody>
                <?= $list ?>
            </tbody>
        </table>

        <!--페이지-->
        <ul class="pagination justify-content-center my-4">
            <!--이전버튼-->
            <?php
                if($current_block_num == 1) {
                    ?>
                    <li class="page-item disabled">
                        <a class="page-link" href="board.php?page=<?= $start_page_num - 1 ?>" aria-label="이전">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <?php
                }
                else {
                    ?>
                    <li class="page-item">
                        <a class="page-link" href="board.php?page=<?= $start_page_num - 1 ?>" aria-label="이전">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>


                    <?php
                }
                // 페이지 숫자
                for($page_num = $start_page_num; $page_num <= $end_page_num; $page_num++) {
                    if($page == $page_num) {
                        ?>

                        <!--현재페이지-->
                        <li class="page-item active"><a class="page-link" href="#"><?=$page_num?></a></li>

                        <?php
                    }
                    else {
                        ?>
                        <!--나머지 페이지-->
                        <li class="page-item"><a class="page-link" href="board.php?page=<?=$page_num?>"><?= $page_num ?></a></li>

                        <?php
                    }
                }
            ?>

            <!--다음버튼-->
            <?php
                // 마지막 블럭 일때
                if($total_block_num == $current_block_num) {
                    ?>
                    <li class="page-item disabled">
                        <a class="page-link" href="board.php?page=<?=$end_page_num+1?>" aria-label="다음">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                    <?php
                }
                // 아닐때
                else {
                    ?>
                    <li class="page-item">
                        <a class="page-link" href="board.php?page=<?=$end_page_num+1?>" aria-label="다음">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                    <?php
                }
            ?>
        </ul>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

</body>
</html>
