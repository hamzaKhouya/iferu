<?php 

	require_once "pdo.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Meilleurs résumés de livres sur Biographies d’entrepreneurs </title>
</head>
<body>

	<div>
	<?php
		if(isset($_GET['idChaine'],$_GET['lang'],$_GET['newArticles'])){
			$id_chaine = $_GET['idChaine'] ? $_GET['idChaine'] : '';
			$lang = $_GET['lang'] ? $_GET['lang'] : '';
			$limit = $_GET['newArticles'] ? $_GET['newArticles'] : '';
			
			$chaine = $pdo->prepare("SELECT * FROM Chaine WHERE id = :idChaine");
			$chaine->execute(array('idChaine' => $id_chaine));
			$nomChaine = $chaine->fetch(PDO::FETCH_ASSOC);
			$docs_chaine = $pdo->prepare("SELECT * FROM Document WHERE id IN (SELECT idDoc FROM Doc_Chaine where idChaine = :idChaine)
			And idLangue IN (select id from Langue where langue='en' or langue=:lang) order by idLangue desc ,titre desc Limit $limit,6");
			// $users = $pdo->prepare("SELECT d.id,d.titre FROM Document as d,Doc_Chaine WHERE Doc_Chaine.idChaine = 1054 AND  d.id = Doc_Chaine.idDoc");
			$docs_chaine->execute(array('idChaine' => $_GET['idChaine'], 'lang' => $_GET['lang']));
			$rows = $docs_chaine->fetchAll(PDO::FETCH_ASSOC);
			

			echo "<div class='primary container'>";
			echo"<div class='chnl-item-container row'>";
			foreach($rows as $row) {

				$docs_auts = $pdo->prepare("SELECT * FROM Auteur WHERE id IN (SELECT idAut FROM Doc_Aut where idDoc = :idDoc)");
				$docs_auts->execute(array('idDoc' => $row['id']));
				$aut_rows = $docs_auts->fetchAll(PDO::FETCH_ASSOC);

				$docs_rate = $pdo->prepare("SELECT * FROM Rating WHERE id = :idRating");
				$docs_rate->execute(array('idRating' => $row['idRating']));
				$rate = $docs_rate->fetch(PDO::FETCH_ASSOC);

				$lastElement = end($aut_rows);
				$image = explode('-', $row['image'])[1];
				$date = explode('-', $row['date'])[0];

				
				echo"<div class='col-sm-6'>";
					echo"<div class='ga-summary-grid gsg-xl clearfix' itemscope='' itemtype='http://schema.org/Book'>";
						echo"<div class='gsg-cover'>";
							echo"<a href='http://www.iferu.com/book.php?id=".$row['id']."'>";
							echo"<img src='http://iferu.com/summary-img/".$row['id'].".jpg' alt='' class='scover scover--book scover--s ls-is-cached lazyloaded'>";
							echo"</a>";
						echo"</div>";
						echo"<div class='gsg-biblio hyphenate'>";
							echo"<div class='gsg-row'>";
								echo"<div class='gsg-top'>";
									echo"<div class='gsg-source'>";
										echo"<small>".$row['type']."</small>";
									echo"</div>";
									echo"<div class='gsg-main'>";
										echo"<a href='http://www.iferu.com/book.php?id=".$row['id']."' itemprop='url' data-shave=''>";
											echo($row['titre']);
										echo"</a>";
									echo"</div>";
								echo"</div>";
							echo"</div>";
							echo"<div class='gsg-row'>";
								echo"<div class='gsg-middle'>";
								    echo"<div class='gsg-sub' data-shave=''>";
										echo($row['description']);
									echo"</div>";
								echo"</div>";
							echo"</div>";
							echo"<div class='gsg-row'>";
								echo"<div class='gsg-bottom'>";
									echo"<div class='gsg-detail'>";
										echo"<p data-shave=''>";
											$i = 0;
											foreach ($aut_rows as $aut_row) {
												if($i != sizeof($aut_rows)-1){
													echo $aut_row['nom'].", ";
												}else{
													echo $aut_row['nom'].".";
												}
												$i = $i + 1;
											}
										echo "</p>";
										echo"<p data-shave=''>".$date."</p>";
										if($row['hasaudio']=='true'){
											echo"<span title='Version audio disponible' data-icon=''></span>";
										}
										if($row['bestseller']=='yes'){
											echo"<span title='Best-Seller'  data-icon=''></span>";
										}
									echo"</div>";
									echo"<div class='gsg-icons'>";
										echo"<span class='gsg-rating' title='Classement'>";
											echo"<i class='ico-star-empty'></i> ";
											
										echo"<span class='gsg-rating-number'>".$rate['number']."</span>";
										echo"</span>";
									echo"</div>";
								echo"</div>";
							echo"</div>	";	
						echo"</div>";
					echo"</div>";
				echo"</div>	";		
			}

			echo"</div>";

			echo"</div>";
			
			
			echo "<input type='hidden' value='$id_chaine' id='id_chaine'></input>";
			echo "<input type='hidden' value='$lang' id='lang'></input>";
		}else{
			echo "<h2 style='text-align:center;'>Veuillez passez une chaine en paramètre</h2>";
		}
	?>	
	
	
</div>


<style>
img{
	width: 140px;
    height: 230px;
	border : 0 ;
	vertical-align : middle;
	box-sizing: border-box;
  
}
.gsg-sub{
	font-size:100%;
	
}

</style>
<link rel="stylesheet" type="text/css" href="./include/styles-cb-jsfynwbbuw3w7v3sz8277ce5y5pqc5k.css">
	<script
	  src="https://code.jquery.com/jquery-3.5.1.min.js"
	  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
	  crossorigin="anonymous">
 	</script>
	
	 
	<script>
   
 	</script>

</body>
</html>