const nextBtn = document.querySelector('.btn_next');

nextBtn.addEventListener("click", function () {
  console.log("Next button clicked");
});

nextBtn.addEventListener('click', () => {
  window.location.href = 'parking.html';
});

