<?php

setcookie('name', $username, time()-10, '/');
header('location:login.php');


?><?php 

session_start();
session_destroy();

setcookie('status', 'true', time()-10, '/');
header('location: login.php');
?>.
