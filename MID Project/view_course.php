<?php
$file = fopen('course.txt', 'r');
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

for ($i = 0; $i < sizeof($split); $i++) {

?>






    <h1>Courses </h1>
    <hr>

    <form action="view_course.php" method="post" enctype="">

        <table>

            <tr>
                <td>
                    <h3>Course Name-- </h3>
                <td> <?php echo $split[$i][0] ?></td>
                </td>



            </tr>
            <tr>
                <td>
                    <h3>Course ID-- </h3>
                <td> <?php echo $split[$i][1] ?></td>
                </td>
                </td>



            </tr>
            <tr>
                <td>
                    <h3>Credit Hour-- </h3>
                <td><?php echo $split[$i][04] ?></td>
                </td>
                </td>


            </tr>
            <tr>
                <td>
                    <h3>Pre-Requisite-- </h3>
                <td><?php echo $split[$i][02] ?></td>
                </td>
                </td>
                d>

            </tr>
            <tr>
                <td>
                    <h3>Course description-- </h3>
                <td><?php echo $split[$i][03] ?></td>
                </td>
                </td>


            </tr>


        </table>

        <a href=home.php> Home</a><br><a href=modify_courses.php>view </a>


    </form>

<?php



}
?>