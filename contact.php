<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Primary Meta Tags -->
    <meta charset="utf-8">
    <title>Contact - OllieJW - Web Designer</title>
    <meta name="title" content="OllieJW - Web Designer">
    <meta property="title" content="OllieJW - Web Designer">
    <meta name="description" content="OllieJW is a freelance front-end web developer for hire aspiring to make surfing the web more enjoyable and beautiful!">
    <meta name="viewport" content="width=device-width, initial-scale=1s">
    <meta name="author" content="OllieJW">
    <meta name="keywords" content="olliejw, web design, minecraft server website design, hosting web design, web theme, web design theme, web theme, website, website design, web developer, freelance web developer, website theme design">
    <meta name="robots" content="index, follow">
    <meta property="type" content="website">
    <meta name="theme-color" content="#b7042a">
    <meta property="image" content="https://olliejw.me/img/promo-web.png">
    <meta property="url" content="https://olliejw.me">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://olliejw.me/">
    <meta property="og:title" content="Contact - OllieJW - Web Designer">
    <meta property="og:description" content="OllieJW is a freelance front-end web developer for hire aspiring to make surfing the web more enjoyable and beautiful!">
    <meta property="og:image" content="https://olliejw.me/img/promo-web.png">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://olliejw.me/">
    <meta property="twitter:title" content="OllieJW - Web Designer">
    <meta property="twitter:description" content="OllieJW is a freelance front-end web developer for hire aspiring to make surfing the web more enjoyable and beautiful!">
    <meta property="twitter:image" content="https://olliejw.me/img/promo-web.png">
    <!-- Imports -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <?php include "modules/meta.php" ?>
    <link rel="stylesheet" href="css/contact.css">
  </head>

  <body>
    <header><?php include "modules/header.php"?></header>
    <main>
      <section class="section section__hero hero__no-fill">
        <div class="container">
          <div class="row row--middle">
            <div class="col-50">
              <h1 class="title--underline">Let's work together</h1>
            </div>
            <div class="col-50">
              <p>Fill in the form below and I will get back to you as soon as possible with a price! Don't want to wait? Message me on Discord: OllieJW#7139 </p>
            </div>
          </div>
        </div>
      </section>

      <section class="section section__form">
        <div class="container">
        <form action="https://api.web3forms.com/submit" method="POST" class="form">
          <input type="hidden" name="apikey" value="3899b0e4-9cfc-4023-a9fa-f99b4454961e">
          <div class="form__section">
            <h4>01. About you *</h4>
            <ul class="form__selection grid grid--2">
              <li>
                <input id="choice_1_1" name="Individual" type="radio">
                <label for="choice_1_1" id="choice_1_1">I'm an Individual</label>
              </li>
              <li>
                <input id="choice_1_2" name="Creator" type="radio">
                <label for="choice_1_2" id="choice_1_2">I'm a Creator</label>
              </li>
              <li>
                <input id="choice_1_3" name="Company" type="radio">
                <label for="choice_1_3" id="choice_1_3">I work for or own a Company</label>
              </li>
              <li>
                <input id="choice_1_4" name="Other" type="radio">
                <label for="choice_1_4" id="choice_1_4">Other</label>
              </li>
            </ul>
          </div>
          <div class="form__section">
            <h4>02. Budget</h4>
            <input name="budget" type="text" placeholder="Please specify your budget if applicable">
          </div>
          <div class="form__section">
            <h4>03. Information *</h4>
            <input name="name" type="text" placeholder="Your name" required>
            <input name="email" type="email" placeholder="Contact email" required>
            <textarea name="ideas" type="textarea" placeholder="What do you want your new site to achieve?" required></textarea>
            <textarea name="reference" type="textarea" placeholder="Please send links to some reference material. e.g. Websites you like the look of." required></textarea>
          </div>
          <div class="form__section">
            <input type="hidden" name="redirect" value="https://olliejw.me/contact">
            <button type="submit">Submit</button>
          </div>
        </form>
        </div>
      </section>
    </main>
    <footer><?php include "modules/footer.php"?></footer>
  </body>

  <!-- Scripts -->
  <?php include "modules/scripts.php" ?>
  <script>
    $('.form__selection input').on('change', function() {
      $('.form__selection input').not(this).prop('checked', false);  
    });
  </script>
</html>