$(document).ready(function() {
    $("#btn-add-note").click(addNote);
});

function addNote() {
    var id = $("input[name='job-id']").val();
    var message = $("#job-new-note").val();

    if (message.length < 1) {
        alert("Note must not be blank.");
        return false;
    }

    $.ajax({
        url: "/api/job/note/add",
        data: {
            id: id,
            message: message
        }
    }).done(function(data) {
        data = $.parseJSON(data);
        $("#job-new-note").val("");
        reloadNotes(data.data.notes);
    });
}

function reloadNotes($notesArray) {
    table = $("#notes-table");

    table.empty();

    $notesArray.forEach(function(note) {
        html = "<tr><th class='info'>"
            + note.created
            + "</th><tr><td>"
            + note.message
            + "</td></tr>";
        table.append(html);
    });
}
