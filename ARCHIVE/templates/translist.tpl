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
        <a href="index.php"><button type="button" class="btn btn-primary button" style="width:100%;margin-top:25px">Vissza</button></a>
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
      </div>
    </div>
  </body>
</html>
