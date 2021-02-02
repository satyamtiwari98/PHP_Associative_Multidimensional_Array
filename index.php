<?php include 'array.php';?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet"/>
    <title>Online Quiz</title>
  </head>
  <body>

  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid ">
      <a class="navbar-brand " style="color: red;" href="#">CEDCOSS Online Quiz</a>
    </div>
  </nav>
  <form action="result.php" method="post">
  <?php

   foreach($Ques as $subQuesKey => $subQues){
       foreach($subQues as $key => $val){
           
           if($key == 'correct'){
               continue;
           }if($key == 'ques'){
            echo '<hr><h3>'.$val.'</h3><hr>';
           }else{
            echo  '<input class="form-check-input" type="radio" value="'.$key.'" name="option'.($subQuesKey+1).'" >  '. $val .'</input><br>';
           }
           
          
       }
   }

?>
<hr>
<button class="btn btn-success" type="submit" value="Submit">Submit</button>
</form>
</div>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>