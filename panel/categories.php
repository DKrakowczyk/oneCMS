<?php
//Header
$header = 'navbar.php';
if(file_exists($header)){require $header;}
else{die('Nie udało się pobrać pliku nagłówka');}
$one->add_category($db);
$one->delete_category($db);
$one->set_section_portfolio($db);
?>
    <div class="content-wrapper">
        <div class="container-fluid" id="contents">
         <ol class="breadcrumb">
        <li class="breadcrumb-item" style="text-align:center !important;margin:auto;">
          <a href="categories.php">Edycja kategorii</a>
        </li>
    </ol>
    <form method="POST">
    <div class="form-group">
    <label for="header">&nbsp&nbsp</i>Section header <code>&lth2&gt</code></label>
    <input type="text"  name ="header" class="form-control" id="header" value="<?php $one->current_portfolio_header($db,'header'); ?>"/>
  </div>
  <div class="form-group">
    <label for="header_small">Section header 2 <code>&lth3&gt</code></label>
    <input type="text" name ="header_small" class="form-control" id="header_small" value="<?php $one->current_portfolio_header($db,'header_small');?>">
  </div>
<button type="submit" class="btn btn-outline-info">Edytuj</button>
</form>  
<hr>
<form method="POST">
  <div class="form-group">
    <label for="category"><i class="fa fa-edit"></i>Dodaj kategorię <code>bez spacji</code></label>
    <input type="text" name ="category" class="form-control" id="category"/>
</div>
<div class="form-group">
    <label for="etykieta"><i class="fa fa-edit"></i>Dodaj etykietę kategorii <code>Wyświetlana nazwa</code></label>
    <input type="text" name ="etykieta" class="form-control" id="etykieta"/>
</div>
<button type="submit" class="btn btn-outline-info">Dodaj</button>
</form>

    <?php $one->create_backend_categories($db); ?>


    <hr>
</div>
        </div>

<?php
$footer = 'footer.php';
if(file_exists($footer)){require $footer;}
else{die('Nie udało się pobrać pliku stopki');}
?>