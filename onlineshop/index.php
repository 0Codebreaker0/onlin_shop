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
      <title>Online Shop</title>
      <link rel="stylesheet" href="index.css">


</head>

<body>
      <center>
            <div class="main">
                  <form action="insert.php" method="post" enctype="multipart/form-data">
                        <h2>Online shopping site</h2>
                        <img src="image.png" alt="logo" width="350px">
                        <input type="text" name="pname">
                        <br>
                        <input type="text" name="price">
                        <br>
                        <input type="file" name="image" id="file" style="display: none;">
                        <label for="file">Select a product image</label>
                        <button name="upload">Upload image</button>
                        <br><br>
                        <a href="products.php">View Products</a>
                  </form>
            </div>
            <p >Developed by 0Codebreaker0</p>
      </center>
</body>

</html>