<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Simpliathlon</title>
    </head>
 
    <body>
 
    <?php include("_entete.php"); ?>
    
    <!-- Corps de la page -->
    <div id="corps">
        <h1>Accueil</h1>
        
        <h2>Simpliathlon, un triathlon organisé top chrono !</h2>

		
		<form method="post" action="traitement.php">
 
			<fieldset id="projets">
				<legend>Vos projets en cours</legend>
					<table>
						<thead>
							<tr>
								<td>N°</td>
								<td>Nom</td>
								<td>Type</td>
								<td>Lieu</td>
								<td>Date</td>
								<td>Calendrier</td>
								<td>Agenda</td>
								<td>Supprimer</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Exemple</td>
								<td>Sprint</td>
								<td>Blagnac</td>
								<td>04/08/2019</td>
								<td>Editer</td>
								<td>Editer</td>
								<td>Supprimer</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Exemple2</td>
								<td>Half</td>
								<td>Toulouse</td>
								<td>05/08/2019</td>
								<td>Editer</td>
								<td>Editer</td>
								<td>Supprimer</td>
							</tr>
						</tbody>
					</table>
			</fieldset>
		</form>
		
    </div>
    
    <!-- Pied de page -->
    <?php include("_pied_de_page.php"); ?>
    
    </body>
</html>