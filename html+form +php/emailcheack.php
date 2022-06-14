<?php
$email= $_POST['email'];

if (!preg_match("/^[a-zA-Z-' ]*$/",$email)) {
 echo "Only letters and white space allowed";
}
?>