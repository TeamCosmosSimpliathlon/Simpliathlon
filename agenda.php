<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Simpliathlon</title>
		<link rel="stylesheet" type="text/css" href="style_agenda.css">

    </head>
 
    <body>
 
    <?php include("entete.php"); ?>
    
		<?php $date = new DateTime('now');
		$mois = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre');
		$jours = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
		
		$premierJourDuMois = new DateTime($date->format('Y').'-'.$date->format('m').'-01');
		$jourDeLaSemaine = str_replace('0','7',$premierJourDuMois->format('w'));?>
		
		
		<!-- Titre -->
		<h1><?php echo $mois[$date->format('n') -1]?></h1>
		
		<!-- tableau de (6+1)*7 jours max pour un mois -->
		<table id ="table_agenda">
			<thead>
				<tr>
					<?php foreach ($jours as $jour) {?>
					<th>
						<?php echo substr($jour, 0, 3);?>
					</th>
					<?php }?>
				</tr>
			</thead>
			<?php for($i = 0; $i < 6; $i++){?>
				<tr>
					<?php for($j = 0; $j < 7; $j++){?>
					<td>
						<?php $numJour = $i * 7+ $j - $jourDeLaSemaine +2;
						$nbJours = cal_days_in_month(CAL_GREGORIAN, $date->format('m'), $date->format('Y'));
						
						if ($numJour >= 1 && $numJour < $nbJours)
							echo $numJour;?>
					</td>
					
					<?php }?>
				</tr>
			<?php }?>
		</table>
			
    <!-- Pied de page -->
    <?php include("pied_de_page.php"); ?>
    
    </body>
</html>