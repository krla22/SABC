//For Sensitive Skin Niacinamide
let slideIndexSensnia = 1;
showSlidesSensnia(slideIndexSensnia);

function currentSlideSensnia(n) {
  showSlidesSensnia(slideIndexSensnia = n);
}

function showSlidesSensnia(n) {
  let i;
  let slides = document.getElementsByClassName("sensnia-serum");
  let dots = document.getElementsByClassName("sensia-dot");
  if (n > slides.length) {slideIndexSensnia = 1}
  if (n < 1) {slideIndexSensnia = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndexSensnia-1].style.display = "flex";
  dots[slideIndexSensnia-1].className += " active";
} 

//For UB Serum
let slideIndexUB = 1;
showSlidesUB(slideIndexUB);

function currentSlideUB(n) {
  showSlidesUB(slideIndexUB = n);
}

function showSlidesUB(n) {
  let i;
  let slides = document.getElementsByClassName("ub-serum");
  let dots = document.getElementsByClassName("ub-dot");
  if (n > slides.length) {slideIndexUB = 1}
  if (n < 1) {slideIndexUB = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndexUB-1].style.display = "flex";
  dots[slideIndexUB-1].className += " active";
} 

//For Oily-Acne Prone Niacinamide
let slideIndexOA = 1;
showSlidesOA(slideIndexOA);

function currentSlideOA(n) {
  showSlidesOA(slideIndexOA = n);
}

function showSlidesOA(n) {
  let i;
  let slides = document.getElementsByClassName("oa-serum");
  let dots = document.getElementsByClassName("oa-dot");
  if (n > slides.length) {slideIndexOA = 1}
  if (n < 1) {slideIndexOA = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndexOA-1].style.display = "flex";
  dots[slideIndexOA-1].className += " active";
} 