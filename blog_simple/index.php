<?php
    include 'functions/main-functions.php';

    $pages = scandir('pages/');
    if(isset($_GET['page']) && !empty($_GET['page'])){
        if(in_array($_GET['page'].'.php',$pages)){
            $page = $_GET['page'];
        }else{
            $page = "error";
        }
    }else{
        $page = "home";
    }

    $pages_functions = scandir('functions/');
    if(in_array($page.'.func.php',$pages_functions)){
        include 'functions/'.$page.'.func.php';
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <title>Blog 2.0</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="utf-8">
    </head>

    <body>
        <?php
            include "body/topbar.php";
        ?>
        <div class="container">
            <?php
                include 'pages/'.$page.'.php';
            ?>
        </div>
        





        





        <section class="w3-container w3-center" style="max-with:600px">
              <h2 class="w3-wide">Cybercafe BELLEVEDERE</h2>
              <p class="w3-opacity"><i>We love playing</i></p>
            </section>

            <section class="w3-container w3-content w3-center" style="max-with:600px">
            <p class="w3-justify">
            Cybercafe à Bellevedere 502B Hamammet, ouvert de 14h à 4h du matin, 12 ordinateurs, impression, scanner, video conference,
            salle climatisée, vente et gravure de cd, connection satellite, cadre très agréable, tres bonne ambiance, assistance technique. 
            Tous les jeudi et vendredi soirées counter-strike 1.6</p>
            </section>


            <!-- Inclure chatango -->
            <div>
            <?php require_once('js/chatango.js'); ?>
            </div>
                    
                
                    


            <!-- Footer -->
            <footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
            <a href="http://facebook.com" target="_blank"><i class="fa fa-facebook-official"></i></a>
            <a href="http://pinterest.com" target="_blank"><i class="fa fa-pinterest-p"></i></a>
            <a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="http://flickr.com" target="_blank"><i class="fa fa-flickr"></i></a>
            <a href="http://linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a>
            <p class="w3-medium">
        
            </p>
            </footer>


        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <?php
            $pages_js = scandir('js/');
            if(in_array($page.'.func.js',$pages_js)){
                ?>
                    <script type="text/javascript" src="js/<?= $page ?>.func.js"></script>
                <?php
            }

        ?>

    </body>
</html>