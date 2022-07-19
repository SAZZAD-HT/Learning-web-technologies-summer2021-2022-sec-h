<?php require('Header.php'); ?>
<?php
$file = fopen('user.txt', 'r');
$split = array();
$i = 0;
?>
<form action="add_tea_asign_room.php" method="post">
   input Faculty  ID <input type="text" name="id" value="">
   <input type="submit" name="submit"  value="submit">

</form><?php
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
?>
<?Php
for ($i = 0; $i < sizeof($split) ; $i++) {

?>
<?php
$id=$_POST["id"];
?>
<table>
    <tr><td> <h2>Faculty Name:</h2><?php echo $split[$i][0] ?></td>
    <php
          if($id=$split[$i][0])
    <td> <h2>faculty Id:</h2><?php echo $split[$i][1] ?></td>

</table>
 



    <?php



}
    ?>
  