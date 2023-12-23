<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaqueries.css">
</head>
<body>




    <nav id="desktop-nav">
        <div class="logo">Raghid Osseiran</div>
        <div>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contacts">Contacts</a></li>
            </ul>
        </div>
    </nav>
    <!--When the screen width will be low enough we want to change the layout of our page-->
    <nav id="hamburger-nav">
        <div class="logo">Raghid Osseiran</div> 
        <div class="hambuger-menu">
            <div class="hamburger-icon" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="menu-links">
                <li><a href="#about" onclick="toggleMenu()">About</a></li>
                <li><a href="#experience" onclick="toggleMenu()">Experience</a></li>
                <li><a href="#projects" onclick="toggleMenu()">Projects</a></li>
                <li><a href="#contacts" onclick="toggleMenu()">Contacts</a></li>
            </div>
        </div>
    </nav>

    <section id="profile">
        <div class="section__pic-container">
            <img src="./assets/tmpPPweb.jpeg" alt="Raghid Osseiran PP" class="pp-class">
        </div>
        <div class="section__text">
            <p class="section__text__p1">Hello, I'm</p>
            <h1 class="title">Raghid Osseiran</h1>
            <p class="section__text__p2">Student at Université de Bordeaux, France</p>
            <div class="button-container">
                <button class="btn btn-color-2" onclick="window.open('./assets/CV.pdf')">Download CV</button>
                <button class="btn btn-color-1" onclick="location.href='./#contacts'">Contact Info</button>
            </div>
            <div id="socials-container">
                <img src="./assets/linkedin.png" alt="my linked in profile" class="icon" onclick="location.href='https://www.linkedin.com/in/raghid-osseiran-025857265/'">
                <img src="./assets/github.png" alt="my github profile" class="icon" onclick="location.href='https://github.com/RaghidOsseiran?tab=repositories'">
            </div>
        </div>
    </section>



    <section id="about">
        <p class="section__text__p1">Get to Know More</p>
        <h1 class="title">About Me</h1>
        <div class="section-container">
            <div class="section__pic-container">
                <img src="./assets/aboutMe.png" alt="About profile picture" class="about-pic">
            </div>
            <div class="about-details-container">
                <div class="about-containers">
                    <div class="details-container">
                        <img src="./assets/experience.png" alt="Experience icon" class="icon">
                        <h3>Experience</h3>
                        <p>No proffesional experience yet (Looking to do my first internship this summer), but involved in many group projects</p>
                    </div>
                    <div class="details-container">
                        <img src="./assets/education.png" alt="Education icon" class="icon">
                        <h3>Education</h3> 
                        <p>Second-year undergraduate student in Computer Science</p>
                    </div>
                </div>
                <div class="text-container">
                    <p>I discoverd programming about a year ago, and ever since then i have been finding myself passionate about things like doing full stack web projects, or just having fun in some languages like C, python, and many more. I am looking forward to continue on this journey and see what awaits me later on in life.</p>
                </div>
            </div>
        </div>
        <img src="./assets/arrow.png" alt="Arrow icon" class="icon arrow" onclick="location.href='./#experience'">
    </section>

    <section id="experience">
      <p class="section__text__p1">Explore My</p>
      <h1 class="title">Experience</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container">
            <h2 class="experience-sub-title">Frontend Development</h2>
            <div class="article-container">
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>HTML</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>CSS</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>JavaScript</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>TypeScript</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>PostgreSQL</h3>
                  <p>Advanced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Node JS</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Express JS</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Git</h3>
                  <p>Advanced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>React</h3>
                  <p>Beginner</p>
                </div>
              </article>


            </div>
          </div>
          <div class="details-container">
            <h2 class="experience-sub-title">All around languages</h2>
            <div class="article-container">
            <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Python</h3>
                  <p>Advanced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>C</h3>
                  <p>Advanced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Java</h3>
                  <p>Beginner</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>C#</h3>
                  <p>Beginner</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Bash/Shell</h3>
                  <p>Advanced</p>
                </div>
              </article>
              <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>C++</h3>
                  <p>Beginner</p>
                </div>
              </article>

            </div>
          </div>
        </div>
      </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#projects'"
      />
    </section>



    <section id="projects">
      <p class="section__text__p1">Browse My Recent</p>
      <h1 class="title">Projects</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container color-container">
            <div class="article-container">
              <img src="./assets/Appologramme.png" alt="Project 1" class="project-img"/>
            </div>
            <h2 class="experience-sub-title project-title">Appologramme</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/RaghidOsseiran/AppologrammeReal/tree/main'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Live Demo
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/FileMania.png"
                alt="Project 2"
                class="project-img"
              />
            </div>
            <h2 class="experience-sub-title project-title">FileMania</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/RaghidOsseiran/FileMania'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Live Demo
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img
                src="./assets/FlappyAstro.png"
                alt="Project 3"
                class="project-img"
                width= "100"
                height= "50"
              />
            </div>
            <h2 class="experience-sub-title project-title">FlappyAstro</h2>
            <div class="btn-container">
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/RaghidOsseiran/FlappyAstro'"
              >
                Github
              </button>
              <button
                class="btn btn-color-2 project-btn"
                onclick="location.href='https://github.com/'"
              >
                Live Demo
              </button>
            </div>
          </div>
        </div>
      </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#contacts'"
      />
    </section>


    <section class="contacts" id="contacts">

        <h1 class="heading"><span style="color: black;">contact me</span></h1>
        <div class="contact-info-upper-container">
          <form action="" method="POST" id="Form-email">
              <div class="flex">
                  <input type="text" name="name" placeholder="enter your name" class="box"  class="input1" required>
                  <input type="email" name="email" placeholder="enter your email" class="box"  required>
              </div>
              <textarea name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
              <input type="submit" value="Send Message" name="send" class="btnForm">
          </form>
        </div>
    </section>


    <div class="box-container-form">

      <div class="box-info">
        <i class="fas fa-phone"></i>
        <h3>Phone</h3>
        <p>+33 0640423092</p>
      </div>



      <div class="box-info">
        <i class="fas fa-envelope"></i>
        <h3>Email</h3>
        <p>Raghidosseiran04@gmail.com</p>
      </div>

      <div class="box-info">
        <i class="fas fa-map-marker-alt"></i>
        <h3>Address</h3>
        <p>France, Bordeaux, 33000</p>
      </div>
    </div>

    <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Raghid Osseiran</span></div>
    <script src="script.js"></script>
</body>
</html>
