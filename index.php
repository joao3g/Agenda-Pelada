<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/index.css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <title>Agenda Pelada - O Site onde você agenda o seu jogo</title>
</head>
<body>
    <?php include 'includes/componentes/menu.php';?>

    <div class='container col 10 offset-m1' id='intro'>
        <span class='col s12 endereco orange-text' style="display: flex; justify-content: center;"> 
            <b> AGENDA PELADA</b>
        </span> <br>
        <h4 class="orange-text">
            <i> O <b> Melhor </b> Lugar para você agendar a sua Pelada! </i>
        </h4> <br>
        <a href="quadrasproximas.php" class="col s12 btn-large orange"> Ver Quadras Próximas </a>
    </div>

    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);
        });

        const windowWidth = window.innerWidth;
        const windowHeight = window.innerHeight;

        var metade = (windowHeight)/2
        var div = document.getElementById('intro');
        div.style.marginTop = metade+'px';

        if(windowWidth < 992){
            var title = document.getElementById("brand-logo");
            title.innerHTML = 'Agenda';
        }

    </script>
</body>
</html>