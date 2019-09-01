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
    <style>
      table,td {
        border: 1px solid black;
        border-collapse: collapse;
      }
      td{
        width: 150px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div id="container">
      <a href="../index.html"><button>Vissza</button></a>
      <form action="statistics.php" method="post">
        <label>Kezdő dátum: </label>
        <input type="text" name="start" value="{$start}" autocomplete="off" placeholder="pl: 2017-01-01">
        <label>Vég dátum: </label>
        <input type="text" name="end" value="{$end}" autocomplete="off" placeholder="pl: 2017-01-01">
        <input type="text" name="other" value="{$other}" autocomplete="off" placeholder="pl: route like 'in'">
        <input type="submit" name="send" value="Szűrés">
        <input type="submit" name="reset" value="Törlés">
      </form>
      <table>
        <h2>Összesen: {$sum}</h2>
        {$list}
      </table>
    </div>
  </body>
</html>
