<?php
//Header
$header = 'navbar.php';
if(file_exists($header)){require $header;}
else{die('Nie udało się pobrać pliku nagłówka');}


$functions = 'functions.php';
if(file_exists($functions)){require $functions; $fil = new files();$fil->deleteFile();}
else{die('błąd krytyczny');}

?>
    <div class="content-wrapper">
        <div class="container-fluid" id="contents">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" style="text-align:center !important;margin:auto;">
          <a href="addmedia.php" >Biblioteka mediów </a> 
        </li>
    </ol>

   <hr> 
    <?php 
    $fil->listFiles();
    
    ?>
      </div>
        </div>

<?php
$footer = 'footer.php';
if(file_exists($footer)){require $footer;}
else{die('Nie udało się pobrać pliku stopki');}
?>