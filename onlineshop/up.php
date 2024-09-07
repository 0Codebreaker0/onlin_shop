<?php
include('config.php');

if (isset($_POST['updata'])) {
      $ID = $_POST['id'];
      $NAME = $_POST['pname'];
      $PRICE = $_POST['price'];
      $IMAGE = $_FILES['image'];
      $image_location = $_FILES['image']['tmp_name'];
      $image_name = $_FILES['image']['name'];
      $image_up = "images/" . $image_name;
      $updata = "UPDATE PROD SET name='$NAME', price='$PRICE', image='$image_up' WHERE id=$ID";
      mysqli_query($con, $updata);
      if (move_uploaded_file($image_location, "images/" . $image_name)) {
            echo "<script>alert('The product was successfully updateed')</script>";
      } else {
            echo "<script>alert('The product has not been updateed.')</script>";
      }
      header("location: index.php");
}
