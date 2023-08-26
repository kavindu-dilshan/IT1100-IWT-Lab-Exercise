<?php
    include_once 'config.php';
?>
<?php
    if($_GET['submit']){
        $id=$_GET['field0'];
        $name=$_GET['field1'];
        $description=$_GET['field5'];
        $price=$_GET['field3'];
        $quantity=$_GET['field4'];
        $code=$_GET['field2'];

        $query = "UPDATE item SET Item_name='$name', Item_description='$description', Price='$price', Quantity='$quantity', Item_code='$code' WHERE Item_id='$id'";

        $data = mysqli_query($conn, $query);

        if($data) {
            echo "<script>alert('Record Updated.')</script>";
        } else {
            echo "<script>alert('Error in Update.')</script>";
        }
    }

    mysqli_close($conn);
?>