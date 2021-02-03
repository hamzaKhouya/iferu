<?php 
	require_once "pdo.php";

	if(isset($_POST['newArticles']) && isset($_POST['idChaine'])){

		$newArticles = $_POST['newArticles'];
		$idChaine = $_POST['idChaine'];

		$docs_chaine = $pdo->prepare("SELECT * FROM Document WHERE id IN (SELECT idDoc FROM Doc_Chaine where idChaine = :idChaine) Limit 
			$newArticles");
		// $users = $pdo->prepare("SELECT d.id,d.titre FROM Document as d,Doc_Chaine WHERE Doc_Chaine.idChaine = 1054 AND  d.id = Doc_Chaine.idDoc");
		$docs_chaine->execute(array('idChaine' => $idChaine));
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

			$image = explode('-', $row['image'])[1];
			$date = explode('-', $row['date'])[0];

			echo"<div class='col-sm-1'></div>";
			echo"<div class='col-sm-5'>";
				echo"<div class='ga-summary-grid gsg-xl clearfix' itemscope='' itemtype='http://schema.org/Book'>";
					echo"<div class='gsg-cover'>";
						echo"<a href='http://www.iferu.com/book.php?id=".$row['id']."'>";
						echo"<img src='http://iferu.com/summary-".$image.".jpg' alt='' class='scover scover--book scover--s ls-is-cached lazyloaded'>";
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
	}else{
		echo "<h2 style='text-align:center;'>Veuillez passez une chaine en paramètre</h2>";
	}	

?>