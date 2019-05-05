    <footer class="d-flex text-light pt-5 pb-5 flex-column flex-md-row py-3 bg-custom">
      <div class="col-2 d-none justify-content-center align-items-center">
        <img src="img/Autisten-Welt.png" alt="logo" class="mw-lg-75">
      </div>
      <div class="col-md-2 col-lg text-center d-flex flex-column justify-content-between text-md-left py-3 py-md-0">
        <div class="d-none d-lg-block">
          <h5 class="font-weight-bolder text-light">Autisten-Welt</h5>
          <p class="short-about">
            Das Thema Autismus steckt in Österreich noch in den Kinderschuhen – es muss etwas getan werden!<br>
            Wir wollen Eltern/ Erziehungsberechtigte autistischer Kinder die Odyssee vor und nach der Diagnose ersparen, und unsere und eure (Er-)kenntnisse und Erfahrungen teilen. Je früher Autismus erkannt wird, desto größer sind die Chancen den Kindern durch geeignete Therapien, passende Schulen und den richtigen Umgang mit ihrer Besonderheit den Weg in ein erfülltes Leben zu bahnen.
          </p>
        </div>
        <div class=" d-flex justify-content-center flex-md-column align-items-md-center h-md-100 h-lg-auto justify-content-md-between footer-social-link flex-lg-row mt-auto mt-md-0">
            <a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook fa-3x mx-3 mx-md-0 mt-2 mr-lg-3 text-light"></i></a>
            <a href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter fa-3x mx-3 mx-md-0 mt-2 mr-lg-3 text-light"></i></a>
            <a href="http://www.instragram.com" target="_blank"><i class="fab fa-instagram fa-3x mx-3 mx-md-0 mt-2 mr-lg-3 text-light"></i></a>
            <a href="http://www.youtube.com" target="_blank"><i class="fab fa-youtube fa-3x mx-3 mx-md-0 mt-2 mr-0 mr-lg-3 text-light"></i></a>
        </div>
      </div>
      <div class="col py-3 mx-lg-3 col-lg-3 py-md-0 text-light text-center text-md-left">
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
     <div class="col-md-5 offset-md-1 offset-lg-0 col-lg-3 py-3 pt-sm-0 text-center text-md-right pb-2 pb-md-0 d-flex flex-column">
        <h5 class="font-weight-bolder">Kontakt</h5>
        <div class="d-flex justify-content-center justify-content-md-between">
            <i class="fa fa-map-marker fa-lg pr-2 mt-2"></i>
            <span>Wien, AT</span>
        </div>
        <div class="d-flex justify-content-center justify-content-md-between">
            <a href="mailto:info@ourdomain.com"><i class="fa fa-envelope fa-lg pr-2 text-light mt-1"></i></a>
            <a href="mailto:info@ourdomain.com">autismus-welt@gmail.com</a>  
        </div>
        <div class="mt-5 mt-md-auto">
            <?php if (isset($_SESSION['user'])){
              ?>
              <a id="login" class="btn btn-default" href="logout.php?logout"><i class="fas fa-sign-out-alt"></i></a>
              <?php }else { ?>
              <a id="login" href="login.php" type="submit" name="btn-login"><i class="fas fa-sign-in-alt fa-2x"></i></a>
            <?php } ?>
        </div>
      </div>
      </div>
    </footer> 
</div> <!-- container - close -->  