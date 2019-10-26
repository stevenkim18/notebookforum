// 댓글 --> 댓글 수정 창으로 바꾸는 함수
function comment_edit(comment_id, comment_contents, comment_writer, comment_created_date) {
    let html = '';
    html += "<div id='comment"+comment_id+"'>"
    html += "   <div class='float-right'>";
                                                                                    // 문자열을 넘길 때는 "", '' 를 해줘야 함. \" \" --> 중요
    html += "       <button type='button' onclick='comment_edit_cancel("+comment_id+", \""+comment_contents+"\", \""+comment_writer+"\", \""+comment_created_date+"\")' class='btn btn-sm btn-link'>수정취소</button>";
    html += "   </div>";
    html += "   <form>";
    html += "       <div class='input-group mb-4'>";
    html += "           <textarea id='comment_edit_textarea' class='form-control' rows='3'>"+comment_contents+"</textarea>";
    html += "           <div class='input-group-append'>";
    html += "               <button id='comment_edit_action' class='btn btn-secondary' type='button'>수정</button>";
    html += "          </div>";
    html += "       </div>";
    html += "   </form>";
    html += "</div>"
    
    //replaceWith 는 그 요소까지 지워버린다! 주의 할것
    $("#comment"+comment_id).replaceWith(html);

    console.log(comment_id);
    console.log(comment_contents);
    console.log(comment_writer);
    console.log(comment_created_date);

}

//댓글 --> 수정 창에서
function comment_edit_cancel(comment_id, comment_contents, comment_writer, comment_created_date) {
    let html = '';
    html += "<div id='comment"+comment_id+"'>"
    html += "   <div class='card mb-3'>";
    html += "       <div class='card-body'>";
    html += "          <div class='float-right'>";
    html += "              <button onclick='comment_edit("+comment_id+", \""+comment_contents+"\", \""+comment_writer+"\", \""+comment_created_date+"\")' type='button' class='btn btn-sm btn-link'>수정</button>";
    html += "              <button id='comment_delete' type='button' class='btn btn-sm btn-link'>삭제</button>";
    html += "          </div>";
    html += "           <h6 class='card-subtitle text-muted'>"+comment_writer+"</h6>";
    html += "           <p class='card-text'>"+comment_contents+"</p>";
    html += "           <small class='card-text'>"+comment_created_date+"</small>";
    html += "       </div>";
    html += "   </div>";
    html += "</div>";

    $("#comment"+comment_id).replaceWith(html);

    console.log(comment_id);
    console.log(comment_contents);
    console.log(comment_writer);
    console.log(comment_created_date);
}