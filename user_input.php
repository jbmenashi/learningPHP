<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>User Input</title>
</head>

<body>

   <form action="user_input.php" method="get">
      Name: <input type="text" name="name">
      <input type="submit" value="Submit">
   </form>
   <br>
   Your name is <?php echo $_GET["name"]; ?>

</body>

</html>