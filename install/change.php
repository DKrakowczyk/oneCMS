<?php
if (isset($_POST['server'])) {
    $s  = $_POST['server'];
    $db = $_POST['database'];
    $u  = $_POST['user'];
    $p  = $_POST['password'];
}
try {
    $pdo      = new PDO("mysql:host=$s;dbname=$db", $u, $p);
    $phpstart = '<?php ';
    $phpend   = ' ?>';
    $str1     = '$server=';
    $str2     = '$database=';
    $str3     = '$usr=';
    $str4     = '$passwd=';
    $end      = ';';
    $path     = "../log/config.php";
    $value    = "$phpstart$str1'$s'$end$str2'$db'$end$str3'$u'$end$str4'$p'$phpend";
    file_put_contents($path, $value);
    
    if (is_dir('../install')) {
        $files = glob('../install/*');
        foreach ($files as $file) {
            if (is_file($file))
                unlink($file);
        }
        rmdir('../install');
?>
          <script>window.location.replace('../index.php');</script>
           <?php
    }
    if (!is_dir('../uploads')) {
        mkdir('../uploads');
    }
}
catch (Exception $e) {
    die('Wprowadzono nieprawidłowe dane. Połączenie z bazą nie było możliwe
    <a href="../install/install.php"><h5>Powrót</h5>');
}
?>