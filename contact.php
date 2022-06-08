<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
  <?php include "nav.php"; ?>
    <div class="contact" style="margin-top:120px;">
        <form action="">
            <h1 style="margin-left:64px;">CONTACT ME</h1>
            <input type="text" name="name" id="" placeholder="Name" required><br>
            <input type="email" placeholder="example@gmail.com" required><br>
            <textarea name="" id="textarea" cols="30" rows="10"></textarea><br>
            <input type="submit" name="contact" id="submit">
        </form>
    </div>
    <?php include"footer.php"?>
    
   
</body>
</html>