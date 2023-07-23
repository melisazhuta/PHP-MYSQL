<?php
include 'config.php';
// marrim form data

if(isset($_POST['submit'])){
 $email = $_POST['email'];
 $name = $_POST['name'];
 $date = $_POST['date'];
  
 
 //bejm insert  datat ne res. table
 $sql = "INSERT INTO `reservation` (`user_id` , name , email, date ) VALUES  (NULL,'$name', '$email','$date')";
 
  if (mysqli_query($conn, $sql)) {
    $message[] = 'Your reservation has been made';
   
 } else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
 
 </head>
 <body>
 
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
    
 <div class="form-container">
 
    <form action="" method="post">
       <h3>Make a reservation</h3>
       <p> <a href="home.php">Home</a> <p>
       <input type="text" name="name" placeholder="Name" required class="box">
       <input type="email" name="email" placeholder="Email" required class="box">
       <input tupe="date" id="start" name="date" placeholder="Ex:2023-07-23" min="2023-07-23" max="2023-12-31" required class="box">
      
       <input type="submit" name="submit" value="Submit" class="btn">
       
    </form>
 
 </div>
 
 </body>
 </html>