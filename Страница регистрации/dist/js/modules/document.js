document.addEventListener("click", function (e) {
  if (e.target.closest(".tabs-form__see")) {
    document.querySelectorAll(".see-init").forEach(function (q) {
      q.classList.remove("see-init-active")
      q.classList.add("see-init-active")
    })
    document.querySelectorAll(".tabs-form__input_see").forEach(function (w) {
      w.setAttribute("type", "text")
    })
  }
  if (e.target.closest(".tabs-form__nosee")) {
    document.querySelectorAll(".see-init").forEach(function (q) {
      q.classList.remove("see-init-active")
    })
    document.querySelectorAll(".tabs-form__input_see").forEach(function (w) {
      w.setAttribute("type", "password")
    })
  }
  if (e.target.closest(".tabs__button")) {
    document.querySelectorAll(".see-init").forEach(function (q) {
      q.classList.remove("see-init-active")
    })
    document.querySelectorAll(".tabs-form__input_see").forEach(function (w) {
      w.setAttribute("type", "password")
    })
    document.querySelectorAll(".checkboxs__checkbox_terms").forEach(function (q) {
      q.classList.remove("terms-active")
    })
    document.querySelectorAll(".tabs-form__button").forEach(function (q) {
      q.classList.remove("tabs-form-button-active")
    })
    document.querySelectorAll(".checkboxs__checkbox_i").forEach(function (q) {
      q.classList.remove("i-active")
    })
  }
  if (e.target.closest(".checkboxs__checkbox_terms")) {
    document.querySelectorAll(".checkboxs__checkbox_terms").forEach(function (q) {
      q.classList.toggle("terms-active")
    })
    document.querySelectorAll(".tabs-form__button").forEach(function (q) {
      q.classList.toggle("tabs-form-button-active")
    })

  }
  if (e.target.closest(".checkboxs__checkbox_i")) {
    document.querySelectorAll(".checkboxs__checkbox_i").forEach(function (q) {
      q.classList.toggle("i-active")
    })
  }
})