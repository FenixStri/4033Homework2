<!doctype html>
<html lang = "en">
  <head>
     <?php require_once('header.php');?>
  </head>
  
  <body>
     <div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
      POST
       <form action="handlepost.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
    </div>
    <div class="col">
      GET
     <form action="handlepost.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
     
</form>
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
    
   
    </html>
  </body>
