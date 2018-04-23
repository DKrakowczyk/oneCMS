<?php

   session_start();
   if(isset($_SESSION["username"]))
   {
   $serwer = 'localhost';
   $database = 'id5492806_portfolio';
    $user     = 'id5492806_test';
    $password = 'Asaasa12';
    try
    {
    $pdo = new PDO("mysql:host=$serwer;dbname=$database", $user, $password);

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