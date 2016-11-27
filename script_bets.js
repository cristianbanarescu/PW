 $(document).ready(function(){

$('.complete').addClass('hide');

// Set up the toggle.
$('.more').on('click', function() {
  $(this).next('.complete').toggleClass('hide');
});
})