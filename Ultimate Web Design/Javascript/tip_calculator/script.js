
function calculateTip() {

  // Store data of input
  var billAmount = document.getElementById("billamount").value;
  var serviceQuality = document.getElementById("serviceQuality").value;
  var numPeople = document.getElementById("totalPeople").value;

  // Quick Validation
  if (billAmount === "" || serviceQuality == 0) {
    window.alert("Invalid values.");
    return; // Prevents function from continuing
  }

  //Check to see if this input is empty or <= 1
  if (numPeople === "" || numPeople <= 1) {
    numPeople = 1;

    document.getElementById("each").style.display = "none";
  } else {
    document.getElementById("each").style.display = "block";
  }

  var total = (billAmount * serviceQuality) / numPeople;
  total = Math.round(total * 100) / 100;
  total = total.toFixed(2);

  // Display tip
  document.getElementById("totalTip").style.display = "block";
  document.getElementById("tip").innerHTML = total;
}

// Hide the tip amount on load
document.getElementById("totalTip").style.display = "none";
document.getElementById("each").style.display = "none";

// Clicking button calls custom Function
document.getElementById("calculate").onclick = function () {
  calculateTip ();
};
