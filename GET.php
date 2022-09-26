
     <?php require_once('header.php');?>
 
    <div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
      
 Welcome to the GET page <?php echo $_GET["name"]; ?><br>
 Your email address is: <?php echo $_GET["email"]; ?>
    </div>
    <div class="col">
      <?php
      Function write(){
    echo "This is your get information";
      }
      
      write();
      
    </div>
    <div class="col">
      Information
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
