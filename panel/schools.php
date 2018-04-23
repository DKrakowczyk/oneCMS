<?php
   //Header
   $header = 'navbar.php';
   if(file_exists($header)){require $header;}
   else{die('Nie udało się pobrać pliku nagłówka');}
   $one->set_section_school_title($db);
   $one->add_school($db);
   $one->del_school($db);
   ?>
<div class="content-wrapper">
   <div class="container-fluid" id="contents">
      <ol class="breadcrumb">
         <li class="breadcrumb-item" style="text-align:center !important;margin:auto;">
            <a href="cpanel.php" >Edycja sekcji "Schools"</a>
         </li>
      </ol>
      <form method="POST">
         <div class="form-group">
            <label for="header">Section header <code>&lth2&gt</code></label>
            <input type="text" name ="header" class="form-control" id="header" value="<?php $one->current_school_header($db,'header'); ?>"/>
         </div>
         <div class="form-group">
            <label for="header_small">Section header 2 <code>&lth3&gt</code></label>
            <input type="text" name ="header_small" class="form-control" id="header_small" value="<?php $one->current_school_header($db,'header_small'); ?>">
         </div>
         <button type="submit" class="btn btn-primary">Zaktualizuj</button>
      </form>
      <hr>
      <form method="POST">
         <div class="form-group">
            <label for="names">School <code>&lth5&gt</code> </label>
            <input type="text" name ="names" class="form-control" id="names" value="">
         </div>
         <div class="form-group">
            <label for="roles">Status<code>&lth5&gt</code> </label>
            <input type="text" name ="roles" class="form-control" id="roles" value="">
         </div>
         <div class="form-group">
            <label for="dates">Dates<code>...&ltbr&gt...</code> </label>
            <input type="text" name ="dates" class="form-control" id="dates" value="">
         </div>
         <div class="form-group">
            <label for="p_one">Paragraph<code>&ltp&gt</code> </label>
            <textarea name="p_one" class="form-control" id="p_one" rows="3"></textarea>
         </div>
         <button type="submit" class="btn btn-primary">Dodaj</button>
      </form>
      <hr>
      <?php $one->get_school($db); ?>
   </div>
</div>
<?php
   $footer = 'footer.php';
   if(file_exists($footer)){require $footer;}
   else{die('Nie udało się pobrać pliku stopki');}
   ?>