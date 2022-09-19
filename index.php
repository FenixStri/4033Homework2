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
     <form action="GET.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
     
</form>
    </div>
    <div class="col">
      One of three columns
      <div class="card">
  <img src="wattter.png" class="card-img-top" alt="Ocean">

  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
  </div>
    
       
       </body>
    
    </html>
 
