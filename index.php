<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Guessing Game"/>
    <meta name="keywords" content="immaculata, ics2o" />
    <meta name="author" content="Shem Irekpita" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-purple.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="icon" type="image/png" sizes="180x190" href="">
    <title>Guess The Number</title>
  </head>
  <body>
    <?php 
			echo "<h3>Guess The NUmber</h3>";
		?>
        <form action="./result.php" method="post" target="result">
        <label for="guessNumber">Guess the Number</label>
        <input type="number" id="guessNumber" placeholder="guessNumber" name="guessNumber">
        <br><br>
        <input type="submit" value="Guess Number">
		</form>
        
        <iframe id="result" name="result">			
        <div id="answers">
          <div id="ans"></div>
        </div>
	    </iframe>
  </body>
</html>

