<!DOCTYPE html>
<html>
  <head> 
    <title>Order Form</title> 
  </head>  
  <body> 
    <p><u>Order Summary</u></p>  
    <?php 
      $num_cd_order = $_COOKIE['cd_order'];  
      $num_dvd_order = $_COOKIE['dvd_order'];  
      echo "Ordered CD: ".$num_cd_order." pieces <br>"; 
      echo "Ordered DVD: ".$num_dvd_order." pieces <br/><br/>"; 
    ?>
        <br>
        <form action="Lat3_6c.php" method="post">
            <input type="submit" value="Edit Orderan?" name="submit" />
        </form>
        <br>
        <form id="form" name="form" method="post" action="Lat3_6f.php">
            <input type="submit" name="button" id="button" value="Logout"/>
        </form>   
  </body> 
</html>