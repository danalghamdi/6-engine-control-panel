<?php
$mysqli = new mysqli('localhost','root','','test') or die(mysqli_error($mysqli));

if(isset($_POST['save'])){
    $s1=$_POST['s1'];
    $s2=$_POST['s2'];
    $s3=$_POST['s3'];
    $s4=$_POST['s4'];
    $s5=$_POST['s5'];
    $s6=$_POST['s6'];

    $mysqli->query("insert into dta(s1,s2,s3,s4,s5,s6) values ('$s1','$s2','$s3','$s4','$s5','$s6')") or
             die($mysqli->error);

    $result = $mysqli->query("SELECT * FROM `dta` WHERE 1") or die($mysqli->error);
        
        if($result)
             {
                 echo "Data are Saved";
             }
         }

?>