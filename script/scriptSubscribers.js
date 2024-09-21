document.addEventListener("DOMContentLoaded", () => {
  const requestForm = document.getElementById("requestForm");
  const requestFormInput = document.getElementById("requestFormInput");
  const emailError = document.getElementById("emailError");
  const emailErrorText = "incorrect email";
  const requestFormSubmit = document.getElementById("requestFormSubmit");
  const emailContainer = document.querySelectorAll(".subscriber-email");
  const responseOk = document.getElementById("responseOk");
  const responseNotOk = document.getElementById("responseNotOk");

  const companyNameValue = document.getElementById("companyNameValue");
  const emailValue = document.getElementById("emailValue");
  const phoneValue = document.getElementById("phoneValue");
  const descriptionValue = document.getElementById("descriptionValue");

  const emailRegExp = new RegExp(
    "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$"
  );

  emailContainer.forEach((email) => {
    email.addEventListener("click", () => {
      const emailValue = email.textContent;
      requestFormInput.value = emailValue;

      const event = new Event("input", {
        bubbles: true,
        cancelable: true,
      });

      requestFormInput.dispatchEvent(event);
    });
  });

  requestFormSubmit.setAttribute("disabled", true);
  let requestEmailValidate = false;
  let requestData = { email: "" };

  function checkSubmitButtonStatus() {
    if (requestEmailValidate) {
      requestFormSubmit.removeAttribute("disabled");
    } else {
      requestFormSubmit.setAttribute("disabled", true);
    }
  }

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
    }
  }

  requestFormInput.addEventListener("input", (e) => {
    requestEmailValidate = checkValue(
      e,
      emailRegExp,
      emailError,
      emailErrorText
    );
    if (requestEmailValidate) {
      requestData.email = e.target.value;
    }
    checkSubmitButtonStatus();
  });

  requestFormInput.addEventListener("paste", (e) => {
    setTimeout(() => {
      requestEmailValidate = checkValue(
        e,
        emailRegExp,
        emailError,
        emailErrorText
      );
      if (requestEmailValidate) {
        requestData.email = e.target.value;
      }
      checkSubmitButtonStatus();
    }, 0);
  });

  requestForm.addEventListener("submit", checkRequestForm);

  function checkRequestForm(e) {
    e.preventDefault();
    if (requestEmailValidate) {
      checkEmail(requestData);
    }
  }

  async function checkEmail(email) {
    await fetch("/api/requestEmail.php", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(email),
    })
    .then(response => {
        if (!response.ok) {
            if (response.status === 600) {
                responseOk.classList.add("hidden");
                responseNotOk.classList.remove("hidden");
            }
            throw new Error(response.status === 600 ? 'Email не найден' : 'Ошибка сервера');
        }
        responseNotOk.classList.add("hidden");
        return response.json();
    })
    .then(data => {
        companyNameValue.innerHTML = data.company_name;
        emailValue.innerHTML = data.email;
        phoneValue.innerHTML = data.phone;
        descriptionValue.innerHTML = data.description;
        responseOk.classList.remove("hidden");
    })
    .catch(error => {
        console.error('Ошибка:', error.message);
    });
}
});
