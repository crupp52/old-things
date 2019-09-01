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
      <div class="center" id="content">
        <form action="singup.php" method="post">
          <table style="margin-top:25px">
            <tr>
              <td style="color:red">{$message}</td>
            </tr>
            <tr>
              <td style="width:380px"><input class="form-control" type="type" name="user" autocomplete="off"autocapitalize="off" placeholder="Felhasználónév"></td>
            </tr>
            <tr>
              <td style="width:380px"><input class="form-control" type="type" name="email" autocomplete="off"autocapitalize="off" placeholder="E-mail cím"></td>
            </tr>
            <tr>
              <td style="width:380px"><input class="form-control" type="password" name="pass" autocomplete="off" autocapitalize="off" placeholder="Jelszó"></td>
            </tr>
            <tr>
              <td style="width:380px"><input class="form-control" type="password" name="repass" autocomplete="off" autocapitalize="off" placeholder="Jelszó újra"></td>
            </tr>
            <tr>
              <td>
                <input class="btn btn-primary" style="margin-top:25px;width:380px;font-size:20px;" type="submit" name="singup" value="Belépés">
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </body>
</html>
