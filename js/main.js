let currentModal;
let modalDialogue;
let successModal = document.querySelector("#success-modal");

const modalButtons = document.querySelectorAll("[data-toggle=modal]");
modalButtons.forEach((button) => {
  button.addEventListener("click", (event) => {
    event.preventDefault();
    currentModal = document.querySelector(button.dataset.target);
    currentModal.classList.toggle("is-open");
    modalDialogue = currentModal.querySelector(".modal-dialogue");
    currentModal.addEventListener("click", (event) => {
      if (!event.composedPath().includes(modalDialogue)) {
        currentModal.classList.remove("is-open");
      }
    });
  });
});
document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && currentModal.classList.contains("is-open")) {
    currentModal.classList.toggle("is-open");
  }
});

// form validation
const validationPhone = new JustValidate("form", {
  errorFieldCssClass: "is-invalid",
  errorLabelStyle: {
    color: "red",
    textDecoration: "underlined",
  },
});

validationPhone
  .addField("[name=user_phone]", [
    {
      rule: "required",
      errorMessage: "Укажите телефон",
    },
    {
      rule: "maxLength",
      value: 50,
      errorMessage: "Максимально 50 символов",
    },
  ])
  .addField("#input-checkbox", [
    {
      rule: "required",
      errorMessage: "Обязательное поле!",
    },
  ])
  .onSuccess((event) => {
    const thisForm = event.target;
    const formData = new FormData(thisForm);
    const ajaxSend = (formData) => {
      fetch(thisForm.getAttribute("action"), {
        method: thisForm.getAttribute("method"),
        body: formData,
      }).then((response) => {
        if (response.ok) {
          thisForm.reset();
          currentModal.classList.remove("is-open");
          successModal.classList.add("is-open");
          currentModal = successModal;
          modalDialogue = currentModal.querySelector(".modal-dialogue");
          currentModal.addEventListener("click", (event) => {
            if (!event.composedPath().includes(modalDialogue)) {
              currentModal.classList.remove("is-open");
            }
          });
        } else {
          alert("Ошибка. Текст ошибки: ".response.statusText);
        }
      });
    };
    ajaxSend(formData);
  });

const validationModalPhone = new JustValidate("#modal-form", {
  errorFieldCssClass: "is-invalid",
});

validationModalPhone
  .addField("#modal-user-phone", [
    {
      rule: "required",
      errorMessage: "Укажите телефон",
    },
    {
      rule: "maxLength",
      value: 50,
      errorMessage: "Максимально 50 символов",
    },
  ])
  .addField("#modal__input-checkbox", [
    {
      rule: "required",
      errorMessage: "Обязательное поле!",
    },
  ])
  .onSuccess((event) => {
    const thisForm = event.target;
    const formData = new FormData(thisForm);
    const ajaxSend = (formData) => {
      fetch(thisForm.getAttribute("action"), {
        method: thisForm.getAttribute("method"),
        body: formData,
      }).then((response) => {
        if (response.ok) {
          thisForm.reset();
          currentModal.classList.remove("is-open");
          successModal.classList.add("is-open");
          currentModal = successModal;
          modalDialogue = currentModal.querySelector(".modal-dialogue");
          currentModal.addEventListener("click", (event) => {
            if (!event.composedPath().includes(modalDialogue)) {
              currentModal.classList.remove("is-open");
            }
          });
        } else {
          alert("Ошибка. Текст ошибки: ".response.statusText);
        }
      });
    };
    ajaxSend(formData);
  });

const validationEmail = new JustValidate("#email-form", {
  errorFieldCssClass: "is-invalid",
});

validationEmail
  .addField("#user-email", [
    {
      rule: "required",
      errorMessage: "Укажите почту",
    },
    {
      rule: "email",
      errorMessage: "Электронный адрес недействителен!",
    },
  ])
  .onSuccess((event) => {
    const thisForm = event.target;
    const formData = new FormData(thisForm);
    const ajaxSend = (formData) => {
      fetch(thisForm.getAttribute("action"), {
        method: thisForm.getAttribute("method"),
        body: formData,
      }).then((response) => {
        if (response.ok) {
          thisForm.reset();
          currentModal.classList.remove("is-open");
          successModal.classList.add("is-open");
          currentModal = successModal;
          modalDialogue = currentModal.querySelector(".modal-dialogue");
          currentModal.addEventListener("click", (event) => {
            if (!event.composedPath().includes(modalDialogue)) {
              currentModal.classList.remove("is-open");
            }
          });
        } else {
          alert("Ошибка. Текст ошибки: ".response.statusText);
        }
      });
    };
    ajaxSend(formData);
  });
