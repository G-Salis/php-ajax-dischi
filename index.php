<?php

require_once __DIR__ . "/database.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-1/css/all.min.css" integrity="sha512-wDB6AYiYP4FO5Sxieamqy9wtpAY3qdHMqlhZecIEUu1YjkLw5gQf/4ZDgOzmCBAF5SheMjmugkpUSVoUrGbLkQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/styles.css">
  <title>Dischi </title>
</head>
<body>

    <div class="ctn">
       <?php 
  
        for($i=0; $i<count($disc); $i++) {  ?>
         <div class="card-ctn">
              <div class="img-ctn">
                 <img src=
                 <?php echo $disc[$i]['poster']?> alt="poster">
               </div> 
    
              <div class="text-ctn">
                  <h3> <?php echo $disc[$i]['title'] ?> </h3>
                  <p> <?php echo $disc[$i]['author'] ?></p>
                  <p> <?php echo $disc[$i]['genre'] ?></p>
              </div>
        </div>
      <?php } ?>   

    </div>

</body>
</html>