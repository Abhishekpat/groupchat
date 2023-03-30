<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="icon" href="/imgs/fav.png" />

    <link rel="stylesheet" href="style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <section class="signup-form">
      <div class="about-info">
        <img
          class="company-logo"
          src="imgs/hertzsoft.png"
          alt="Hertzsoft Logo"
        />
        <div class="information-head">
          <div class="information-block">
            <img
              class="hero-illustration"
              src="imgs/hero-illustration-2.png"
              alt="Hero Illustration"
            />
            <!-- <div class="about-block">
              <p class="about-heading">About Us</p>
              <p class="about-text">
                Hertzsoft is a renowned name specially for Web App Development &
                Certification Courses. We provide Web Design & Development,
                Mobile App Development, Final Year Projects and Business
                Branding Services.
                <br />
                <br />
                Hertzsoft announced a record of 22 projects just within it's
                first birth anniversary.
              </p>
            </div> -->
            <div class="socials-block">
              <a href="#">
                <ion-icon class="social-icon" name="logo-whatsapp"></ion-icon>
              </a>
              <a href="#">
                <ion-icon class="social-icon" name="logo-facebook"></ion-icon>
              </a>
              <a href="#">
                <ion-icon class="social-icon" name="logo-instagram"></ion-icon>
              </a>
              <a href="#">
                <ion-icon class="social-icon" name="logo-linkedin"></ion-icon>
              </a>
              <a href="#">
                <ion-icon class="social-icon" name="logo-youtube"></ion-icon>
              </a>
              <a href="#">
                <ion-icon
                  class="social-icon"
                  name="chatbubble-ellipses-outline"
                ></ion-icon>
              </a>
            </div>
          </div>
          <div class="contact-block">
            <div class="contact-card">
              <ion-icon class="mail-icon" name="mail-outline"></ion-icon>
              <p class="contact-heading">
                <a class="contact-link" href="mailto:contact@hertzsoft.com"
                  >contact@hertzsoft.com</a
                >
              </p>
            </div>
            <div class="contact-card">
              <ion-icon class="mail-icon" name="call-outline"></ion-icon>
              <p class="contact-heading">
                <a class="contact-link" href="tel:8657242757">8657242757</a>
              </p>
            </div>
          </div>
        </div>
        <div class="copyright-block">
          <p class="copyright">
            &copy; 2017 - 2023 Hertzsoft Technologies Pvt. Ltd. All Rights
            <br />
            Reserved.
          </p>
        </div>
      </div>
      <div class="form-design">
        <p class="sign-up-text">
          Don't have an account yet?
          <a class="sign-up-link" href="index.php">Sign Up </a>
        </p>

        <div class="form-child">
          <img
            class="login-img"
            src="imgs/login-image-2.gif"
            alt="Login Illustration"
          />
          <h1 class="login-heading">Login to your account</h1>
          <form class="main-form">
            <div class="input-fields">
              <div class="input-field">
                <input
                  class="input-field-box email-field"
                  type="email"
                  name="UserMail"
                  placeholder="Email Address"
                  required
                />
              </div>
              <div class="input-field">
                <input
                  class="input-field-box otp-field"
                  type="number"
                  name="verification_code"
                  placeholder="OTP"
                  required
                  oninput="
                  if (this.value.length > this.maxLength) { 
                    this.value = this.value.slice(0, this.maxLength); 
                  } 
                  if(this.value < 0) {
                    this.value = Math.abs(this.value);
                  }"
                  maxlength="6"
                />
              </div>
              <div class="input-field">
                <input
                  class="input-field-box pass-field"
                  type="current-password"
                  name="UserPassword"
                  placeholder="Password"
                  required
                />
              </div>
            </div>
            <p class="error-message">Try to check the input fields</p>
            <button type="submit" class="sign-in-btn">Log In</button>
          </form>
        </div>

        <p class="policy-terms-text">
          <a
            class="sign-up-link"
            href="https://www.hertzsoft.com/terms-and-condition"
            >Terms and Conditions
          </a>
          &#8212;
          <a
            class="sign-up-link"
            href="https://www.hertzsoft.com/privacy-policy"
            >Privacy Policy
          </a>
        </p>
      </div>
    </section>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
    <script src="script.js"></script>
  </body>
</html>
