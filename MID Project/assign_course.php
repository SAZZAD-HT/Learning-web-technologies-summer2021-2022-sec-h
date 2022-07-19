<?php 
	if(!isset($_COOKIE['name'])){
		header('location: login.php');
	}
?>
<?php require('Header.php'); ?>

<?php
     $file = fopen('student.txt', 'w');
     while(!(feof($file)))
     {
         $info = fgets($file);
         $split = explode('|', $info);
         echo $info;

         
     }
?>