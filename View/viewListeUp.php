



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>User</title>
</head>
<body>

<div class="container" style = "margin : 40px;">



<form action="" method="POST">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="nom" placeholder="Your Name" value=<?= $etudiant->getNom()?>>

    <label class="form-label">Prenom</label>
    <input type="text" class="form-control" name="prenom" placeholder="Your FirstName" value=<?= $etudiant->getPrenom()?>>
    
    <label class="form-label">Age</label>
    <input type="number" class="form-control" name="age" placeholder="Your Age" value=<?= $etudiant->getAge()?>>

    <label class="form-label">CNE</label>
    <input type="text" class="form-control" name="cne" placeholder="cne" value=<?= $etudiant->getCne()?>>

    <br>

   

    <button type="submit" class="btn btn-dark my-5" name="update">Update</button>
</form>
 
</div>




</body>
</html>

