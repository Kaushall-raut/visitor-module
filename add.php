<?php 
$conn=mysqli_connect("localhost","root","","company");

 $name=$_REQUEST['name'];
 $timee=$_REQUEST['timee'];
 $date=$_REQUEST['date'];
  $purpose=$_REQUEST['purpose'];


  if(isset($_REQUEST['sub'])){

    $cmd="insert into `visitor` values('$name','$timee','$date','$purpose') ";

    mysqli_query($conn,$cmd);
    header("location:index.php");

  }

?>