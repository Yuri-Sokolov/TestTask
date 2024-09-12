document.addEventListener("DOMContentLoaded", () => {
  // Slider
  const slider = document.getElementById("slider");
  const sliderList = document.getElementById("sliderList");
  const sliderItems = Array.from(
    document.querySelectorAll(".slider__slide-item")
  );
  const prevSlide = document.getElementById("prevSlide");
  const nextSlide = document.getElementById("nextSlide");
  const navSliderDots = document.getElementById("navSliderDots");
  const slideCount = sliderItems.length;
  let slideIndex = 0;

  prevSlide.addEventListener("click", showPreviousSlide);
  nextSlide.addEventListener("click", showNextSlide);

  function showPreviousSlide() {
    slideIndex = (slideIndex - 1 + slideCount) % slideCount;
    updateSlider();
  }

  function showNextSlide() {
    slideIndex = (slideIndex + 1) % slideCount;
    updateSlider();
  }

  function showNavDots() {
    let dots = "";
    for (let i = 0; i < slideCount; i++) {
      dots += '<span class="slider__dots"></span>';
    }
    navSliderDots.innerHTML = dots;
    dotsArray = Array.from(navSliderDots.querySelectorAll("span.slider__dots"));
    dotsArray[slideIndex].style.backgroundColor = "#3D50F9";
    for (let n = 0; n < slideCount; n++) {
      dotsArray[n].addEventListener("click", () => {
        if (n !== slideIndex) {
          slideIndex = n;
          updateSlider();
        }
      });
    }
  }

  function updateSlider() {
    sliderItems.forEach((slide, index) => {
      if (index === slideIndex) {
        slide.style.display = "flex";
        slide.style.opacity = "1";
      } else {
        slide.style.display = "none";
        slide.style.opacity = "0";
      }
    });
    showNavDots();
  }
  updateSlider();

  // form
  const form = document.getElementById("form");
  const companyName = document.getElementById("companyName");
  const companyNameError = document.getElementById("companyNameError");
  const companyErrorText = "Enter the correct company name"
  const buttonsBecomeAPartner = Array.from(
    document.querySelectorAll("span.button__become-a-partner")
  );
  for (let j = 0; j < buttonsBecomeAPartner.length; j++) {
    buttonsBecomeAPartner[j].addEventListener("click", () => {
      form.scrollIntoView({ behavior: "smooth", block: "start" });
    });
  }

});
