<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Naina Sharma</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="container">
    <div class="home" id="home">
      <nav class="nav-bar">
        <h2><span>P</span>ortfolio.</h2>
        <div class="menu">
          <ul id="sidemenu">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
            <i class="fas fa-solid fa-xmark" onclick="closemenu()"></i>
          </ul>
        </div>
        <i class="fas fa-solid fa-bars" onclick="openmenu()"></i>
      </nav>
      <div class="landing-page">
        <div class="left">
          <p>Full Stack Web Developer</p>
          <h1>Hey, I'm <span>Naina </span><br />Sharma from India.</h1>
        </div>
        <div class="right">
          <div class="back">
            <div class="img">
              <img src="images/naina.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="about" id="about">
      <div class="head-1">
        <h2>About <span>Me</span></h2>
      </div>
      <div class="head">
        <div class="about-left">
          <h3>Who am I</h3>
          <p>
            My name is Naina sharma. I'm a Full Stack Web Developer
            based in Punjab, India and I am very passionate and dedicated to
            my work. I have acquired the skills necessary to build great and
            premium websites.
          </p>
          <br />
          <p>
            I also provide the services of web development for any kind of the
            website such as business landing pages, product related website
            development I can handle all the projects. With the service of web
            design and development, I am offering the service of UI/UX designs
            if you are looking for someone who can create the beautiful
            landing pages for your website, professionally I am here to handle
            this kind of projects.
          </p>
        </div>
        <div class="about-right">
          <h3>Personal Info</h3>
          <p>Full Name: <span>Naina Sharma</span></p>
          <p>Age: <span>20 Years</span></p>
          <p>Freelance: <span>Available</span></p>
          <p>Phone No: <span>+91 8950865112</span></p>
          <p>Email: <span>nainasharmavats09@gamil.com</span></p>
          <p>Country: <span>India</span></p>
          <p>Language: <span>English, Hindi</span></p>
          <br>
          <a href="NAINA_SHARMA.pdf" download class="downloadCV">Download CV</a>
        </div>
      </div>
      <div class="skill">
        <div class="head-skill">
          <h2><span>S</span>kills</h2>
        </div>
        <div class="skill-sec">
          <div class="skills">
            <div class="skill1">
              <div class="sec-skill">
                <div class="skill-name">HTML</div>
                <div class="skill-bar">
                  <div class="skill-per" per="89%" style="max-width: 89%"></div>
                </div>
              </div>
              <div class="sec-skill">
                <div class="skill-name">CSS</div>
                <div class="skill-bar">
                  <div class="skill-per" per="85%" style="max-width: 85%"></div>
                </div>
              </div>
              <div class="sec-skill">
                <div class="skill-name">JAVASCRIPT</div>
                <div class="skill-bar">
                  <div class="skill-per" per="78%" style="max-width: 78%"></div>
                </div>
              </div>
            </div>
            <div class="skill2">
              <div class="sec-skill">
                <div class="skill-name">PHP</div>
                <div class="skill-bar">
                  <div class="skill-per" per="70%" style="max-width: 70%"></div>
                </div>
              </div>
              <div class="sec-skill">
                <div class="skill-name">MySQL</div>
                <div class="skill-bar">
                  <div class="skill-per" per="63%" style="max-width: 63%"></div>
                </div>
              </div>
              <div class="sec-skill">
                <div class="skill-name">WordPress</div>
                <div class="skill-bar">
                  <div class="skill-per" per="90%" style="max-width: 90%"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services" id="services">
      <div class="main">
        <div class="head-services">
          <h2><span>My </span>Services</h2>
        </div>
        <div class="list">
          <div>
            <i class="fa-solid fa-code"></i>
            <h2>Web Design</h2>
            <p>
              I offer the services of web development for any kind of website
              such as business landing pages, product related website
              development I can handle all the projects.
            </p>
          </div>
          <div>
            <i class="fa-solid fa-crop-simple"></i>
            <h2>WordPress</h2>
            <p>
              I provide stunning WordPress project, we can handle any project
              related to landing page designs, e-commerce design, Portfolio
              website design and may more as per your requirement.
            </p>
          </div>
          <div>
            <i class="fa-brands fa-app-store"></i>
            <h2>Graphic Design</h2>
            <p>
              I provide amazing and professional Graphic assets for your
              project such as business card design, poster design product
              labels and many more categories as per your requirement.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="portfolio" id="projects">
      <div class="port">
        <div class="head-port">
          <h2><span>My </span>Work</h2>
        </div>
        <div class="work-list">
          <div class="work">
            <img src="images/photo1.jpg" alt="" />
            <div class="layer">
              <h3>Home Care</h3>
              <p>
                This is a beautiful Home Care website that I created. Click the link below.
              </p>
              <a href="projectImages/HomeCare.png"><i class="fa-solid fa-up-right-from-square" href=""></i></a>
              <img src="" alt="">
            </div>
          </div>
          <div class="work">
            <img src="images/photo2.jpg" alt="" />
            <div class="layer">
              <h3>Coca Cola</h3>
              <p>A beautiful Coca Cola Landing Page. Click the link below.</p>
              <a href="projectImages/CocaCola.png"><i class="fa-solid fa-up-right-from-square"></i></a>
            </div>
          </div>
          <div class="work">
            <img src="images/photo3.jpg" alt="" />
            <div class="layer">
              <h3>AmazonClone</h3>
              <p>
                I have Cloned Amazon website. Click the
                link below.
              </p>
              <a href="projectImages/AmazonClone.png"><i class="fa-solid fa-up-right-from-square"></i></a>
            </div>
          </div>
        </div>
        <div class="work-list" id="listF">
          <div class="work workH">
            <img src="images/photo3.jpg" alt="" />
            <div class="layer">
              <h3>ByteStrike</h3>
              <p>
                A WordPress blog for Programmers. Click the
                link below.
              </p>
              <a href="projectImages/WordPress.png"><i class="fa-solid fa-up-right-from-square"></i></a>
            </div>
          </div>
          <div class="work workH">
            <img src="images/photo3.jpg" alt="" />
            <div class="layer">
              <h3>LandingPage</h3>
              <p>
                Click the
                link below.
              </p>
              <a href="projectImages/LandingPage.png"><i class="fa-solid fa-up-right-from-square"></i></a>
            </div>
          </div>
          <div class="work workH">
            <img src="images/photo3.jpg" alt="" />
            <div class="layer">
              <h3>Landing Page</h3>
              <p>
                Click the
                link below.
              </p>
              <a href="projectImages/LandPage.png"><i class="fa-solid fa-up-right-from-square"></i></a>
            </div>
          </div>
        </div>
        <input type="button" value="See More" onclick="showHid('.workH')" class="btn" id="info">
      </div>
    </div>

    <div class="contact" id="contact">
      <div class="contact-main">
        <div class="head-contact">
          <h2>Contact<span> Me</span></h2>
        </div>
        <div class="row">
          <div class="contact-left">
            <p>
              <i class="fa-solid fa-paper-plane"></i>nainasharmavats09@gmail.com
            </p>
            <p><i class="fa-solid fa-phone"></i>+91 8950865112</p>
            <div class="social-icons">
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
              <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>
          </div>
          <div class="contact-right">
            <form action="message.php" method="post" autocomplete="off">
              <input type="text" name="Name" placeholder="Your Name" required />
              <input type="email" name="Email" placeholder="Your Email" required />
              <textarea name="Message" rows="8" placeholder="Your Message"></textarea>
              <button type="submit" name="btn" class="btn btn2">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <p>Copyright © Portfolio. made by Naina Sharma</p>
    </div>

  </div>





  <script>
    var sidemenu = document.getElementById("sidemenu");

    function openmenu() {
      sidemenu.style.right = "0";
    }

    function closemenu() {
      sidemenu.style.right = "-300px";
    }
  </script>
  <script src="script.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->

</body>

</html>