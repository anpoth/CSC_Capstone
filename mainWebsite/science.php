<!-- Computer Science Capstone Project -->
<!-- School Supplies Store -->
<!-- Name Pending -->
<!-- Copyright Alexander Poth 2024 -->


<!-- Science Supplies Page -->
<!DOCTYPE html>
<html>
<head>
  <link href="main.css" rel="stylesheet" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Science Supplies</title>
  
<!--  Navigation Header  -->
<ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="math.html">Math</a></li>
  <li><a href="science.html">Science</a></li> 
  <li><a href="english.html">English</a></li>
  <li><a href="history.html">History</a></li>
  <li><a href="other.html">Other Supplies</a></li>
  <li><button id="subScriptionBtn">Manage Subscription</button></li>
  <li><button id="loginBtn" onclick="window.location.href='account.html'">Login/ Create Account</button></li>
  <li><button id="cartBtn" onclick="window.location.href='cart.html'">Cart</button></li>
</ul>

<!-- Grade Level Navigation -->
<ul>
  <li><button id="gradeSchool" onclick="showElements('gradeSchoolDiv')">Grade School</button></li>
  <li><button id="middleHigh" onclick="showElements('middleHighDiv')">Middle/ High School</button></li>
  <li><button id="college" onclick="showElements('collegeDiv')">College Level</button></li>
  <li><button id="byCourse" onclick="showElements('byCourseDiv')">By Course</button></li>
</ul>
</head>

<!-- Main Body for Subject Section -->
<body>
  <div id="gradeSchoolDiv" style="display: none;">
    <h2>Elementary School</h2>
    <h3>Kindergarten through 5th Grade</h3>
  </div>
  
  <div id="middleHighDiv" style="display: none;">
    <h2>Middle School and High School</h2>
    <h3>6th Grade through 12th Grade</h3>
  </div>

  <div id="collegeDiv" style="display: none;">
    <h2>College Level</h2>
    <h3>Undergraduate through PhD</h3>

  </div>

  <div id="byCourseDiv" style="display: none;">
    <h2>Search for a specific course!</h2>
    <h3>Select which course you're looking for below!</h3>
  </div>



<!-- Script Import -->
<script src="app.js"></script>
</body>