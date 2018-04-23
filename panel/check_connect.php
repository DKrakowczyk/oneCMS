<?php
   session_start();
   if(isset($_SESSION["username"]))
   {
    $con = '../log/config.php';
    if(file_exists($con)){ require $con;}
    else{die('Nie udało się pobrać pliku konfiguracyjnego');}

    try

    {

    $pdo = new PDO("mysql:host=$serwer;dbname=$database", $usr, $passwd);



    if($pdo)

    {

   

    }

    }

    catch(PDOException $e)

    {

      if(isset($_SESSION))

      {

    session_destroy();  

      

    unset($_SESSION['login']);

    unset($_SESSION['password']);

      }

    }

}

else{

 header('Location:../index.php')  ; 



}

?>