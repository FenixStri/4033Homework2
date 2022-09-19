<!doctype html>
<html lang = "en">
  <head>
     Heading <?php require_once('header.php');?>
  </head>
  
  <body>
     <div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
      One of three columns
       <form action="handlepost.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
    </div>
    <div class="col">
      One of three columns
      Enter name for GET <?php echo $_GET["name"]; ?><br>
What is your email: <?php echo $_GET["email"]; ?>
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
    
   
    </html>
  </body>
