$(function() {
    let current_item = 0;

    $(".prev-button").click(function() {
        if (current_item > 0) {
            current_item--;
        }
        $(".wizard-body").css("top", -current_item * 100 + "%");
        $(".item").removeClass("item-show");
        $(".item:nth-child(" + (current_item + 1) + ")").addClass("item-show");
    });

    $(".next-button").click(function() {
        if (current_item < 100) {
            current_item++;
        }
        $(".wizard-body").css("top", -current_item * 100 + "%");
        $(".item").removeClass("item-show");
        $(".item:nth-child(" + (current_item + 1) + ")").addClass("item-show");
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
                    $(item_arrow_selector).css("opacity", "1");
                    $(item_arrow_selector).css("bottom", "0");
                }
                if ($(item_checkbox_selector).hasClass("link-expand")) {
                    linkexpand(".link-expand");
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
})