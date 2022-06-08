<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php  include "nav.php"; ?>
   

    <div class="form">
        <form action="">
            <h1>REGISTER</h1>

            <input type="text" name="name" placeholder="First Name" required><br>
            <input type="text" name="l_name" placeholder="Last Name" class="l_name" required><br>
            <input type="dail" name="phone" placeholder="+233 50678****" required><br>
            <select name="gender" id="gender"><br>
                <option value="">Male</option>
                <option value="">Female</option>
            </select><br>
            <input type="text" name="country" placeholder="Country" required><br>
            <input type="text" name="state" placeholder="State/Province" required><br>
            <input type="email" name="email" placeholder="example@gmail.com" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="password" name="cpassword" placeholder="Confirm Password" required><br>
            <input type="submit" name="submit" id="submit">
        </form>
    </div>
    <br><br><br><br>
   <?php include "footer.php"; ?>
    
</body>
</html>