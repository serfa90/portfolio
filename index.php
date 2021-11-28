<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="keywords" content="">
   <meta name="description" content="SerfaCodes - Coding made simple">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="author" content="SerfaCodes">
   <link rel="icon" type="image/png" href="./images/icon.png">
   <!-- ============ Styling link pages ================-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="css/styles.css">
   <!-- ================ TITLE ======================-->
   <title>SerfaCodes - Coding made simple</title>
 </head>
 <body>
  <div id="loader"></div>

     <header>
       <!--================ NAVBAR ==================-->

        <nav class="navbar navbar-expand-lg sticky-top">
            <div class="container">
              <a class="navbar-brand" href="./index.html">SerfaCodes</a>
              <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#aboutMe">About me</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="getButton nav-link" href="#contactForm">Get in touch</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
     </header>

     <!--======================== PRESENTATION ===========================-->

     <section>
       <div class="container profileHeader">
         <div class="infoHeader col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
         <div>
           <h2 class="title">Hi, I am</h2>
           <h2 class="title" id="title2">Samuel Serfaty</h2>
        </div>
        <div>
          <p>Front-end Developer</p>
        </div>
        <div class="buttonContianer">
          <a class="getButton nav-link" href="#portfolio">Portfolio</a>
          <a id="getButton" class="getButton nav-link" href="#contactForm">Get in touch</a>
        </div>
       </div>
       <div>
         <div class="profilePicture col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
           <img src="./images/photo.png" alt="Profile picture"></div>
       </div>
      </div>
     </section>

     <!--========================= ABOUT ME ==========================-->

     <section id="aboutMe">
       <div class="aboutContainer container">
       <div>
         <h2 class="title text-center">About</h2>
        </div>
       <div class="text-center aboutParagraf">
         <p>I combine technology and design to create inviting, easy-to-use websites. As a front-end developer, I know how to make a seamless web app that helps users accomplish what they need to do. I have a strong combination of technical ability and creativity.</p>
        </div>
        <div class="aboutInfoContainer text-center">
         <div class="infoContainer">
           <div class="aboutCircle">
             <div class="aboutInnerCircle "></div>
           </div>
           <div>
            <p>Full name</p>
            <p>Samuel Serfaty Edery</p>
         </div>
         </div>
         <div class="infoContainer">
          <div class="aboutCircle">
            <div class="aboutInnerCircle "></div>
          </div>
          <div>
           <p>Email Address</p>
           <p>serfaty.samuel90@gmail.com</p>
        </div>
        </div>
        <div class="infoContainer">
          <div class="aboutCircle">
            <div class="aboutInnerCircle "></div>
          </div>
          <div>
           <p>Phone</p>
           <p>+5491131787512</p>
        </div>
        </div>
      </div>
     </section>

     <!--=========================== WHAT I DO ===============================-->

     <section id="services" class="container-fluid">
       <div  class="text-center">
         <h2 class="title">What I do</h2>
       </div>
       <div class="container whatContainer">
  
          <div class="whatInfo col-12 col-sm-12 col-md-4 col-lg-4 col-xl4 col-xxl-4" id="iDo1">
           <div><img src="./images/software.svg" alt=""></div>
           <div><p>Software</br> Development</p></div>
           <div class="lineColor" id="lineColor1"></div>
          </div>
          <div class="whatInfo col-12 col-sm-12 col-md-4 col-lg-4 col-xl4 col-xxl-4" id="iDo2">
           <div><img src="./images/webDev.svg" alt=""></div>
           <div><p>Web</br> Development</p></div>
           <div class="lineColor" id="lineColor2"></div>
         </div>
         <div class="whatInfo col-12 col-sm-12 col-md-4 col-lg-4 col-xl4 col-xxl-4" id="iDo3">
           <div><img src="./images/webDesign.svg" alt=""></div>
           <div><p>Web</br> Design</p></div>
           <div class="lineColor" id="lineColor3"></div>
         </div>

       </div>
     </section>
    
     <!--========================= PROJECTS ==========================-->

     <section id="portfolio" class="container-fluid projectsContainer">
        <div class="container">
         <div class="text-center">
           <h2 class="title">Projects</h2>
         </div>
         <div class="projectsInfo col-xxl-12 col-xl-12">
          <div class="projectsImage col-xxl-5"><img src="./images/commos.svg" alt="Commos"></div>
           <div class="col-xxl-5">
             <h2>01</h2>
             <h4>Commos Consulting</h4>
              <p>Boutique coaching and consulting firm with global reach exclusively dedicated to provide
               innovative training solutions for commodities, commodity trading and risk management.</p>
               <a class="getButton nav-link webButton" href="">Visit Website</a>
           </div>
         </div>
      <div class="projectsInfo col-xxl-12 col-xl-12">
        <div class="projectsImage col-xxl-5"><img src="./images/malditoHummus.svg" alt="MalditoHummus"></div>
        <div class="col-xxl-5">
          <h2>02</h2>
          <h4>Maldito Hummus</h4>
          <p>Maldito Hummus is Buenos Aires’ best hummus. A product created to be taken out of the dietary stigma.
             Making flavors mixed to please everyone’s preferences.</p>
             <a class="getButton nav-link webButton" href="">Visit Website</a>
        </div>
      </div>
        <div class="projectsInfo col-xxl-12 col-xl-12">
          <div class="projectsImage col-xxl-5"><img src="./images/commos.svg" alt="Commos"></div>
          <div class="col-xxl-5">
            <h2>01</h2>
            <h4>Commos Consulting</h4>
            <p>Boutique coaching and consulting firm with global reach exclusively dedicated to provide
               innovative training solutions for commodities, commodity trading and risk management.</p>
               <a class="getButton nav-link webButton" href="">Visit Website</a>
          </div>
        </div>
    </div>
     </section>
     <!--======================= SKILLS =======================-->
     <section class="skillsContainer container-fluid">
       <h2 class="text-center title">SKILLS</h2>
       <div class="skillsInfo container">
         <div class="skills text-center">
           <h2>90%</h2>
           <h6>HTML</h6>
        </div>
         <div class="skills text-center">
           <h2>60%</h2>
           <h6>CSS</h6>
        </div>
         <div class="skills text-center">
           <h2>20%</h2>
           <h6>JAVASCRIPT</h6>
         </div>
         <div class="skills text-center">
           <h2>30%</h2>
           <h6>JQUERY</h6>
          </div>
       </div>
     </section>

     <!--================== FORM =====================-->
     <section id="contactForm" class="container-fluid formContainer">
       <div class="container">
       <div class="text-center">
         <h2 class="subTitle">Have a project in mind?</h2>
         <h2 class="title">Get in touch</h2>
      </div>
      <form id="contact-form" class="contact" name="contact-form" method="post" action="send2.php">
      <div class="form">
        <div class="form-floating mb-3 col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-8 col-8">
          <input type="name" name="name" class="form-control" required="required" id="floatingInput"  placeholder="name">
          <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating mb-3 col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-8 col-8">
          <input type="name" name="lastName" class="form-control" required="required" id="floatingInput" placeholder="Last name">
          <label for="floatingInput">Last name</label>
        </div>
      </div>
      <div class="form">
        <div class="form-floating mb-3 col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-8 col-8">
          <input type="email" name="email" class="form-control" required="required" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-3 col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-8 col-8">
          <input type="phone" name="phone" class="form-control" required="required" id="floatingInput" placeholder="Phone number">
          <label for="floatingInput">Phone number</label>
        </div>
      </div>
      <div class="form">
        <div class="form-floating mb-3 col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
          <textarea class="form-control" name="message" type="message" required="required" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
          <label for="floatingTextarea2">Comments</label>
        </div>
      </div>
    </form>
      <div class="text-center" id="formButton">
        <button type="submit" class="getButton">Submit</button>
      </div>
      </div>
     </section>

     <!--================ GO TO TOP BUTTON ====================-->

     
     <button onclick="topFunction()" id="topBtn" title="Go to top">↑</button>
     <!--======================= FOOTER =====================-->
     <div class="container-fluid">
     <footer class="text-center">
       <h6>© SerfaCodes 2021</h6>
     </footer>
    </div>

    <?php
    include("send2.php")
    ?>
    
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="./JS/app.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>