$(document).ready(function() {
    $( "#dialog-stage" ).dialog({
        dialogClass: "no-close",
        autoOpen: false,
        modal: true,
        resizable: false,
        show: { effect: "fade", duration: 500 },
        hide: { effect: "fade", duration: 500 },
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
        show: { effect: "fade", duration: 500 },
        hide: { effect: "fade", duration: 500 },
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
        show: { effect: "fade", duration: 500 },
        hide: { effect: "fade", duration: 500 },
        buttons: {
           Cancel: function() {$(this).dialog("close");},
           Save: editSales
        }
    });

    $( "#dialog-transaction" ).dialog({
        dialogClass: "no-close",
        autoOpen: false,
        modal: true,
        resizable: false,
        show: { effect: "fade", duration: 500 },
        hide: { effect: "fade", duration: 500 },
        buttons: {
           Cancel: function() {$(this).dialog("close");},
           Save: newTransaction
        }
    });

    $("#btn-add-note").click(addNote);
    $("#btn-stage").click(openStage);
    $("#btn-status").click(openStatus);
    $("#btn-sales").click(openSales);
    $("#btn-change-sale-amount").click(updateSaleAmount);
    $("#btn-change-ad-type").click(updateAdType);
    $("#btn-new-transaction").click(openNewTransaction);
    $("#btn-create-invoice").click(openNewInvoice);
});

function newTransaction() {
    var id = $("input[name='lead-id']").val();
    var amount = $("#transaction-amount").val();
    var checkNumber = $("#transaction-check-number").val();
    var paymentType = $("#transaction-payment-type").val();

    if (amount == "" || !$.isNumeric(amount)) {
        alert("Amount must be a numeric value.");
        return;
    }

    if (paymentType == "check" && (checkNumber == "" || !$.isNumeric(checkNumber))) {
        alert("If Payment Type is Check then a check number must be entered. Check number must be numeric.");
        return;
    }

    $.ajax({
        url: "/api/lead/transaction/new",
        data: {
            id: id,
            amount: amount,
            payment_type: paymentType,
            check_number: checkNumber
        }
    }).done(function(data) {
        data = $.parseJSON(data);
        $("#transactions-table").val("");
        reloadTransactions(data.data.transactions);
        $("#dialog-transaction").dialog("close");
    });
}

function updateSaleAmount() {
    var id = $("input[name='lead-id']").val();
    var amount = $("#sale-amount").val();

    if ($.isNumeric(amount)) {
        $.ajax({
            url: "/api/lead/sales/amount/edit",
            data: {
                id: id,
                amount: amount
            }
        }).done(function(data) {
            // alert(data);
        });
    } else {
        alert("Sale Amount must be numeric value.");
        $.ajax({
            url: "/api/lead/sales/amount",
            data: {
                id: id
            }
        }).done(function(data) {
            var response = $.parseJSON(data);
            $("#sale-amount").val(numeral(response.data.amount).format("0,0.00"));
        });
    }
}

function updateAdType() {
    var id = $("input[name='lead-id']").val();
    var adType = $("#select-ad-type").val();

    $.ajax({
        url: "/api/lead/ad/type/edit",
        data: {
            id: id,
            type: adType
        }
    }).done(function(data) {
        // alert(data);
    });
}

function openNewTransaction() {
    $("#dialog-transaction").dialog("open");
}

function openNewInvoice() {
    alert("Creating new invoice!");
}

function addNote() {
    var id = $("input[name='lead-id']").val();
    var message = $("#lead-new-note").val();

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
        data = $.parseJSON(data);
        $("#lead-new-note").val("");
        reloadNotes(data.data.notes);
    });
}

function reloadTransactions(transactionArray) {
    table = $("#transaction-table");

    table.empty();

    transactionArray.forEach(function(transaction) {
        html = "<tr><td>"
            + transaction.created
            + "</td><td>"
            + transaction.amount
            + "</td><td>"
            + transaction.payment_type
            + "</td><td>"
            + transaction.check_number
            + "</td></tr>";
        table.append(html);
    });
}

function reloadNotes(notesArray) {
    table = $("#notes-table");

    table.empty();

    notesArray.forEach(function(note) {
        html = "<tr><th class='info'>"
            + note.created
            + "</th><tr><td>"
            + note.message
            + "</td></tr>";
        table.append(html);
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
