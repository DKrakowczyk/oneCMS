<?php
//Header
$header = 'navbar.php';
if(file_exists($header)){require $header;}
else{die('Nie udało się pobrać pliku nagłówka');}
//themes/onepage

if(isset($_POST['id']))
{
    $one->delete_mails($db,$_POST['id']);  
}
?>
    <div class="content-wrapper">
        <div class="container-fluid" id="contents">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" style="text-align:center !important;margin:auto;">
          <a href="mails.php" >Wiadomości</a>
        </li>
    </ol>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Temat</th>
      <th scope="col">Adres e-mail</th>
      <th scope="col">Treść wiadomości</th>
      <th scope="col">Akcja</th>
    </tr>
  </thead>
  <tbody>

<?php 

$one->get_mails($db); 




?>
  </tbody>
</table>
      </div>
        </div>

<?php
$footer = 'footer.php';
if(file_exists($footer)){require $footer;}
else{die('Nie udało się pobrać pliku stopki');}
?>