// Computer Science Capstone Project
// School Supplies Store
// Copyright (c) Alexander Poth

// Main Script


// #region
// Submit Contact Request Function
document.getElementById("submitBtn").onclick = submitContactRequest;
function submitContactRequest() {
    alert("Submitted!, You will hear from us via email shortly!");
    location.reload();
}
// #endregion



document.getElementById("gradeSchool").onclick = showElements;
document.getElementById("middleHigh").onclick = showElements;
document.getElementById("college").onclick = showElements;
document.getElementById("byCourse").onclick = showElements;



// Show current element of grade level
function showElements(elementToShow){
    var x = document.getElementById(elementToShow);
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
}