<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Posting</title>
</head>
<body>
   <form action="posting.php" method="post">
      Password: <input type="password" name="password"> <br>
      <input type="submit">
   </form>

   <?php
      echo $_POST["password"]; // doesn't show up in the URL
   ?>
</body>
</html>