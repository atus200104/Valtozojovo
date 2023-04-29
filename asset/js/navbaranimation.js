// add the scroll event listener
window.addEventListener("scroll", scrollFunction);

// define the scrollFunction
function scrollFunction() {
  // get the navbar element
  const navbar = document.getElementById("navbar");

  // if the scroll position is below 500, remove the "scrolled" class from the navbar
  if (window.scrollY < 500) {
    navbar.classList.remove("scrolled");
  } else {
    // if the scroll position is 500 or more, add the "scrolled" class to the navbar
    navbar.classList.add("scrolled");
  }
}


$(document).ready(function() {
  $('#myCarousel').carousel()
  
  var carouselInterval = 10000 // 10 seconds
  setInterval(function() {
    $('#myCarousel').carousel('next')
  }, carouselInterval)
})