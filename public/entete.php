<nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li <?=((((isset($_GET['page']) && $_GET['page'] == "accueil") || !isset($_GET['page'])) && (!isset($_GET['goto']) || $_GET['goto']=="home" )) ? "class='current'" : "")?>><a class="<?=((isset($_GET['page']) && $_GET['page'] == "accueil") || !isset($_GET['page']) ? "smoothscroll" : "")?>" href="<?=(isset($_GET['page']) && $_GET['page'] == "accueil" || !isset($_GET['page']) ? "#" : "index.php?page=accueil&goto=")?>home" id="demo0" data-trad="entete-nav-home">Home</a></li>
            <li <?=((((isset($_GET['page']) && $_GET['page'] == "accueil") || 
            !isset($_GET['page'])) && (isset($_GET['goto']) && $_GET['goto']=="about" )) ? "class='current'" : "")?>>
            <a class="<?=(((isset($_GET['page']) && $_GET['page'] == "accueil") || 
            !isset($_GET['page'])) ? "smoothscroll" : "")?>" 
            href="<?=(isset($_GET['page']) && $_GET['page'] == "accueil" 
            || !isset($_GET['page']) ? "#" : "index.php?page=accueil&goto=")?>about" id="demo1" data-trad="entete-nav-about">About</a></li>
	        <li <?=((((isset($_GET['page']) && $_GET['page'] == "accueil") || !isset($_GET['page'])) && (isset($_GET['goto']) && $_GET['goto']=="resume" )) ? "class='current'" : "")?>><a class="<?=(((isset($_GET['page']) && $_GET['page'] == "accueil") || !isset($_GET['page'])) ? "smoothscroll" : "")?>" href="<?=(isset($_GET['page']) && $_GET['page'] == "accueil" || !isset($_GET['page']) ? "#" : "index.php?page=accueil&goto=")?>resume" id="demo2" data-trad="entete-nav-resume">Resume</a></li>
            <li <?=((((isset($_GET['page']) && $_GET['page'] == "accueil") || !isset($_GET['page'])) && (isset($_GET['goto']) && $_GET['goto']=="work" )) ? "class='current'" : "")?>><a class="<?=(((isset($_GET['page']) && $_GET['page'] == "accueil") || !isset($_GET['page'])) ? "smoothscroll" : "")?>" href="<?=(isset($_GET['page']) && $_GET['page'] == "accueil" || !isset($_GET['page']) ? "#" : "index.php?page=accueil&goto=")?>work" id="demo3" onclick="resetAnim();" data-trad="entete-nav-works">Works</a></li>
            <li <?=((((isset($_GET['page']) && $_GET['page'] == "accueil") || !isset($_GET['page'])) && (isset($_GET['goto']) && $_GET['goto']=="contact" )) ? "class='current'" : "")?>><a class="<?=(((isset($_GET['page']) && $_GET['page'] == "accueil") || !isset($_GET['page'])) ? "smoothscroll" : "")?>" href="<?=(isset($_GET['page']) && $_GET['page'] == "accueil" || !isset($_GET['page']) ? "#" : "index.php?page=accueil&goto=")?>contact" id="demo4" data-trad="entete-nav-contact">Contact</a></li>
            <li <?=(isset($_GET['page']) && $_GET['page'] == "hobbies" ? "class='current'" : "" ) ?>><a href="index.php?page=hobbies" data-trad="entete-nav-hobbies">Hobbies</a></li>
         </ul> <!-- end #nav -->

      </nav>