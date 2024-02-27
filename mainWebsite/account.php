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

<!-- Main Body of Account Creation/ Login -->
<body>
    <div>
        <h2>Login:</h2>
        <form id="loginForm">
            <label>Username: </label>
            <input type="text" id="accUsername" onkeydown = "if (event.keyCode == 13)  document.getElementById('mybutton').click()"/><br>
            <label>Password: </label>
            <input type="password" id="accPassword" onkeydown = "if (event.keyCode == 13)  document.getElementById('mybutton').click()"/> <br>
            <button type="button" id="accLoginBtn">Submit</button>
        </form>
        <h2>Create Account:</h2>
        <form id="createAccForm">
            <label>Username:..............</label>
            <input type="text" id="newAccUsername"> <br>
            <label>Email:......................</label>
            <input type="text" id="accEmail"> <br>
            <label>Password:...............</label>
            <input type="password" id="initialPsw"> <br>
            <label>Confirm Password:</label>
            <input type="password" id="confirmPsw"> <br>
            <button type="button" id="createAccBtn">Submit</button>
        </form>
    </div>



<!-- Script Import -->
<script src="app.js"></script>
</body>