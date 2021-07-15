<?php
//for hosting (hostinger online php db credentials)

// for local (xamp)
$servername="localhost";
$username="root";
$pwd="";
$database="signup";

$conn=mysqli_connect($servername,$username,$pwd,$database);


if(!$conn){
    die("failed to cinnect".mysqli_connect_error());
}

?>
