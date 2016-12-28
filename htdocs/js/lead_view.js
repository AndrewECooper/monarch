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

    $( "#dialog-status" ).dialog({
        dialogClass: "no-close",
        autoOpen: false,
        modal: true,
        resizable: false,
        buttons: {
           Cancel: function() {$(this).dialog("close");},
           Save: editStatus
        }
    });

    $("#btn-add-note").click(addNote);
    $("#btn-stage").click(openStage);
    $("#btn-status").click(openStatus);
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

function openStatus() {
    $("#dialog-status").dialog("open");
}

function editStatus() {
    var id = $("input[name='lead-id']").val();
    var status = $("input[name='options_status']:checked").val();

    $.ajax({
        url: "/api/lead/status/edit",
        data: {
            id: id,
            status: status
        }
    }).done(function(data) {
        $("#dialog-status").dialog("close");
        $("#btn-status").html(status);
    });
}
