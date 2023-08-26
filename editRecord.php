<?php
   include_once 'config.php';
?>

<?php
   $item_id=$_GET['id'];
   $item_name=$_GET['name'];
   $item_desc=$_GET['desc'];
   $item_price=$_GET['price'];
   $item_qty=$_GET['qty'];
   $item_code=$_GET['code'];
?>

<!DOCTYPE html>
<html>
   <head>
      <title>My Shopping Cart</title>
      <link rel="stylesheet" type="text/css" href="styles/styles.css">
      <link rel="stylesheet" type="text/css" href="styles/formStyles.css">
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
         <div class="productDataTable" styles="border=style:groove;">
         <form action="submitUpdateItems.php" method="GET" name="form2">
            <table border="0" width="75%">
               <tr>
                  <td class="rData">Item ID</td>
                  <td><input type="text" value="<?php echo "$item_id"?>" name="field0" readonly></td>
               </tr>
               <tr>
                  <td>Item Name</td>
                  <td><input type="text" value="<?php echo "$item_name"?>" name="field1"></td>
               </tr>
               <tr>
                  <td>Description</td>
                  <td><textarea value="<?php echo "$item_desc"?>" name="field5"></textarea></td>
               </tr>
               <tr>
                  <td>Price</td>
                  <td><input type="text" value="<?php echo "$item_price"?>" name="field3"></td>
               </tr>
               <tr>
                  <td>Quantity</td>
                  <td><input type="text" value="<?php echo "$item_qty"?>" name="field4"></td>
               </tr>
               <tr>
                  <td>Item Code</td>
                  <td><input type="text" value="<?php echo "$item_code"?>" name="field2" readonly></td>
               </tr>
               <tr>
                  <td></td>
                  <td><input type="submit" class="addButton" value="Update" name="submit"></td>
               </tr>
            </table>
         </form>
      </center>
      <hr>
      <footer>
         <h3 id="footer">Created By: Kavindu Dilshan</h3>
         <h4 id="footer"><a href="http://courseweb.sliit.lk/">Visit to Our Course</a></h4>
      </footer>
   </body>
</html>