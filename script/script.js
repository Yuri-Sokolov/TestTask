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
  const companyErrorText = "Enter the correct company name";
  let companyNameValidate = false;
  const companyDescription = document.getElementById("companyDescription");

  const phone = document.getElementById("phone");
  const phoneError = document.getElementById("phoneError");
  const phoneErrorText = "The phone number must be in the format XXXXXXXXXXX";
  const phoneRegExp = new RegExp(
    "^[+]?[0-9]{1}[(]?[0-9]{3}[)]?[-s.]?[0-9]{3}[-s.]?[0-9]{4,6}$"
  );
  let phoneValidate = false;

  const email = document.getElementById("email");
  const emailError = document.getElementById("emailError");
  const emailErrorText = "Please enter the correct company email address";
  const emailRegExp = new RegExp(
    "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$"
  );
  let emailValidate = false;

  const submitForm = document.getElementById("submitForm");
  // submitForm.setAttribute("disabled", true);
  let partnerData = {
    email: "",
    companyName: "",
    phone: "",
    companyDescription: "",
  };
  submitForm.addEventListener("mouseenter", () =>
    console.log(
      partnerData,
      companyNameValidate,
      emailValidate,
      phoneValidate,
      " ",
      JSON.stringify(partnerData)
    )
  );
  form.addEventListener("submit", checkForm);

  const buttonsBecomeAPartner = Array.from(
    document.querySelectorAll("span.button__become-a-partner")
  );
  for (let j = 0; j < buttonsBecomeAPartner.length; j++) {
    buttonsBecomeAPartner[j].addEventListener("click", () => {
      form.scrollIntoView({ behavior: "smooth", block: "start" });
    });
  }

  function checkForm(e) {
    e.preventDefault();
    if (companyNameValidate && phoneValidate && emailValidate) {
      partnerJSON(partnerData);
    }
  }

  companyDescription.addEventListener("input", (e) => {
    if (e.currentTarget.value) {
      partnerData.companyDescription = e.currentTarget.value;
    }
  });

  companyName.addEventListener("input", (e) => {
    companyNameValidate = checkValue(
      e,
      undefined,
      companyNameError,
      companyErrorText
    );
    if (companyNameValidate) {
      partnerData.companyName = e.currentTarget.value;
    }
  });

  phone.addEventListener("input", (e) => {
    phoneValidate = checkValue(e, phoneRegExp, phoneError, phoneErrorText);
    if (phoneValidate) {
      partnerData.phone = e.target.value;
    }
  });

  email.addEventListener("input", (e) => {
    emailValidate = checkValue(e, emailRegExp, emailError, emailErrorText);
    if (emailValidate) {
      partnerData.email = e.target.value;
    }
  });

  function checkValue(e, regExp, error, errorText) {
    if (regExp) {
      if (!regExp.test(e.target.value)) {
        error.innerHTML = errorText;
        e.target.classList.add("errorBorder");
        return false;
      } else {
        error.innerHTML = "";
        e.target.classList.remove("errorBorder");
        return true;
      }
    } else {
      if (e.target.value.trim()) {
        error.innerHTML = "";
        e.target.classList.remove("errorBorder");
        return true;
      } else {
        error.innerHTML = errorText;
        e.target.classList.add("errorBorder");
        return false;
      }
    }
  }

  // async function partnerJSON(data) {
  //   try {
  //     const response = await fetch("./api/partner.php", {
  //       method: 'POST',
  //       headers: {
  //         "Content-Type": "application/json",
  //       },
  //       body: JSON.stringify(data),
  //     });
  //     if (!response.ok) {
  //       const result = await response.text();
  //       throw new Error(result);
  //     }
  //     return response.json();
  //   } catch (error) {
  //     alert(error.message);
  //   }
  // }

  async function partnerJSON(data) {
    await fetch("/api/partner.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    })
      .then((response) => {
        if (!response.ok) {
          return response.text().then((text) => {
            throw new Error(text || "Ошибка!!!");
          });
        } 
        return response.json();
      })
      .then(data => {
        alert('Данные:', data);
      })
      .catch((error) => {
        alert(error.message);
      });
  }
});
