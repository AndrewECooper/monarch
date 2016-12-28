$(document).ready(function() {
    $("#btn-add-note").click(addNote);
});

function addNote() {
    var id = $("input[name='lead-id']").val();
    var message = $("#job-new-note").val();

    if (message.length < 1) {
        alert("Note must not be blank.");
        return false;
    }

    $.ajax({
        url: "/api/lead/note/add",
        data: {
            id: id,
            message: message
        }
    }).done(function(data) {
        alert(data);
    })
}
