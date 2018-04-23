<?php 

class files{

    public function addFile(){
    $max_size = 1024*1024;
    
    if(is_uploaded_file($_FILES['plik']['tmp_name']))
    {
        if($_FILES['plik']['size']>$max_size)
        {
            echo '<div class="alert alert-danger" role="alert">
            Plik jest za duży :(
          </div>';
        }
        else
        {
        echo '<div class="alert alert-success" role="alert">
            Plik został odebrany 
          </div>';

        move_uploaded_file($_FILES['plik']['tmp_name'],
        '../uploads/'.$_FILES['plik']['name'].'');

        if( move_uploaded_file($_FILES['plik']['tmp_name'],
        '../uploads/'.$_FILES['plik']['name'].''))
        {
            echo '<div class="alert alert-success" role="alert">
            Plik został zapisany w katalogu uploads
          </div>';   
        }
        }
    }
    else
    {
        echo '<div class="alert alert-danger" role="alert">
            Błąd przy przesyłaniu danych!
          </div>';
    }
    }

    public function listFiles()
    {

    $counter = 0;
    $dirname = "../uploads/";
    $images = glob($dirname."*.*");
    $actual_link = "";
    foreach($images as $image) {
    echo '<div class="card mb-3" style="max-width:24.5%;margin-left:.5px; margin-right:.5px;">
    <img class="card-img-top" style="height:200px;" src="'.$image.'" alt="'.substr($image,11).'">
    <div class="card-body">
      <h5 class="card-title">Nazwa pliku: '.substr($image,11).'</h5>
      <p class="card-text"><small class="text-muted">Data przesłania: '.date ("F d Y H:i:s.", filemtime($image)).'</small></p>
     <br><br>
      <form method="POST">
      <input type="hidden" name="nazwa" value="'.$image.'">
      <button style="position:absolute;right: 15px;bottom: 15px;"type="submit" class="btn btn-outline-danger">Usuń</button>
      </form>
    </div>
  </div>';
    }


    }

    public function deleteFile()
    {
        if(isset($_POST['nazwa']))
        {
      unlink($_POST['nazwa']);
        }
    }

    public function countFiles()
    {
        echo(count(array_slice(scandir('../uploads'),2)));
    }
}





?>