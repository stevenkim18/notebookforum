// 댓글 삭제
function comment_delete(comment_id) {

    $.ajax({
        type: 'post',
        dataType: 'html',
        url: 'comment/comment_delete_action.php',
        data: {"id": comment_id},

        success: function (text) {
            console.log("댓글 삭제 성공");
            $("#comment"+comment_id).replaceWith("");
        },

        error: function (text) {
            console.log("댓글 삭제 실패");
        }

    });
    
}