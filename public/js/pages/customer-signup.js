$(function () {
  $(".next-button").click(function () {
    const next_id = $(this).parents(".step").hide().attr("next");
    const next = $("#" + next_id);
    const progress = next.attr("progress");

    $(next).show();
    $(".back-image").hide();
    $(".back-image[step='" + next_id + "'").show();

    $(".progress-value").css({ width: (progress * 100 / 6) + '%'});
  });

  $("input.gender").click(function () {
    $(".gender-image").removeClass("selected");
    $(this).parents(".gender-option")
      .find(".gender-image")
      .addClass("selected");
  });
})
