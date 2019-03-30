<?php
   $onepage = 'themes/onepage.php';
   if(file_exists($onepage)){require $onepage;}
   $one = new onepage();
   $con = 'log/config.php';
   if (file_exists($con))
   {require $con;}
   else
   {die('Nie udało się pobrać pliku konfiguracyjnego');}
   try{
    if(isset($server) AND isset($database) AND isset ($usr) AND isset($passwd)){
   $pdo = new PDO("mysql:host=$server;dbname=$database", $usr, $passwd);
    }
   else
   {
    header('Location:install/install.php');
   }
   if($pdo){$db = $pdo;}
   }
   catch(Exception $e)
   {
    if(is_dir('install'))
    {
        header('Location:install/install.php');
    }
   }
   if(isset($db)){$one->send_mails($db);}
   ?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="portfolio,onepage">
      <meta name="author" content="Dawid Krakowczyk">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
      <title>Projekt zaliczeniowy Dawid Krakowczyk</title>
      <link href="css/bootstrap/bootstrap.css" rel="stylesheet">
      <!--Main stylesheet-->
      <link href="css/one/home.css" rel="stylesheet">
      <!--User stylesheet-->
      <link href="css/one/custom.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="js/particles.js"></script>
      <script src="js/bootstrap.js"></script>
      <!--Portfolio-->
      <script src="js/isotope.js"></script>
   </head>
   <body id="top">
      <a href="#top"><button class="btn btn-outline-dark up"><i class="fas fa-angle-double-up"></i></button></a>
      <div class="container-fluid">
         <section id="hero">
            <div class="row">
               <div id ="particles-js" class="col-12 ">
                  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                  <a class="navbar-brand" href="index.php"><i class="fas fa-rocket"></i> oneCMS</a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin:auto; text-align:center;">
                        <ul class="navbar-nav mr-auto">
                           <li class="nav-item">
                              <a class="nav-link" href="#about">About</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#exp">Experience</span></a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#jobs">Jobs</span></a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#schools">Schools</span></a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#portfolio">Portfolio</span></a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#contact">Contact</span></a>
                           </li>
                        </ul>
                        <div >
                           <?php $one->show_socials_front($db); ?>
                        </div>
                     </div>
                  </nav>
                  <img src="http://localhost/oneCMS/uploads/oneCMS.png" class="intro">
                   
                  </img>
               </div> 
            </div>
         </section>
         <section class="about" id="about">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="heading">
                        <h2 class="h2__heading">
                           <?php $one->section_about($db,'header');?>
                        </h2>
                        <h3 class ="h3__heading">
                           <?php $one->section_about($db,'header_small'); ?>
                        </h3>
                     </div>
                  </div>
               </div>
               <hr class="style1">
               <div class="row">
                  <div class="col-lg-12">
                     <div class=" col-lg-9 col-md-7 col-sm-7 col-xs-12 abt-info">
                        <h5>
                           <?php $one->section_about($db,'names');?>
                        </h5>
                        <h4><?php $one->section_about($db,'title');?></h4>
                        <p><?php $one->section_about($db,'p_one');?></p>
                        <p><?php $one->section_about($db,'p_two');?></p>
                        <p><a href='<?php $one->section_about($db,'button_href');?>' style="color:black" role="button" class="btn btn-primary btn-lg cv">
                           <?php $one->section_about($db,'button_text');?></a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section  class="experience" id="exp">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="heading">
                        <h2 class="h2__heading"><?php $one->section_skills($db,'header');?></h2>
                        <h3 class ="h3__heading"><?php $one->section_skills($db,'header_small');?></h3>
                     </div>
                  </div>
               </div>
               <hr class="style1">
               <div class="row">
                  <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                     <h4><?php $one->section_skills($db,'title');?></h4>
                     <p><?php $one->section_skills($db,'p_one');?></p>
                  </div>
                  <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                     <?php $one->get_progress_front($db) ?>  
                  </div>
               </div>
            </div>
         </section>
         <section id="jobs" class="jobs">
            <div class="container">
               <?php 
                  $one->get_section_job_title($db);
                  $one->get_job_front($db); 
                  ?>
            </div>
         </section>
         <section id="schools" class="schools">
            <div class="container">
               <div id="exp" class="row">
                  <?php 
                     $one->get_section_school_title($db);
                     ?>
               </div>
               <?php
                  $one->get_school_front($db); 
                  ?>
            </div>
         </section>
         <section class="portfolio" id="portfolio">
            <div class="container">
               <?php $one->get_section_portfolio($db);?>
               <hr class="style1">
               <div class="row">
                  <?php $one->create_frontend_categories($db); ?>
               </div>
               <div class ="row">
                  <div class="sort">
                     <button data-name='original-order' class="button">Original</button>
                     <button data-name='random' class="button">Losowo</button>
                  </div>
               </div>
               <br>
               <?php
                  $one->generate_gallery($db)
                  ?>
            </div>
         </section>
         <section class="contact" id="contact">
            <div class="row">
               <div class="col-md-12">
                  <div class="heading">
                     <h2 class="h2__heading">Formularz kontaktowy</h2>
                     <h3 class ="h3__heading">Masz pytanie? Pisz śmiało!</h3>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="col-md-6 contact-us">
                  <form class="login-box" method="POST">
                     <div class="form-group">
                        <label for="temat">Temat</label>
                        <input type="text" class="form-control" name="topic" id="temat" placeholder="O czym chcesz porozmawiać?" required>
                     </div>
                     <div class="form-group">
                        <label for="mail">Adres e-mail</label>
                        <input type="email" class="form-control" name="email" id="mail" placeholder="ułatwi@to.kontakt" required>
                     </div>
                     <div class="form-group">
                        <label for ="wiad">Wiadomość</label>
                        <textarea  class="form-control" name="message_b" id="wiad" placeholder="Twoja wiadomość :)" required></textarea>
                     </div>
                     <br>
                     <button type="submit" class="btn btn-outline-danger btn-sm">Prześlij formularz</button>
               </div>
               </form>
            </div>
            <div>
            </div>
         </section>
         <section id="schools" class="schools">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <hr class="hr__footer">
                  </div>
                  <div class="soc">
                     <?php $one->show_socials_front($db); ?>
                  </div>
               </div>
               <div class="cpr">
                  <small class="cp">Copyright © Dawid Krakowczyk 2018</small>
               </div>
            </div>
         </section>
      </div>

      <script>
      /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles-js', 'js/particles.json', function() {
  console.log('callback - particles.js config loaded');
});
      </script>
      <script>
         var $grid = $('.grid').isotope({
           itemSelector: '.grid-item',
           percentPosition: true,
           masonry: {
             columnWidth: '.grid-sizer'
           }
         });
         $('.filter button').on("click", function () {
                 var value = $(this).attr('data-name');
                   $grid.isotope({
                     filter: value
                   });
                 $('.filter button').removeClass('active');
                 $(this).addClass('active');
               })
             
               $('.sort button').on("click", function () {
                 var value = $(this).attr('data-name');
                 $grid.isotope({
                   sortBy: value
                 });
                 $('.sort button').removeClass('active');
                 $(this).addClass('active');
               })
         
         
      </script>
      <script>
         document.querySelectorAll('a[href^="#"]').forEach(anchor => {
         anchor.addEventListener('click', function (e) {
         e.preventDefault();
         document.querySelector(this.getAttribute('href')).scrollIntoView({
         behavior: 'smooth'
           });
         });
         });
      </script>
   </body>
</html>