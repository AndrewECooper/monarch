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

    $( "#dialog-sales" ).dialog({
        dialogClass: "no-close",
        autoOpen: false,
        modal: true,
        resizable: false,
        buttons: {
           Cancel: function() {$(this).dialog("close");},
           Save: editSales
        }
    });

    $("#btn-add-note").click(addNote);
    $("#btn-stage").click(openStage);
    $("#btn-status").click(openStatus);
    $("#btn-sales").click(openSales);
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

function openSales() {
    $("#dialog-sales").dialog("open");
}

function editSales() {
    var id = $("input[name='lead-id']").val();
    var sales = $("#options-sales").val();
    var collector = $("#options-collector").val();

    $.ajax({
        url: "/api/lead/sales/edit",
        data: {
            id: id,
            sales: sales,
            collector, collector
        }
    }).done(function(data) {
        $("#dialog-sales").dialog("close");
        data = $.parseJSON(data);
        html = data.data.sales.last_name + " " + data.data.sales.first_name + " / "
            + data.data.collector.last_name + " " + data.data.collector.first_name;
        $("#btn-sales").html(html);
        $("#option-sales").val(data.data.sales.id);
        $("#options-collector").val(data.data.collector.id);
    });
}
