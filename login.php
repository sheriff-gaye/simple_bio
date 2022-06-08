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
    <?php include "nav.php";?>
    <div class="login" style="margin-top:170px;">
      
        <form action="">
            <h1>LOGIN</h1>
            <input type="emial" name="email" placeholder="exmaple@gmail.com" required><br>
            <input pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"  type="password" name="password" placeholder="password" required><br>
            <button id="submit">Sign In </button>
        </form>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>