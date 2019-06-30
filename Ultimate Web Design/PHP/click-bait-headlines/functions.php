<?php
    // FUNCTIONS.PHP

    function checkForClickBait() {
        // grab value from textare and store all values in lowercase
        $clickBait = strtolower( $_POST["clickbait_headline"] );

        // Store array of clickbait-sounding words or phrases
        $a = array(
          "scientists",
          "doctors",
          "hate",
          "stupid",
          "weird",
          "simple",
          "trick",
          "shocked me",
          "you'll never believe",
          "hack",
          "epic",
          "unbelievable"
        );

        // Stores replacements in same index as in 'a'
        $b = array(
          "so-called scientists",
          "so-called doctors",
          "aren't threatened by",
          "average",
          "completely normal",
          "ineffective",
          "method",
          "is no different than the others",
          "you won't really be surprise by",
          "slightly improve",
          "boring",
          "normal"
        );

        // Replaces words in original clickBait (a) with same indicies (b)
        $honestHeadline = str_replace( $a, $b, $clickBait );

        // Return array of the variables so we can access them globally
        return array($clickBait, $honestHeadline);
    }

    function displayHonestHeadline( $x, $y ) {
        // Use ucwords() to uppercase every seperate word
        echo "<strong class='text-danger'>Original Headline</strong><h4>".ucwords($x)."</h4><hr>";

        echo "<strong class='text-success'>Honest Headline</strong><h4>".ucwords($y)."</h4>";
    }
?>
