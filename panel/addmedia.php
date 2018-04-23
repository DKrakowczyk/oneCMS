<?php
//Header
$header = 'navbar.php';
if(file_exists($header)){require $header;}
else{die('Nie udało się pobrać pliku nagłówka');}


$functions = 'functions.php';
if(file_exists($functions)){require $functions; $fil = new files();}
else{die('błąd krytyczny');}

?>
    <div class="content-wrapper">
        <div class="container-fluid" id="contents">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" style="text-align:center !important;margin:auto;">
          <a href="addmedia.php" >Dodaj pliki do biblioteki</a>
        </li>
    </ol>
  
    <form method="POST" id="send_file" enctype="multipart/form-data">
  <div class="form-group">
    <label for="header"><i class="fa fa-edit">&nbsp&nbsp</i>Wybierz plik</label>
    <input type="file" form="send_file" name ="plik" class="form-control" id="header" value="<?php $one->section_about($db,'header');?>"/>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Wyślij</button>
  </form>
   <hr> 
    <?php 
    if(isset($_FILES['plik']))
    {
    $fil->addFile();
    }
    ?>
      </div>
        </div>

<?php
$footer = 'footer.php';
if(file_exists($footer)){require $footer;}
else{die('Nie udało się pobrać pliku stopki');}
?>