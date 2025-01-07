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
          alert("Форма отправлена!");
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
          alert("Форма отправлена!");
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
          alert("Форма отправлена!");
        } else {
          alert("Ошибка. Текст ошибки: ".response.statusText);
        }
      });
    };
    ajaxSend(formData);
  });
