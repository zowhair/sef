$(".main-container").show();
$(".gallary").hide();
$(".faq-form").hide();

  $(".slide_link").on('click', function() {
  if($(this).attr("data-id")=="intro")
  {
      $(".main-container").show();
      $(".gallary").hide();
      $(".faq-form").hide();
  }
  else if($(this).attr("data-id")=="gallary")
  {
      $(".gallary").show();
      $(".main-container").hide();
      $(".faq-form").hide();
  }
  else if($(this).attr("data-id")=="faqs")
  {
      $(".faq-form").show();
      $(".gallary").hide();
      $(".main-container").hide();
  }
  });