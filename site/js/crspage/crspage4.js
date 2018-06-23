 $('#les1').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/oVn9XBj1mSY?rel=0&amp;showinfo=0');
  });
   $('#les2').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/BaufwgW1NMQ?rel=0&amp;showinfo=0');
  });

   $('#les3').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/3hFesJANSOQ?rel=0&amp;showinfo=0');
  });

   $('#les4').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/2zbcFeN5SP0?rel=0&amp;showinfo=0');
  });

   $('#les5').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/MzVbkR_HTw8?rel=0&amp;showinfo=0');
  });

   $('#les6').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/F2uuESoWr5o?rel=0&amp;showinfo=0');
  });

  $('.rating-star').click(function() {
    $(this).parents('.rating').find('.rating-star').removeClass('checked');
    $(this).addClass('checked');
});

$('.heart').click(function() {
  $(this).parents('.love').find('.heart').removeClass('checked');
  $(this).addClass('fav');
});
