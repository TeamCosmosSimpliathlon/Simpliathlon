
<?php
session_start();
$_SESSION["email"]=$_POST["email"];
$_SESSION["mdp"]=$_POST["mdp"];
  
try {$bdd = new PDO('mysql:host=localhost;dbname=simpliathlon', 'root', '');}
catch (Exception $e) {die("L'accès à la base de données est impossible.");}
  
if(($_SESSION["email"] == "") or($_SESSION['mdp'] == "")) {
    echo "veuillez saisir un email et un mot de passe";
}
else {
    $st = $bdd->query("SELECT COUNT(*) FROM organisateur WHERE Email_organisateur ='".$_SESSION["email"]."' AND Mdp_organisateur='".$_SESSION["mdp"]."'")->fetch();
    if ($st['COUNT(*)'] == 1)
        header("Location: projets.php");
	else
		header("Location: erreur.php");
}
?>