<!DOCTYPE html>
<html>
<head>
    <title>My Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
    <img src="images/logo.png" alt="Shopping Cart Logo" class="center" width="200" height="200">
    <center>
        <h1>Shopping Cart</h1>
        <h3 id="subheader">The Online Shopping Store</h3>
    <hr>
    <ul class="menu">
        <li class="menu"><a href="index.html">Home</a></li>
        <li class="menu"><a href="news.html">News</a></li>
        <li class="menu"><a href="register.html">Contact</a></li>
        <li class="menu"><a href="about.php">About Us</a></li>
    </ul>
    <br>

    <?php
        //1
		define("companyName","Shopping Cart");

        //2
		echo "<h2>About ".companyName."</h2>";

		//3
		echo "<h4>This page is mainly about the ".companyName." web site</h4><br>";

		//4
		$sold = 75;
		$total = 100;

		echo"<h2>The Shopping Cart</h2>";

		//5
		echo"<h4><table class='productData' border='1' width='30%'  cellspacing='0px' cellpadding='10px'><tr><td>Number of sold items</td><td>".$sold."</td></tr><tr><td>Total number of items</td><td>".$total."</td></tr></table></h4>";

		//6
		function findPercentage() {
			$GLOBALS['percentage']=( $GLOBALS['sold'] / $GLOBALS['total'] ) * 100;
		}
			
		//7
		findPercentage();

		//8
		echo"<h3>Percentage of sold items : ". $percentage."%<br><br></h3>";

		//9
		$today = "Today is ".date("l");
		echo"<h3>".$today."</h3>";

		//9.a
		$c = date("Y-m-d");
		$currentDay = date_create($c);
		$shipDay = date_create("2019-09-21");

		$diff = date_diff($currentDay,$shipDay);
		echo "<h4>Number of days remaining for shipping : ".$diff->format("%R%a days")."</h4>";

		if ($diff->format("%R%a") > 0) {
			$status = "To be shipped";
		}
		else{
			$status = "Shipped.";
		}
		echo "<h4><br>For ".$c." 24 items has ".$status."</h4>";
	?>

    <hr>

    <footer>
        <h3 id="footer">Created By: Kavindu Dilshan</h3>
        <h4 id="footer"><a href="http://courseweb.sliit.lk/">Visit to Our Course</a></h4>
    </footer>
</body>
</html>
