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
      <title>Products Cart</title>
      <style>
            h3 {
                  margin-top: 20px;
            }

            main {
                  width: 60%;
                  margin-top: 30px;
            }

            table {
                  border-radius: 5px;
                  box-shadow: 1px 1px 10px silver;
            }

            thead {
                  background: cadetblue;
                  color: white;
                  text-align: center;
            }

            tbody {
                  text-align: center;

            }

            a {
                  text-decoration: none;
                  font-family: "SUSE", sans-serif;
                  font-size: 18px;
                  color: burlywood;
                  font-weight: bold;
            }
      </style>
</head>

<body>
      <center>
            <h3>Your product</h3>
      </center>
      <?php
      include('config.php');
      $result = mysqli_query($con, "SELECT *FROM addcard");
      while ($row = mysqli_fetch_array($result)) {
            echo "<center>
      <main>
      
            <table class='table'>
                  <thead>
                        <tr>
                              <th scope='col'>Product Name</th>
                              <th scope='col'>Product price</th>
                              <th scope='col'>Remove product</th>
                        </tr>
                  </thead>
                  <tbody>
                        <tr>
                              <td>$row[name]</td>
                              <td>$row[price]</td>
                              <td><a href='del_card.php?id=$row[id]' class='btn btn-danger'>Remove</a></td>
                        </tr>
                  </tbody>
            </table>
      </main>
</center>
";
      }

      ?>
      <center><a href="shop.php">Back to products page</a></center>
</body>

</html>