 $('#les1').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/oVn9XBj1mSY?rel=0&amp;showinfo=0');
  });
   $('#les2').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/cs11IGWJLzA?rel=0&amp;showinfo=0');
  });

   $('#les3').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/3hFesJANSOQ?rel=0&amp;showinfo=0');
  });

   $('#les4').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/N0I4_sEWxM0?rel=0&amp;showinfo=0');
  });

   $('#les5').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/7E9pQLdPjtc?rel=0&amp;showinfo=0');
  });

   $('#les6').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/TjNCctXgyok?rel=0&amp;showinfo=0');
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
