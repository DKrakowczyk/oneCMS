<?php
   //Header
   $header = 'navbar.php';
   if(file_exists($header)){require $header;}
   else{die('Nie udało się pobrać pliku nagłówka');}
   $one->add_social($db);
   $one->remove_social($db);
   ?>
<div class="content-wrapper">
   <div class="container-fluid" id="contents">
      <ol class="breadcrumb">
         <li class="breadcrumb-item" style="text-align:center !important;margin:auto;">
            <a href="categories.php">Edycja sekcji social</a>
         </li>
      </ol>
      <form method="POST">
         <div class="form-group">
            <label for="class">Dodaj klasę ikony</label>
            <input type="text" name ="class" class="form-control" id="class" required/>
         </div>
         <div class="form-group">
            <label for="href">Dodaj odnośnik <code>URL</code></label>
            <input type="text" name ="href" class="form-control" id="href" required/>
         </div>
         <div class="form-group">
            <label for="fa">Ikona <code><a href="https://fontawesome.com/"><i class="fab fa-font-awesome-alt"></i>fontawesome</a></code></label>
            <input type="text" name ="fa" class="form-control" id="fa" required/>
         </div>
         <button type="submit" class="btn btn-outline-info">Dodaj</button>
      </form>
      <hr>
      <div class="row" style="margin:auto;">
         <div class="col8" style="margin:auto; width:40vw; text-align:center;">
            <?php $one->show_socials_back($db); ?>
         </div>
      </div>
   </div>
</div>
<?php
   $footer = 'footer.php';
   if(file_exists($footer)){require $footer;}
   else{die('Nie udało się pobrać pliku stopki');}
   ?>