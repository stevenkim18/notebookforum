$(document).ready(function () {
    
    $("#comment_write").click(function () {

        // 경로는 post.php 파일 기준으로 해줘야 함.
        // 그냥 comment_write_action.php --> 404 에러
        $.post("comment/comment_write_action.php", {
            post_num : $("#post_num").val(),      // 게시물 번호
            nickname : $('#nickname').val(),      // 현재 로그인 된 회원의 닉네임
            comment : $('#comment').val()         // 댓글 내용
        },
            function (data, success) {
                if(success == "success"){
                    // 댓글 input 에 있는 값 지우기
                    $("#comment").val("");
                    // 댓글 부분에 DB에서 받아온 새로운 데이터 집어 넣기(echo 로 출력한 글씨들 저장)
                    $("#comment_content").html(data);
                    console.log("성공");
                }
                else {
                    console.log("실패");
                }
                
            });

    });
});