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
      <div class="center" id="login_content" style="margin: auto">
        {$show}
      </div>
    </div>
  </body>
</html>
