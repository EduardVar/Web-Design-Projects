$(function() {

  var started = false;
  var bothDone = false;

  // Click the GO button
  $("#go").click(function() {

    if (started == false) {
      // Started race so updates bool
      started = true;

      // Build a function that checks to see if a car has won the race
      function checkIfComplete() {

        if( isComplete == false ) {
          isComplete = true;
        } else {
          place = "second";

          bothDone = true;
        }

      }

      // Get the width of the charset
      var carWidth = $("#car1").width();

      // Get width of racetrack
      var trackWidth = $(window).width() - carWidth;

      // Generate random number between 1 and 4000
      var raceTime1 = Math.floor( (Math.random() * 4000) + 1);
      var raceTime2 = Math.floor( (Math.random() * 4000) + 1);

      // Set flag variable to FALSE by default
      var isComplete = false;

      // Set flag variable to FIRST by default
      var place = "first";


      // Animate car 1
      $("#car1").animate({

        // Move car the width of the racetrack
        left: trackWidth,

      }, raceTime1, function() {

        // Runs when nimation is complete

        // Run a function to check if car complete race
        checkIfComplete();

        // Give text feedback in race info box
        $("#raceInfo1 span").text("Finished in " + place + " place. Clocking" +
          " in at " + raceTime1 + " milliseconds!");


      });

      // Animate car 1
      $("#car2").animate({

        // Move car the width of the racetrack
        left: trackWidth,

      }, raceTime2, function() {

        // Runs when nimation is complete

        // Run a function to check if car complete race
        checkIfComplete();

        // Give text feedback in race info box
        $("#raceInfo2 span").text("Finished in " + place + " place. Clocking" +
          " in at " + raceTime2 + " milliseconds!");


      });
    }

  });


  $("#reset").click(function() {

    if (bothDone == true) {
      $(".car").css("left","0");
      $(".raceInfo span").text("");

      started = false;
      bothDone = false;
    }
  });

});
