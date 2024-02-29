<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
  <?php
  require_once 'Greeter.php'; // Adjust the path as necessary
  $greeter = new Greeter();
  $greeting = $greeter->getGreeting();
  ?>
<h1><?php echo $greeting; ?></h1>
</body>
</html>