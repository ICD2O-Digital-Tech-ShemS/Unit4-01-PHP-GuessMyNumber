<?php
    $ans= "";
	$guessNumber = $_POST['guessNumber'];

        if ($guessNumber == 12) {
            echo $ans = "You got it right";
        }
        if  (guessNumber != 12) {
            echo $ans = "You got it wrong. the correct answer is" + 12; 
    }
?>
<h3>Results:</h3>
 <?php echo "$ans" ?>.