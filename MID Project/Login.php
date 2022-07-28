<html>

<body>
    <?php require('Header.php'); ?>

    <form action="login.php" method="post" enctype="">


        <h1>Welcome to University Management</h1>
        <hr>
        <h3>Admin Login</h3>

        <table>


            <tr>
                <td>Username</td>
                <td><input type="text" name="name" value=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="login" value="Login"></td>

                <td><br><a href="registration.php">Register</a></td>
               
            </tr>
            <script>
             
            
            console.log(a);
            document.write('test');

            function change(){
                document.getElementsByTagName('h1')[0].innerHTML = "My JS Example!";
            }
            function getname(){
                let username = document.getElementById('username').value;
                if(username == ""){
                    document.getElementsByTagName('h1')[0].innerHTML = "Null value";
                }else{
                    document.getElementsByTagName('h1')[0].innerHTML = username;
                }

            }
        </script>
            





        </table>

    </form>



    <body>

</html>
<?php

    if(isset($_POST['login']))
    {

        $username = $_REQUEST['name'];
        $password = $_REQUEST['password'];
        
        if($username != null && $password != null)
        {
        
            $file = fopen('management_user.txt', 'r');

            while(!feof($file))
            {
                $data = fgets($file);

                $user = explode('|', $data);
               

                if($username == $user[0] && $password == $user[1] )
                {
                    echo "Login Successful";
                    

                    
                    setcookie('name', $username, time()+3600, '/');
                    header('Location: home.php');



               
                   		
			     
               
                }
                else{
                    echo "<h1>Wrong user name or password</h1>";

                }

                
            }


        }

        else
        { echo '
        
      
        <h2>Back to<a href=home.php>Login</a>?</h2>
        
        ';
    }
}
?>