// скрипт для селектов
document.querySelectorAll('.dropdown').forEach((select) => {

  const dropDownCurrent = select.querySelector('.dropdown__current');
  const dropDownList = select.querySelector('.dropdown__list');
  const dropDownItem = dropDownList.querySelectorAll('.dropdown__list-item');

  const dropDownTitle = select.querySelector('.dropdown__title');


  dropDownCurrent.addEventListener('click', (e) => {
    e.preventDefault();
    e.stopPropagation();
    dropDownCurrent.classList.toggle('active');
    dropDownCurrent.parentNode.classList.toggle('_active');
    dropDownList.classList.toggle('active');
  });

  dropDownItem.forEach((item) => {
    item.addEventListener('click', (e) => {

      e.stopPropagation();
      dropDownCurrent.innerText = item.querySelector('div').innerText;
      dropDownCurrent.focus();
      dropDownList.classList.remove('active');
      dropDownCurrent.classList.remove('active');
      dropDownCurrent.parentNode.classList.remove('_active');

      dropDownItem.forEach((e) => {
        e.classList.remove('active');
      });

      item.classList.add('active');

    });
  });

  document.addEventListener('click', (e) => {
    if (e.target !== dropDownCurrent) {
      dropDownList.classList.remove('active');
      dropDownCurrent.classList.remove('active');
      dropDownCurrent.parentNode.classList.remove('_active');
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Tab' || e.key === 'Escape') {
      dropDownList.classList.remove('active');
      dropDownCurrent.classList.remove('active');
      dropDownCurrent.parentNode.classList.remove('_active');
    }
  });

});