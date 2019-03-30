<?php
   //Header
$header = 'navbar.php';
if (file_exists($header)) {
   require $header;
} else {
   die('Nie udało się pobrać pliku nagłówka');
}
$one->update_hero_image($db);
?>
<div class="content-wrapper">
    <div class="container-fluid" id="contents">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" style="text-align:center !important;margin:auto;">
                <a href="hero.php">Edycja sekcji "Hero"</a>
            </li>
        </ol>
        <form method="POST">
            <div class="form-group">
                <label for="source">Image <code>http://...</code></label>
                <input type="text" name="source" class="form-control" />
            </div>
            <button type="submit" class="btn btn-primary">Zaktualizuj</button>
        </form>
    </div>
</div>
<?php
$footer = 'footer.php';
if (file_exists($footer)) {
   require $footer;
} else {
   die('Nie udało się pobrać pliku stopki');
}
?> 