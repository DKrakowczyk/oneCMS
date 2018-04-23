<?php
   $con = 'check_connect.php';
   if(file_exists($con)){ require $con;}
   else{die('Nie udało się pobrać pliku connection');}
   
   $onepage = '../themes/onepage.php';
   if(file_exists($onepage)){require $onepage;$one = new onepage();}
   $db=$one->connect();
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Kokpit - DKrakowczyk</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link href="../css/bootstrap/bootstrap.css" rel="stylesheet">
      <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
      <link href="../css/sb-admin/sb-admin.css" rel="stylesheet">
   </head>
   <body class="fixed-nav sticky-footer bg-dark" id="page-top">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
         <a style="color:grey;" class="navbar-brand" href="cpanel.php"><i class="fas fa-rocket"></i> oneCMS</a>
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
               <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Kokpit">
                  <a class="nav-link" href="cpanel.php">
                  <i class="fas fa-tachometer-alt"></i>
                  <span class="nav-link-text">Kokpit</span>
                  </a>
               </li>
               <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Edycja">
                  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#ed" data-parent="#exampleAccordion">
                  <i class="fa fa-fw fa-wrench"></i>
                  <span class="nav-link-text">Edycja sekcji</span>
                  </a>
                  <ul class="sidenav-second-level collapse" id="ed">
                     <li>
                        <a href="hero.php"> <i class="fa fa-laptop" aria-hidden="true"></i>&nbsp; Sekcja "Hero"</a>
                     </li>
                     <li>
                        <a href="about.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Sekcja "About"</a>
                     </li>
                     <li>
                        <a href="skills.php"><i class="fa fa-bug" aria-hidden="true"></i>&nbsp; Sekcja "Skills"</a>
                     </li>
                     <li>
                        <a href="work.php"><i class="fa fa-tasks" aria-hidden="true"></i>&nbsp; Sekcja "Work"</a>
                     </li>
                     <li>
                        <a href="schools.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp; Sekcja "Schools"</a>
                     </li>
                     <li>
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#a" data-parent="#exampleAccordion">
                        <span class="nav-link-text"><i class="fa fa-code" aria-hidden="true"></i>&nbsp; Sekcja "Portfolio"</span>
                        </a>
                        <ul class="sidenav-third-level collapse" id="a">
                           <li>
                              <a href="portfolio.php"><i class="fa fa-code" aria-hidden="true"></i>&nbsp; Sekcja "Portfolio"</a>
                           </li>
                           <li>
                              <a href="categories.php"><i class="fa fa-list" aria-hidden="true"></i>&nbsp; Categories</a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <a href="contact.php"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp; Sekcja "Kontakt"</a>
                     </li>
                  </ul>
               </li>
               <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Edycja">
                  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#media" data-parent="#exampleAccordion">
                  <i class="fa fa-fw fa-tv"></i>
                  <span class="nav-link-text">Media</span>
                  </a>
                  <ul class="sidenav-second-level collapse" id="media">
                     <li>
                        <a href="addmedia.php"><i class="fas fa-upload"></i> Dodaj plik</a>
                     </li>
                     <li>
                        <a href="listmedia.php"><i class="fas fa-pencil-alt"></i> Zarządzaj biblioteką</a>
                     </li>
                  </ul>
               </li>
               <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Wiadomości">
                  <a class="nav-link" href="mails.php">
                  <i class="fa fa-fw fa-envelope"></i>
                  <span class="nav-link-text">Wiadomości</span>
                  </a>
               </li>
               <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Edycja">
                  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                  <i class="fas fa-quidditch"></i>
                  <span class="nav-link-text">Edycja</span>
                  </a>
                  <ul class="sidenav-second-level collapse" id="collapseComponents">
                     <li>
                        <a href="social.php"><i class="fab fa-facebook"></i> Social</a>
                     </li>
                     <li>
                        <a href="css.php"><i class="fab fa-css3"></i> Edytor CSS</a>
                     </li>
                  </ul>
               </li>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
               <li class="nav-item">
                  <a class="nav-link text-center" id="sidenavToggler">
                  <i class="fa fa-fw fa-angle-left"></i>
                  </a>
               </li>
            </ul>
            <ul class="navbar-nav ml-auto">
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-fw fa-envelope"></i>
                  <span class="d-lg-none">Wiadomości
                  <span class="badge badge-pill badge-primary">Liczba: <?php $one->count_mails($db);?></span>
                  </span>
                  <span class="indicator text-primary d-none d-lg-block">
                  </span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                     <?php $one->info_mails($db);?>
                  </div>
               </li>
               <li class="nav-item">
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                  <i class="fas fa-sign-out-alt"></i> Wyloguj</a>
               </li>
            </ul>
         </div>
      </nav>