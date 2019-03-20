


$(function($) {
  var allAccordions = $('.data ');
  var allAccordionItems = $('.accordion .accordion-item');
  $('.accordion > .accordion-item').click(function() {
    if($(this).hasClass('open'))
    {
      $(this).removeClass('open');
      $(this).next().slideUp();
	  
    }
    else
    {
    allAccordions.hide();
    allAccordionItems.removeClass('open');
    $(this).addClass('open');
    $(this).next().hide().slideDown();
    return false;
    }
  });
});
