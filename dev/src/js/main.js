// Authors: %Author Name%

$(function() {
  // cursorAnimInit();
  sliderInit();
  hamburgersInit();
});

$(window).on('resize', function() {

});

$(window).on('load', function() {

});

function cursorAnimInit() {
  const elem = document.querySelector('.b-cursor');

  document.addEventListener('mousemove', (e) => {
    elem.style.top = e.pageY + 'px';
    elem.style.left = e.pageX + 'px';
  });
}

function sliderInit() {
  const swiper = new Swiper('.swiper', {
    loop: true,
    spaceBetween: 20,
    grabCursor: true,
    slidesPerView: 3,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
}

function hamburgersInit() {
  document.querySelectorAll('.hamburger').forEach((hamburger)=> {
    hamburger.addEventListener('click', ()=> {
      hamburger.classList.toggle('is-active');
    });
  });
}
