$(function () {
  $(".next-button").click(function () {
    const cur_step = parseInt($(this).parents(".step").hide().attr('step'))
    let next_step = 'step-' + (cur_step + 1);
    
    if (cur_step === 2) {
      const gender = $("input.gender:checked").val()
      if (gender === "man") {
        next_step = 'step-3-man'
      } else if (gender === "woman") {
        next_step = 'step-3-woman'
      } else {
        next_step = 'step-3-neutral'
      }
    }

    const next = $("#" + next_step);
    const progress = next.attr("step");

    $(next).show();
    $(".back-image").hide();
    $(".back-image[step='step-" + progress + "'").show();

    $(".progress-value").css({ width: (progress * 100 / 6) + '%'});
  });

  $("input.gender").click(function () {
    $(".gender-image").removeClass("selected");
    $(this).parents(".gender-option")
      .find(".gender-image")
      .addClass("selected");
  });

  $(".image-upload-placeholder").click(function () {
    $(this).siblings(".image-upload[type=file]").click();
  })

  $(".image-upload").change(function () {
    if (this.files && this.files[0]) {
      $(this).siblings(".body-type-file-name").html($(this).val())
    }
  })
})
