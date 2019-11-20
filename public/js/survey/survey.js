$(function() {
    let current_item = 0;

    $(".prev-button").click(function() {
        do {
            if (current_item > 0) {
                current_item--;
            }
        } while ($(".item:nth-child(" + (current_item + 1)).css("visibility") == "hidden");

        $(".wizard-body").css("top", -current_item * 100 + "%");
        $(".item").removeClass("item-show");
        $(".item:nth-child(" + (current_item + 1) + ")").addClass("item-show");
    });

    $(".next-button").click(function() {
        const is_checked = checkEmpty(".item:nth-child(" + (current_item + 1) + ")");
        if (is_checked) {

            do {
                current_item++;
            } while ($(".item:nth-child(" + (current_item + 1)).css("visibility") == "hidden");

            $(".wizard-body").css("top", -current_item * 100 + "%");
            $(".item").removeClass("item-show");
            $(".item:nth-child(" + (current_item + 1) + ")").addClass("item-show");
            move();
        }
    });

    $("body").on("keydown", function(e) {
        const keycode = e.which;
        $(".item:nth-child(" + (current_item + 1) + ") input.text-answer").focus();
        if (keycode == "13") {
            $(".next-button").click();
            $(".title").css("opacity", "1");
        } else {

            // const item_button_selector = ".item:nth-child(" + (current_item + 1) + ") .item-button[data-key=" + keycode + "]";
            // $(item_button_selector).click();

            const item_checkbox_selector = ".item:nth-child(" + (current_item + 1) + ") input[data-key=" + keycode + "]";
            const item_arrow_selector = ".item:nth-child(" + (current_item + 1) + ") div.arrow-btn";
            const item_hidden_text = ".item:nth-child(" + (current_item + 1) + ") input.hidden-text";
            if ($(item_hidden_text).is(":focus")) {
                return;
            } else {
                if ($(item_checkbox_selector).prop("checked")) {
                    $(item_checkbox_selector).prop("checked", false);
                } else {
                    $(item_checkbox_selector + "+label .hidden-text").click();
                    $(item_checkbox_selector).prop("checked", true);
                    if ($(item_checkbox_selector).length != 0) {

                        $(item_arrow_selector).css("opacity", "1");
                        $(item_arrow_selector).css("bottom", "0");
                    }
                }
                if ($(item_checkbox_selector).hasClass("link-expand")) {
                    linkexpand(".link-expand");
                }
                if ($(item_checkbox_selector).hasClass("if")) {
                    $(item_checkbox_selector).click();
                }
            }

        }
    });

    $('body').on('mousewheel', function(e) {
        const direction = Math.round(e.originalEvent.wheelDelta / 120);
        if (direction > 0) {
            $(".prev-button").click();
        } else if (direction < 0) {
            $(".next-button").click();
        }
    });

    $("#start-button").click(function(e) {
        $(".next-button").click();
        $(".title").css("opacity", "1");
    });

    $(".ok-button").click(function(e) {
        $(".next-button").click();
    });

    $(".other").click(function() {
        $(".item:nth-child(" + (current_item + 1) + ") input.hidden-text").css("display", "block");
        $(".item:nth-child(" + (current_item + 1) + ") .other .answer-body span").css("display", "none");
        $(".item:nth-child(" + (current_item + 1) + ") .other .answer-body .hidden-text").focus();
    });

    $('.item').on('click', function() {
        const item_checkbox_selector = ".item:nth-child(" + (current_item + 1) + ") input:checked";
        if ($(item_checkbox_selector).length) {
            const item_arrow_selector = ".item:nth-child(" + (current_item + 1) + ") div.arrow-btn";
            $(item_arrow_selector).css("opacity", "1");
            $(item_arrow_selector).css("bottom", "0");
            return;
        }
    });

    $(".link-expand").change(function() {
        linkexpand(".link-expand");
    });

    function linkexpand(link) {
        const link_selecter = ".item:nth-child(" + (current_item + 1) + ") input.link-expand";
        const expand_selecter = ".item:nth-child(" + (current_item + 1) + ") label.expanded";
        if ($(link_selecter)[1].checked) {
            $(expand_selecter).css("visibility", "visible");
            $(expand_selecter + " .hidden-text").focus();
        } else {
            $(expand_selecter).css("visibility", "hidden");
        }
    }

    $("#20-a").on('click', function() {
        $('.if-no').css('visibility', 'visible');
        $('.if-yes').css('visibility', 'hidden');
    });

    $("#20-b").on('click', function() {
        $('.if-yes').css('visibility', 'visible');
        $('.if-no').css('visibility', 'hidden');
    });

    function checkEmpty(item) {
        let flag = false;
        $(item + " input[type=checkbox]").each(function() {
            if ($(this)[0].checked) {
                flag = true;
            }
        });

        $(item + " input[type=radio]").each(function() {
            if ($(this)[0].checked) {
                flag = true;
            }
        });

        $(item + " input[type=text]").each(function() {
            if ($(this).val() != "") {
                flag = true;
            }
        });
        if ($(item + " input").length == 0) {
            flag = true;
        }

        if (flag == false) {

            return false;
        } else {
            return true;
        }
    }
})