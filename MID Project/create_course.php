<?php 
	if(!isset($_COOKIE['name'])){
		header('location: login.php');
	}

?>
<h1>Create Course</h1>
<hr>

<form action="create_course.php" method="post" enctype="">

    <table>

        <tr>
            <td>Course Name</td>
            <td><input type="text" name="name" value=""></td>

        </tr>
        <tr>
            <td>Course ID</td>
            <td><input type="text" name="id" value=""></td>

        </tr>
        <tr>
            <td>Credit Hour</td>
            <td><input type="number" name="hour" value=""></td>
        </tr>
        <tr>
            <td>Pre-Requisite</td>
            <td><input type="text" name="pre" value=""></td>
        </tr>
        <tr>
            <td>Course description</td>
            <td><textarea name="description" id="" cols="20" rows="5"></textarea></td>
        </tr>


    </table>
     <input type="submit" name="add" value="Add Course">
 <a href=home.php> Home</a><br><a href=view_course.php >view </a>


</form>
<?php

if(isset($_POST["add"])){
$cid=$_POST["id"];
// if($cid!=null){

$cname=$_POST["name"];
$chour=$_POST["hour"];
$cdes=$_POST["description"];
$cid=$_POST["id"];
$cpr=$_POST["pre"];

  if($cid!= null)
 {
    $file = fopen('course.txt', 'a');
    $data = $cname. "|" .$cid . "|" . $cpr ."|".$cdes. "|".$chour."\r\n";
    fwrite($file, $data);
    fclose($file);
    echo "Done";}
    else{
        echo"<h1>Enter Again</h1>";
    }}
?>