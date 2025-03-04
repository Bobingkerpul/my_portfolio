let portfolioIndex = 1;

window.onload = function () {
  showPortfolio(portfolioIndex);
};

function plusPortfolio(e) {
  showPortfolio((portfolioIndex += e));
}

function currentPortfolio(e) {
  showPortfolio((portfolioIndex = e));
}

function showPortfolio(e) {
  let slides = document.getElementsByClassName("image-carousel");
  let dots = document.getElementsByClassName("dot");

  if (slides.length === 0) {
    console.error("No slides found.");
    return;
  }
  if (dots.length === 0) {
    console.error("No dots found.");
    return;
  }

  if (e > slides.length) {
    portfolioIndex = 1;
  }
  if (e < 1) {
    portfolioIndex = slides.length;
  }

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  for (let i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  slides[portfolioIndex - 1].style.display = "block";
  dots[portfolioIndex - 1].className += " active";
}
