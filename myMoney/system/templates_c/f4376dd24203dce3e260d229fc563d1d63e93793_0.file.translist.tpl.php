<?php
/* Smarty version 3.1.30, created on 2017-10-31 16:10:18
  from "/home/u462798691/public_html/myMoney/system/templates/translist.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f8a06a0b26b6_68473128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4376dd24203dce3e260d229fc563d1d63e93793' => 
    array (
      0 => '/home/u462798691/public_html/myMoney/system/templates/translist.tpl',
      1 => 1509365844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f8a06a0b26b6_68473128 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pénzügyek</title>
    <link rel="shortcut icon" href="img/title.ico" />
  	<link rel="stylesheet" type="text/css" href="include/style_mobile.css">
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
      <div class="center" id="content">
        <a href="index.php"><button type="button" class="btn btn-primary button" style="width:100%;margin-top:25px">Vissza</button></a>
		<table class="last_moves" style='width:100%;border: solid 1px black;'>
			<?php echo $_smarty_tpl->tpl_vars['last_move']->value;?>

			<tr>
				<td>
					Össz.:
				</td>
				<td colspan="4">
					<?php echo $_smarty_tpl->tpl_vars['sum']->value;?>

				</td>
			</tr>
		</table>
      </div>
    </div>
  </body>
</html>
<?php }
}
