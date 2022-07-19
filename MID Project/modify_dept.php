<?php
$dept_id=$_GET["dept_id"];

function modify($obj)    
{
    $file = fopen('user.txt', 'r');  //introducing the file and the operation gonna perform


    //finding the number of lines in the file
    $count=0; //setting up a counter to count no. of lines
    while(fgets($file))
    {
        
        $count++;

    }

    $target = explode('|', $obj); //breaking down the line at '~' and store that part at $user array


    //again opening the file; start fresh
    $file = fopen('user.txt', 'r');  //introducing the file and the operation gonna perform
    $info = array();

    for($i=1; $i<=$count; $i++)//while we are not end of the file
    {

        //going to fetch a line of data once at a time
        $data = fgets($file);

        //now the line of data we fetch need to break it down on parts
        $user = explode('|', $data); //breaking down the line at '~' and store that part at $user array

        if($user[0] == $target[0])
        {
            $info[] = $obj;

        }

        else
        {
            $info[] = $data;
        }




    }

    return $info;
}

?>