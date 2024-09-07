<!DOCTYPE html>
<html lang="en">

<head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&family=Nerko+One&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&family=Nerko+One&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=SUSE:wght@100..800&display=swap" rel="stylesheet">

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Products</title>
      <link rel="stylesheet" href="index.css">
      <style>
            main {
                  width: 60%;
            }

            .card {
                  float: right;
                  margin-top: 10px;
                  margin-left: 10px;
                  margin: bottom 10px;

            }

            .card img {
                  width: 100%;
                  height: 150px;
            }

            h3 {
                  font-weight: bold;
            }

            p {
                  font-family: "SUSE", sans-serif;
            }

            #nav {
                  margin-left: 70px;
                  text-decoration: none;
                  color: white;
            }
      </style>

</head>

<body>
      <nav class="navbar navbar-dark bg-dark">
            <a id="nav" class="navbarr-brand" href="card.php">My cart</a>
      </nav>
      <center>
            <h3>All Products</h3>
      </center>

      <?php
      include("config.php");
      $result = mysqli_query($con, 'SELECT * FROM prod');
      while ($row = mysqli_fetch_array($result)) {
            echo " <center><main>
                  <div class='card' style='width: 18rem;'>
                  <img src='{$row['image']}' class='card-img-top'>
                        <div class='card-body'>
                              <h5 class='card-title'>$row[name]</h5>
                              <p class='card-text'>$row[price]</p>
                              <a href='val.php?id={$row['id']}' class='btn btn-success'>Add to cart</a>

                        </div>
                  </div>
            </main>
            </center>
            ";
      }
      ?>
</body>

</html>