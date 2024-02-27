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


echo '
  <a href="index.php">Home</a>
  <a href="math.php">Math</a>
  <a href="science.php">Science</a> 
  <a href="english.php">English</a>
  <a href="history.php">History</a>
  <a href="other.php">Other Supplies</a>
  '
?>