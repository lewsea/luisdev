let intervalId = 0;
const $scrollButton = document.querySelector("#scroll-to-top");

function scrollStep() {
  // Check if we're at the top already. If so, stop scrolling by clearing the interval
  if (window.pageYOffset === 0) {
    clearInterval(intervalId);
  }
  window.scroll(0, window.pageYOffset - 50);
}

function scrollToTop() {
  // Call the function scrollStep() every 16.66 millisecons
  intervalId = setInterval(scrollStep, 16.66);
}

// When the DOM is loaded, this click handler is added to our scroll button
$scrollButton.addEventListener("click", scrollToTop);

// highlight
hljs.highlightAll();
  