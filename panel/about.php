<?php
//Header
$header = 'navbar.php';
if(file_exists($header)){require $header;}
else{die('Nie udało się pobrać pliku nagłówka');}
$one->update_about($db);
?>
    <div class="content-wrapper">
        <div class="container-fluid" id="contents">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" style="text-align:center !important;margin:auto;">
          <a href="cpanel.php" >Edycja sekcji "O nas"</a>
        </li>
    </ol>
      <div class="row">
        <div class="col-12">
        <form method="POST" id="update_about">
  <div class="form-group">
    <label for="header">&nbsp&nbsp</i>Section header <code>&lth2&gt</code></label>
    <input type="text" form="update_about" name ="header" class="form-control" id="header" value="<?php $one->section_about($db,'header');?>"/>
  </div>
  <div class="form-group">
    <label for="header_small">Section header 2 <code>&lth3&gt</code></label>
    <input type="text" name ="header_small" class="form-control" id="header_small" value="<?php $one->section_about($db,'header_small');?>">
  </div>
  <div class="form-group">
    <label for="names">Company <code>&lth4&gt</code> </label>
    <input type="text" name ="names" class="form-control" id="names" value="<?php $one->section_about($db,'names');?>">
  </div>
  <div class="form-group">
    <label for="title">Content header#2 <code>&lth4&gt</code> </label>
    <input type="text" name ="title" class="form-control" id="title" value="<?php $one->section_about($db,'title');?>">
  </div>
  <div class="form-group">
    <label for="p_one">Paragraph 1 <code>&ltp&gt</code> </label>
    <textarea name="p_one" class="form-control" id="p_one" rows="3"><?php $one->section_about($db,'p_one');?></textarea>
  </div>
  <div class="form-group">
    <label for="p_two">Paragraph 2 <code>&ltp&gt</code> </label>
    <textarea name="p_two" class="form-control" id="p_two" rows="3" value=""><?php $one->section_about($db,'p_two');?></textarea>
  </div>
  <div class="form-group">
    <label for="button_text">Button text <code>&ltbutton&gt</code> </label>
    <input type="text" name ="button_text" class="form-control" id="button_text" value="<?php $one->section_about($db,'button_text');?>">
  </div>
  <div class="form-group">
    <label for="button_href">Button href <code>href</code> </label>
    <input type="url" name ="button_href" class="form-control" id="button_href" value="<?php $one->section_about($db,'button_href');?>">
  </div>
  <button type="submit" class="btn btn-primary">Zaktualizuj</button>
</form>
        </div>
      </div>
    

<?php
$footer = 'footer.php';
if(file_exists($footer)){require $footer;}
else{die('Nie udało się pobrać pliku stopki');}
?>