<?php
  include("connection.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>
    <div id="form">
      <h1 id="heading">Registration Form</h1><br>
      <form name="form" action="register.php" method="POST">

        <!--full naem-->
        <i class="fa-solid fa-user"></i>
        <input type="text" id="name" name="name" placeholder="Enter full name" required><br><br>

        <!--email-->
        <i class="fa-solid fa-envelope"></i>
        <input type="email" id="email" name="email" placeholder="Enter email" required><br><br>

        <!--telephone-->
        <i class="fa-solid fa-phone"></i>
        <input type="text" onkeypress="return /[0-9]/i.test(event.key)" id="telephone" name="telephone" placeholder="Enter telephone number" required><br><br>

        <!--address1-->
        <i class="fa-solid fa-house"></i>
        <input type="text" id="address1" name="address1" placeholder="Enter address 1" required><br><br>

        <!--address2-->
        <i class="fa-solid fa-house"></i>
        <input type="text" id="address2" name="address2" placeholder="Enter address 2" required><br><br>

        <!--city-->
        <i class="fa-solid fa-city"></i>
        <input type="text" id="city" name="city" placeholder="Enter city" required><br><br>

        <!--provincee-->
        <i class="fa-solid fa-building"></i>
        <input type="text" id="province" name="province" placeholder="Enter state/province" required><br><br>

        <!--zip code-->
        <i class="fa-solid fa-location-dot"></i>
        <input type="text" onkeypress="return /[0-9]/i.test(event.key)" id="zip" name="zip" placeholder="Enter zip/post code" required><br><br>

        <!--Username-->
        <i class="fa-regular fa-circle-user"></i>
        <input type="text" id="username" name="username" placeholder="Enter username" required><br><br>

        <!--Password-->
        <i class="fa-solid fa-lock"></i>
        <input type="password" id="password" name="password" placeholder="Enter password" required><br><br>

        <!--Confirm password-->
        <i class="fa-solid fa-lock"></i>
        <input type="password" id="cpassword" name="cpassword" placeholder="Confirm password" required><br><br>

        <!--button submit -->
        <input type="submit" id="btn" value="SignUp" name="submit">

      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>