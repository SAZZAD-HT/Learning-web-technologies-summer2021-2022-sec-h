<!DOCTYPE html>
<?php require('Header.php'); ?>
<?php 
	if(!isset($_COOKIE['name'])){
		header('location: login.php');
	}

?>
<head>
    <title>Department list</title>
</head>

<body>

    <form action="add_dept.php" method="get" enctype="">
        Department name<input type="text" name="dept_name" value=""><br />
        Department Type<input type="text" name="dept_type" value=""><br />
        <!-- Department courses<br>
        Course name<input type="text" name="Course_Name" value=""><br/> 
        Course ID<input type="number" name="Course_ID" value=""><br/>   -->
        Department ID<input type="number" name="dept_id" value=""><br />
        <input type="submit" name="ADD " value="ADD"><br />
    </form>
</body>


</html>

<?php
$file = fopen('user.txt', 'r');
$split = array();
$i = 0;
while (!(feof($file))) {
    $info = fgets($file);
    $data = explode('|', $info);

    $split[$i] = $data;
    $i++;



    //  echo '<Department Name:'.$split[0];
    //  echo 'Department Type:'.$split[1];


   
    for ($i = 0; $i < sizeof($split) -1; $i++) {
        $id= $split[$i][2]; }
    /* $dept_name =$split[0];
         $dept_type=$split[1]; */
}
if (isset($_POST['ADD'])) {

$dept_name = $_POST['dept_name'];
$dept_type = $_POST['dept_type'];
$dept_id = $_POST['dept_id'];
if ($dept_name != null) {
    $file = fopen('user.txt', 'a');
    $data = $dept_name . "|" . $dept_type . "|" . $dept_id . "\r\n";
    fwrite($file, $data);
    fclose($file);
    echo "Done";
?>
    <a href="home.php">Back</a><?php
                            } else {
                                echo "Input Field is empty";
                            }  } 
                                ?>