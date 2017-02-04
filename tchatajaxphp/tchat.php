<?php
session_start();
if(!isset($_SESSION['pseudo']) || empty($_SESSION['pseudo'])){
    header('location: index.php');
}
include('connect.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tchat en AJAX et PHP</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="tchat.js"></script>
  </head>
  
	<body>

    <div id="conteneur">

            <?php
                $req = $bdd->query('SELECT * FROM messages ORDER BY date DESC LIMIT 15');
                $d = array();
                while ($data = $req->fetch()) {
                    $d[] = $data;
                }
                for($i=count($d)-1; $i>=0; $i--){
            ?>
        
                <p><strong><?php echo $d[$i]['pseudo'];?></strong> : <?php echo htmlentities($d[$i]['message']); ?></p>

            <?php
            }
            ?>
        <h1>Mon Tchat en tant que <?php echo $_SESSION['pseudo'];?></h1>
        <div id="tchatForm" style="position:fixed;bottom:0:width:100%">
            <form action="#" method="post">
                <div style="margin-right:110px;">
                <textarea type="text" name="message" placeholder="votre texte"></textarea>
                <input type="submit" value="tchatter !">
            </form>
        </div>

    </div>



    </body>
</html>