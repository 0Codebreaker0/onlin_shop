<!DOCTYPE html>
<html lang="en">

<head>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&family=Nerko+One&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&family=Nerko+One&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=SUSE:wght@100..800&display=swap" rel="stylesheet">

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Updata</title>
      <link rel="stylesheet" href="index.css">


</head>

<body>
      <?php
      include('config.php');
      $ID=$_GET['id'];
      $up=mysqli_query($con,"SELECT * FROM prod WHERE id=$ID");
      $data = mysqli_fetch_array($up);
      ?>
      <center>
            <div class="main">
                  <form action="up.php" method="post" enctype="multipart/form-data">
                        <h2>Edit Prodct</h2>
                        <input type="text" name="id" value="<?php echo $data['id'];?>">
                        <br>
                        <input type="text" name="pname" value="<?php echo $data['name'];?>">
                        <br>
                        <input type="text" name="price" value="<?php echo $data['price'];?>">
                        <br>
                        <input type="file" name="image" id="file" style="display: none;">
                        <label for="file">Updata a product image</label>
                        <button name="updata" type="submit">Edit Prodct</button>
                        <br><br>
                        <a href="products.php">View Products</a>
                  </form>
            </div>
            <p>Developed by 0Codebreaker0</p>
      </center>
</body>

</html>