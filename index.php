<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js.js" defer></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link href="css.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-dark">
    <h1 class="text-center text-light">T-chat</h1>
    <div class="container">
    <form class="text-center mt-5" action="traitement.php" method='post'>
    <div class="form-group">
        <label class="text-light mt-5" for="pseudo">Pseudo</label>
        <input type="text" name='pseudo' class="form-control"><br>
        <label class="text-light" for="message">Message</label>
        <textarea class="form-control" name="message" id="message1" cols="50" rows="10" ></textarea><br>
        <input class="mb-5" type="submit">
        </div>
    </form>
    </div>
    <div id="envoye"></div>
    <h2 class="text-light text-center">Messages postés</h2>
    <div class="text-light text-center" id='affichageMessage'>

        <?php
require_once "bdd.php";


    $requete = "SELECT * FROM chat ORDER BY id_chat DESC LIMIT 10";
    $sql = $bdd->query($requete);
    $donnes = $sql->fetchAll();
    foreach($donnes as $row){

        $pseudo = $row['pseudo'];
        $message = $row['message'];
        echo "
        <div class='container'>
            <div class='text-light text-center border border-white m-5 '>
                <p><span class='text-info'>$pseudo</span> dis : $message</p>
            </div>
        </div>";
    }


?>

</div>
</body>
</html>

