<?php
$name=$_POST['name'];
// $name = isset($_POST['name']) ? $_POST['name'] : '';

$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];


include 'signupdb.php';

$sql="SELECT * FROM `members` WHERE name='$name'";

$result=mysqli_query($conn,$sql);



if($result){
  $sql="INSERT INTO `members` (`name`, `email`, `mobile`, `password`) VALUES('$name', '$email', '$mobile', '$password');" ;
}

else{
    echo"error";
}

mysqli_query($conn,$sql);
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="welcome"><h1>Welcome</h1>
<h3>ID</h3>
<h3>name</h3>
<h3>email</h3>
<h3>mobile</h3>
<h3>password</h3>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
//   setInterval(runfunction,1000);
  function runfunction()
  {
    $.post("htcont.php",{name:'<?php echo $name;?>'},
    function(data,status){
      document.getElementsByClassName('welcome')[0].innerHTML=data;
    })
  };
  runfunction();
  </script>
</body>

</html>