<!DOCTYPE html>
<html>
<head>
    <title>My Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" type="text/css" href="styles/formStyles.css">

    <script>
        function checkPassword() {
            if(document.getElementById("password").value != document.getElementById("confirmPassword").value) {
                alert("Password Mismatch!");
                return false;
            }
            else {
                alert("Success!");
                return true;
            }
        }

        function enableButton() {
			if (document.getElementById("checkbox").checked) {
                document.getElementById("submitButton").disabled = false;
			}
			else {
                document.getElementById("submitButton").disabled = true;
			}
		}

		//alert("Contact Page Loaded");
    </script>
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
    <h2>Personal Details</h2>
    <fieldset>
        <?php
            echo "Name: ".$_POST['firstname']."&nbsp".$_POST['lastname']."<br><br>";
            echo "Gender: ".$_POST['gender']."<br><br>";
            echo "Mobile Number: ".$_POST['mobile']."<br><br>";
            echo "E-mail Address: ".$_POST['email']."<br><br>";
            echo "Address: ".$_POST['address']."<br><br>";
            echo "DOB: ".$_POST['dob']."<br>";
        ?>
    </fieldset><br>

    <a href="register.html">
            <button class="addButton" action="register.html">Logout</button></a><br><br>
    </center>
    <hr>
    <footer>
        <h3 id="footer">Created By: Kavindu Dilshan</h3>
        <h4 id="footer"><a href="http://courseweb.sliit.lk/">Visit to Our Course</a></h4>
    </footer>
</body>
</html>
