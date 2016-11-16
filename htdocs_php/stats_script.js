var slideIndex = 1;

function openModal(nr) {
	//var x = document.getElementsByClassName('modal');
	$(".modal")[nr].style.display="block";
  showSlides(slideIndex, nr);
  }

function closeModal(nr) {
	//var x = document.getElementsByClassName('modal');
	$(".modal")[nr].style.display="none";
  slideIndex = 1;
}

function plusSlides(n, modal_nr) {
  showSlides(slideIndex += n, modal_nr);
}

function currentSlide(n, modal_nr) {
  showSlides(slideIndex = n, modal_nr);
}

function showSlides(n, modal_nr) {
  var i;
  var classes = $(".modal").eq(modal_nr);
  var slides = classes.find(".mySlides");

  var dots = classes.find(".demo");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

