
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<h2 class="p-3 mb-2 bg-dark text-white " style = "text-transform : uppercase; text-align : center;  font-family: 'Times New Roman', Times, serif; color: black;"> our data  base </h1>

<button class="btn btn-dark my-5" ><a href="Routing.php?action=adduser" class="text-light" style = "text-decoration : none;">Add User</a></button>



 
 <table class="table  table-striped">
     <th>id </th>  
     <th>nom</th>
     <th>prenom </th>
     <th>age</th>
     <th> cne</th>
     <th>Opérations</th>
   

     <?php 
     foreach($ets as $et):
         ?>
         <tr>
<td><?= $et->getId()?></td>
<td><?= $et->getNom()?></td>
<td><?= $et->getPrenom()?></td>
<td><?= $et->getAge()?></td>
<td><?= $et->getCne()?></td>
<td> 
     
    <a href="Routing.php?action=update&updateid=<?php echo $et->getId()?>" class="btn btn-outline-success" >modifier</a>
    <a href="?action=delete&deleteid=<?php echo $et->getId()?>" class="btn btn-outline-danger"  >supprimer</a>

     </td>  </tr>
 <?php endforeach;?>



</table> 
</body>
</html>


