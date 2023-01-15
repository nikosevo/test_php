<?php 
  $servername = "127.0.0.1";
  $username = "root";
  $database = "eshops";

  $conn = new mysqli($servername, $username,"",$database);

  if($conn->connect_error){
    die("connection failed");
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Use title if it's in the page YAML frontmatter -->
    <title>Welcome to XAMPP</title>

    <meta name="description" content="XAMPP is an easy to install Apache distribution containing MariaDB, PHP and Perl." />
    <meta name="keywords" content="xampp, apache, php, perl, mariadb, open source distribution" />

    <link href="/dashboard/stylesheets/normalize.css" rel="stylesheet" type="text/css" /><link href="/dashboard/stylesheets/all.css" rel="stylesheet" type="text/css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <script src="/dashboard/javascripts/modernizr.js" type="text/javascript"></script>


    <link href="/dashboard/images/favicon.png" rel="icon" type="image/png" />
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


  </head>
    
<!-- TABLE FOR SECOND QUERY -->
  <?php echo "FIND THE CHEAPEST PRODUCTS"; ?>
  <form action="#" method="post">
    <input type="submit" value="Submit"/>
  </form>
  <form action="index.php" method="post">
    <input type="submit" value="home"/>
  </form>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Store Num</th>
          <th scope="col">Name</th>
          <th scope="col">Phone Num</th>
          <th scope="col">Tk</th>
        </tr>
      </thead>
    <?php 
      $sql = "SELECT * FROM `product` WHERE price = (SELECT MIN(price) FROM product);";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc()){ 
    ?>
      
        <tbody>
          <tr>
            <td><?php echo $row["Product_id"];?> </td>
            <td><?php echo $row["Price"];?> </td>
            <td><?php echo $row["Description"];?> </td>
            <td><?php echo $row["Categhory_id"];?> </td>
          </tr>

        </tbody>
  
    
    <?php } ?>
    </table>

    <!-- END TABLE FOR SECOND QUERY -->



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</html>
