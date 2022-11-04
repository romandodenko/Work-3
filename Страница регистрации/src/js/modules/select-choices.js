const tabsFormSelectOne = document.querySelector('.tabs-form-select-1'); // элемент choices
const tabsFormSelectTwo = document.querySelector('.tabs-form-select-2'); // элемент choices
const choicesOne = new Choices(tabsFormSelectOne, {
  searchEnabled: false,
});
const choicesTwo = new Choices(tabsFormSelectTwo, {
  searchEnabled: false,
});