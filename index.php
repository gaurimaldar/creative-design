<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Creative Design - Event Decorators</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/style.css" />

    <script
      src="https://code.jquery.com/jquery-1.12.4.min.js"
      integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
      crossorigin="anonymous"
    ></script>

    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  </head>

  <body>
    <section class="head">
      <div class="container flex1">
        <div class="scoial">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-youtube"></i>
        </div>
        <a href="#home" class="logo">Event Decoration Services</a>
        <div class="address">
          <i class="fas fa-map-marker-alt"></i>
          <span>&nbsp;Akola Maharashtra - 444 001</span>
        </div>
      </div>
    </section>

    <header class="header">
      <div class="container">
        <nav class="navbar flex1">
          <a href="#home" class="sticky_logo logo">Event Decoration Services</a>

          <ul class="nav-menu">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#services">services</a></li>
            <li><a href="#events">events</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#feedback">feedback</a></li>
            <li><a href="#contact">contact</a></li>
          </ul>
          <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </div>

          <div class="head_contact">
            <i class="fas fa-phone-volume"></i>
            <span>+91 9766048844</span>
          </div>
        </nav>
      </div>
    </header>
    <script>
      const hamburger = document.querySelector(".hamburger");
      const navMenu = document.querySelector(".nav-menu");

      hamburger.addEventListener("click", mobliemmenu);

      function mobliemmenu() {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
      }

      window.addEventListener("scroll", function () {
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
      });
    </script>

    <section
      class="home"
      id="home"
      style="
        background: linear-gradient(
            45deg,
            rgba(255, 255, 255, 0.2),
            rgba(0, 0, 0, 0.4)
          ),
          url('image/festival_home.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
      "
    >
      <div class="container">
        <h1>Make Memories</h1>
        <p style="max-width: 80%; margin: 0 auto 1rem">
          At Event Decoration Services, we are dedicated to turning your events
          into extraordinary experiences.
        </p>
        <a href="login.php">
          <button class="btn-31">
            <span class="text-container">
              <span class="text">LOGIN/REGISTER</span>
            </span>
          </button>
        </a>
      </div>
    </section>

    <!-- About Us -->
    <section class="about" id="about">
      <div class="container">
        <div class="heading">
          <h5>ABOUT US</h5>
          <h2>Transforming Moments with Event Decoration Services</h2>
        </div>

        <div class="content flex top">
          <div class="left">
            <h3>Crafting Unforgettable Experiences</h3>
            <p>
              At Event Decoration Services, we are dedicated to turning your
              events into extraordinary experiences. Our passionate team of
              creative professionals strives to bring your vision to life,
              making every moment magical and memorable.
            </p>
            <p>
              Whether it's an elegant wedding, a lively festival, or a joyful
              birthday, we specialize in transforming spaces with unique and
              personalized decorations. Our commitment to excellence ensures
              that every detail is meticulously curated to exceed your
              expectations.
            </p>
            <a href="index.php">
              <button class="btn-31">
                <span class="text-container">
                  <span class="text">Explore Services</span>
                </span>
              </button>
            </a>
          </div>
          <div class="right">
            <img
              style="aspect-ratio: 1/1"
              src="image/festival_home.jpg"
              alt="Event Decoration Services Image"
            />
          </div>
        </div>
      </div>
    </section>
    <!-- /About Us -->

    <!-- Services -->
    <section class="wrapper2" id="services">
      <div class="container">
        <div class="heading mtop">
          <h5>Services</h5>
          <h2>Create Unforgettable Moments</h2>
        </div>
        <div class="content grid mtop">
          <div class="box">
            <i class="fas fa-flower"></i>
            <h3>Floral Arrangements</h3>
            <p>
              Elevate your event with stunning floral designs that add a touch
              of elegance.
            </p>
            <span class="far fa-long-arrow-alt-right"></span>
          </div>
          <div class="box">
            <i class="fas fa-gift"></i>
            <h3>Theme Decor</h3>
            <p>
              Transform your venue with themed decorations tailored to your
              event's style.
            </p>
            <span class="far fa-long-arrow-alt-right"></span>
          </div>
          <div class="box">
            <i class="fas fa-lightbulb"></i>
            <h3>Lighting Design</h3>
            <p>
              Illuminate your celebration with expertly crafted lighting designs
              for a magical atmosphere.
            </p>
            <span class="far fa-long-arrow-alt-right"></span>
          </div>
          <div class="box">
            <i class="fas fa-camera"></i>
            <h3>Photography Setup</h3>
            <p>
              Capture every moment in style with our specially designed
              photography setups.
            </p>
            <span class="far fa-long-arrow-alt-right"></span>
          </div>
        </div>
      </div>
    </section>
    <!-- /Services -->

    <!-- Events -->
    <section class="blog top" id="events">
      <div class="container">
        <div class="heading">
          <h5>OUR EVENTS</h5>
          <h3>Next will be yours</h3>
        </div>

        <div class="content grid mtop">
          <div class="box">
            <div class="img">
              <img src="image/wedding-2.jpg" alt="wedding" />
              <span>WEDDING</span>
            </div>
            <div class="text">
              <div class="flex">
                <h3>Elegant Wedding Affair</h3>
              </div>
              <p>
                Join us in celebrating the union of two hearts in a mesmerizing
                wedding ceremony. Witness love, joy, and beautiful decorations.
              </p>
              <a href="wedding.php"
                >Book Now <i class="fa-solid fa-long-arrow-alt-right"></i
              ></a>
            </div>
          </div>
          <div class="box">
            <div class="img">
              <img src="image/birthday-1.jpg" alt="birthday" />
              <span>BIRTHDAY</span>
            </div>
            <div class="text">
              <div class="flex">
                <h3>Joyful Birthday Bash</h3>
              </div>
              <p>
                Come and be a part of a fantastic birthday celebration filled
                with laughter, surprises, and vibrant decorations that create a
                festive atmosphere.
              </p>
              <a href="birthday.php"
                >Book Now <i class="fa-solid fa-long-arrow-alt-right"></i
              ></a>
            </div>
          </div>
          <div class="box">
            <div class="img">
              <img src="image/festival-1.jpg" alt="festival" />
              <span>FESTIVAL</span>
            </div>
            <div class="text">
              <div class="flex">
                <h3>Celebrating Cultural Festivities</h3>
              </div>
              <p>
                Immerse yourself in the spirit of the festival with our vibrant
                and culturally rich event. Experience traditions, colors, and
                joyous decorations.
              </p>
              <a href="festival.php"
                >Book Now <i class="fa-solid fa-long-arrow-alt-right"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Events -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <script>
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        navText: [
          "<i class='far fa-long-arrow-alt-left'></i>",
          "<i class='far fa-long-arrow-alt-right'></i>",
        ],
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 1,
          },
          1000: {
            items: 1,
          },
        },
      });
    </script>

    <section class="gallary top" id="gallery">
      <div class="heading">
        <h5>GALLERY</h5>
        <h3>Movements captured by the camera</h3>
      </div>
      <br />
      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="image/birthday-2.jpg" alt="birthday" />
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
        <div class="item">
          <img src="image/wedding-1.jpg" alt="wedding" />
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
        <div class="item">
          <img src="image/festival-1.jpg" alt="festival" />
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
        <div class="item">
          <img src="image/wedding-4.jpg" alt="wedding" />
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
        <div class="item">
          <img src="image/festival-3.jpg" alt="festival" />
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
        <div class="item">
          <img src="image/birthday-5.jpg" alt="birthday" />
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
        <div class="item">
          <img src="image/wedding-6.jpg" alt="wedding" />
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
        <div class="item">
          <img src="image/birthday-4.jpg" alt="birthday" />
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
      </div>
    </section>

    <script>
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        autoplay: true,
        slideTransition: "linear",
        autoplayTimeout: 4000,
        autoplaySpeed: 4000,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 3,
          },
          1000: {
            items: 5,
          },
        },
      });
    </script>
    <script>
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        navText: [
          "<i class='far fa-long-arrow-alt-left'></i>",
          "<i class='far fa-long-arrow-alt-right'></i>",
        ],
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 1,
          },
          1000: {
            items: 1,
          },
        },
      });
    </script>
    <!-- Testimonials -->
    <section class="customer top" id="feedback">
      <div class="container">
        <div class="heading">
          <h5>FEEDBACK</h5>
          <h3>Feedback help us grow</h3>
        </div>

        <div class="feedback-container-center">
          <div class="feedback-container">
            <div class="feedback-post">
              <div class="feedback-text">Thanks for rating us!</div>
              <div class="feedback-edit">EDIT</div>
            </div>
            <div class="feedback-star-widget">
              <input type="radio" name="rate" id="feedback-rate-5" />
              <label for="feedback-rate-5" class="fas fa-star"></label>
              <input type="radio" name="rate" id="feedback-rate-4" />
              <label for="feedback-rate-4" class="fas fa-star"></label>
              <input type="radio" name="rate" id="feedback-rate-3" />
              <label for="feedback-rate-3" class="fas fa-star"></label>
              <input type="radio" name="rate" id="feedback-rate-2" />
              <label for="feedback-rate-2" class="fas fa-star"></label>
              <input type="radio" name="rate" id="feedback-rate-1" />
              <label for="feedback-rate-1" class="fas fa-star"></label>
              <form action="#">
                <header></header>
                <div class="feedback-textarea">
                  <textarea
                    cols="30"
                    placeholder="Describe your experience.."
                  ></textarea>
                </div>
                <div class="feedback-btn">
                  <button type="submit">Post</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <br /><br /><br />
    </section>
    <script>
      const feedbackBtn = document.querySelector(".feedback-btn button");
      const feedbackPost = document.querySelector(".feedback-post");
      const feedbackWidget = document.querySelector(".feedback-star-widget");
      const feedbackEditBtn = document.querySelector(".feedback-edit");

      feedbackBtn.onclick = () => {
        feedbackWidget.style.display = "none";
        feedbackPost.style.display = "block";
        feedbackEditBtn.onclick = () => {
          feedbackWidget.style.display = "block";
          feedbackPost.style.display = "none";
        };
        return false;
      };
    </script>
    <!-- /Testimonials -->

    <!-- /testimonials -->

    <!-- contact -->
    <section
      class="timer about wrapper"
      id="contact"
      style="background-image: url('image/festival_home.jpg')"
    >
      <div class="background"></div>
      <div class="container">
        <div class="heading" style="text-align: center">
          <h5>CONTACT US</h5>
          <h2><span>Incredible!</span> Are you coming today</h2>
          <p style="color: #fff; font-size: 20px">Akola, Maharashtra</p>
          <b style="color: #fff; font-size: 17px">Aniket Thorat</b>
          <p style="color: #fff; font-size: 17px; margin: 0">
            ankitthorat077@gmail.com
          </p>
          <p style="color: #fff; font-size: 17px; font-weight: 400">
            +91 9766048844
          </p>
        </div>

        <!-- <div id="time" class="flex1 mtop"></div> -->
      </div>
    </section>
    <!-- /contact -->

    <!-- footer -->
    <footer>
      <div class="container top">
        <div class="subscribe" id="contact">
          <h2>Stay Connected</h2>
          <p>
            Welcome to Creative Design, where imagination becomes reality in
            every event we craft. With a fusion of artistic ingenuity and
            precision planning, we curate unforgettable experiences. From
            stunning décor to immersive atmospheres, our events are a testament
            to innovation and creativity.
          </p>
          <div class="input flex">
            <a href="#book" style="margin: 0 auto">
              <button class="btn-31">
                <span class="text-container">
                  <span class="text">BOOK NOW</span>
                </span>
              </button>
            </a>
          </div>
        </div>

        <div class="content grid top">
          <div class="box">
            <a href="#home" class="logo">Event Decoration Services</a>
            <p>
              Elevate your events with Event Decoration Services. We specialize
              in turning ordinary moments into extraordinary memories through
              our unique event decorations and services.
            </p>
            <div class="social flex">
              <i class="fab fa-facebook-f"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-youtube"></i>
            </div>
          </div>

          <div class="box">
            <h2>Quick Links</h2>
            <ul>
              <li>
                <i class="fas fa-angle-double-right"></i
                ><a style="color: #fff" href="#home">Home</a>
              </li>
              <li>
                <i class="fas fa-angle-double-right"></i
                ><a style="color: #fff" href="#about">About</a>
              </li>
              <li>
                <i class="fas fa-angle-double-right"></i
                ><a style="color: #fff" href="#services">Services</a>
              </li>
              <li>
                <i class="fas fa-angle-double-right"></i
                ><a style="color: #fff" href="#events">Events</a>
              </li>
              <li>
                <i class="fas fa-angle-double-right"></i
                ><a style="color: #fff" href="#gallery">Gallery</a>
              </li>
              <li>
                <i class="fas fa-angle-double-right"></i
                ><a style="color: #fff" href="#testimonials">Testimonials</a>
              </li>
              <li>
                <i class="fas fa-angle-double-right"></i
                ><a style="color: #fff" href="#contact">Contact</a>
              </li>
            </ul>
          </div>

          <div class="box">
            <h2>Our Services</h2>
            <ul>
              <li>
                <i class="fas fa-angle-double-right"></i>Event Decorations
              </li>
              <li><i class="fas fa-angle-double-right"></i>Theme Designs</li>
              <li>
                <i class="fas fa-angle-double-right"></i>Lighting Solutions
              </li>
              <li>
                <i class="fas fa-angle-double-right"></i>Photography Setup
              </li>
              <li>
                <i class="fas fa-angle-double-right"></i>Floral Arrangements
              </li>
            </ul>
          </div>

          <div class="box">
            <h2>Contact Us</h2>
            <div class="icon flex">
              <div class="i">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="text">
                <h3>Address</h3>
                <p>Akola Maharashtra - 444 001</p>
              </div>
            </div>
            <div class="icon flex">
              <div class="i">
                <i class="fas fa-phone"></i>
              </div>
              <div class="text">
                <h3>Phone</h3>
                <p>+91 9766048844</p>
              </div>
            </div>
            <div class="icon flex">
              <div class="i">
                <i class="far fa-envelope"></i>
              </div>
              <div class="text">
                <h3>Email</h3>
                <p>ankitthorat077@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- /footer -->
  </body>
</html>
