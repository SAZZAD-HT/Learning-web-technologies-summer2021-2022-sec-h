<?php 
	if(!isset($_COOKIE['name'])){
		header('location: login.php');
	}
?>
<html>
    
        <body>
            <form action="modify_course.php" method="POST" enctype="">
            <td>Course ID</td>
            <td><input type="text" name="id" value=""></td>
            <td><input type="submit" name="id" value="SUBMIT"></td>
            </form>
        </body>

</html>

<?php
if(isset($_GET['id'])) 
{
    $file = fopen('course.txt', 'r'); 

   
    while(!feof($file)) 
    {
      
        $data = fgets($file);

        
        $user = explode('|', $data); 

       
        if($id == $user[1])   
                
                return $user;
                break;
            }

    }




    
    ?>

    
    <h1>Course Description <?php echo $Info[2];?></h1><hr>
    
    <form action="course.php" method="post">
    
  <table>

    
    <tr>
        <td>Course Name:</td>
        <td><?php echo $Info[0];?></td>
    </tr>
    
 
    <tr>
        <td>Course ID:</td>
        <td><?php echo $Info[1];?></td>
    </tr>
    

    <tr>
        <td>prerequsit</td>
        <td><input type="text" name="prerequisite" value="<?php echo $Info[2];?>"></td>
    </tr>

  
    <tr>
        <td>Credit Hour:</td>
        <td><input type="number" name="hour" value="<?php echo $Info[4];?>"></td>
    </tr>

    
    
       
        <tr>
                <td>Course description</td>
                <td><?php echo $Info[3]; ?></textarea></td>
        </tr>

    



  </table>

    <!--    submit/add    -->
    <input type="submit" name="modify" value="Save Changes">
    
    <h3>Back to<a href=home.php> Home</a>?</h3>
    


    </form>


    
  <?php

  ?>
