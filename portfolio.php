<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Portfolio" />
  <meta name="author" content="Cj Abarca" />
  <link rel="stylesheet" href="./public/css/reset.css" />
  <link rel="stylesheet" href="./public/css/fonts.css" />
  <link rel="stylesheet" href="./public/css/index.css" />
  <link rel="icon" type="image/x-icon" href="./public/uploads/favicon.svg" />
  <link rel="stylesheet" href="./public/css/cursor.css" />
  <link rel="stylesheet" href="./public/css/slick.css" />
  <link rel="stylesheet" href="./public/css/gsap.css" />
  <link rel="stylesheet" href="./public/css/textAnimation.css" />
  <link rel="stylesheet" href="./public/css/progress.css" />
  <script src="./public/js/carousel.js"></script>
  <script src="./public/js/jquery-3.6.0.min.js"></script>
  <script src="./public/js/slick.min.js"></script>
  <script src="./public/js/gsap.min.js"></script>

  <title>Bobing Portfolio</title>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-M1D7MCSGV6"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-M1D7MCSGV6');
  </script>
</head>

<body>
  <?php include('header.php'); ?>
  <main>
    <!-- Portfolio Section -->
    <section>
      <div class="container portfolio">
        <div class="container-portfolio">
          <h2>Portfolios</h2>
          <p>
            Welcome to my web design portfolio! I am CJ Abarca, a creative and
            detail-oriented web designer passionate about crafting visually
            appealing and user-friendly websites. With a focus on modern
            design trends, responsive layouts, and intuitive user experiences,
            I aim to deliver solutions that align with your brand and business
            goals.
          </p>
          <h3 class="d-desktop">UX/UI</h3>
          <div class="images"></div>

          <!-- Mobile Carousel -->
          <div class="carousel-mobile">
            <h3 class="d-mobile">UX/UI</h3>
            <div class="carousel">
              <div class="image-holder image-carousel fade">
                <img
                  src="./public/uploads/portfolio_images/bobing-pizza.jpg"
                  alt=""
                  srcset="" />
                <h2>Bobing Pizza</h2>
              </div>
              <div class="image-holder image-carousel fade">
                <img
                  src="./public/uploads/portfolio_images/digital.jpg"
                  alt=""
                  srcset="" />
                <h2>Digital</h2>
              </div>
              <div class="image-holder image-carousel fade">
                <img
                  src="./public/uploads/portfolio_images/makoni.jpg"
                  alt=""
                  srcset="" />
                <h2>Julius Makoni</h2>
              </div>
              <div class="image-holder image-carousel fade">
                <img
                  src="./public/uploads/portfolio_images/reehive.jpg"
                  alt=""
                  srcset="" />
                <h2>Reehive</h2>
              </div>
              <div class="image-holder image-carousel fade">
                <img
                  src="./public/uploads/portfolio_images/restaurant.jpg"
                  alt=""
                  srcset="" />
                <h2>TR Restaurant</h2>
              </div>
              <div class="image-holder image-carousel fade">
                <img
                  src="./public/uploads/portfolio_images/shoeshop.jpg"
                  alt=""
                  srcset="" />
                <h2>Shoe Shop</h2>
              </div>
              <div class="image-holder image-carousel fade">
                <img
                  src="./public/uploads/portfolio_images/sneakers.jpg"
                  alt=""
                  srcset="" />
                <h2>Shoe Sneakers</h2>
              </div>
              <div class="pn">
                <a class="prev" onclick="plusPortfolio(-1)">❮</a>
                <a class="next" onclick="plusPortfolio(1)">❯</a>
              </div>
            </div>
            <div class="dots-wrapper">
              <span class="dot" onclick="currentPortfolio(1)"></span>
              <span class="dot" onclick="currentPortfolio(2)"></span>
              <span class="dot" onclick="currentPortfolio(3)"></span>
              <span class="dot" onclick="currentPortfolio(4)"></span>
              <span class="dot" onclick="currentPortfolio(5)"></span>
              <span class="dot" onclick="currentPortfolio(6)"></span>
              <span class="dot" onclick="currentPortfolio(7)"></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Logo Section -->
    <section>
      <div class="container">
        <!-- <div class="container-logo-wrapper">
            <h2>Logo Design</h2>
            <div class="container-logo"></div>
          </div> -->
        <div class="container-logo-wrapper">
          <h2>Logo Design</h2>
          <div class="container-logo-slick"></div>
        </div>
      </div>
    </section>
  </main>
  <?php include('footer.php'); ?>
  <div class="circle"></div>
  <script src="./public/js/cursor.js"></script>
  <script src="./public/js/loopImage.js"></script>
  <script src="./public/js/headerGsap.js"></script>
  <script src="./public/js/textAnimation.js"></script>
  <script src="./public/js/progress.js"></script>

  <script>
    // const menuToggle = document.querySelector(".burger");
    // const navMenu = document.getElementById("nav-menu");

    // menuToggle.addEventListener("click", function () {
    //   // alert("hello world");
    //   menuToggle.classList.toggle("active");
    //   navMenu.classList.toggle("show-menu");
    // });

    // document.addEventListener("contextmenu", (e) => e.preventDefault());
    // document.addEventListener("keydown", (e) => {
    //   if (e.ctrlKey && (e.key === "u" || e.key === "U")) {
    //     e.preventDefault();
    //     alert("View Source is disabled.");
    //   }
    // });
  </script>
</body>

</html>