<?php 
	if(!isset($_COOKIE['name'])){
		header('location: login.php');
	}

?>
<form action="set_faculty.php" method="POST">
<table>
  
    <tr>
        <td>ID:</td>
        <td><input type="text" name="id" value=""></td>
    </tr>
    

    <tr>
        <td>Name:</td>
        <td><input type="text" name="name" value=""></td>
    </tr>
    
   
    <tr>
        <td>Contact No:</td>
		<td><input type="number" name="contact" value=""></td>
    </tr>


    <tr>
        <td>Room No:</td>
		<td><input type="text" name="room_no" value=""></td>
    </tr>

 
    <tr>
        <td>Linkedln:</td>
		<td><input type="text" name="linkedin" value=""></td>
    </tr>
    

    <tr>
        <td>Job Status:</td>
        <td><input type="text" name="status" value=""><br></td>

    </tr>
	<tr>
        
        <td><input type="Submit" name="Register" value="Register"></td>
		
    </tr></form>
	<?php
    if(isset($_POST["Register"])){
	$name=$_POST["name"];
     $id=$_POST["id"];
	$contact=$_POST["contact"];
	$room=$_POST["room_no"];
	$linked=$_POST["linkedin"];
	$status=$_POST["status"];

    // $_POST
	if ($name != null) {
        $file = fopen('faculty.txt', 'w');
        $data =   $name. "|" .   $id ."|".$contact . "|" . $room . "|" .$linked . "|" . $status . "\r\n";
        fwrite($file, $data);
        fclose($file);
        echo "Done";}

        
    }?>
	?>