 $('#les1').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/UMWrWzF6jzY?rel=0&amp;showinfo=0');
  });
   $('#les2').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/2TXA16OeOLw?rel=0&amp;showinfo=0');
  });

   $('#les3').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/UlNnIQFCAEY?rel=0&amp;showinfo=0');
  });

   $('#les4').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/Wrspcui2790?rel=0&amp;showinfo=0');
  });

   $('#les5').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/3_AZdNvYpok?rel=0&amp;showinfo=0');
  });

   $('#les6').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/KuuovLcIidk?rel=0&amp;showinfo=0');
  });

  $('.rating-star').click(function() {
    $(this).parents('.rating').find('.rating-star').removeClass('checked');
    $(this).addClass('checked');
});

$('.heart').click(function() {
  $(this).parents('.love').find('.heart').removeClass('checked');
  $(this).addClass('fav');
});
$('.send').click(function() {
  alert("لقد تم ارسال الرسالة!! شكراً لك");
});
