 $('#les1').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/yTpRuWSBncw?rel=0&amp;showinfo=0');
  });
   $('#les2').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/yTpRuWSBncw?rel=0&amp;showinfo=0');
  });

   $('#les3').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/6rAA3FDYh6I?rel=0&amp;showinfo=0');
  });

   $('#les4').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/NjRXHRPD6u4?rel=0&amp;showinfo=0');
  });

   $('#les5').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/EOvgsmS5QwA?rel=0&amp;showinfo=0');
  });

   $('#les6').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/XG9n9zwvAVU?rel=0&amp;showinfo=0');
  });

  $('.rating-star').click(function() {
    $(this).parents('.rating').find('.rating-star').removeClass('checked');
    $(this).addClass('checked');
});

$('.heart').click(function() {
  $(this).parents('.love').find('.heart').removeClass('checked');
  $(this).addClass('fav');
});
