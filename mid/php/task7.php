<?php
function star(){
  for($i=0;$i<3;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";}}
  
    function number(){  
        $f=0;
    for ($i = 3; $i >0; $i--)
        {
        for($j = $i; $j >0; $j-- )
            {
            
            $f++;
       // $l=$f++;
                echo $f;
            }
        echo "<br>";
       $f=0;}}
function alphabet(){
    $lf='A';
    for ($li = 0; $li <3; $li++)
        {
        for($lj =0 ; $lj<=$li; $lj++ )
            {
        
           
                echo $lf; $lf++;
            }
        echo "<br>";

       }
}
   
       star();
       number();
       alphabet();
       echo "<html>
       <head>
           <title>Document</title>
       </head>
       <body>    <table border='1'><tr>
       <td>
       </td> <td>"
                
?>