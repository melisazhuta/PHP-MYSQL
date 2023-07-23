<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
  <title>Navbar</title>
</head>
<body>
<header class="header">

<div class="header-1">
   <div class="flex">
      <div class="share">
       
      </div>
      <p> <a href="login1.php">Login</a> | <a href="register1.php">Register</a> | <a href="logout.php">Logout</a> </p>
   </div>
</div>

<div class="header-2">
   <div class="flex">
      <a href="home.php" class="logo">E-book</a>

      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="reservation.php">Reservation</a>
         <a href="contact.php">Contact</a>
         <a href="orders.php">Orders</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <a href="search.php" class="fas fa-search"></a>
         <?php
             $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
             $cart_rows_number = mysqli_num_rows($select_cart_number); 
         ?>
         <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
      </div>
   </div>
</div>

</header>
</body>
</html>