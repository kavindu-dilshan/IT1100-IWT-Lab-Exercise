<?php
include_once 'config.php';
?>

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
    </center>
    <hr>
    <ul class="menu">
        <li class="menu"><a href="index.html">Home</a></li>
        <li class="menu"><a href="news.html">News</a></li>
        <li class="menu"><a href="register.html">Contact</a></li>
        <li class="menu"><a href="about.php">About Us</a></li>
    </ul>
    <br><br>
    <center>
        <table class="productData" border="2" width="75%" style="border-style: solid; border-color: black" cellspacing="0px" cellpadding="10px">
        <tr>
            <th>Item ID</th>
            <th>Item Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Item Code</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        $sql = "SELECT * FROM item";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["Item_id"]."</td>
                        <td>".$row["Item_name"]."</td>
                        <td>".$row["Item_description"]."</td>
                        <td>".$row["Price"]."</td>
                        <td>".$row["Quantity"]."</td>
                        <td>".$row["Item_code"]."</td>
                        <td>
                            <a href='editRecord.php?id=".$row['Item_id']."&name=".$row['Item_name']."&desc=".$row['Item_description']."&price=".$row['Price']."&qty=".$row['Quantity']."&code=".$row['Item_code']."'>
                                <input type='button' class='ButtonE' value='Edit'>
                            </a>
                        </td>
                        <td>
                            <a href='deleteItems.php?id=".$row['Item_id']."'>
                                <input type='button' class='ButtonD' value='Delete'>
                            </a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>0 Results</td></tr>";
        }
        echo "</table>";

        mysqli_close($conn);
        ?>
    </center>
    <br>
    <hr>
    <footer>
        <h3 id="footer">Created By: Kavindu Dilshan</h3>
        <h4 id="footer"><a href="http://courseweb.sliit.lk/">Visit to Our Course</a></h4>
    </footer>
</body>
</html>
