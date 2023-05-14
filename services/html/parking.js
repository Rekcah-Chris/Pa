const nextBtn = document.querySelector('.btn_next');
const backBtn = document.querySelector('.btn_back');

backBtn.addEventListener('click', function () {
  window.location.href = 'vehicle.html';
});
nextBtn.addEventListener('click', function () {
  window.location.href = 'fee.html';
});
