<?php 
use modele\app\urlRewrite;
?>
<html lang="fr">
	<head>
    	<base href="<?= urlRewrite::getSiteUrl() ?>" />
    	
    	<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <meta name="theme-color" content="main">
        <meta name="msapplication-navbutton-color" content="main">
        <meta name="apple-mobile-web-app-statut-bar-style" content="main">
    
        <!-- SEO -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://hugo-mathieu-1-etu.pedaweb.univ-amu.fr">
        <meta property="og:image" content="https://hugo-mathieu-1-etu.pedaweb.univ-amu.fr/favicon.ico">
        <meta property="og:image:alt" content="Mon CV Web intéractif !">
        <meta property="og:site_name" content="Hugo Mathieu" />
    
    	<meta name="twitter:title" content="Hugo Mathieu">
    	<meta name="twitter:description" content="Mon CV Web intéractif !">
    	<meta name="twitter:image" content="https://hugo-mathieu-1-etu.pedaweb.univ-amu.fr/favicon.ico">
                                
    	<meta property="og:title" content="Hugo Mathieu">
    	<meta property="og:description" content="Mon CV Web intéractif !">
    
    
        <meta name="author" content="Guedesite, Hugo Mathieu" />
        <meta name="publisher" content="Guedesite"/>
        <meta name="description" content="Mon CV Web intéractif !">
        <meta name="copyright" content="Guedesite"/>
    
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
        <?php } 
        if(isset($_GET['demo'])) {?>
            <script>
				function loopDemo() {
					$.get("https://hugo-mathieu-1-etu.pedaweb.univ-amu.fr/extranet/index.php?action=demo&data=get", function(data, status){
			    	    data = data.replaceAll(" ", "");
			    	    if(data != "" && data != " ") {
			    	    	console.log(data);
			    	    	if(document.getElementById(data) != null) {
			    	    		document.getElementById(data).click();
			    	    		console.log(data);
			    	    	}
			    	    }
			    	  });
					setTimeout(loopDemo, 50);
				}

				setTimeout(loopDemo, 50);
				console.log("aa");

            </script>
        <?php }
        
        ?>
	</body>
</html>