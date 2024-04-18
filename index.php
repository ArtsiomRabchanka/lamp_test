<?php
  require("src/getCountry.php");
  if(isset($_POST['phone_number'])) {
    $form_action = new getCountry($_POST);
    $country_name = $form_action->get_country();
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Get country name by phone nuber!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/main.css">
  </head>
  <body class="position-relative">
    <h1>Get country name by phone nuber!</h1>
    <form method="post">
      <div class="m-3">
          <input type="text" name="phone_number" required="required" placeholder="Enter phone number" />
      </div>

      <button type="submit" class="m-3">Get country name</button>
    </form>
    <div class="m-3"><?php echo $country_name ?? ''; ?></div>
    <div class="d-none cookie-popup bg-info p-2 col-3 d-flex justify-content-center align-items-center flex-column position-absolute bottom-0 end-0">
      <p>We need your cookies</p>
      <div>
        <button class="cookie-close">Close</button>
        <button class="cookie-accept">Accept</button>
      </div>
    </div>
    <div class="main-wrapper">
      <main>
        <section class="top-section">
          <div class="container">
            <div class="top-section-wrapper">
              <div class="top-section__body">
                <div class="top-section__title">Fulfillment dla e-Commerce</div>
                <div class="top-section__content">
                  <ul>
                    <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Przyjęcie i magazynowanie towarów</span></li>
                    <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Kompletacja i pakowanie zamówień</span></li>
                    <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Obsługa zwrotów i reklamacji</span></li>
                    <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Integracja z Twoją platformą</span></li>
                    <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Wysyłki na cały świat</span></li>
                  </ul>
                </div>
                <div class="top-section-btn">
                  <a href="uslugi/" class="btn btn_new">Więcej</a>
                </div>
              </div>
            </div>
          </div>
          <div class="decor-elipse1"><img src="/assets/template/images/Ellipse72.svg" alt=""></div>
          <div class="decor-elipse2"><img src="/assets/template/images/Ellipse70.svg" alt=""></div>
        </section>
      </main>
    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdn.rawgit.com/jackmoore/colorbox/master/jquery.colorbox-min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="/assets/js/index.js"></script>
  </body>
</html>