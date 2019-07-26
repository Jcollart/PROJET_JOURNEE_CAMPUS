<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>CONTACT</title>
</head>
<body>
<?php include("header2.php") ; ?>
<section class="resume-section p-4 p-lg-5 text-center" id="contact">
        <div class="my-auto">
          <h2 class="mb-4"><i class="fas fa-id-badge"> Information pour contact <i class="fas fa-id-badge"></h2>

          <ul class="fa-ul mb-4 ml-0">
            <li id="mail-address">
<!--               Replace with your email address -->
                <i class="fas fa-envelope-open mr-2 contact-icons"></i>
                Sebastien.ELIE@mairie-charlevillemezieres.fr</a>
            </li>
            <li>
              <i class="fas fa-mobile-alt mr-2 contact-icons"></i>03 24 32 44 40
            </li>
            <li>
              <i class="fas fa-map-marker-alt mr-2 contact-icons"></i>Charleville-Mézières, Fr
            </li>
          </ul>

          <p>
            ...ou laisser votre message ci-dessous et nous vous recontacterons le plus rapidement possible.
          </p>

          <form
            class="contact-form d-flex flex-column align-items-center"
            action="https://formspree.io/jejecollart@hotmail.com"
            method="POST"
          >
            <div class="form-group w-75">
              <input
                type="name"
                class="form-control"
                placeholder="Nom"
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

            <button type="submit" class="btn btn-submit btn-info w-75">Soumettre</button>
          </form>
        </div>
      </section>
      <?php include("footer1.php") ; ?>
      </body>
</html>