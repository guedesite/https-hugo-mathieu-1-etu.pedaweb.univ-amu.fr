
<?php if(!isset($_GET['data'])) { ?>

	<script src="public/assets/js/jquery.min.js"></script>
    <div style="width:100%;height:100%;margin:0;padding:0;">
    
    <button style="width:100%;height:50%;font-size:50px;margin:0;" onclick="openUrl()">next</button>
    <button style="width:100%;height:50%;font-size:50px;margin:0;" onclick="openUrl()">previous</button>
    </div>
    
    <script>
    var count = 0;
    function openUrl() {
    	$.get("https://hugo-mathieu-1-etu.pedaweb.univ-amu.fr/extranet/index.php?action=demo&data="+count, function(data, status){
    	    count++;
    	  });
    }
    </script>
    

<?php } else {
    
    if($_GET['data'] == "get") {
        echo file_get_contents("demo.temp");
        file_put_contents("demo.temp", "");
    } else {
        file_put_contents("demo.temp", "demo"+$_GET['data']);
    }
    
}
exit(); ?>