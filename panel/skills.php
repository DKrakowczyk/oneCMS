<?php
   //Header
   $header = 'navbar.php';
   if(file_exists($header)){require $header;}
   else{die('Nie udało się pobrać pliku nagłówka');}
   $one->add_progress($db);
   $one->update_skills($db);
  
   ?>
<div class="content-wrapper">
   <div class="container-fluid" id="contents">
      <ol class="breadcrumb">
         <li class="breadcrumb-item" style="text-align:center !important;margin:auto;">
            <a href="hero.php" >Edycja sekcji "Skills"  <?php $one->delete_bar($db); ?></a>
         </li>
      </ol>
      <h4>Edycja sekcji "Skills"</h4>
      <form method="POST" id="update_skills">
  <div class="form-group">
    <label for="header">Section header <code>&lth2&gt</code></label>
    <input type="text"  name ="header" class="form-control" id="header" value="<?php $one->section_skills($db,'header');?>"/>
  </div>
  <div class="form-group">
    <label for="header_small">Section header#2 <code>&lth3&gt</code></label>
    <input type="text" name ="header_small" class="form-control" id="header_small" value="<?php $one->section_skills($db,'header_small');?>">
  </div>
  <div class="form-group">
    <label for="title">Title <code>&lth4&gt</code> </label>
    <input type="text" name ="title" class="form-control" id="names" value="<?php $one->section_skills($db,'title');?>">
  </div>
  <div class="form-group">
    <label for="p_one">Paragraph 1 <code>&ltp&gt</code> </label>
    <textarea name="p_one" class="form-control" id="p_one" rows="3" value=""><?php $one->section_skills($db,'p_one');?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Zaktualizuj</button>
</form>
<br>
    <hr>
    <br>
 
    <h4>Edycja progressbar'ów</h4>
      <form method="POST" >
  <div class="form-group">
    <label for="color">Color <code>bg-success, bg-info, bg-warning, bg-danger, s1, s2, s3, s4, s5</code></label>
    <input type="text"  name ="color" class="form-control" />
  </div>
  <div class="form-group">
    <label for="skill">Skill <code>0-100</code></label>
    <input type="text" name ="skill" class="form-control" >
  </div>
  <div class="form-group">
    <label for="tekst">Title <code> text </code> </label>
    <input type="text" name ="tekst" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Dodaj</button>
</form>
<br>
      <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h5 >Podgląd</h5>
    <?php $one->get_progress($db); ?>

   </div>
</div>
</div>
</div>
<?php
   $footer = 'footer.php';
   if(file_exists($footer)){require $footer;}
   else{die('Nie udało się pobrać pliku stopki');}
   ?>