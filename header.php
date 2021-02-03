

			 
			
<header id="header" class="header header--prospect-cta"><div class="notifybars"><div id="notification_8"><div class="notifybar notifybar--note"><div class="notifybar__content"><div class="notifybar__icon"><i class="ico-info"></i></div><div class="notifybar__title">iferu utilise des cookies afin d'améliorer la navigation sur son site Internet. <a href="https://www.iferu.com/fr/cookie-policy">Pour en savoir plus</a>.</div><div class="notifybar__dismiss"><span data-icon=""></span></div></div></div></div></div> 
		<nav class="navigation">
			
				<input type="checkbox" id="nav-mobile" class="navigation__mobile-toggle">
			    <label for="nav-mobile" class="navigation__mobile">
			        <i class="ico-menu"></i>
					<span class="sr-only">Menu</span>
			    </label>
			    <div class="navigation__logo">
					<a href="./index.php" class=""> 
						<img src="./logo_iferu.png" alt="iferu"  class="nav-img">
					</a>
				</div>
				<div class="navigation__menu-wrapper">
					<div class="navigation__menu">
						<ul class="navigation__menu-items">
							
							<li><a href="./fr-explore.php">Explorer</a></li>
							<li><a href="./fr-enterprise-solutions.php">Solutions pour entreprises</a></li>
							<li><a href="./fr-subscribe-products.php">S'abonner</a></li>
								
						</ul>
						<div class="navigation__search">
							

<form class="top-search js-top-search" action="./search.php" data-ga-search="{
		&quot;CHANNEL&quot; : { 
			&quot;endpoint&quot;: &quot;/search/channels&quot;, 
			&quot;title&quot;: &quot;Chaînes&quot;  
		},
		&quot;SUMMARY&quot; : {  
			&quot;endpoint&quot;: &quot;/search/summaries&quot;, 
			&quot;title&quot;: &quot;Résumés&quot;  
		},
		&quot;LGXPS&quot; : { 
			&quot;endpoint&quot;: &quot;/search/lgxps&quot;, 
			&quot;title&quot;: &quot;Expériences d" apprentissage="" au="" format="" condensé"="" }="" }'="">
	<input type="hidden" name="initial" value="true">
	
	<div class="top-search__container">
		
			<input class="js-top-search-input top-search__input" name="query" type="search" autocomplete="off" placeholder="Rechercher des résumés...">
			<div class="top-search__controls">
				<button type="reset" class="top-search__reset">×</button>
				<button type="submit" class="btn btn-primary js-top-search-button top-search__button">
					
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="top-search__icon">
						<path d="M31.712 30.272l-9.728-9.76c1.824-2.176 2.912-4.96 2.912-8 0-6.912-5.6-12.512-12.512-12.512s-12.48 5.6-12.48 12.512 5.6 12.48 12.48 12.48c3.136 0 6.016-1.152 8.192-3.072l9.728 9.792c0.384 0.384 1.024 0.384 1.408 0 0.384-0.416 0.384-1.024 0-1.44zM12.384 23.008c-5.792 0-10.496-4.704-10.496-10.496s4.704-10.528 10.496-10.528c5.824 0 10.528 4.704 10.528 10.528s-4.704 10.496-10.528 10.496z"></path>
					</svg>
				</button>
			</div>
		
		<div class="top-search__result-container js-top-search-results"></div>
	</div>
</form>
						</div>
						
							<div class="navigation__menu-login">
								<a href="./fr-login.php" class="btn btn-primary">Connexion</a>
							</div>	
						
					</div>
					
				</div>
				<div class="navigation__controls">
					
						<div class="navigation__prospect-action">
							<a href="https://www.iferu.com/fr/enterprise/request-demo" class="btn btn-warning" data-ga-prospect-cta="150">Demander une démo</a>
						</div>
					
						<div class="navigation__btn-login">
							<a href="./fr-login.php" class="btn btn-primary" class="nav-link" id="connexion" rel="nofollow">
								
								<i class="ico-login"></i>
								<a href="#" class="btn btn-danger" id="logout" ><i class="ico-login"></i></a>
							  </a>
						</div>
					
				</div>
				<link rel="stylesheet" type="text/css" href="./include/styles-cb-jsfynwbbuw3w7v3sz8277ce5y5pqc5k.css">
				<style>#logout{display:none;}.nav-img{height: 65px;}
			.header--prospect-cta .navigation__prospect-action {
    display: inline;}
	@media only screen and (max-width: 600px) {
		.btn{padding: 4px 10px;}
		.nav-img{height:55px;}
		.top-search__button  {display:none;}
		.header--prospect-cta .navigation__btn-login {display:inline;
  }
}
			
			</style>
				
			
		</nav>
	</header>
	<div class="navigation__spacer"></div>
	
	<script src="./fr-enterprise-solutions_files/jquery-3.5.1.min-cb-ngqyxctuyyypyq778izlo0vuklgdyde.js"></script>
<script>
	$(function(){  
		$('.notifybar__dismiss').click(function(){ 

$('.notifybar').hide();
}); 
  var state= $('#session').val();
  
  if(state=='true'){
	 
    $('#logout').show();
    $('#connexion').hide();

  }
  $('#logout').click(function(){  
       
        var action = "logout"; 
        
        $.ajax({  
             url:"pdo.php",  
             method:"POST",  
             data:{action:action},  
             success:function()  
             {  
               
                  location.reload();  
                  
             }  
        });  
   }); 
});  </script> 

