<?php
   //Header
   $header = 'navbar.php';
   if(file_exists($header)){require $header;}
   else{die('Nie udało się pobrać pliku nagłówka');}
   //themes/onepage
   $one->update_css();
   ?>
<div class="content-wrapper">
   <div class="container-fluid" id="contents">
      <ol class="breadcrumb">
         <li class="breadcrumb-item" style="text-align:center !important;margin:auto;">
            <a href="css.php" >Edycja styli CSS</a>
         </li>
      </ol>
      <div class="col8" style="margin:auto;">
         <form method="POST">
            <div class="form-group">
               <label for="css">Dodaj własne style css</label>
               <textarea class="form-control" name="css" id="css" rows="12"><?php $one->read_css();?></textarea>
            </div>
            <button type="submit" class="btn btn-block btn-outline-success">Aktualizuj</button>
         </form>
      </div>
   </div>
</div>
<?php
   $footer = 'footer.php';
   if(file_exists($footer)){require $footer;}
   else{die('Nie udało się pobrać pliku stopki');}
   ?>