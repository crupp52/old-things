<?php
/* Smarty version 3.1.30, created on 2017-09-27 20:49:03
  from "C:\xampp\htdocs\smarty\desktop\templates\modify.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59cbf29fa10166_64276744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5d8a0ae69b23175f23eaf79cbf9a3bb5610d9eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\desktop\\templates\\modify.tpl',
      1 => 1505929736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cbf29fa10166_64276744 (Smarty_Internal_Template $_smarty_tpl) {
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
  	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
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
	<?php echo '<script'; ?>
>
		function checkBeforeDelete(){
			var x = confirm("Biztosan törölni szeretnéd a tételt?");
			if(x == true){
				return true;
			}else{
				return false;
			}
		}
	<?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
