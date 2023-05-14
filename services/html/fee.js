const nextBtn = document.querySelector('.btn_next');
const backBtn = document.querySelector('.btn_back');

nextBtn.addEventListener('click', function () {
  window.location.href = 'slot.html';
});
backBtn.addEventListener('click', function () {
  window.location.href = 'parking.html';
});