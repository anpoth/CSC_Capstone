<?php
// $row = 1;
// if (($handle = fopen("test.csv", "r")) !== FALSE) {
//     while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//         $num = count($data);
//         echo "<p> $num fields in line $row: <br /></p>\n";
//         $row++;
//         for ($c=0; $c < $num; $c++) {
//             echo $data[$c] . "<br />\n";
//         }
//     }
//     fclose($handle);
// }


echo '<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="math.php">Math</a></li>
  <li><a href="science.php">Science</a></li> 
  <li><a href="english.php">English</a></li>
  <li><a href="history.php">History</a></li>
  <li><a href="other.php">Other Supplies</a></li>
  <li><button id="subScriptionBtn">Manage Subscription</button></li>
  <li><button id="loginBtn" onclick="window.location.href="account.php"">Login/ Create Account</button></li>
  <li><button id="cartBtn" onclick="window.location.href="cart.php"">Cart</button></li>
</ul>'
?>