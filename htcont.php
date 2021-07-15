<?php
//  $name=$_POST['name'];

 include 'signupdb.php';
 
 $sql="SELECT id,name,email,mobile,password FROM members ";

 if(isset($_GET['page']))
 {
     $page = $_GET['page'];
 }
 else
 {
     $page = 1;
 }

 $num_per_page = 03;
 $start_from = ($page-1)*03;
 
 $query = "select * from members limit $start_from,$num_per_page";
 $result = mysqli_query($conn,$query);

 $res="";

 if(mysqli_num_rows($result)>0)
 {
    //  <link rel="stylesheet" href="htcont.css">
     $res=$res.'<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <table class=".table">
   <tr>
     <th class="id">id</th>
     <th class="name">Name</th> 
     <th class="email">Email</th>
     <th class="mobile">Mobile</th>
     <th class="password">Password</th>
   </tr></table>';
     while($row=mysqli_fetch_assoc($result))
     {

         
         $res=$res.'<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          <link rel="stylesheet" href="htcont.css">
       <table class=".table">
    <tr>
    <td>"'.$row['id'].'"</td>
    <td>"'.$row['name'].'"</td>
    <td>"'.$row['email'].'"</td>
    <td>"'.$row['mobile'].'"</td>
    <td>"'.$row['password'].'"</td>
    </tr>';         
     }  
     $pr_query = "select * from members ";
     $pr_result = mysqli_query($conn,$pr_query);
     $total_record = mysqli_num_rows($pr_result );
     
     $total_page = ceil($total_record/$num_per_page);

     if($page>1)
     {
         echo "<a href='htcont.php?page=".($page-1)."' class='btn btn-danger'>Previous</a>";
     }

     
     for($i=1;$i<($total_page+1);$i++)
     {
         echo "<a href='htcont.php?page=".$i."' class='btn btn-primary'>$i</a>";
     } 
 }
echo $res;
?>
