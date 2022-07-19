<html>
<?php require('Header.php'); ?>

<body>
    <h1 center>
        Management Registration
    </h1>
    <form action="registration.php" method="POST" enctype="">
        <fieldset>
            <legend>General</legend>
            <label for="fname">First Name:</label>
            <input type="text" name="firstname" id="fname">



            <br><br>
            <label for="lname">Last Name:</label>
            <input type="text" name="lastname" id="lname">



            <br><br>
            <label>Gender</label>
            <input type="radio" id="male" name="gender" value="Male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="Female">
            <label for="female">Female</label>



        </fieldset>
        <fieldset>
            <legend>Contact</legend>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">

            <br><br>
            <label for="nid">National Id:</label>
            <input type="number" name="nid" id="nid">


            <br><br>
            <label for="mno">Mobile No</label>
            <input type="number" name="mobile_no" id="mno">


        </fieldset>
        <fieldset>
            <legend>Address</legend>
            <label for="address">Street/House/Road</label>
            <input type="text" name="address" id="address">

            <br><br>
            <label for="country">Country</label>
            <select id="country" name="country">
                <option value="Bangladesh">Bangladesh</option>
                <option value="India">India</option>
                <option value="Nepal">Nepal</option>
                <option value="USA">USA</option>
            </select>

        </fieldset>
        <fieldset>
            <legend>Log in Info</legend>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">

            <br><br>
            <label for="password">New password</label>
            <input type="password" name="password" id="password">


        </fieldset>
        <fieldset>
            <legend>Security Question</legend>
            <label for="sq">Your father's name?</label>
            <input type="text" name="sq" id="sq">

        </fieldset>
        <br>
        <input type="Submit" name="ADD " value="Registration">
    </form>
    <h1>
        <h1>

            <label>Already have an account?Click here</label>
            <a href="login.php">Login</a>
         
            


</body>

</html>
<?php
if (isset($_POST["ADD"])) {
    $name = $_POST['firstname'] . $_POST['lastname'];
    $email = $_POST['email'];
    $nid = $_POST['nid'];
    $mobile_no = $_POST['mobile_no'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $username = $_POST['username']; //
    $password = $_POST['password']; //
    $sq = $_POST['sq'];
    

    $mail = $_REQUEST['email'];
    function mailchk($mail)
    {

        if ($mail != null) {
            $arr = explode("@", $mail);
            //$status = true;

            //echo $arr[1];
            if (travaseString($mail)) {
                if ($arr[1] == "gmail.com") {
                    //echo "Valid Email";
                    return true;
                } else return false;
                //echo "Email is not Valid";

            }
        }
    }
    function travaseString($string)
    {
        $arr = str_split($string);
        $length = sizeof($arr); 

        for ($i = 1; $i < $length; $i++) 
        {

            if ($arr[$i] == '@') {
                $status = true;
                break;
            } else $status = false;
        }

        return $status;
    }
    if ($name != null) {
        if (mailchk($mail)) {
            $file = fopen('management_user.txt', 'a');
            $data =   $username . "|" .   $password . "|" . $name . "|" . $email . "|" . $nid . "|" . $mobile_no . "|" . $address . "|" . $country . "|" . $sq . "\r\n";
            fwrite($file, $data);
            fclose($file);
            echo "Done";
        } else {
            echo "wrong mail";
        }
    }
}

?>