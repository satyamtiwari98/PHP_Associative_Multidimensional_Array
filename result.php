<?php
include 'array.php';
?>

<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet"/>
    <title>Your Final Result</title>
  </head>
  <body>

  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid ">
      <a class="navbar-brand " style="color: red;" href="#">CEDCOSS Online Quiz</a>
    </div>
   
  </nav>

<?php

$result = 0;
foreach($Ques as $subqueskey => $subques){
if(isset($_POST['option'.($subqueskey+1)])){
    if($_POST['option'.($subqueskey+1)] == $subques['correct']){
            $result += 1;
        
    }
}
   
}
if($result>4){
echo '<div class="btnDiv"><h1>Your Final Score is '.$result.'!!<br>Congratulations !!!!</h1></div>
<button class="btn btn-success" type="button" value="Restart"><a href="index.php">Restart The Game</a></button>';
}else{
    echo '<div class="btnDiv"><h1>Your Final Score is '.$result.'!!<br>Better Luck Next Time !!!!</h1></div>
<button class="btn btn-success" type="button" value="Restart"><a href="index.php">Restart The Game</a></button>';
}

?>

