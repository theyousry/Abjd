 $('#les1').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/Y2EcekcJbxY?rel=0&amp;showinfo=0');
  });
   $('#les2').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/amx57KvGs7c?rel=0&amp;showinfo=0');
  });

   $('#les3').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/wCk_FKpfWnc?rel=0&amp;showinfo=0');
  });

   $('#les4').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/-VjuII1tK6c?rel=0&amp;showinfo=0');
  });

   $('#les5').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/LgFdka6A74o?rel=0&amp;showinfo=0');
  });

   $('#les6').click(function () {
      $('#hyperRedirect').attr('src', 'https://www.youtube.com/embed/Id5K3-GQuxw?rel=0&amp;showinfo=0');
  });

  $('.rating-star').click(function() {
    $(this).parents('.rating').find('.rating-star').removeClass('checked');
    $(this).addClass('checked');
});

$('.heart').click(function() {
  $(this).parents('.love').find('.heart').removeClass('checked');
  $(this).addClass('fav');
});
