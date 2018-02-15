var HTTP_SERVER = "http://localhost/fincity/public/"
var overlay = '<div class="overlay"><div class="spinner"></div></div>';
var options = {
    animationEnabled: true,
    theme: "light2", //"light1", "light2", "dark1", "dark2"
    data: [{
        type: "funnel",
        toolTipContent: "<b>{label}</b>: {y} <b>({percentage}%)</b>",
        indexLabel: "{label} - {y}",
        indexLabelFontFamily: "sans-serif",
        dataPoints: [
            { y: 1800, label: "Leads (12 Days)" },
            { y: 800, label: "Data Exchange (8 Days)" },
            { y: 300, label: "Credit (3 Days)" },
            { y: 50, label: "Lender Meetings (2 Days)" },
            { y: 400, label: "Engagement Letter (9 Days)" },
            { y: 50, label: "Term Sheet (4 Days)" },
            { y: 30, label: "Due Diligence (2 Days)" },
            { y: 250, label: "Deal Closure (8 Days)" }
        ]
    }]
};

function showPopover(e, position, msg) {
    $(e).attr('data-toggle', 'popover').attr('data-placement', position).attr('data-content', msg);
    $(e).popover({trigger: 'manual', html : true})
    .on('click', function() {
        $(e).popover('hide');
        $(e).removeAttr('data-toggle data-placement data-content data-trigger');
    })
    .on('keydown', function() {
        $(e).popover('hide');
        $(e).removeAttr('data-toggle data-placement data-content data-trigger');
    });
    $(e).popover('show');
    $(".popover").removeClass("popover-roc");
    $(".popover").addClass("error-alert");
    setTimeout(function(){
        $(".popover").addClass("popover-roc");
    }, 200);
    $(e).focus();
}

function getSpinner(classes) {
    return ('<center class="pad-15"><div class="spinner '+classes+'"></div></center>');
}

function getSalesData(timeline) {
    $("#sales-crm").prepend(overlay);
    $.ajax({
        url: HTTP_SERVER+'actions',
        type: 'POST',
        data: {'action':'getSalesData', 'timeline':timeline},
        success: function(data) {
            $("#salesdata").html(data);
            $(".overlay").remove();
            calculatePercentage();
            $("#chartContainer").CanvasJSChart(options);
        }
    });
}

function selectTimeline(e, timeline) {
    $(e).parent().find(".active").removeClass("active");
    $(e).addClass("active");
    getSalesData(timeline);
}

function getModal() {
    $("#fin-modal .modal-body").html(getSpinner("pad-15"));
    $.ajax({
        url: HTTP_SERVER+'actions',
        type: 'POST',
        data: {'action':'getModal'},
        success: function(data) {
            $("#fin-modal .modal-body").html(data);
        }
    });
}

function showMsg(e) {
    showPopover(e, "top", "This is a demo error message.")
}

$(document).ready(function() {
    $(document).on("click", function() {
        $(".popover-roc").remove();
    });
    calculatePercentage();
    $("#chartContainer").CanvasJSChart(options);
});

function calculatePercentage() {
    var dataPoint = options.data[0].dataPoints;
    var total = dataPoint[0].y;
    for (var i = 0; i < dataPoint.length; i++) {
        if (i == 0) {
            options.data[0].dataPoints[i].percentage = 100;
        } else {
            options.data[0].dataPoints[i].percentage = ((dataPoint[i].y / total) * 100).toFixed(2);
        }
    }
}

function selectPendingTasks(e) {
    if($(e).is(":checked")) {
        $(".task-checkbox").prop("checked", true);
    }
    else {
        $(".task-checkbox").prop("checked", false);
    }
}

function selectComparision(e) {
    if($(e).is(":checked")) {
        $(".compare-checkbox").prop("checked", true);
    }
    else {
        $(".compare-checkbox").prop("checked", false);
    }
}