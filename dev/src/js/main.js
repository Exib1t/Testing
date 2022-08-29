// Authors: %Author Name%

$(function() {
  // cursorAnimInit();
  sliderInit();
  hamburgersInit();
  signUpToggle();
  signInToggle();
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

function signUpToggle() {
  $('.js-signUpBtn').on('click', ()=> {
    $('.js-signUp').addClass('-opened');
  });

  $('.js-signUpClose').on('click', ()=> {
    $('.js-signUp').removeClass('-opened');
  });

  document.addEventListener('click', (e)=> {
    if (e.target === document.querySelector('.l-signUp')) {
      document.querySelector('.l-signUp').classList.remove('-opened');
    }
  });
}

function signInToggle() {
  $('.js-signInBtn').on('click', ()=> {
    $('.js-signIn').addClass('-opened');
  });

  $('.js-signInClose').on('click', ()=> {
    $('.js-signIn').removeClass('-opened');
  });

  document.addEventListener('click', (e)=> {
    if (e.target === document.querySelector('.l-signIn')) {
      document.querySelector('.l-signIn').classList.remove('-opened');
    }
  });
}
