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

/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 (  */
  return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ") ";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});
