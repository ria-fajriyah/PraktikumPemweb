<html>
  <head>
    <title>Order Form</title>
  </head>
  <body>
    <form action="Lat3_5b.php" method="post">
      <p> Order CD, amount: 
          <input type="text" name="cd_order" value=
          <?php
            if (isset ($_COOKIE['cd_order'])){
                echo $_COOKIE['cd_order'];
            } else {
                echo "0"; }?> size="2"
                maxlength="2" />                       
      </p>      
      <p> Order DVD, amount:
          <input type="text" name="dvd_order" value=
          <?php
            if (isset ($_COOKIE['dvd_order'])){
                echo $_COOKIE['dvd_order'];
            } else {
                echo "0"; }?> size="2"
                maxlength="2" />  
      </p> 
      <input type="submit" value="Add To Cart" name="submit">
    </form>
  </body> 
</html>