<?php 
	if(!isset($_COOKIE['name'])){
		header('location: login.php');
	}

?>


<?php
$file = fopen('routine.txt', 'r');
$split = array();
$i = 0;
while (!(feof($file))) {
	$info = fgets($file);
	$data = explode('|', $info);

	$split[$i] = $data;
	$i++;



	//  echo '<Department Name:'.$split[0];
	//  echo 'Department Type:'.$split[1];



	/* $dept_name =$split[0];
         $dept_type=$split[1]; */
}

for ($i = 0; $i < sizeof($split)-1 ; $i++) {

?>
	<table>
		<tr>
			<td>
				<h2>Date :</h2><?php echo $split[$i][0] ?>
			</td>
			<td>
				<h2>Time</h2><?php echo $split[$i][1] ?>
			</td>
			<td>
				<h2>Subject:</h2><?php echo $split[$i][2] ?>
			</td>
			
	</table>




<?php



}
?>
<!-- <html><body><h4> Modify Department  </h4>
    <form action="modify_dept.php" method="POST" enctype="">
         <input type="number" name="dept_id" value=""><br />
        <input type="submit" name="ADD " value="ADD"><br />
        
    </form></body></html> -->
