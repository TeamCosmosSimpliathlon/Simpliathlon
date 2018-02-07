<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Simpliathlon</title>
    </head>
 
    <body>
 
    <?php include("_entete_deco.php"); ?>
    
    <!-- Corps de la page -->
    <div id="corps">
        <h1>Mot de passe oublié</h1>
        
        <h2>Réinitialisation du mot de passe</h2>
		
		<label for="mdp_oublie">Veuillez entrer votre e-mail pour recevoir un mail avec un lien de réinitialisation de votre mot de passe : </label><br/>
		<input type="email" name="email" id="email" />
		<input type="button" value="Envoyer"/>
    </div>
    
    <!-- Pied de page -->
    <?php include("_pied_de_page.php"); ?>
    
    </body>
</html>
