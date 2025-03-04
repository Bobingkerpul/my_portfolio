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
  <link rel="stylesheet" href="./public/css/gsap.css" />
  <link rel="stylesheet" href="./public/css/progress.css" />
  <link rel="stylesheet" href="./public/css/textAnimation.css" />
  <script src="./public/js/gsap.min.js"></script>
  <title>Bobing Portfolio</title>
  <!-- Google tag (gtag.js) -->
  <script
    async
    src="https://www.googletagmanager.com/gtag/js?id=G-M1D7MCSGV6"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-M1D7MCSGV6");
  </script>
</head>

<body>
  <?php include('header.php'); ?>
  <main>
    <!-- Hero Section -->
    <section id="hero-section">
      <h1 class="hero-section-intro">
        Step Intro The Realm of <br />
        Digital <span class="highlight">Innovation</span>
      </h1>

      <div class="hero-section">
        <div class="wrapper__beginners">
          <h2 class="stickside">UI <span class="highlight">.</span></h2>
          <div class="text-orientation">
            <span class="hero-sidebar">Begginer's</span>
          </div>
        </div>
        <div class="container-hero__content">
          <div class="col3">
            <span class="square">Become a <br />
              Pro-Designer</span>
          </div>
          <div class="image-text__content">
            <div class="col3">
              <img
                src="public/uploads/hero-sectionv3.png"
                alt="Cj Abarca Image"
                class="profile" />
            </div>
            <div class="col3">
              <div class="hero-section__content">
                <h2>
                  Delighted to greet you in
                  <span class="hero-section__text-portfolio highlight">my portfolio</span>.
                </h2>
                <p>
                  I'm <span class="highlight">Cj Abarca</span>, a fervent and
                  seasoned web designer committed to sculpting mesmerizing and
                  user-friendly digital realms.
                </p>
                <div class="hero-section__button">
                  <button>
                    <a href="#">
                      <img src="./public/uploads/Button.svg" alt="Button" />
                    </a>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="edition">
          <span>Edition</span>
          <h3>2025</h3>
        </div>
      </div>
    </section>


    <!-- About Section -->
    <section>
      <div class="about-section">
        <div class="about-section__content">
          <div class="about-section__img">
            <img src="./public/uploads/cj-bw-about.jpg" alt="" />
          </div>
          <div class="about-section__text">
            <div class="about-section__content2">
              <h2>About <span class="highlight">Me</span></h2>
              <p>
                I am a creative professional with 2 years of experience in web
                design and development. My journey began with a fascination
                for technology and design, which eventually led me to pursue a
                career in web design. Over the years, I have honed my skills
                in various aspects of design, including user interface design,
                user experience optimization, and front-end development.
              </p>
              <div class="hero-section__button">
                <button>
                  <a href="#"><img
                      src="./public/uploads/Button.svg"
                      alt="Button"
                      srcset="" /></a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Skill Section -->
    <section>
      <div class="skill-section">
        <div class="skill-section__content">
          <h2 class="skill-section__content-intro">
            My <span class="highlight">Skills</span>
          </h2>
          <div class="timeline">
            <div class="timeline-item">
              <div class="content left">
                <h2 class="highlight">HTML</h2>
                <p>
                  Foundation of the web - Defines the structure and content of
                  web pages through markup tags.
                </p>
              </div>
              <div class="icon html">
                <img src="./public/uploads/html.svg" alt="html" />
              </div>
              <div class="pointer">
                <img src="./public/uploads/zigzag.svg" alt="" srcset="" />
              </div>
            </div>

            <div class="timeline-item">
              <div class="content right">
                <h2 class="highlight">JS</h2>
                <p>
                  Dynamic interaction - Empowers web pages with interactivity,
                  enabling dynamic content and user engagement.
                </p>
              </div>
              <div class="icon js">
                <img src="./public/uploads/js.svg" alt="Js" />
              </div>
              <div class="pointer">
                <img src="./public/uploads/zigzag2.svg" alt="" srcset="" />
              </div>
            </div>

            <div class="timeline-item">
              <div class="content left">
                <h2 class="highlight">CSS</h2>
                <p>
                  Visual expression - Styles and beautifies HTML elements,
                  enhancing user experience and interface design.
                </p>
              </div>
              <div class="icon css">
                <img src="./public/uploads/css.svg" alt="css" />
              </div>
              <div class="pointer">
                <img src="./public/uploads/zigzag.svg" alt="" srcset="" />
              </div>
            </div>

            <div class="timeline-item">
              <div class="content right">
                <h2 class="highlight">Adobe Photoshop</h2>
                <p>
                  Creative powerhouse - Enables professionals to design, edit,
                  and enhance visuals, transforming concepts into stunning
                  digital masterpieces.
                </p>
              </div>
              <div class="icon xd">
                <img src="./public/uploads/photoshop.svg" alt="photoshop" />
              </div>
              <div class="pointer">
                <img src="./public/uploads/zigzag2.svg" alt="" srcset="" />
              </div>
            </div>

            <div class="timeline-item">
              <div class="content left">
                <h2 class="highlight">Figma</h2>
                <p>
                  Collaborative design tool - Empowers teams to create,
                  prototype, and collaborate on stunning user interfaces and
                  experiences in real-time.
                </p>
              </div>
              <div class="icon figma">
                <img src="./public/uploads/figma.svg" alt="Figma" />
              </div>
              <div class="pointer">
                <img src="./public/uploads/zigzag.svg" alt="" srcset="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section -->
    <section>
      <div class="contact-section">
        <div class="contact-section__content">
          <div class="contact-section__text">
            <h2>Contact <span class="highlight">Me</span></h2>
            <p>
              Ready to discuss your next project? Feel free to <br />
              reach out to me via email at [Your Email] or <br />
              connect with me on LinkedIn [LinkedIn Profile Link]. <br />
              I'm excited to collaborate with you and <br />
              bring your vision to life!
            </p>
          </div>
          <div class="contact-section__form">
            <form action="send_mail.php" method="POST">
              <div class="contact-section__column">
                <div class="contact-section__flex">
                  <div class="contact-section__form-inputfield">
                    <input
                      type="text"
                      name="fname"
                      id="fname"
                      class="input"
                      required />
                    <label for="fname">First Name</label>
                  </div>

                  <div class="contact-section__form-inputfield">
                    <input
                      type="text"
                      name="lname"
                      id="lname"
                      class="input"
                      required />
                    <label for="lname">Last Name</label>
                  </div>
                </div>

                <div class="contact-section__flex">
                  <div class="contact-section__form-inputfield">
                    <input
                      type="text"
                      name="phone"
                      id="phone"
                      class="input"
                      required />
                    <label for="phone">Phone</label>
                  </div>
                  <div class="contact-section__form-inputfield">
                    <input
                      type="email"
                      name="email"
                      id="email"
                      class="input"
                      required />
                    <label for="email">Email</label>
                  </div>
                </div>

                <div class="contact-section__form-inputfield">
                  <textarea
                    name="message"
                    id="message"
                    cols="30"
                    rows="10"
                    required></textarea>
                  <label for="message">Message</label>
                </div>
              </div>
              <div class="contact-section__form-button">
                <button type="button" name="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include('footer.php'); ?>
  <div class="circle"></div>
  <script src="./public/js/cursor.js"></script>
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