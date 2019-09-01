<?php
/* Smarty version 3.1.30, created on 2018-01-29 12:57:24
  from "/home/u462798691/public_html/myMoney/system/templates/statistics.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6f1a34422592_71595533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a270b68025f453d13e1cf240ab252aa3f76019c3' => 
    array (
      0 => '/home/u462798691/public_html/myMoney/system/templates/statistics.tpl',
      1 => 1517230611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6f1a34422592_71595533 (Smarty_Internal_Template $_smarty_tpl) {
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
        <input type="text" name="start" value="<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
" autocomplete="off" placeholder="pl: 2017-01-01">
        <label>Vég dátum: </label>
        <input type="text" name="end" value="<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
" autocomplete="off" placeholder="pl: 2017-01-01">
        <input type="text" name="other" value="<?php echo $_smarty_tpl->tpl_vars['other']->value;?>
" autocomplete="off" placeholder="pl: route like 'in'">
        <input type="submit" name="send" value="Szűrés">
        <input type="submit" name="reset" value="Törlés">
      </form>
      <table>
        <h2>Összesen: <?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
</h2>
        <?php echo $_smarty_tpl->tpl_vars['list']->value;?>

      </table>
    </div>
  </body>
</html>
<?php }
}
