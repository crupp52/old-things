<?php
/* Smarty version 3.1.30, created on 2018-01-29 12:57:05
  from "/home/u462798691/public_html/myMoney/system/templates/notservice.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6f1a218ddaf8_05312547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf5f16de6769fd44587f4076a086daf7abbeae18' => 
    array (
      0 => '/home/u462798691/public_html/myMoney/system/templates/notservice.tpl',
      1 => 1517230611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6f1a218ddaf8_05312547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pénzügyek</title>
    <link rel="shortcut icon" href="img/title.ico" />
  	<link rel="stylesheet" type="text/css" href="include/style.css">
  	<link rel="stylesheet" type="text/css" href="include/bootstrap.min.css">
  	<?php echo '<script'; ?>
 src="include/jquery.min.js"><?php echo '</script'; ?>
>
  	<?php echo '<script'; ?>
 src="include/bootstrap.min.js"><?php echo '</script'; ?>
>
    <meta name="theme-color" content="#007bff" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
    <?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=UA-108346239-1"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      window.dataLayer = window.dataLayer || [];
      function gtag(){
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-108346239-1');
    <?php echo '</script'; ?>
>
  </head>
  <body>
    <div id="container">
      <div style="width:70%;text-align:center;margin:auto;margin-top:20%">
        <h1>Jelenleg az oldal nem elérhető.</h1>
        <a href="logout.php">Vissza.</a>
      </div>
    </div>
  </body>
</html>
<?php }
}
