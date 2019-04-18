<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
  <div class="col-12 col-lg-2 mt-lg-4 justify-content-between d-flex">
    <!-- Brand -->
    <a href="index.php"><img src="img/logo_landscape.png" alt="logo" class="pr-4 min-width-logo w-25 w-lg-100"></a>
    <!--Button for Toggle Breakdown -->
    <button type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>

  <div class="collapse navbar-collapse col-10" id="navbarTogglerDemo02">
    <ul class="navbar-nav mt-2 mt-lg-0 d-flex flex-wrap">
      <li class="nav-item dropdown ml-minus-custom">
        <a class="nav-link section" href="#" id="navbardrop" data-toggle="dropdown"><?php echo file_get_contents("img/svg/puzzle-piece-ueber-uns.svg"); ?></a>
        <div class="dropdown-menu bg-ueber-uns">
          <a class="dropdown-item puzzle" href="page.php?contentid=2">Wir Sind</a>
          <a class="dropdown-item" href="page.php?contentid=3">Warum Sind Wir </a>
          <a class="dropdown-item" href="page.php?contentid=4">Sponsoren</a>
          <a class="dropdown-item" href="page.php?contentid=5">Vernetzung</a>
        </div>
      </li>
      <li class="nav-item dropdown ml-minus-custom">
        <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown"><?php echo file_get_contents("img/svg/puzzle-piece-autismus.svg"); ?></a>
        <div class="dropdown-menu bg-autismus">
          <a class="dropdown-item" href="page.php?contentid=6">Was ist ASS</a>
          <a class="dropdown-item" href="page.php?contentid=7">Ausprägung </a>
          <a class="dropdown-item" href="page.php?contentid=8">Diagnose</a>
          <a class="dropdown-item" href="page.php?contentid=9">Früherkennung</a>
          <a class="dropdown-item" href="page.php?contentid=10">Therapie-Methoden</a>
          <a class="dropdown-item" href="page.php?contentid=11">ICD-Kategorien </a>
          <a class="dropdown-item" href="page.php?contentid=12">Berühmte Leute</a>
        </div>
      </li>
      <li class="nav-item dropdown ml-minus-custom">
        <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown"><?php echo file_get_contents("img/svg/puzzle-piece-recht.svg"); ?></a>
        <div class="dropdown-menu bg-recht">
          <a class="dropdown-item" href="page.php?contentid=13">Schule</a>
          <a class="dropdown-item" href="page.php?contentid=14">Familienbeihilfe</a>
          <a class="dropdown-item" href="page.php?contentid=15">Pflegegeld</a>
          <a class="dropdown-item" href="page.php?contentid=16">Behindertenausweis</a>
        </div>
      </li>
      <li class="nav-item dropdown ml-minus-custom">
        <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown"><?php echo file_get_contents("img/svg/puzzle-piece-wohin-wenden.svg"); ?></a>
        <div class="dropdown-menu bg-wohin-wenden">
          <a class="dropdown-item" href="page.php?contentid=17">Diagnose</a>
          <a class="dropdown-item" href="page.php?contentid=18">Therapien</a>
          <a class="dropdown-item" href="page.php?contentid=19">Ärzte</a>
          <a class="dropdown-item" href="page.php?contentid=20">Auch noch Hilfe</a>
          <a class="dropdown-item" href="page.php?contentid=21">Selbsthilfegruppe</a>
        </div>
      </li>
      <li class="nav-item dropdown ml-minus-custom">
        <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown"><?php echo file_get_contents("img/svg/puzzle-piece-erfahrungen.svg"); ?></a>
        <div class="dropdown-menu bg-erfahrungen">
          <a class="dropdown-item" href="page.php?contentid=22">Eltern Berichten</a>
          <a class="dropdown-item" href="page.php?contentid=23">Betroffene Berichten</a>
          <a class="dropdown-item" href="page.php?contentid=24">The Bright Side </a>
        </div>
      </li>
      <li class="nav-item dropdown ml-minus-custom">
        <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown"><?php echo file_get_contents("img/svg/puzzle-piece-tipps-und-tricks.svg"); ?></a>
        <div class="dropdown-menu bg-tipps-und-tricks">
          <a class="dropdown-item" href="page.php?contentid=25">Schule</a>
          <a class="dropdown-item" href="page.php?contentid=26">Finanzielle Unterstützung</a>
          <a class="dropdown-item" href="page.php?contentid=27">Fachliteratur </a>
          <a class="dropdown-item" href="page.php?contentid=28">Therapie-Material</a>
          <a class="dropdown-item" href="page.php?contentid=29">Belletristik</a>
          <a class="dropdown-item" href="page.php?contentid=30">Freizeit </a>
          <a class="dropdown-item" href="page.php?contentid=31">Einkaufen</a>
          <a class="dropdown-item" href="page.php?contentid=32">Lokale</a>
          <a class="dropdown-item" href="page.php?contentid=33">Spiele </a>
          <a class="dropdown-item" href="page.php?contentid=34">Filme/Serien</a>
          <a class="dropdown-item" href="page.php?contentid=35">Links</a>
        </div>
      </li>
      <li class="nav-item dropdown ml-minus-custom">
        <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown"><?php echo file_get_contents("img/svg/puzzle-piece-aktuelles.svg"); ?></a>
        <div class="dropdown-menu bg-aktuelles">
          <a class="dropdown-item"  href="page.php?contentid=36">Veranstaltungen</a>
          <a class="dropdown-item"  href="page.php?contentid=37">News</a>
        </div>
      </li>
      <li class="nav-item ml-minus-custom">
        <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown"><?php echo file_get_contents("img/svg/puzzle-piece-forum.svg"); ?></a>
      </li>
    </ul>
  </div>
</nav>