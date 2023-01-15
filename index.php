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

  <!-- TABLE FOR FIRST QUERY -->
  <?php echo "1. FIND STORE FILTERING BY TK"; ?>
  <form action="firstQuery.php" method="post">
    <input type="submit" value="Go"/>
  </form>
  <!-- END TABLE FOR FIRST QUERY -->
    
  <!-- TABLE FOR SECOND QUERY -->
  <?php echo "2. FIND THE CHEAPEST PRODUCT"; ?>
  <form action="secondQuery.php" method="post">
    <input type="submit" value="Go"/>
  </form>
    <!-- END TABLE FOR SECOND QUERY -->
 
    <!-- START TABLE FOR THIRD QUERY--> 
    <?php echo "3. FIND MOST EXPENSIVE ORDER"; ?>
    <form action="thirdQuery.php" method="post">
      <input type="submit" value="Go"/>
    </form>
    <!-- END TABLE FOR THIRD QUERY -->


    <!-- START TABLE FOR FOURTH QUERY--> 
    <?php echo "4. TOTAL COST OF PRODUCTS IN EACH CATEGORY"; ?>
    <form action="fourthQuery.php" method="post">
      <input type="submit" value="Go"/>
    </form>
    <!-- END TABLE FOR FOURTH QUERY -->


    <!-- START TABLE FOR FIFTH QUERY--> 
    <?php echo "5. NUMBER OF PRODUCTS IN EACH CATEGORY"; ?>
    <form action="fifthQuery.php" method="post">
      <input type="submit" value="Go"/>
    </form>
    <!-- END TABLE FOR FIFTH QUERY -->


    <!-- START TABLE FOR 6 QUERY--> 
    <?php echo "6. DISPLAY PRODUCTS FROM CHEAPEST TO MOST EXPENSIVE"; ?>
    <form action="sixthQuery.php" method="post">
      <input type="submit" value="Go"/>
    </form>
    <!-- END TABLE FOR 6 QUERY -->
    
    <!-- START TABLE FOR 7 QUERY--> 
    <?php echo "7. EMPLEYS RANKED BY SALARI"; ?>
    <form action="seventhQuery.php" method="post">
      <input type="submit" value="Go"/>
    </form>
    <!-- END TABLE FOR 7 QUERY -->


    <!-- START TABLE FOR 8 QUERY--> 
    <?php echo "8. SHOW COSTUMERS WHO MADE DELIVERY MORE THAT X EUROS "; ?>
    <form action="eighthQuery.php" method="post">
      <input type="submit" value="Go"/>
    </form>
    <!-- END TABLE FOR 8 QUERY -->


    <!-- START TABLE FOR 9 QUERY--> 
    <?php echo "9. SHOW ORDERS THAT HAVE X PROD"; ?>
    <form action="ninethQuery.php" method="post">
      <input type="submit" value="Go"/>
    </form>
    <!-- END TABLE FOR 9 QUERY -->


    <!-- START TABLE FOR 10 QUERY--> 
    <?php echo "10. SELLERS IN EACH SHOP"; ?>
    <form action="tenthQuery.php" method="post">
      <input type="submit" value="Go"/>
    </form>
    <!-- END TABLE FOR 10 QUERY -->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</html>
