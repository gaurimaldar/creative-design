<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    $username = $_SESSION["username"];
    // ... rest of your code ...
} else {
    // User is not logged in, redirect to the login page
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Festival Decoration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />

    <script
      src="https://code.jquery.com/jquery-1.12.4.min.js"
      integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
      crossorigin="anonymous"
    ></script>

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
        <a href="#home" class="logo">Event Decoration Services</a>
      </div>
    </section>

    <header class="header">
      <div class="container">
        <nav class="navbar flex1">
          <a href="#home" class="sticky_logo logo">Event Decoration Services</a>

          <ul class="nav-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="#gallery">gallery</a></li>
            <li><a href="#testimonials">testimonials</a></li>
            <li><a href="#book">book now</a></li>
            <li><a href="#contact">contact</a></li>
          </ul>
          <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </div>

          <li style="color: dodgerblue; font-weight:700; display: flex; align-items: center; cursor: pointer;">Welcome, <?php echo $username; ?>&nbsp; &nbsp;
            <form action="logout.php" method="post">
              <i class="fa-solid fa-arrow-right-from-bracket"></i>
            </form>
          </li>
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
      style="background-image: url('image/festival_home.jpg')"
    >
      <div class="container">
        <h1>Festival</h1>
        <p style="text-align: center; margin: 0 auto 1rem">
          Witness the joy of friends and family coming together to celebrate the
          birth of someone special. Whether it's a cozy backyard gathering, a
          lively restaurant, or a thrilling adventure park, let's make memories
          together and celebrate the gift of life!
        </p>
        <a href="#book">
          <button class="btn-31">
            <span class="text-container">
              <span class="text">BOOK NOW</span>
            </span>
          </button>
        </a>
      </div>
    </section>

    <!-- gallery -->
    <section class="" style="background-image: none" id="gallery">
      <div class="container">
        <div class="heading mtop">
          <h5>GALLERY</h5>
          <h2>be a part of Unforgettable Moments</h2>
        </div>
        <div class="gallery-container">
          <div class="gallery-image">
            <span>1] ₹20000</span>
            <img src="image/festival-1.jpg" alt="festival decoration images" />
          </div>
          <div class="gallery-image">
            <span>2] ₹12000</span>
            <img src="image/festival-2.jpg" alt="festival decoration images" />
          </div>
          <div class="gallery-image">
            <span>3] ₹6000</span>
            <img src="image/festival-3.jpg" alt="festival decoration images" />
          </div>
          <div class="gallery-image">
            <span>4] ₹9000</span>
            <img src="image/festival-4.jpg" alt="festival decoration images" />
          </div>
          <div class="gallery-image">
            <span>5] ₹15000</span>
            <img src="image/festival-5.jpg" alt="festival decoration images" />
          </div>
          <div class="gallery-image">
            <span>6] ₹5000</span>
            <img src="image/festival-6.jpg" alt="festival decoration images" />
          </div>
          <div class="gallery-image">
            <span>7] ₹7000</span>
            <img src="image/festival-7.jpg" alt="festival decoration images" />
          </div>
        </div>
      </div>
    </section>
    <!-- /Services -->
    <script>
      $(".option").click(function () {
        $(".option").removeClass("active");
        $(this).addClass("active");
      });
    </script>

<section class="reservation" id="book">
      <div class="container">
        <div class="heading mtop">
          <h5>BOOK NOW</h5>
          <h2>Do it Now</h2>
        </div>
        <br />
        <div class="form reservation-form bg-black-10">
          <form action="b-book.php" method="POST">
            <!-- Add your_server_endpoint to handle form submissions -->

            <h2 class="headline-1 text-center">Event Booking</h2>

            <p class="form-text text-center">
              Book before 2 days
              <a href="tel:+9766048844" class="link">+91 9766048844</a>
            </p>

            <div class="input-wrapper">
              <input
                type="text"
                name="name"
                placeholder="Your Name"
                autocomplete="off"
                class="input-field"
                required
              />

              <input
                type="tel"
                name="phone"
                placeholder="Phone Number"
                autocomplete="off"
                class="input-field"
                required
              />
            </div>

            <div class="input-wrapper">
              <div class="icon-wrapper">
                <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                <select name="attendees" class="input-100" required>
                  <option value="1-person">festival Design 1</option>
                  <option value="2-person">festival  Design 2</option>
                  <option value="3-person">festival Design 3</option>
                  <option value="4-person">festival Design 4</option>
                  <option value="5-person">festival Design 5</option>
                  <option value="6-person">festival Design 6</option>
                  <option value="7-person">festival Design 7</option>
                </select>

                <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
              </div>

              <div class="icon-wrapper">
                <ion-icon
                  name="calendar-clear-outline"
                  aria-hidden="true"
                ></ion-icon>
                <lable for="Event Date">Event Date</lable>
                <input
                  type="date"
                  name="date"
                  class="input-100 input-date"
                  required
                />

                <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
              </div>

              <div class="icon-wrapper">
                <ion-icon  aria-hidden="true"></ion-icon>
                <lable for="Event Time">Event Time</lable>

                <select name="time"class="" required>
                  <option value="01:00am">01:00 am</option>
                  <option value="02:00am">02:00 am</option>
                  <option value="03:00am">03:00 am</option>
                  <option value="04:00am">04:00 am</option>
                  <option value="05:00am">05:00 am</option>
                  <option value="06:00am">06:00 am</option>
                  <option value="07:00am">07:00 am</option>
                  <option value="08:00am">08:00 am</option>
                  <option value="09:00am">09:00 am</option>
                  <option value="10:00am">10:00 am</option>
                  <option value="11:00am">11:00 am</option>
                  <option value="12:00pm">12:00 pm</option>
                  <option value="01:00pm">01:00 pm</option>
                  <option value="02:00pm">02:00 pm</option>
                  <option value="03:00pm">03:00 pm</option>
                  <option value="04:00pm">04:00 pm</option>
                  <option value="05:00pm">05:00 pm</option>
                  <option value="06:00pm">06:00 pm</option>
                  <option value="07:00pm">07:00 pm</option>
                  <option value="08:00pm">08:00 pm</option>
                  <option value="09:00pm">09:00 pm</option>
                  <option value="10:00pm">10:00 pm</option>
                  <option value="11:00pm">11:00 pm</option>
                  <option value="12:00am">12:00 am</option>
                </select>

                <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
              </div>
            </div>

            <textarea
              name="message"
              placeholder="Additional Message"
              autocomplete="off"
              class="input-100"
            ></textarea>

            <a href="index.php" style="margin: 0 auto">
              <button type="submit" style="width: 100%" class="btn-31">
                <span class="text-container">
                  <span class="text">Book Now</span>
                </span>
              </button>
            </a>
          </form>
        </div>
      </div>
    </section>
    <!-- /Reservation Form -->

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
          <img src="image/festival-1.jpg" alt="festival decoration images" />
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
        <div class="item">
          <img src="image/festival-2.jpg" alt="festival decoration images" />
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
        <div class="item">
          <img src="image/festival-3.jpg" alt="festival decoration images" />
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
        <div class="item">
          <img src="image/festival-4.jpg" alt="festival decoration images" />
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
        <div class="item">
          <img src="image/festival-5.jpg" alt="festival decoration images" />
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
        <div class="item">
          <img src="image/festival-6.jpg" alt="festival decoration images" />
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
        <div class="item">
          <img src="image/festival-7.jpg" alt="festival decoration images" />
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
        <div class="item">
          <img src="image/festival_home.jpg" alt="festival Home" />
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

    <!-- Testimonials -->
    <!-- <section class="customer top" id="testimonials">
        <div class="container">
            <div class="heading">
                <h5>CLIENT TESTIMONIALS</h5>
                <h3>What our clients say</h3>
            </div>

            <div class="owl-carousel owl-theme mtop">
                <div class="item">
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Unforgettable Festival Decor</h3>
                    <p>
                        We had the pleasure of working with Event Decoration Services for our
                        festival, and the result was absolutely stunning. The attention to
                        detail and creativity brought our vision to life. Highly
                        recommended!
                    </p>
                    <div class="admin flex">
                        <div class="img">
                            <img src="image/person-1.jpg" alt="Client Image" />
                        </div>
                        <div class="text">
                            <h3>Emily Johnson</h3>
                            <span>Happy Bride</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Festival Extravaganza</h3>
                    <p>
                        Event Decoration Services turned my festival celebration into an
                        unforgettable event. The decorations were vibrant, and the
                        attention to detail was impeccable. I couldn't be happier with the
                        results!
                    </p>
                    <div class="admin flex">
                        <div class="img">
                            <img src="image/person-2.jpg" alt="Client Image" />
                        </div>
                        <div class="text">
                            <h3>Michael Rodriguez</h3>
                            <span>Happy Customer</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Festival Delight</h3>
                    <p>
                        Event Decoration Services brought the festive spirit to our cultural event.
                        The colorful and culturally rich decorations added a special touch
                        to the celebration. Thank you for making our event memorable!
                    </p>
                    <div class="admin flex">
                        <div class="img">
                            <img src="image/person-3.jpg" alt="Client Image" />
                        </div>
                        <div class="text">
                            <h3>Lila Patel</h3>
                            <span>Event Organizer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br /><br /><br />
    </section> -->
    <!-- /Testimonials -->

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
            creativedecor@gmail.com
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
              Join us in celebrating the joyous occasion of [Name]'s festival!
              Discover a place where laughter abounds and good times are had by
              all. Come and enjoy the festivities as we mark another year of
              life with laughter, happiness, and delightful decorations.
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
                <p>creativedecor@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- /footer -->
  </body>
</html>
