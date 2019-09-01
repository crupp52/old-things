{config_load file="test.conf" section="setup"}
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pénzügyek</title>
	<link rel="stylesheet" type="text/css" href="include/style.css">
	<link rel="stylesheet" type="text/css" href="include/bootstrap.min.css">
	<script src="include/jquery.min.js"></script>
	<script src="include/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
  </head>
  <body>
    <div id="conntainer">
      <div class="center" id="content">
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
					<option value="Szórakozás">Szórakozás</option>
					<option value="Szolgáltatás">Szolgáltatás</option>
					<option value="Utazás">Utazás</option>
					<option value="Bevétel">Bevétel</option>
					<option value="Egyéb">Egyéb</option>
                </select>
              </td>
            </tr>
            <tr>
              <td style="width:380px"><input class="form-control" type="number" name="unit" autocomplete="off" placeholder="Összeg (Ft.)"></td>
            </tr>
            <tr>
              <td>
                <input class="btn btn-primary" style="margin-top:25px;width:380px;font-size:20px;" type="submit" name="add" value="Mehet">
              </td>
            </tr>
          </table>
        </form>
		<table class="last_moves" style='border: solid 1px black;'>
			
			{$last_move}
			<tr>
				<td>
					Össz.:
				</td>
				<td colspan="4">
					{$sum}
				</td>
			</tr>
		</table>
		<div id="weekly_button" style="margin-top:10px">
			<label style="margin:0">Heti mozgások:</label></br>
			<a href="translist.php?date=week"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Heti mozgás</button></a>
			<a href="translist.php?date=week&category=out"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Heti kiadás</button></a>
			<a href="translist.php?date=week&category=Étel"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Heti kaja</button></a>
		</div>
		<div id="monthly_button" style="margin-top:10px">
			<label style="margin:0">Havi mozgások:</label></br>
			<a href="translist.php?date=month"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Havi mozgás</button></a>
			<a href="translist.php?date=month&category=out"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Havi kiadás</button></a>
			<a href="translist.php?date=month&category=Étel"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Havi kaja</button></a>
			<a href="translist.php?date=month&category=Utazás"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Havi utazás</button></a>
		</div>
		<div style="margin-top:50px;margin-bottom:25px">
			<a href="modify.php"><button class="btn btn-danger" style="margin-top:25px;width:380px;font-size:20px;">Módosítás</button></a>
		</div>
      </div>
    </div>
	<script>
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
				if(unit.value=="" && isNaN(unit.value)){
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
