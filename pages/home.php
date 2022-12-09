<?php
// echo'session: ';var_dump($_SESSION);echo'<br>';
// echo'<br> Library::$accounts : ';var_dump($_ENV['library']->accounts);echo'<br>';
// echo'<br> Library::$accounts : ';var_dump(Library::$accounts);echo'<br>';
// echo'<br>par fonction : ';var_dump(Library::getAccounts());echo'<br>';
// echo'<br> Library::$accounts : ';var_dump($_ENV['library']->accounts);echo'<br>';
// echo'<br> Library::$accounts : ';var_dump(Library::$accounts);echo'<br>';
// verif si dejà connecté
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application de gestion d’une bibliothèque</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="includes/css/style.css" type="text/css">
</head>
<body>
    <div id="background">
        <div id="top">
        </div>
        <div id="menu">
            <div id="logo">BOOK<b style="color:pink">ED</b>
            </div>
            <div id="menu1">
                <ul>
                    <p>Bienvenue dans l'application de gestion d’une bibliothèque de livres<p>
                </ul>
            </div>
        </div>
        <form action="" method="post">
          <div class="imgcontainer">
            <img src="user.png" alt="Avatar" class="avatar">
          </div>

          <div class="container">
            <label for="uname"><b>Identifiant</b></label>
            <input type="text" placeholder="Entrez votre identifiant" name="uname" required>
<br><br>
            <label for="psw"><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrez votre mot de passe" name="psw" required>
<br><br>
            <button type="submit">Se connecter</button>
          </div>
        </form>
<br><br>
    </div>
    <footer>
    	<div class="footer">&copy; Juliette INFANTI, Jeremy DUSSOL & Flavien GROS </div>
    </footer>
</body>
</html>
