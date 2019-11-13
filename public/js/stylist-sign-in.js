$(document).ready(function() {
    $("#plus").click(function() {
        hours = $("#hours").html();
        $("#hours").html(parseInt(hours) + 1);
    });

    $("#step1").click(function() {
        $("#step-1").css("display", "none");
        $("#step-2").css("display", "block");
        $(".back-image").css("background-image", "url('/images/stylist-sign-2.jpg')");
        $("#logo").get(0).scrollIntoView()
        $('#title').text(function(i) {
            return 'Become part of the LocaAway Family';
        });
        move(25, 50);
    });

    $("#step2").click(function() {
        $("#step-2").css("display", "none");
        $("#step-3").css("display", "block");
        $(".back-image").css("background-image", "url('/images/stylist-sign-3.jpg')");
        $("#logo").get(0).scrollIntoView()
        $('#title').text(function(i) {
            return 'Enjoy some freedom as your own boss';
        });
        move(50, 75);
    });

    $("#step3").click(function() {
        $("#step-3").css("display", "none");
        $("#step-4").css("display", "block");
        $(".back-image").css("background-image", "url('/images/stylist-sign-4.jpg')");
        $("#logo").get(0).scrollIntoView()
        $('#title').text(function(i) {
            return "We can't wait to meet you";
        });
        move(75, 100);

    });

});

// dzone = new Dropzone("#upload_resume", { url: "/file/post" });

function minusfunction() {
    hours = $("#hours").html();
    $("#hours").html(parseInt(hours) - 1);
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