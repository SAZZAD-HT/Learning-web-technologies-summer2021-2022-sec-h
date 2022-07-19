<!DOCTYPE html>
<html>
</body>

<head>
</head>
<?php require('Header.php'); ?>
<?php 
	if(!isset($_COOKIE['name'])){
		header('location: login.php');
	}
?>
<table border="4">
    <tr>
        <th>LOG IN AS<h1><?php echo $_COOKIE['name']; ?></h1>]</th>
    </tr>
    <tr>
        <td>-----------------------<a href="add_dept.php"> ADD Department</a> ------------------------</td>
    </tr>
    <tr>
        <td>------------------ <a href="view_dept.php">View All Department</a> -------------------</td>
    </tr>
    <tr>
        <td>-----------------------<a href="create_course.php">Create a Course and view </a> ------------------------</td>
    </tr>
    <tr>
        <td>-----------------------<a href="modify_course.php">Update course</a> ------------------------</td>
    </tr>
    <tr>
        <td>-----------------------<a href="set_faculty.php">Set Faculty To course</a> ------------------------</td>
    </tr>
    <tr>
        <td>------------------------<a href="add_tea_asign_room.php">ADD Teacher to course</a> ------------------------</td>
    </tr>
    <tr>
        <td>------------------------<a href="add_tea_asign_room.php">Assign Room and time to a course</a> ------------------------</td>
    </tr>
    <tr>
        <td>------------------------<a href="view_result.php">View result Of student</a> ------------------------</td>
    </tr>
    <tr>
        <td>------------------------<a href="Exam_routine.php">Exam Routinne creation</a> ------------------------</td>
    </tr>

</table>
<a href="logout.php">Logout</a>
</body>

</html>