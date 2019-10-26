// 댓글 수정 공간 숨기기
function comment_edit(comment_id, comment_contents) {
    let html = '';
    html += "<div class='float-right'>";
    html += "    <button type='button' id='comment_edit_cancel' class='btn btn-sm btn-link'>수정취소</button>";
    html += "</div>";
    html += "<form>";
    html += "    <div class='input-group mb-4'>";
    html += "        <textarea id='comment_edit_textarea' class='form-control' rows='3'>"+comment_contents+"</textarea>";
    html += "        <div class='input-group-append'>";
    html += "            <button id='comment_edit_action' class='btn btn-secondary' type='button'>수정</button>";
    html += "        </div>";
    html += "    </div>";
    html += "</form>";

    $("#comment"+comment_id).replaceWith(html);
}