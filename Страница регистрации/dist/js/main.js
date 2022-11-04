"use strict"

window.onload = function () {

  const menu = document.querySelector(".header__menu");

document.addEventListener("click", function (e) {
  if(e.target.closest(".burger")) {
    menu.classList.add("menu-active")
    document.body.style.overflow = "hidden";
  }
  if (e.target.closest(".header__exit-menu")) {
    menu.classList.remove("menu-active")
    document.body.style.overflow = "";
  }
  if (e.target.closest(".nav__link")) {
    menu.classList.remove("menu-active")
    document.body.style.overflow = "";
  }
})

  class romanTabs {
  constructor(selector, options) {
    let defaultOptions = {
      isChanged: () => {},
    }
    this.options = Object.assign(defaultOptions, options);
    this.selector = selector;
    this.tabs = document.querySelector(`[data-tabs="${selector}"]`);
    if (this.tabs) {
      this.tabList = this.tabs.querySelector(".tabs__nav");
      this.tabBtn = this.tabList.querySelectorAll(".tabs__button");
      this.tabPanel = this.tabs.querySelectorAll(".tabs__panel");
    } else {
      console.error("Селектора data-tabs не существует");
      return;
    }

    this.check();
    this.init();
    this.events();
  }

  check() {
    if (document.querySelectorAll(`[data-tabs="${this.selector}"]`).length > 1) {
      console.error("Количество элементов с одинаковым data-tabs больше 1");
      return;
    }


    if (this.tabBtn.length !== this.tabPanel.length) {
      console.error("Количество кнопок и контента табов не совпадает");
      return;
    }
  }

  init() {
    this.tabList.setAttribute("role", "tablist");
    this.tabBtn.forEach((el, i) => {
      el.setAttribute("role", "tab");
      el.setAttribute("tabindex", "-1");
      el.setAttribute("id", `${this.selector}${i + 1}`);
      el.classList.remove("tabs-button-active")
    })
    this.tabPanel.forEach((el, i) => {
      el.setAttribute("role", "tabpanel");
      el.setAttribute("tabindex", "-1");
      el.setAttribute("aria-labelledby", this.tabBtn[i].id);
      el.classList.remove("tabs-panel-active")
    })

    this.tabBtn[0].classList.add("tabs-button-active");
    this.tabBtn[0].removeAttribute("tabindex");
    this.tabBtn[0].setAttribute("aria-selected", "true");
    this.tabPanel[0].classList.add("tabs-panel-active");
  }

  events() {
    this.tabBtn.forEach((el, i) => {
      el.addEventListener("click", (e) => {
        let currentTab = this.tabList.querySelector("[aria-selected]");

        if (e.currentTarget !== currentTab) {
          this.switchTab(e.currentTarget, currentTab);
        }
      });
      el.addEventListener("keydown", (e) => {
        let index = Array.prototype.indexOf.call(this.tabBtn, e.currentTarget); // находим текущий элемент в this.tabBtn

        let dir = null; // переменная направления

        if (e.which === 37) { // если нажимается стрелочка влево то отнимаем 1 у индекса тем самым идем назад
          dir = index - 1;
        } else if (e.which === 39) { // если нажимается стрелочка влево то прибавляем 1 к индексу тем самым идем вперед
          dir = index + 1;
        } else if (el.which === 40) { // если нажимается стрелочка в низ то дается down
          dir = "down";
        } else {
          dir = null;
        }

        if (dir !== null) {
          if (dir === "down") {
            this.tabPanel[i].focus();
          } else if (this.tabBtn[dir]) {
            this.switchTab(this.tabBtn[dir], e.currentTarget)
          } else {

          }
        }
      });
    });

  }

  switchTab(newTab, oldTab = this.tabs.querySelector("[aria-selected]")) {
    newTab.focus();
    newTab.removeAttribute("tabindex");
    newTab.setAttribute("aria-selected", "true");

    oldTab.removeAttribute("aria-selected");
    oldTab.setAttribute("tabindex", "-1");

    let index = Array.prototype.indexOf.call(this.tabBtn, newTab);
    let oldIndex = Array.prototype.indexOf.call(this.tabBtn, oldTab);

    this.tabPanel[oldIndex].classList.remove("tabs-panel-active");
    this.tabPanel[index].classList.add("tabs-panel-active");

    this.tabBtn[oldIndex].classList.remove("tabs-button-active");
    this.tabBtn[index].classList.add("tabs-button-active");

    this.options.isChanged(this);
  }
}


// Если вдруг все умрет, то создаем отдельный файл js с инициализацией 

const tabs1 = new romanTabs("tab", { // инициализация
});

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

  const tabsFormSelectOne = document.querySelector('.tabs-form-select-1'); // элемент choices
const tabsFormSelectTwo = document.querySelector('.tabs-form-select-2'); // элемент choices
const choicesOne = new Choices(tabsFormSelectOne, {
  searchEnabled: false,
});
const choicesTwo = new Choices(tabsFormSelectTwo, {
  searchEnabled: false,
});
}