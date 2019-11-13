$(document).ready(function() {
    $("#plus").click(function() {
        hours = $("#hours").html();
        $("#hours").html(parseInt(hours) + 1);
    });

    $("#step1").click(function() {
        $("#step-1").css("display", "none");
        $("#step-2").css("display", "block");
    });

    $("#step2").click(function() {
        $("#step-2").css("display", "none");
        $("#step-3").css("display", "block");
    });

    $("#step3").click(function() {
        $("#step-3").css("display", "none");
        $("#step-4").css("display", "block");
    });

});

// dzone = new Dropzone("#upload_resume", { url: "/file/post" });

function minusfunction() {
    hours = $("#hours").html();
    $("#hours").html(parseInt(hours) - 1);
}