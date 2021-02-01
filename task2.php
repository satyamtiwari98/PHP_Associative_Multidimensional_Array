<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Shoping Hub</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cedcoss Shopping</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Product</a>
        <a class="nav-link" href="#">Contact</a>
      </div>
    </div>
  </div>
</nav>

<?php
$products = array(
    "Electronics" => array(
                        "Television" => array(
                                            array(
                                                "id" => "PR001", 
                                                "name" => "MAX-001",
                                                "brand" => "Samsung"
                                            ),
                                            array(
                                                "id" => "PR002", 
                                                "name" => "BIG-301",
                                                "brand" => "Bravia"
                                            ),
                                            array(
                                                "id" => "PR003", 
                                                "name" => "APL-02",
                                                "brand" => "Apple"
                                            )
                                        ),
                        "Mobile" => array(
                                            array(
                                                "id" => "PR004", 
                                                "name" => "GT-1980",
                                                "brand" => "Samsung"
                                            ),
                                            array(
                                                "id" => "PR005", 
                                                "name" => "IG-5467",
                                                "brand" => "Motorola"
                                            ),
                                            array(
                                                "id" => "PR006", 
                                                "name" => "IP-8930",
                                                "brand" => "Apple"
                                            )
                                        )
                    ),
    "Jewelry" => array(
                        "Earrings" => array(
                                            array(
                                                "id" => "PR007", 
                                                "name" => "ER-001",
                                                "brand" => "Chopard"
                                            ),
                                            array(
                                                "id" => "PR008", 
                                                "name" => "ER-002",
                                                "brand" => "Mikimoto"
                                            ),
                                            array(
                                                "id" => "PR009", 
                                                "name" => "ER-003",
                                                "brand" => "Bvlgari"
                                            )
                                        ),
                        "Necklaces" => array(
                                            array(
                                                "id" => "PR010", 
                                                "name" => "NK-001",
                                                "brand" => "Piaget"
                                            ),
                                            array(
                                                "id" => "PR011", 
                                                "name" => "NK-002",
                                                "brand" => "Graff"
                                            ),
                                            array(
                                                "id" => "PR012", 
                                                "name" => "NK-003",
                                                "brand" => "Tiffany"
                                            )
                                        )				
                )
                                            );
?>
<div>
<?php
 foreach($products as $category => $valCategory){
    ?>
    <hr>
    <h1 style="text-align: center;color:aqua;"><?php echo $category;?></h1>
    <hr>
    <?php
     foreach($valCategory as $subCategory => $valSubCategory){
        ?>
        <hr>
        <h2 style="text-align: center; color:blueviolet;"><?php echo $subCategory;?></h2>
        <hr>
        <?php
         foreach($valSubCategory as $key => $val){
             ?>
             <div class="container-fluid">
             <div class="content">
             <?php
             if($subCategory == "Television"){?>
             <img src="images/tele.jpeg" class="product img-thumbnail" width="200" height="100">      
             <?php
             }
             ?>         
              <?php
             if($subCategory == "Mobile"){?>
             <img src="images/mobile.png" class="product img-thumbnail" width="200" height="100">      
             <?php
             }
             ?>   
              <?php
             if($subCategory == "Earrings"){?>
             <img src="images/ear.jpg" class="product img-thumbnail" width="200" height="100">      
             <?php
             }
             ?> 
             
             <?php
             if($subCategory == "Necklaces"){?>
             <img src="images/neck.jpg" class="product img-thumbnail" width="200" height="100">      
             <?php
             }
             ?> 
             
              <h3><a href="#"><?php echo $val['id'];?></a></h3>
                <h3><a href="#"><?php echo $val['name'];?></a></h3>
                <h3><a href="#"><?php echo $val['brand'];?></a></h3>
                <span>$500.00</span>
                <br>
                <br>
                <a class="btn btn-success" href="#">Add To Cart</a>
             </div>
            </div>
            
            
             <?php
            

         
        }

     }
 }
?>
</div>

<footer>
    <h1 style="text-align: center; color:brown"><a href="task2.php">Satyam Tiwari © Copyright 2021</a></h1>
</footer>
</body>
</html>



