$(document).ready(function() {
    $( "#dialog-stage" ).dialog({
        dialogClass: "no-close",
        autoOpen: false,
        modal: true,
        resizable: false,
        buttons: {
           Cancel: function() {$(this).dialog("close");},
           Save: editStage
        }
    });

    $("#btn-add-note").click(addNote);
    $("#btn-stage").click(openStage);
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
        // alert(data);
    });
}

function openStage() {
    $("#dialog-stage").dialog("open");
}

function editStage() {
    var id = $("input[name='lead-id']").val();
    var stage = $("input[name='options_stage']:checked").val();

    $.ajax({
        url: "/api/lead/stage/edit",
        data: {
            id: id,
            stage: stage
        }
    }).done(function(data) {
        $("#dialog-stage").dialog("close");
        $("#btn-stage").html(stage);
    });
}
