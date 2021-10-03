<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous" />
    <!-- my style -->
    <link rel="stylesheet" href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <title>Food Delivery</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="nav">
      <div class="nav-logo">
        <a href="#"><img class="logo" src="assets/img/logo.png" alt="logo" /></a>
      </div>

      <div class="nav-menu" id="menu">
        <ul class="nav-list">
          <li class="nav-item">
            <a href="#" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#product" class="nav-link">Product</a>
          </li>
          <li class="nav-item">
            <a href="#faq" class="nav-link">Faq</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
      <div class="nav-icon">
        <i class="fas fa-bars" id="icon" onclick="changeIcon(this)"></i>
      </div>
    </nav>

    <!-- Hero Section  -->
    <div class="hero-container" id="product">
      <div class="hero">
        <div class="hero-text-container">
          <h1 class="hero-title">Food apps</h1>
          <h1 class="hero-description">
            <p>Why stay hungry when</p>
            <p>you can order form Bella Onojie</p>
          </h1>
          <p class="hero-download">Download the bella onoje’s food app now on</p>
        </div>
        <div class="hero-store">
          <button class="hero-playstore">Playstore</button>
          <button class="hero-appstore">App Store</button>
        </div>
        <div class="hero-mobile-img">
          <img src="assets/img/mobile1.png" alt="download" loading="lazy" />
        </div>
      </div>
    </div>
    <!-- Content -->
    <div class="content" id="faq">
      <hr class="line" />
      <h1 class="content-title">How the app works</h1>

      <!-- Create an account -->
      <div class="account-container">
        <div class="account-img" data-aos="fade-right">
          <img src="assets/img/mobile2.png" alt="account" loading="lazy" />
        </div>
        <div class="account-text-container" data-aos="fade-left">
          <h2 class="account-title">Create an account</h2>
          <h1 class="account-description1">Create/login to an existing account to get started</h1>
          <p class="account-description2">An account is created with your email and a desired password</p>
        </div>
      </div>

      <!-- Explore varieties -->
      <div class="explore-container">
        <div class="explore-text-container" data-aos="zoom-in-right">
          <h2 class="explore-title">Explore varieties</h2>
          <h1 class="explore-description1">Shop for your favorites meal as e dey hot.</h1>
          <p class="explore-description2">Shop for your favorite meals or drinks and enjoy while doing it.</p>
        </div>
        <div class="explore-img" data-aos="zoom-in-left">
          <img src="assets/img/mobile3.png" alt="explore" loading="lazy" />
        </div>
      </div>

      <!-- Checkout -->
      <div class="checkout-container">
        <div class="checkout-img" data-aos="zoom-out-right">
          <img src="assets/img/mobile4.png" alt="checkout" loading="lazy" />
        </div>
        <div class="checkout-text-container" data-aos="zoom-out-left">
          <h2 class="checkout-title">Checkout</h2>
          <h1 class="checkout-description1">When you done check out and get it delivered.</h1>
          <p class="checkout-description2">When you done check out and get it delivered with ease.</p>
        </div>
      </div>

      <!-- Download -->
      <div class="download-container">
        <div class="download-text-container">
          <h1 class="download-title">Download the app now.</h1>
          <p class="download-description">Available on your favorite store. Start your premium experience now</p>
          <div class="download-store">
            <button class="download-playstore">Playstore</button>
            <button class="download-appstore">App Store</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="footer" id="contact">
      <div class="footer-logo">
        <a href="#"><img src="assets/img/logo.png" alt="footer logo" /></a>
      </div>
      <div class="footer-icon">
        <a href="#"><img class="twitter" src="assets/img/icons/twitter.svg" alt="twitter" /></a>
        <a href="#"><img class="facebook" src="assets/img/icons/facebook.svg" alt="facebook" /></a>
        <a href="#"><img class="instagram" src="assets/img/icons/instagram.svg" alt="instagram" /></a>
      </div>
      <div class="footer-copyright"><p>Copywright 2020 Bella Onojie.com</p></div>
    </div>

    <!-- Scroll Up -->
    <div class="scroll-up" id="scrollBtn" onclick="scrollUp()">
    <i class="fas fa-chevron-up scroll-icon"></i>
    </div>

    <!-- Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>
