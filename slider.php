<?php
$pageName = 'Slider';
$siteName = 'Testing';
$uri      = 'sliders';
require( 'inc/header.php' );
?>

<main class="l-contentText">

  <div class="l-slider">
    <div class="b-slider">

      <h1 class="b-slider__title">Slider</h1>

      <div class="b-slider__slider swiper">
        <div class="swiper-wrapper">
          <div class="b-slider__slide swiper-slide">
            <img src="/assets/img/userfiles/firstScreen-bg.jpg" alt="" class="b-slider__slideImg">
            <div class="b-slider__slideText">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi eveniet facilis hic inventore labore quidem.</p>
              <h6>Slide 1</h6>
            </div>
          </div>

          <div class="b-slider__slide swiper-slide">
            <img src="/assets/img/userfiles/firstScreen-bg.jpg" alt="" class="b-slider__slideImg">
            <div class="b-slider__slideText">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi eveniet facilis hic inventore labore quidem.</p>
              <h6>Slide 2</h6>
            </div>
          </div>

          <div class="b-slider__slide swiper-slide">
            <img src="/assets/img/userfiles/firstScreen-bg.jpg" alt="" class="b-slider__slideImg">
            <div class="b-slider__slideText">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi eveniet facilis hic inventore labore quidem.</p>
              <h6>Slide 3</h6>
            </div>
          </div>

          <div class="b-slider__slide swiper-slide">
            <img src="/assets/img/userfiles/firstScreen-bg.jpg" alt="" class="b-slider__slideImg">
            <div class="b-slider__slideText">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi eveniet facilis hic inventore labore quidem.</p>
              <h6>Slide 4</h6>
            </div>
          </div>
        </div>

        <div class="b-slider__button swiper-button-next"></div>
        <div class="b-slider__button swiper-button-prev"></div>
      </div>

    </div>
  </div>

</main>

<?php require( 'inc/footer.php' ); ?>
