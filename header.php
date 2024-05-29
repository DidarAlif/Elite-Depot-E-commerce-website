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

<header class="header">

<div class="header-1">
   <div class="flex">
      <div class="share">
         <a href="#" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-instagram"></a>
         <a href="#" class="fab fa-linkedin"></a>
      </div>
      <img class="logo-img" src="logo.png" alt="align box">
   </div>
</div>

   <div class="header-2" style="background-color: #e00000;">
      <div class="flex">
         <nav class="navbar" style="order: -1;">
            <a href="home.php" class="underline" style="color: white;">Home</a>
            <a href="about.php" class="underline" style="color: white;">About</a>
            <a href="shop.php" class="underline" style="color: white;">Shop</a>
            <a href="contact.php" class="underline" style="color: white;">Contact</a>
            <a href="orders.php" class="underline" style="color: white;">Orders</a>
         </nav>


         <div class="icons" style="margin-left: auto;">
            <a href="search_page.php" class="fas fa-search" style="color: white;"></a>
            <div id="user-btn" class="fas fa-user" style="color: white;"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart" style="color: white;"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
      </div>
   </div>
</header>
