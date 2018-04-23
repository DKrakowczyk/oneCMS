<?php 
$config = 'config.php';
if(file_exists($config)){ require $config;}
else{die('Nie udało się pobrać pliku konfuguracyjnego');}


   if(isset($_POST['log'])){
   $user = $_POST['log'];
   }
   if(isset($_POST['pass'])){
   $password = $_POST['pass'];
   }
   
   if(isset($_POST['log']) && isset($_POST['pass']))
   {
       try
       {
       $pdo = new PDO("mysql:host=$serwer;dbname=$database", $user, $password);
   
       if($pdo)
       {
           session_start();
           $_SESSION['username']=$_POST['log'];
           $_SESSION['password']=$_POST['pass'];
           header('Location:../panel/cpanel.php');
           
           
       }
       }
       catch(Exception $e)
       {
           setcookie("asd","err",time()+15);
           header('Location:../login.php');
       }
         
}
?>