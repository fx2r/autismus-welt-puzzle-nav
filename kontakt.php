<!-- header included -->
<!-- nav included  -->
<?php
session_start();
include ("header.php");
?>
<main>
  <div class="row">
    <aside class="col-lg-2">
      <?php require_once 'sidebars/home.php'; ?>
    </aside>
    <div id="welcome" class="col-lg-10">
      <!-- kontakt formular -->
      <section class="p-4 p-lg-5 text-center" id="contact">
        <div class="my-auto">
          <h2 class="mb-4">Bei Fragen oder Anregungen wende dich an:</h2>

          <ul class="fa-ul mb-4 justify-content-center">
            <li class="" id="mail-address">
      <!-- Eigene E-Mail-Adresse -->
                <i class="fas fa-envelope-open mr-2 contact-icons"></i
                >autismus-welt@beispiel.com</a>
            </li>
            <li class="mx-3">
              <i class="fas fa-mobile-alt mr-2 contact-icons"></i>+43 111 111 111
            </li>
            <li class="">
              <i class="fas fa-map-marker-alt mr-2 contact-icons"></i>Wien, AT
            </li>
          </ul>
          <p>
            ...du kannst auch unser Kontaktformular verwenden:
          </p>

          <form
            class="contact-form d-flex flex-column align-items-center"
            action="https://formspree.io/youremail@mail.com"
            method="POST"
          >
            <div class="form-group w-75">
              <input
                type="name"
                class="form-control"
                placeholder="Name"
                name="name"
                required
              />
            </div>
            <div class="form-group w-75">
              <input
                type="email"
                class="form-control"
                placeholder="Email"
                name="name"
                required
              />
            </div>

            <div class="form-group w-75">
              <textarea
                class="form-control"
                type="text"
                placeholder="Message"
                rows="7"
                name="name"
                required
              ></textarea>
            </div>
            <button type="submit" class="btn btn-submit btn-info w-75">Senden</button>
          </form>
        </div>
      </section>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>
</body>
</html>