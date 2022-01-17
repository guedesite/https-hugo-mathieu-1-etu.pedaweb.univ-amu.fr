<?php 
?>
<html lang="fr">
	<head>
    	<base href="/" />
    	
    	<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <meta name="theme-color" content="main">
        <meta name="msapplication-navbutton-color" content="main">
        <meta name="apple-mobile-web-app-statut-bar-style" content="main">
    
        <!-- SEO -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://bvrsport.fr">
        <meta property="og:image" content="https://bvrsport.fr/favicon.jpg">
        <meta property="og:image:alt" content="C'est beau, c'est vrai !">
        <meta property="og:site_name" content="BvrSport" />
    
    	<meta name="twitter:title" content="BvrSport">
    	<meta name="twitter:description" content="C'est beau, c'est vrai !">
    	<meta name="twitter:image" content="https://bvrsport.fr/favicon.jpg">
                                
    	<meta property="og:title" content="BvrSport">
    	<meta property="og:description" content="C'est beau, c'est vrai !">
    
    
        <meta name="author" content="Guedesite, Hugo Mathieu, BvrSport" />
        <meta name="publisher" content="BvrSport"/>
        <meta name="description" content="C'est beau, c'est vrai !">
        <meta name="copyright" content="BvrSport"/>
    
        <meta name="robots" content="follow, index, all">
        <meta name="google" content="notranslate">
        
        
        <link rel="stylesheet" href="public/assets/css/main.css">
    	<link rel="stylesheet" href="public/assets/css/theme.css">
        <link rel="stylesheet" href="public/assets/css/jquery.mb.ytplayer.min.css"  />
        
        <script src="public/assets/js/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/d83e199806.js" crossorigin="anonymous"></script>
        <script src="public/assets/js/jquery.mb.ytplayer.min.js"></script>
        <script src="public/assets/js/svg.inject.js"></script>
        
    </head>
	<body style="background-color:#333">
		
	 
		<?php 
		use modele\app\page;
		
		include("public/entete.php");
	   
        page::invoke();
		
        include("public/footer.php");
        include("public/modal.php");  ?>
        
        
        <script src="public/assets/js/jquery.flexslider.min.js"></script>
        <script src="public/assets/js/jquery.waypoints.min.js"></script>
        <script src="public/assets/js/jquery.fittext.min.js"></script>
        <script src="public/assets/js/main.js"></script>
        <?php if(isset($_GET['goto'])) {?>
        <script> jQuery(document).ready(function($) { 
            $target = $("#<?=$_GET['goto']?>");
	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 800, 'swing', function () {
	        
	    }); 

	    });
	    </script>
        <?php } ?>
	</body>
</html>