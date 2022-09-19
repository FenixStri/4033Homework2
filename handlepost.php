<html>
  <head>
    <?php require_once('header.php');?>
        
  </head>
  <body>
    
    Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
    <?php echo $_GET["name"]; ?><br>
 <?php echo $_GET["email"]; ?>
    </body>
 
</html>
