<?php
   // CONSTANTS
  define( "TITLE", "Honest Click Bait Headlines" );

  // Uses outer files
  include("functions.php");

  // Checks for post collection on certain element
  if( isset( $_POST["fix_submit"] ) ) {
    // Calls function
    checkForClickBait();
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title><?php echo TITLE; ?></title> <!-- NOTE: Can use TITLE constant in HTML -->

    <!-- NOTE: Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

    <div class="container">
      <h1><?php echo TITLE; ?></h1>

      <div class="row">
        <form class="col-sm-8 mr-auto" action="" method="post">

          <p class="lead">
            Hate click bait? Use this program to change those annoying headlines
            into realistic and honest ones.
          </p>

          <textarea placeholder="Paste click bait headline here"
          class="form-control input-lg" name="clickbait_headline"></textarea>

          <br>

          <button type="submit" class="btn btn-primary btn-lg float-right"
          name="fix_submit">Make Honest!</button>

        </form>
      </div>

      <?php
        if ( isset( $_POST["fix_submit"] ) ) {

          // Get first value in array returned by checkForClickBait and store it
          // in a variable
          $clickBait = checkForClickBait()[0];

          // Get second value (the honest headline) and store it
          $honestHeadline = checkForClickBait()[1];

          // Call and pass two arguments in the display function
          displayHonestHeadline( $clickBait, $honestHeadline );
        }
      ?>

    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  </body>
</html>
