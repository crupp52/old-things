{config_load file="test.conf" section="setup"}
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pénzügyek</title>
    <link rel="shortcut icon" href="img/title.ico" />
  	<link rel="stylesheet" type="text/css" href="include/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="include/style.css">
  	<script src="include/jquery.min.js"></script>
  	<script src="include/bootstrap.min.js"></script>
    <meta name="theme-color" content="#007bff" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108346239-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-108346239-1');
    </script>
  </head>
  <body>
    <div id="container">
      <div class="center" id="content" style="display:inline-block">
        <form class="bevitel" action="index.php" method="post" name="form" onsubmit="return checkInput()">
          <table style="margin-top:25px">
            <tr>
              <td>
                <div class="btn-group" data-toggle="buttons" style="width:100%;">
                  <label class="btn btn-outline-primary active" style="width:50%;">
                    <input type="radio" name="route" value="out" autocomplete="off" checked>Kiadás
                  </label>
                  <label class="btn btn-outline-primary" style="width:50%;">
                    <input type="radio" name="route" value="in" autocomplete="off">Bevétel
                  </label>
                </div>
              </td>
            </tr>
            <tr>
              <td style="width:380px">
                <select class="form-control" name="mode">
                  <option value="" disabled selected>Fizetés módja</option>
                  <option value="cash">Készpénz</option>
                  <option value="debit">Bankkártya</option>
                </select>
              </td>
            </tr>
            <tr>
              <td style="width:380px">
                <select class="form-control" name="category">
                  <option value="" disabled selected>Kategória</option>
                  <option value="Étel">Étel</option>
                  <option value="Utazás">Utazás</option>
                  <option value="Szolgáltatás">Szolgáltatás</option>
                  <option value="Szórakozás">Szórakozás</option>
                  <option value="Életszínvonal">Életszínvonal</option>
                  <option value="Bevétel">Bevétel</option>
                  <option value="Egyéb">Egyéb</option>
                </select>
              </td>
            </tr>
            <tr>
              <td style="width:380px"><input class="form-control" style="-moz-appearance: textfield;line-height: 1.0;height:40px" type="number" name="unit" autocomplete="off" placeholder="Összeg (Ft.)"></td>
            </tr>
            <tr>
              <td style="width:380px"><input class="form-control" style="line-height: 1.0;height:40px" type="text" name="comment" maxlength="25" autocomplete="off" placeholder="Megjegyzés (opcionális)"></td>
            </tr>
            <tr>
              <td>
                <input class="btn btn-primary" style="margin-top:25px;width:380px;font-size:20px;" type="submit" name="add" value="Mehet">
              </td>
            </tr>
          </table>
        </form>
        <div id="all_button" style="margin-top:10px">
    			<label style="margin:0">Minden idők mozgása:</label></br>
    			<a href="index.php"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Összes mozgás</button></a>
    			<a href="?category=out"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Összes kiadás</button></a>
          <a href="?category=Étel"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Összes kaja</button></a>
    		</div>
    		<div id="weekly_button" style="margin-top:10px">
    			<label style="margin:0">Heti mozgások:</label></br>
    			<a href="?date=week"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Heti mozgás</button></a>
    			<a href="?date=week&category=out"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Heti kiadás</button></a>
    			<a href="?date=week&category=Étel"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Heti kaja</button></a>
    		</div>
    		<div id="monthly_button" style="margin-top:10px">
    			<label style="margin:0">Havi mozgások:</label></br>
    			<a href="?date=month"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Havi mozgás</button></a>
    			<a href="?date=month&category=out"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Havi kiadás</button></a>
    			<a href="?date=month&category=Étel"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Havi kaja</button></a>
    			<a href="?date=month&category=Utazás"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Havi utazás</button></a>
    		</div>
        <div id="custom_query" style="margin-top:10px; margin-bottom:30px;{$display}">
          <!--<label style="margin:0">Egyedi lekérdezés:</label></br>
          <form class="" action="index.php" method="post">
                <input type="text" class="form-control" name="query" value='{$query_value}' autocomplete="off" placeholder='pl. date like "2017%"'>
          </form>-->
          <label style="margin:0">Egyéb:</label></br>
          <a href="statistics.php"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Statisztika</button></a>
    		</div>
        <div id="sum_table">
          <table style='width:100%;font-size:20px;'>
            <tr>
              <td style="width:130px">Összesen:</td>
              <td>{$sum}</td>
            </tr>
            <tr>
              <td>Készpénz:</td>
              <td>{$kp}</td>
            </tr>
            <tr>
              <td>Bankkártya:</td>
              <td>{$credit}</td>
            </tr>
          </table>
        </div>
    		<div class="modify" style="text-align:center;margin-bottom:20px" >
    			<a href="modify.php"><button class="btn btn-danger" style="margin-top:25px;width:380px;font-size:20px;">Módosítás</button></a><br>
          <a href="new_pass.php"> Új jelszó</a>
          <span> | </span>
          <a href="logout.php">Kijelentkezés </a>
    		</div>
      </div>
    </div>
    <div id="last_table">
      <table class="last_moves" style='width:100%;border: solid 1px black;border-collapse:separate'>
        {$last_move}
      </table>
    </div>
  	<script type="text/javascript">
  		function checkRoute(){
  			with(document.form){
  				if(route.checked == true){
  					category.value = "Bevétel";
  					category.disabled = true;
  				}
  			}
  			return false;
  		}
  		function checkInput(){
  			with(document.form){
  				if(unit.value==""  isNaN(unit.value)){
  					return false;
  				}else if(mode.value==""){
  					return false;
  				}else if(category.value==""){
  					return false;
  				}else{
  					return true;
  				}
  			}
  		}
  	</script>
  </body>
</html>
