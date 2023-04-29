document.addEventListener("DOMContentLoaded", function() {
  const backToTopButton = document.querySelector("#back-to-top");

  window.addEventListener("scroll", scrollFunction);

  function scrollFunction() {
    if (window.pageYOffset > 100) { // Show back-to-top button when user scrolls down 300px from the top of the document
      backToTopButton.classList.add("showbtn");
      backToTopButton.classList.remove("hidebtn");
      backToTopButton.style.visibility = "visible"; // show the button
    } else { // Hide back-to-top button when user scrolls up to the top of the document
      backToTopButton.classList.add("hidebtn");
      backToTopButton.classList.remove("showbtn");
      backToTopButton.style.visibility = "hidden"; // hide the button
    }
  }

  backToTopButton.addEventListener("click", smoothScrollBackToTop);

  function smoothScrollBackToTop() {
    const targetPosition = 0; // scroll to the top of the document
    const startPosition = window.pageYOffset;
    const distance = targetPosition - startPosition;
    const duration = 1; // scroll to the top of the document in 750 milliseconds
    let start = null;

    window.requestAnimationFrame(step);

    function step(timestamp) {
      if (!start) start = timestamp;
      const progress = timestamp - start;
      window.scrollTo(0, easeInOutCubic(progress, startPosition, distance, duration));
      if (progress < duration) window.requestAnimationFrame(step);
    }
  }

  function easeInOutCubic(t, b, c, d) {
    t /= d/2;
    if (t < 1) return c/2*t*t*t + b;
    t -= 2;
    return c/2*(t*t*t + 2) + b;
  }

// Hide back-to-top button when user is already at the top of the document on page load
  if (window.pageYOffset <= window.innerHeight) {
    backToTopButton.classList.add("hide");
  }
});
