<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Company Navbar</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
      table{
        margin-top:4rem;
      }h2,h3{
        margin:2rem 0 0 0;
        /* font-size:3rem; */
        text-align:center;
      }
      h3{
        margin-bottom:2rem;
      }
      #add {
        margin: 2rem;
        display: flex;
        justify-content: flex-end;
      }
      .rk{
        display:flex;
        justify-content:center;
margin:2rem;

      }
      b{
        /* display:flex; */
        /* justify-content:center; */
        /* flex-direction:column; */
      }
      label{
        font-weight:bold;
      }
    </style>
  </head>
  <body>
    <nav class="navbar">
      <div class="logo">
        <a href="#">CompanyName</a>
      </div>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">search</a></li>
        <!-- <li><a href="visitor.php">visitors</a></li> -->
        <li><a href="#">Contact</a></li>
        <li><a href="#" class="login-button">Login</a></li>
      </ul>
    </nav>
    <h2 >Visitors</h2>
    <h3 >search</h3>


<form action="search.php" method="get">
    <div class="rk">
        <label for="">From: </label>
        <input class="form" type="date" name="date1">

    </div>
    <div class="rk">
        <label for="">To: </label>
        <input class="form" type="date" name="date2"><br/>


    </div>
    <div class="rk">
        <button type="submit" class="btn btn-primary b" name="success">Search</button>

    </div>
</form>
    <table class="table container" border>
      <thead>
        <tr>
          <th scope="col">name</th>
          <th scope="col">time</th>
          <th scope="col">date</th>
          <th scope="col">purpose</th>
      
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php 
    $conn=mysqli_connect("localhost","root","","company");
    if(isset($_REQUEST['success'])){

    $date1=$_REQUEST['date1'];
     $date2=$_REQUEST['date2'];
    
     if(empty($date2)){
        $date2=date("y-m-d");
     }
    
    if($conn){
    

      $cmd="SELECT * FROM `visitor` WHERE `date` BETWEEN '$date1' AND '$date2' ";
    
      $query=mysqli_query($conn,$cmd);
      while($result=mysqli_fetch_array($query)){

    ?>
        <tr>
          <td><?php echo $result['name'] ?></td>
          <td><?php echo $result['time'] ?></td>
          <td><?php echo $result['date'] ?></td>
          <td><?php echo $result['purpose'] ?></td>
        </tr>
      </tbody>
      <?php 
    }
}
      }
      ?>
    </table>
  </body>
</html>
