<?php
// Form handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = htmlspecialchars($_POST['name']);
   $email = htmlspecialchars($_POST['email']);
   $number = htmlspecialchars($_POST['number']);
   $message = htmlspecialchars($_POST['msg']);

   // Example: Sending an email (adjust the email settings as needed)
   $to = "example@yourdomain.com"; // Replace with your email address
   $subject = "New Contact Form Submission";
   $body = "Name: $name\nEmail: $email\nNumber: $number\nMessage:\n$message";
   $headers = "From: $email";

   if (mail($to, $subject, $body, $headers)) {
      $success = "Message sent successfully!";
   } else {
      $error = "Failed to send the message. Please try again.";
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header">
   <section class="flex">
      <a href="home.php" class="logo">Education</a>
      <form action="search.php" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="Search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>
      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>
      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name">Shaikh Anas</h3>
         <p class="role">Student</p>
         <a href="profile.php" class="btn">View Profile</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">Login</a>
            <a href="register.php" class="option-btn">Register</a>
         </div>
      </div>
   </section>
</header>   

<div class="side-bar">
   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>
   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name">Eranda</h3>
      <p class="role">Student</p>
      <a href="profile.php" class="btn">View Profile</a>
   </div>
   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>About</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
      <a href="calender.php"><i class="fas fa-chalkboard-user"></i><span>calender</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>Contact Us</span></a>
   </nav>
</div>

<section class="contact">
   <div class="row">
      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>

      <!-- Contact Form -->
      <form action="contact.php" method="post">
         <h3>Get in Touch</h3>
         <?php if (isset($success)) echo "<p style='color:green;'>$success</p>"; ?>
         <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
         <input type="text" placeholder="Enter your name" name="name" required maxlength="50" class="box">
         <input type="email" placeholder="Enter your email" name="email" required maxlength="50" class="box">
         <input type="number" placeholder="Enter your number" name="number" required maxlength="50" class="box">
         <textarea name="msg" class="box" placeholder="Enter your message" required maxlength="1000" cols="30" rows="10"></textarea>
         <input type="submit" value="Send Message" class="inline-btn" name="submit">
      </form>
   </div>

   <div class="box-container">
      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>Phone Number</h3>
         <a href="tel:1234567890">123-456-7890</a>
         <a href="tel:1112223333">111-222-3333</a>
      </div>
      
      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>Email Address</h3>
         <a href="mailto:shaikhanas@gmail.com">shaikhanas@gmail.com</a>
         <a href="mailto:anasbhai@gmail.com">anasbhai@gmail.com</a>
      </div>

      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>Office Address</h3>
         <a href="#">Flat no. 1, A-1 Building, Jogeshwari, Mumbai, India - 400104</a>
      </div>
   </div>
</section>

<footer class="footer">
   <!-- Footer Content -->
</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>