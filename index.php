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
      }h2{
        margin:2rem 0 0 0;
        /* font-size:3rem; */
        text-align:center;
      }
      #add {
        margin: 2rem;
        display: flex;
        justify-content: flex-end;
      }
    </style>
  </head>
  <body>
    <nav class="navbar">
      <div class="logo">
        <a href="#">CompanyName</a>
      </div>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="search.php">search</a></li>
        <!-- <li><a href="visitor.php">visitors</a></li> -->
        <li><a href="#">Contact</a></li>
        <li><a href="#" class="login-button">Login</a></li>
      </ul>
    </nav>
    <h2 >Visitors</h2>
    <div id="btn">
      <a href="addpage.html" id="add">
        <button type="submit" class="btn btn-primary">Add visitor</button>
      </a>
    </div>
    <table class="table container" border>
      <thead>
        <tr>
          <th scope="col">name</th>
          <th scope="col">time (24hr format)</th>
          <th scope="col">date</th>
          <th scope="col">purpose</th>
      
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php 
    $conn=mysqli_connect("localhost","root","","company");
    
    
    if($conn){
    
      $cmd="select * from `visitor`";
    
      $query=mysqli_query($conn,$cmd);
      while($result=mysqli_fetch_array($query)){
        // echo $result['company'];
    ?>
        <tr>
          <td><?php echo $result['name'] ?></td>
          <td><?php echo $result['time'] ?></td>
          <td><?php echo $result['date'] ?></td>
          <td><?php echo $result['purpose'] ?></td>
          
          <!-- <td><a href=.php"><button type="button" class="btn btn-success">buy</button></a></td> -->
        </tr>
      </tbody>
      <?php 
    }
      }
      ?>
    </table>
  </body>
</html>
