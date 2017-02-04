<?php
if(!empty($_POST) && isset($_POST['pseudo']) && !empty($_POST['pseudo'])){
    session_start();
    $_SESSION['pseudo'] = $_POST['pseudo'];
    header('location: tchat.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tchat en AJAX et PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script type="text/javascript" src="tchat.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
  </head>
  
	<body>

    <div id="conteneur">

    <h1>Mon Tchat</h1>
        <form action="index.php" method="post">
            <input type="text" name="pseudo">
            <input type="submit" value="tchatter !">
        </form>
    </div>





    </body>
</html>