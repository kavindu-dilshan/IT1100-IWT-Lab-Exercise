<?php
    include_once 'config.php';
?>

<?php
    $Item_id = $_GET['id'];

    $query = "DELETE FROM item WHERE Item_id='$Item_id'";

    $data = mysqli_query($conn, $query);

        if($data) {
            echo "<script>alert('Record Deleted.')</script>";
        } else {
            echo "<script>alert('Error in Delete.')</script>";
        }

    mysqli_close($conn);
?>