<?php
include("config.php");
$ID = $_GET['id'];
$up = mysqli_query($con, "SELECT * FROM prod WHERE id=$ID");
$data = mysqli_fetch_array($up);

?>
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
      <title>Confirm order</title>
      <style>
            .aa {
                  text-decoration: none;
                  font-family: "SUSE", sans-serif;
                  font-size: 18px;
                  color: #ed7f06;
                  font-weight: bold;
            }

            input {
                  display: none;
            }

            .main {
                  width: 50%;
                  padding: 20px;
                  box-shadow: 1px 1px 10px silver;
                  margin-top: 50px;
            }
      </style>
</head>

<body>
      <center>
            <div class="main">
                  <form action="insert_card.php" method="post">
                        <h2>Do you really want to buy?</h2>
                        <input type="text" name="id" value='<?php echo $data['id']; ?>'>
                        <input type="text" name="name" value='<?php echo $data['name']; ?>'>
                        <input type="text" name="price" value='<?php echo $data['price']; ?>'>
                        <button name="add" type="submit" class="btn btn-warning">Confirm order</button>
                        <br>
                        <a class="aa" href="shop.php">Back to products page</a>
                  </form>
            </div>
      </center>
</body>

</html>