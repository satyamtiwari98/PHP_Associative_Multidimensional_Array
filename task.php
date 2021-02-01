<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Php Task</title>
</head>
<body>
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
 <section class="task1">
 <h1 style="text-align: center; color:blueviolet;">Task 1. List all products</h1>
 <hr>
 <table class="table table-hover">
  <tr>
    <th>Category</th>
    <th>Subcategory</th>
    <th>ID</th>
    <th>Name</th>
    <th>Brand</th>
  </tr>
 <?php

 foreach($products as $category => $valCategory){
     foreach($valCategory as $subCategory => $valSubCategory){
         foreach($valSubCategory as $key => $val){
             ?><tr>
             <td><?php echo $category;?></td>
             <td><?php echo $subCategory; ?></td>
             <td><?php echo $val['id']; ?></td>
             <td><?php echo $val['name']; ?></td>
             <td><?php echo $val['brand'];?></td>
             </tr>
<?php
         
        }

     }
 }
?>



</table>

 </section>        
 <hr>
 <br><br>
 <section class="task2">
 <h1 style="text-align: center; color:blueviolet;">Task 2. List all products in Mobile subcategory</h1>
 <hr>
 <table class="table table-hover">
  <tr>
    <th>Category</th>
    <th>Subcategory</th>
    <th>ID</th>
    <th>Name</th>
    <th>Brand</th>
  </tr>
<?php
foreach($products as $category => $valCategory){
    foreach($valCategory as $subCategory => $valSubcategory){
         foreach($valSubcategory as $key => $val){
            if($subCategory == "Mobile"){
                ?><tr>
                <td><?php echo $category;?></td>
                <td><?php echo $subCategory; ?></td>
                <td><?php echo $val['id']; ?></td>
                <td><?php echo $val['name']; ?></td>
                <td><?php echo $val['brand'];?></td>
                </tr>
                <?php
             }
            }
         
    }
}

?>

 </table>
 
 </section>          
 <hr>      
 <br><br>
 <section class="task3">
 <h1 style="text-align: center; color:blueviolet;">Task 3. List all products with brand name Samsung</h1>
 <hr>
 <table class="table table-hover">
  <tr>
    <th>Category</th>
    <th>Subcategory</th>
    <th>ID</th>
    <th>Name</th>
    <th>Brand</th>
  </tr>
<?php
foreach($products as $category => $valCategory){
    foreach($valCategory as $subCategory => $valSubcategory){
         foreach($valSubcategory as $key => $val){
             if($key == "Samsung" && $category == "Electronics"){
                ?><tr>
                <td><?php echo $category;?></td>
                <td><?php echo $subCategory; ?></td>
                <td><?php echo $val['id']; ?></td>
                <td><?php echo $val['name']; ?></td>
                <td><?php echo $val['brand'];?></td>
                </tr>
                <?php
             }
         }
    }
}

?>

 </table>
 
 </section> 
 <hr>         
 <br><br>     

 <section class="task4">
 <h1 style="text-align: center; color:blueviolet;">Task 4. Delete product with id = PR003</h1>
 <hr>
 <?php
 foreach($products as $category => $valCategory){
    foreach($valCategory as $subCategory => $valSubcategory){
         foreach($valSubcategory as $key => $val){
             if($val['id']=="PR003"){
                unset($products[$category][$subCategory][$key]);
                

             }
            
             }
         }
    }

?>
<table class="table table-hover">
  <tr>
    <th>Category</th>
    <th>Subcategory</th>
    <th>ID</th>
    <th>Name</th>
    <th>Brand</th>
  </tr>
 <?php

 foreach($products as $category => $valCategory){
     foreach($valCategory as $subCategory => $valSubCategory){
         foreach($valSubCategory as $key => $val){
             ?><tr>
             <td><?php echo $category;?></td>
             <td><?php echo $subCategory; ?></td>
             <td><?php echo $val['id']; ?></td>
             <td><?php echo $val['name']; ?></td>
             <td><?php echo $val['brand'];?></td>
             </tr>
<?php
         
        }

     }
 }
?>



</table>
 
 </section> 
 <hr>
 <section class="task5">
 <h1 style="text-align: center; color:blueviolet;">Task 5. Update product name = BIG-555 with id = PR002</h1>
 <hr>
 <?php
 foreach($products as $category => $valCategory){
    foreach($valCategory as $subCategory => $valSubcategory){
         foreach($valSubcategory as $key => $val){
             if($val['id']=="PR002"){
            
                $products[$category][$subCategory][$key]['name']='BIG-555';

             }
            
             }
         }
    }

?>
<table class="table table-hover">
  <tr>
    <th>Category</th>
    <th>Subcategory</th>
    <th>ID</th>
    <th>Name</th>
    <th>Brand</th>
  </tr>
 <?php

 foreach($products as $category => $valCategory){
     foreach($valCategory as $subCategory => $valSubCategory){
         foreach($valSubCategory as $key => $val){
             ?><tr>
             <td><?php echo $category;?></td>
             <td><?php echo $subCategory; ?></td>
             <td><?php echo $val['id']; ?></td>
             <td><?php echo $val['name']; ?></td>
             <td><?php echo $val['brand'];?></td>
             </tr>
<?php
         
        }

     }
 }
?>



</table>
 
 </section>
<hr>
 
</body>
</html>

