    </div><!--content-->

    <footer class="l-siteFooter">
      <div class="b-siteFooter">

        <address class="l-siteCopyright vcard" itemscope itemtype="http://schema.org/Organization">
          <div class="b-siteCopyright">© <?php echo date( 'Y' ); ?> <a rel="me" itemprop="name" class="b-siteCopyright__link fn n org url work" href="<?php echo "http://" . $_SERVER['HTTP_HOST']; ?>">Exibit</a>. Все права защищены</div>
          <div class="b-developerCopyright">Разработано в <a class="b-developerCopyright__link" href="https://ideus.biz/" rel="friend" target="_blank">Подвале</a></div>
        </address>

        <div class="b-footerAuth">
          <button class="b-footerAuth__button js-signUpBtn" type="button">Sign Up</button>
          <button class="b-footerAuth__button js-signInBtn" type="button">Sign In</button>
        </div>

      </div>
    </footer>

    <?php require_once 'inc/modals/signUp.php' ?>
    <?php require_once 'inc/modals/signIn.php' ?>
  </div><!--wrapper-->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-3.6.0.min.js"><\/script>')</script>

  <script src="assets/js/scripts.js?<?php echo filemtime( 'assets/js/scripts.js' ); ?>"></script>

  <!-- Global site tag (gtag.js) - Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXX-Y"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-XXXXX-Y');
  </script>

</body>
</html>
