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
        <p style="text-align: center">{$message}</p>
        <div id="user_table">
          <table class="last_moves" style='width:100%;border: solid 1px black;'>
            <thead>
              <tr>
                <th style='border: 1px solid black;text-align:center'>id</th>
                <th style='border: 1px solid black;text-align:center'>user_name</th>
                <th style='border: 1px solid black;text-align:center'>last_login</th>
                <th style='border: 1px solid black;text-align:center'>reg_date</th>
              </tr>
            </thead>
            {$user_table}
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
