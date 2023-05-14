document.addEventListener('DOMContentLoaded', function () {
  const doneBtn = document.querySelector('.btn_done');
  const backBtn = document.querySelector('.btn_back');
  const thankyouDiv = document.querySelector('#thankyou');


  const nextBtn = document.querySelector('.btn_next');

  backBtn.addEventListener('click', function () {
    window.location.href = 'fee.html';
  });

  doneBtn.addEventListener('click', function () {
    thankyouDiv.style.display = 'block';
    setTimeout(function () {
      window.location.href = 'vehicle.html';//sign out 
    }, 6000); // redirect to signup.html after 3 seconds
  });
});
