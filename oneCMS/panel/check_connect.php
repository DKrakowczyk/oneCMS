<?php
session_start();

if (isset($_SESSION["username"])) {
		$con = '../log/config.php';
		if (file_exists($con)) {
				require $con;
			} else {
				die('Nie udało się pobrać pliku konfiguracyjnego');
			}
		try {
			$pdo = new PDO("mysql:host=$server;dbname=$database", $usr, $passwd);
		} catch (PDOException $e) {
			if (isset($_SESSION)) {
					header('Location:../log/logout.php');
				}
		}
	} else {
		header('Location:../index.php');
	}
 