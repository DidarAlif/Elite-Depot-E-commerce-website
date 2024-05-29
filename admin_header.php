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

<header class="header" style="background-color: #e00000; color: white;">

   <div class="flex" style="justify-content: center; align-items: center;">

      <a href="admin_page.php" class="logo" style="color: white; order: -1; margin-right: auto;">Admin<span style="color: white;">Panel</span></a>

      <nav class="navbar" style="order: 1; margin-left: auto; display: flex; align-items: center;">
         <a href="admin_page.php" style="color: white;">Home</a>
         <a href="admin_products.php" style="color: white;">Products</a>
         <a href="admin_orders.php" style="color: white;">Orders</a>
         <a href="admin_users.php" style="color: white;">Users</a>
         <a href="admin_contacts.php" style="color: white;">Messages</a>
         <div class="icons" style="color: white; display: flex;">
            <div id="menu-btn" class="fas fa-bars" style="order: 2;"></div>
            <div id="user-btn" class="fas fa-user" style="order: 3;"></div>
         </div>
      </nav>

      <div class="account-box" style="order: 4;">
         <p>username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">logout</a>
         <div>new <a href="login.php" style="color: blue;">login</a> | <a href="register.php" style="color: blue;">register</a></div>
      </div>

   </div>

</header>
