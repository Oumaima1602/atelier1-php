<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<link rel="stylesheet" href="Contenu/style.css" /> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<title><?= $titel ?></title>
    </head>
    <body>
        <div class="container" >
        <nav style="height: 120px;" class="navbar navbar-expand-md navbar-light bg-dark justify-content-between" id="header" style = " text-align: center;">
        <h1 class="text-light" style="font-family : 'Times New Roman', Times, serif;">WELCOME TO OUR PLATFORM</h1>    
        
    </nav>
            <div id="content">
                <?= $content ?>



</div> <!-- #contenu --> 
<footer id="piedBlog">
<div class="container" style="font-family: 'Times New Roman', Times, serif; border-top: 1px solid #ccc; ">

    <div class="row" style ="text-align : center;">
        <a style="color: black; text-align: center;" href="#header"><i class="fas fa-angle-double-up" style="font-size: 20px; margin: 10px;"></i></a>

        <div class="col-6" style="border-right: 1px solid #ccc;">
            <h4 style="text-transform: uppercase;">nos derniers tweets</h4>
            <br>
            <p>Hii haaaaaaan !</p>
            <p>le 12 mai à 23h12</p>
        </div>

        

        <div class="col-6">
            <h4 style="text-transform: uppercase;">contactez-nouz</h4>
            <ul style="columns: 2;">
                <li class="fas fa-caret-right">Administration</li><br>
                <li class="fas fa-caret-right">Email</li><br>
                <li class="fas fa-caret-right">Numero de telephone</li><br>
                <li class="fas fa-caret-right">Localisation</li><br>
                
               

            </ul>
        </div>

    </div>

</div>
</footer>
</div> <!-- #global -->
    </body>
</html>