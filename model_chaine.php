<?php 
	require_once "pdo.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Meilleurs résumés de livres sur Biographies d’entrepreneurs </title>
	<meta name="description" content="Les meilleurs Biographies d’entrepreneurs résumés de livres. Un accès immédiat à plus de 20.000 résumés des meilleurs livres de management, de leadership et non-fiction.">
	<meta name="robots" content="INDEX,FOLLOW">
	<meta property="og:title" content="Meilleurs résumés de livres sur Biographies d’entrepreneurs ">
	<meta property="og:type" content="website">
	<meta property="og:image" content="http://www.iferu.com/channel-img/1001-business-leaders-1539593175000.jpg">
	<meta property="og:image:secure_url" content="http://www.iferu.com/channel-img/1001-business-leaders-1539593175000.jpg">
	<meta property="og:image:width" content="512">
	<meta property="og:image:height" content="372">
	<meta property="og:url" content="http://www.iferu.com/fr/channels/business-leaders/1001">
	<meta property="og:site_name" content="iferu">
	<meta property="og:description" content="Les meilleurs Biographies d’entrepreneurs résumés de livres. Un accès immédiat à plus de 20.000 résumés des meilleurs livres de management, de leadership et non-fiction.">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@iferu">
	<meta name="twitter:title" content="Meilleurs résumés de livres sur Biographies d’entrepreneurs ">
	<meta name="twitter:description" content="Les meilleurs Biographies d’entrepreneurs résumés de livres. Un accès immédiat à plus de 20.000 résumés des meilleurs livres de management, de leadership et non-fiction.">
	<meta name="twitter:image" content="http://www.iferu.com/channel-img/1001-business-leaders-1539593175000.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="fb:app_id" content="143891362343386">
	<link rel="canonical" href="http://www.iferu.com/fr/channels/business-leaders/1001">
	<link rel="shortcut icon" href="http://www.iferu.com/favicon.ico" type="image/x-icon">
	<link rel="search" href="http://www.iferu.com/opensearch.xml" type="application/opensearchdescription+xml" title="iferu">
	<link rel="stylesheet" type="text/css" href="./modele_chaine_files/A.jquery-ui-1.12.1.min-cb-fyyzrx92fbilucbwhqke3jqbggxtiyc.css.pagespeed.cf.7o-0L-8L3h.css">
	<link rel="stylesheet" type="text/css" href="./modele_chaine_files/A.bootstrap-cb-1eib2am82vfhch339lo2u8dfgdjhrhj.css.pagespeed.cf.x06Z6t8DFB.css">
	<link rel="stylesheet" type="text/css" href="./modele_chaine_files/A.select2.min-cb-d58ln2d3tpvgvm269x5p5f4m0l87oep.css.pagespeed.cf.yuE1ZdiTkQ.css">
	<link rel="stylesheet" type="text/css" href="./modele_chaine_files/A.styles-cb-tiikab9b7abdznqjr1dlyxuef8b1kqt.css.pagespeed.cf.u2_ozjtzZl.css">
	
	<script src="./modele_chaine_files/va-3f0c180483cb4e78e02f988160e89ee1.js" crossorigin="anonymous" type="text/javascript"></script>
	<script src="./modele_chaine_files/track-3f0c180483cb4e78e02f988160e89ee1.js" crossorigin="anonymous" type="text/javascript"></script>
	<script src="./modele_chaine_files/opa-b7dcb10662af8baedec6b74a4afbd17d.js" crossorigin="anonymous" type="text/javascript"></script>
	<script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/1043811595/?random=1605788518047&amp;cv=9&amp;fst=1605788518047&amp;num=1&amp;label=dIVwCMG31wEQi5rd8QM&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=900&amp;u_w=1440&amp;u_ah=838&amp;u_aw=1440&amp;u_cd=24&amp;u_his=4&amp;u_tz=60&amp;u_java=false&amp;u_nplug=4&amp;u_nmime=5&amp;sendb=1&amp;ig=1&amp;frm=0&amp;url=https%3A%2F%2Fwww.iferu.com%2Ffr%2Fchannels%2Fbusiness-leaders%2F1001&amp;ref=https%3A%2F%2Fwww.iferu.com%2Ffr%2Fexplore&amp;tiba=Meilleurs%20r%C3%A9sum%C3%A9s%20de%20livres%20sur%20Biographies%20d%E2%80%99entrepreneurs&amp;hn=www.googleadservices.com&amp;rfmt=3&amp;fmt=4">
	</script>
	<script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/1044773340/?random=1605788518059&amp;cv=9&amp;fst=1605788518047&amp;num=2&amp;label=0ls-CJzzyAEQ3POX8gM&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=900&amp;u_w=1440&amp;u_ah=838&amp;u_aw=1440&amp;u_cd=24&amp;u_his=4&amp;u_tz=60&amp;u_java=false&amp;u_nplug=4&amp;u_nmime=5&amp;sendb=1&amp;ig=1&amp;frm=0&amp;url=https%3A%2F%2Fwww.iferu.com%2Ffr%2Fchannels%2Fbusiness-leaders%2F1001&amp;ref=https%3A%2F%2Fwww.iferu.com%2Ffr%2Fexplore&amp;tiba=Meilleurs%20r%C3%A9sum%C3%A9s%20de%20livres%20sur%20Biographies%20d%E2%80%99entrepreneurs&amp;hn=www.googleadservices.com&amp;rfmt=3&amp;fmt=4"></script>

	<link rel="stylesheet" type="text/css" href="./styles.css">
</head>
<body>

	<div class="articles">
	<?php
		if(isset($_GET['idChaine'])){
			$id_chaine = $_GET['idChaine'] ? $_GET['idChaine'] : '';
			$chaine = $pdo->prepare("SELECT * FROM Chaine WHERE id = :idChaine");
			$chaine->execute(array('idChaine' => $id_chaine));
			$nomChaine = $chaine->fetch(PDO::FETCH_ASSOC);

			$docs_chaine = $pdo->prepare("SELECT * FROM Document WHERE id IN (SELECT idDoc FROM Doc_Chaine where idChaine = :idChaine)
				Limit 6");
			// $users = $pdo->prepare("SELECT d.id,d.titre FROM Document as d,Doc_Chaine WHERE Doc_Chaine.idChaine = 1054 AND  d.id = Doc_Chaine.idDoc");
			$docs_chaine->execute(array('idChaine' => $_GET['idChaine']));
			$rows = $docs_chaine->fetchAll(PDO::FETCH_ASSOC);
		

			echo "<h2 class='title'>Chaine <span class='title_chaine'>".$nomChaine['nom']."</span></h2>";

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
											echo"<span data-icon=""></span>";
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
		}else{
			echo "<h2 style='text-align:center;'>Veuillez passez une chaine en paramètre</h2>";
		}
	?>	
	</div>
	<div class="btn-plus">
		<button id="more">Voir plus</button>
	</div>





	<script
	  src="https://code.jquery.com/jquery-3.5.1.min.js"
	  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
	  crossorigin="anonymous">
 	</script>
 	<script type="text/javascript">
 		$(document).ready(function(){
 			var articlesCount = 6;
 			var id_chaine = $('#id_chaine').val()
 			$('#more').click(function(){
 				articlesCount += 6;
 				$('.articles').load("fetch_article_chaine.php", {
 					newArticles: articlesCount,
 					idChaine: id_chaine
 				});
 			});
 		});
 	</script>

</body>
</html>