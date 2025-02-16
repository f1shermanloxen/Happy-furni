<!--=============== MAIN ===============-->
<main class="main">
  <!--=============== BREADCRUMB ===============-->
  <section class="breadcrumb">
    <ul class="breadcrumb__list flex container">
      <li><a href="index.php" class="breadcrumb__link">Home</a></li>
      <li><span class="breadcrumb__link">></span></li>
      <li><span class="breadcrumb__link">Login / Register</span></li>
    </ul>
  </section>

  <!--=============== LOGIN-REGISTER ===============-->
  <section class="login-register section--lg">
    <div class="login-register__container container grid">
      <div class="login">
        <h3 class="section__title">Login</h3>

        <form action="components/login.php" method="POST" class="form grid">
          <input type="email" name="email" placeholder="Your Email" class="form__input">

          <input type="password" name="password" placeholder="Your Password" class="form__input">

          <div class="form__btn">
            <button class="btn">Login</button>
          </div>
        </form>
      </div>

      <div class="register">
        <h3 class="section__title">Creat an Account</h3>

        <form action="components/register.php" method="POST" class="form grid">
          <input type="text" name="name" placeholder="Username" class="form__input">

          <input type="email" name="email" placeholder="Your Email" class="form__input">

          <input type="password" name="password" placeholder="Your Password" class="form__input">

          <input type="password" name="confirm_password" placeholder="Confirm Password" class="form__input">

          <div class="form__btn">
            <button class="btn">Submit & Register</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!--=============== NEWSLETTER ===============-->
  <section class="newsletter section">
    <div class="newsletter__container container grid">
      <h3 class="newsletter__title flex">
        <img src="assets/img/icon-email.svg" alt="" class="newsletter__icon">
        Sign up to Newsletter
      </h3>

      <p class="newsletter__description">...and receive $25 coupon for first shopping.</p>

      <form action="" class="newsletter__form">
        <input type="text" placeholder="Enter your email" class="newsletter__input">
        <button type="submit" class="newsletter__btn">Subscribe</button>
      </form>
    </div>
  </section>
</main>