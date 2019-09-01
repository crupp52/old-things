{config_load file="test.conf" section="setup"}
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pénzügyek</title>
    <link rel="shortcut icon" href="img/title.ico" />
  	<link rel="stylesheet" type="text/css" href="include/style.css">
  	<link rel="stylesheet" type="text/css" href="include/bootstrap.min.css">
  	<script src="include/jquery.min.js"></script>
  	<script src="include/bootstrap.min.js"></script>
    <meta name="theme-color" content="#007bff" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
  </head>
  <body>
    <div id="container">
      <div class="center" id="login_content" style="margin: auto">
        <form action="new_pass.php" method="post">
          <table style="margin-top:25px">
            <tr>
              <td align="center"><img style="width:50%;margin-bottom:30px" src="img/login_cover.png"></td>
            </tr>
            <tr>
              <td style="color:#007bff">{$message}</td>
            </tr>
            <tr>
              <td style="width:380px"><input class="form-control" type="password" name="new_pass" autocomplete="off" autocapitalize="off" placeholder="Új jelszó"></td>
            </tr>
            <tr>
              <td style="width:380px"><input class="form-control" type="password" name="renew_pass" autocomplete="off" autocapitalize="off" placeholder="Új jelszó úrja"></td>
            </tr>
            <tr>
              <td>
                <input class="btn btn-primary" style="margin-top:25px;width:380px;font-size:20px;" type="submit" name="add" value="Jelszó módosítás">
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </body>
</html>
