<?php 
    $message_sent = false;
        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $messageSubject = $_POST['subject'];
            $message = $_POST['message'];
            mail($to,$messageSubject,$body);
            $message_sent = true;
        }
    
?>
<!DOCTYPE html>
<html >
  
<!-- Mirrored from www.oussamahenia.com/?fbclid=IwAR3dd5w5sSunpP3qbOjs7JdzaDMesCB_Cep_96mmw3TpqHkB2E-eCb9WrtM by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Jul 2021 10:27:06 GMT -->
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salem KETATA</title>
    <meta name="description" content="Salem KETATA"/>
    <link href="css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
    <link rel="icon" href="images/iconsalemketata.png" sizes="32x32" />
	<link rel="icon" href="images/iconsalemketata.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="images/iconsalemketata.png" />
    <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
  </head>
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
            <div class="navbar-translate"><a class="navbar-brand" href="index.php" rel="tooltip"><img style="width: 20%;" src="images/logosalemketatablanc.png"></a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About me</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">Skills</a></li>
                
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#education">Education</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('images/back.jpg');"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="images/salem.jpg" alt="Image"/></a></div>
          <div class="h2 title">Salem KETATA</div>
          <a class="btn btn-primary" href="file/salemketataCV.pdf" data-aos="zoom-in" download data-aos-anchor="data-aos-anchor">Download CV</a>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="button-container">
            <a class="btn btn-default btn-round btn-lg btn-icon" href="https://github.com/salemketata" rel="tooltip" title="My Github Account"><i class="fa fa-github"></i></a>
            <a class="btn btn-default btn-round btn-lg btn-icon" href="https://www.linkedin.com/in/salem-ketata-2541221ba?fbclid=IwAR3lk8YQtg5BSgurAhVbxPdRVT9E4nvG-ZNHLcRfKH1dh0V37_5tYwqp7fU" rel="tooltip" title="Follow me on Linkedin"><i class="fa fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">About me</div>
            <p>Graduate in fundamental license in computer science applied to management
              Faculty of economics and management of sfax (FSEGS).
              Engineering student at The Private Higher School of Engineering and Technology (IIT),specialized in software engineering. I am dynamic , curious and passionate about technology.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Information</div>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
              <div class="col-sm-8" id="age"></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
              <div class="col-sm-8">ketatasalem7@gmail.com</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Phone number:</strong></div>
              <div class="col-sm-8">+216 94 176 012</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Adress:</strong></div>
              <div class="col-sm-8">Sokra Km3 - Sfax</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Languages:</strong></div>
              <div class="col-sm-8">French, English, Arabic</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="skill">
  <div class="container">
      <div class="h4 text-center mb-4 title">SKILLS</div>
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="progress-container progress-primary">
                        <span class="progress-badge">C#</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div><span class="progress-value">80%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="progress-container progress-primary">
                        <span class="progress-badge">ASP.NET MVC</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div><span class="progress-value">60%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="progress-container progress-primary">
                        <span class="progress-badge">React JS</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div><span class="progress-value">20%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="progress-container progress-primary">
                        <span class="progress-badge">HTML5/CSS3/JS</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div><span class="progress-value">70%</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="progress-container progress-primary">
                        <span class="progress-badge">Symfony</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div><span class="progress-value">30%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="progress-container progress-primary">
                        <span class="progress-badge">Photography</span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div><span class="progress-value">40%</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
  </div>
</div>
<!--<div class="section" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ml-auto mr-auto">
        <div class="h4 text-center mb-4 title">Portfolio</div>
        <div class="nav-pills-align-center">
          <ul class="nav nav-pills nav-pills-primary" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#web-development" role="tablist"><i class="fa fa-laptop" aria-hidden="true"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#graphic-design" role="tablist"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Photography" role="tablist"><i class="fa fa-camera" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="tab-content gallery mt-5">
      <div class="tab-pane active" id="web-development">
        <div class="ml-auto mr-auto">
          <div class="row">
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                  <figure class="cc-effect"><img src="images/project-1.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Recent Project</div>
                      <p>Web Development</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                  <figure class="cc-effect"><img src="images/project-2.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Startup Project</div>
                      <p>Web Development</p>
                    </figcaption>
                  </figure></a></div>
            </div>
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                  <figure class="cc-effect"><img src="images/project-3.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Food Order Project</div>
                      <p>Web Development</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                  <figure class="cc-effect"><img src="images/project-4.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Web Advertising Project</div>
                      <p>Web Development</p>
                    </figcaption>
                  </figure></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="graphic-design" role="tabpanel">
        <div class="ml-auto mr-auto">
          <div class="row">
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                  <figure class="cc-effect"><img src="images/graphic-design-1.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Triangle Pattern</div>
                      <p>Graphic Design</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                  <figure class="cc-effect"><img src="images/graphic-design-2.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Abstract Umbrella</div>
                      <p>Graphic Design</p>
                    </figcaption>
                  </figure></a></div>
            </div>
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                  <figure class="cc-effect"><img src="images/graphic-design-3.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Cube Surface Texture</div>
                      <p>Graphic Design</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                  <figure class="cc-effect"><img src="images/graphic-design-4.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Abstract Line</div>
                      <p>Graphic Design</p>
                    </figcaption>
                  </figure></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="Photography" role="tabpanel">
        <div class="ml-auto mr-auto">
          <div class="row">
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                  <figure class="cc-effect"><img src="images/photography-1.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Photoshoot</div>
                      <p>Photography</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                  <figure class="cc-effect"><img src="images/photography-3.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Wedding Photoshoot</div>
                      <p>Photography</p>
                    </figcaption>
                  </figure></a></div>
            </div>
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                  <figure class="cc-effect"><img src="images/photography-2.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Beach Photoshoot</div>
                      <p>Photography</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                  <figure class="cc-effect"><img src="images/photography-4.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Nature Photoshoot</div>
                      <p>Photography</p>
                    </figcaption>
                  </figure></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>-->
<div class="section" id="experience">
    <div class="container cc-experience">
        <div class="h4 text-center mb-4 title">PROFESSIONAL EXPERIENCE</div>
        <div class="card">
          <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                  <div class="card-body cc-experience-header">
                      <p>March-Juin 2021</p>
                      <div class="h5">Graduation Project</div>
                  </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                  <div class="card-body">
                      
                      <p>Using ASP.NET MVC in supplier invoice settlement management</p>
                  </div>
              </div>
          </div>
      </div>

        <!--<div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-experience-header">
            <p>April 2013 - February 2014</p>
            <div class="h5">WEBM</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">Intern</div>
            <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.</p>
          </div>
        </div>
      </div>
    </div>-->
    </div>
</div>
<div class="section" id="education">
  <div class="container cc-education">
    <div class="h4 text-center mb-4 title">EDUCATION</div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <!--<div class="card-body cc-education-header">
            <p>2013 - 2015</p>
            <div class="h5">Master's Degree</div>
          </div>-->
        </div>
        <!--<div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
            <div class="h5">Master of Information Technology</div>
            <p class="category">University of Computer Science</p>
            <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.</p>
          </div>
        </div>-->
      </div>
    </div>
    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
              <p>2021/2024</p>
            <div class="h5">Engineering</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
              <div class="h5">National Engineering Diploma in Software Engineering</div>
              <p class="category">International Institute of Technology Sfax (IIT)</p>
              <p></p>
              <p></p>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
              <p>2020/2021</p>
            <div class="h5">Licentiate</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
              <div class="h5">Licentiate Degree in Management IT</div>
              <p class="category">
                Faculty of Economics and Management of Sfax</p>
              <p></p>
              <p>Mention: Well</p>
          </div>
        </div>
      </div>
    </div>


    <div class="card">
      <div class="row">
        <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body cc-education-header">
            <p>2018</p>
            <div class="h5">Baccalaureate</div>
          </div>
        </div>
        <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
          <div class="card-body">
              <div class="h5">Section : Mathematics </div>
              <p class="category"></p>
              <p>Mention: Fair</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section" id="contact">
  <div class="cc-contact-information" style="background-image: url('images/back.jpg');">
    <div class="container">
      <div class="cc-contact">
        <div class="row">
          <div class="col-md-9">
            <div class="card mb-0" data-aos="zoom-in">
              <div class="h4 text-center title">Contact me</div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card-body">
                    <form action="index.php" method="POST">
                      <div class="p pb-3"><strong>Don't hesitate to contact me</strong></div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                            <input class="form-control" type="text" name="name" id="name" placeholder="Nom" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                            <input class="form-control" type="text" name="subject" id="subject" placeholder="Sujet" required="required"/>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                          <div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" type="email" id="email" name="email" placeholder="E-mail" required="required"/>
                          </div>
                        </div>
                      </div>
                      
                      <div class="row mb-3">
                        <div class="col">
                          <div class="form-group">
                            <textarea class="form-control" name="message" id="message" placeholder="Message" required="required"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <button class="btn btn-primary" type="submit">Envoyer</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <p class="mb-0"><strong>Address </strong></p>
                    <p class="pb-2">Sokra Km3 - Sfax</p>
                    <p class="mb-0"><strong>Phone Number</strong></p>
                    <p class="pb-2">+216 94 176 012</p>
                    <p class="mb-0"><strong>Email</strong></p>
                    <p>ketatasalem7@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div></div>
    </div>
    <footer class="footer">
      <div class="container text-center">
        <a class="cc-instagram btn btn-link" href="https://www.linkedin.com/in/salem-ketata-342b10205/"><i class="fa fa-linkedin fa-2x " aria-hidden="true"></i></a></div>
      <div class="text-center text-muted">
        <p>&copy;<br></p>
      </div>
    </footer>
    <script src="js/core/jquery.3.2.1.min.js"></script>
    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/now-ui-kit9f1e.js?v=1.1.0"></script>
    <script src="js/aos.js"></script>
    <script src="scripts/main.js"></script>
    <script src="scripts/utils.js"></script>

  </body>

<!-- Mirrored from www.oussamahenia.com/?fbclid=IwAR3dd5w5sSunpP3qbOjs7JdzaDMesCB_Cep_96mmw3TpqHkB2E-eCb9WrtM by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Jul 2021 10:27:23 GMT -->
</html>