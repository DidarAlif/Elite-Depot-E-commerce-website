<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

// Fetch user name and email from the session or database
$user_info_query = mysqli_query($conn, "SELECT name, email FROM `users` WHERE id = '$user_id'");
$user_info = mysqli_fetch_assoc($user_info_query);
$user_name = $user_info['name'];
$user_email = $user_info['email'];

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $user_name); // Use the user's name from the session or database
   $email = mysqli_real_escape_string($conn, $user_email); // Use the user's email from the session or database
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND message = '$msg'") or die('query failed');

   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'Message already sent!';
   }else{
      mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, message) VALUES('$user_id', '$name', '$email', '$msg')") or die('query failed');
      $message[] = 'Message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Add your existing head content here -->

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Add additional styling here */
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 70vh;
        }

        form {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
            width: 80%;
            max-width: 500px;
        }

        h3 {
            color: #333;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .box {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            resize: vertical;
        }

        .btn {
            background-color: #8e44ad;
            color: #fff;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #6c3483;
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <div class="heading">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <h3>Contact us</h3>
        <p><a href="home.php">Home</a> / Contact</p>
    </div>

    <section class="contact">
        <div class="form-container">
            <form action="" method="post">
                <h3>Say something!</h3>
                <div class="box"><?php echo $user_name; ?></div>
                <div class="box"><?php echo $user_email; ?></div>
                <textarea name="message" placeholder="Enter your message" rows="5"></textarea>
                <input type="submit" value="Send Message" name="send" class="btn">
            </form>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!-- Add your existing script and style links here -->
</body>
</html>