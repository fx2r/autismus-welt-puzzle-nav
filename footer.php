    <footer class="d-flex text-light pt-5 pb-5 flex-column flex-md-row py-3 ">
      <div class="col-2 d-flex justify-content-center align-items-center">
        <img src="img/Autisten-Welt.png" alt="logo" class="d-none d-md-block w-md-75" style="
    max-width: 75%;">
      </div>
      <div class="col text-center text-md-left py-3 py-md-0">
        <h5 class="font-weight-bolder text-light">Autisten-Welt</h5>
        <p class="short-about">
          Das Thema Autismus steckt in Österreich noch in den Kinderschuhen – es muss etwas getan werden!<br>
          Wir wollen Eltern/ Erziehungsberechtigte autistischer Kinder die Odyssee vor und nach der Diagnose ersparen, und unsere und eure (Er-)kenntnisse und Erfahrungen teilen. Je früher Autismus erkannt wird, desto größer sind die Chancen den Kindern durch geeignete Therapien, passende Schulen und den richtigen Umgang mit ihrer Besonderheit den Weg in ein erfülltes Leben zu bahnen.
        </p>
        <div class="footer-social-link mt-2">
            <a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook mt-2 mr-3 text-light"></i></a>
            <a href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter mt-2 mr-3 text-light"></i></a>
            <a href="http://www.instragram.com" target="_blank"><i class="fab fa-instagram mt-2 mr-3 text-light"></i></a>
            <a href="http://www.youtube.com" target="_blank"><i class="fab fa-youtube mt-2 mr-3 text-light"></i></a>
        </div>
      </div>
      <div class="col py-3 mx-md-3 col-md-3 py-md-0 text-light text-center text-md-left">
        <h5 class="font-weight-bolder">Auf den ersten Blick</h5>
        <ul class="m-md-0 p-md-0 md-footer-nav mr-4 d-flex flex-column">
            <li><a href="index.php">Home</a></li>
            <li><a href="page.php?contentid=2">Wir Sind</a></li>
            <li><a href="page.php?contentid=6">Was ist ASS</a></li>
            <li><a href="page.php?contentid=8">Diagnose</a></li>
            <li><a href="page.php?contentid=31">Finanzielle Unterstützung</a></li>

            <li><a href="page.php?contentid=41">Veranstaltungen</a></li>
            <li><a href="page.php?contentid=42">ASS in den Medien</a></li>
            <li><a href="impressum.php">Impressum</a></li>
            <li><a href="agb.php">AGB</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
        </ul>
      </div>
     <div class="col-lg-3 py-3 pt-sm-0 text-center text-md-right pb-2 pb-md-0">
        <p class="contact-info text-light"><i class="fa fa-map-marker"></i>Wien, AT</p>
        <p class="contact-info"><i class="fa fa-envelope text-light"></i> <a href="mailto:info@ourdomain.com">autismus-welt@gmail.com</a></p>
        <p class="contact-info"><i class="fa fa-phone text-light"></i> <a href="tel:+43 523 689 101">+43 523 689 101</a></p>
        <div class="footer-subscription-form mt-5 mb-2">

            <?php if (isset($_SESSION['user'])){
              ?>

              <a  id="login" class="nav-link btn btn-default" href="logout.php?logout"><i class="fas fa-sign-out-alt"></i></a>
              <?php }else { ?>
              <a  id="login" class="nav-link mr-0" href="login.php"><button type="submit" name="btn-login" class="ml-3"><i class="fas fa-user-lock"></i></button></a>

              <?php } ?>
        </div>
      </div>
      </div>
    </footer> 
</div> <!-- container - close -->  