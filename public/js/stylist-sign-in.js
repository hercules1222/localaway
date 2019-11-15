$(document).ready(function() {

    $(window).keydown(function(event) {
        if (event.keyCode == 13) {
            event.preventDefault();
            return false;
        }
    });

    $(".plus").click(function() {
        hours = $(".hours").html();
        $(".hours").html(parseInt(hours) + 1);
    });

    $("#step1").click(function() {
        $("#step-1").css("display", "none");
        if ($("#boutique").prop("checked")) {

            $("#step-2-boutique").css("display", "block");
        } else {
            $("#step-2-independent").css("display", "block");
        }
        $(".back-image").css("background-image", "url('/images/stylist-sign-2.jpg')");
        $("#logo").get(0).scrollIntoView();
        $('#title').text(function(i) {
            return 'Become part of the LocaAway Family';
        });
        move(25, 50);
    });

    $(".step2").click(function() {
        if (!validate_email()) {
            return;
        }
        $(".step-2").css("display", "none");
        if ($("#boutique").prop("checked")) {

            $("#step-3-boutique").css("display", "block");
        } else {
            $("#step-3-independent").css("display", "block");
        }
        $(".back-image").css("background-image", "url('/images/stylist-sign-3.jpg')");
        $("#logo").get(0).scrollIntoView()
        $('#title').text(function(i) {
            return 'Enjoy some freedom as your own boss';
        });
        move(50, 75);
    });

    $(".step3").click(function() {
        if ($("#boutique").prop("checked")) {
            for (let index = 1; index < 4; index++) {
                if (!isUrlValid($("#boutique-link" + index).val())) {
                    $("#boutique-link" + index).focus();
                    return false;
                }
            }
        } else {
            if (!isUrlValid($("#linkedin").val())) {
                $("#linkedin").focus();
                return false;
            }
            for (let index = 1; index < 4; index++) {
                if (!isUrlValid($("#stylist-link" + index).val())) {
                    $("#boutique-link" + index).focus();
                    return false;
                }
            }
        }
        if (!isAgree()) {
            return false;
        }
        $(".step-3").css("display", "none");
        $("#step-4").css("display", "block");
        $(".back-image").css("background-image", "url('/images/stylist-sign-4.jpg')");
        $("#logo").get(0).scrollIntoView()
        $('#title').text(function(i) {
            return "We can't wait to meet you";
        });
        move(75, 100);

    });

    $("#stylist-signup").submit(function() {
        const hours = $(".hours").html();
        $("#input-hours").val(hours);
        return true;
    })
});

// dzone = new Dropzone("#upload_resume", { url: "/file/post" });

function minusfunction() {
    hours = $(".hours").html();
    $(".hours").html(parseInt(hours) - 1);
}

var i = 0;

function move(cur, pro) {
    if (i == 0) {
        i = 1;
        var elem = document.getElementById("myBar");
        var width = cur;
        var id = setInterval(frame, 10);

        function frame() {
            if (width >= pro) {
                clearInterval(id);
                i = 0;
            } else {
                width++;
                elem.style.width = width + "%";
            }
        }
    }
}

function validate_email() {
    if ($("#boutique").prop("checked")) {
        var mail_input = $("#boutique-email").val();
    } else {
        var mail_input = $("#stylist-email").val();
    }
    var pattern = /^([a-zA-A0-9_.-])+@([a-zA-Z0-9_.-])+([a-zA-Z])+/;
    var is_email_valid = false;
    if (mail_input.match(pattern) == null) {
        if ($("#boutique").prop("checked")) {
            $("#boutique-email").focus();
        } else {
            $("#stylist-email").focus();
        }
    } else {
        is_email_valid = true;
    }
    return is_email_valid;
}



// $(document).on("keyup", ".email", function(event) {
//     var keypressed = event.which;
//     var input_val = $(this).val();
//     var is_success = true;
//     if (keypressed == 9) {
//         is_success = validate_email(input_val);
//         if (!is_success) {
//             $(this).focus();
//         }
//     }
// });

$(document).on("focusout", ".url", function() {
    var input_val = $(this).val();
    if (!isUrlValid(input_val)) {
        $(this).focus();
    }
    return;
});

function isUrlValid(url) {
    if ((url != "") && (url != undefined)) {
        var is_success = /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(url);
        if (!is_success) {
            return false;
        }
        return true;
    }
    return true;
}

function isAgree() {
    if ($("#boutique").prop("checked")) {
        if (!$("#boutique-agree").prop("checked")) {
            return false;
        }
        return true;
    } else {
        if (!$("#stylist-agree").prop("checked")) {
            return false;
        }
        return true;
    }
}