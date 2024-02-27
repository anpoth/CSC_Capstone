<!-- Computer Science Capstone Project -->
<!-- School Supplies Store -->
<!-- Name Pending -->
<!-- Copyright Alexander Poth 2024 -->


<!-- Homepage -->
<!DOCTYPE html>
<html>
<head>
  <link href="main.css" rel="stylesheet" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>School Supplies Store</title>
  
<!--  Navigation Header  -->
  <div class="main">
    <?php include 'menu.php';?>
    <button id="subScriptionBtn">Manage Subscription</button>
    <button id="loginBtn" onclick="window.location.href='account.php'">Login/ Create Account</button>
    <button id="cartBtn" onclick="window.location.href='cart.php'">Cart</button>
  </div>
</head>

<!-- Main Body -->
<body>
  
  <!-- Logo and Welcome Message -->
  <img src="" alt="logoImage">
  <h2>Welcome to the School Supplies Store!</h2>

<!-- Today's Deals Box -->
<div id="todaysDeals">
  <h2>TODAY'S DEALS!</h2>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

</div>


<!-- Main Div -->
<div id="mainDiv">
  <!-- Help Div for those who need help finding specific items -->
  <div id="helpDiv">
    <h2>Help Finding What You Need?</h2>
    <br>
  </div>

  <!-- Vendor Div to show who our main vendors and donators are -->
  <div id="vendorDiv">
    <h2>Our Vendors and Donators!</h2>
    <br>
  </div>

  <!-- Contact Div so users can get in contact about donating or if they have questions.  -->
  <div id="contactDiv">
    <h2>Contact Us!</h2>
    <!-- Contact Form -->
    <form id="contactForm">
      <label>Name: </label><input type="text" id="nameInput"><br>
      <label>Email: </label><input type="text" id="emailInput"><br>
      <label>Reason for contact:</label><br>
      <textarea name="reason" id="reasonInput" cols="60" rows="10"></textarea><br>
      <button id="submitBtn" type="button">Submit</button>
    </form>
  </div>
</div>


<!-- Script Import -->
<script src="app.js"></script>
</body>
</html>
