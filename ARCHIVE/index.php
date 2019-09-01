<!DOCTYPE html>
<html lang="hu">
  <head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dev_page</title>
  </head>
  <body>
    <?php
		include_once ("functions.php");
		include_once ("nav.php");
    ?>
    <div id="container">
      <div id="content">
        <?php
    			if(isset($_GET["p"]) && $_GET["p"]!="") {
    				$p = $_GET["p"];
    				if(file_exists("pages/".$p.".php")) {
    					include_once ("pages/".$p.".php");
    				} else {
    					include_once ("pages/404.php");
    				}
    			} else {
    				include_once("pages/main.php");
    			}
  			?>
      </div>
      <div id="foot">

      </div>
    </div>

    <script>

    document.location = "myMoney";

    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    </script>


  </body>
</html>
