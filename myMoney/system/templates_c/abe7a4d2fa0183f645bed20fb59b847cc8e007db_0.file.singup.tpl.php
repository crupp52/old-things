<?php
/* Smarty version 3.1.30, created on 2017-09-30 14:52:25
  from "/home/u462798691/public_html/myMoney/desktop/templates/singup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59cfafa99b84c0_69215744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abe7a4d2fa0183f645bed20fb59b847cc8e007db' => 
    array (
      0 => '/home/u462798691/public_html/myMoney/desktop/templates/singup.tpl',
      1 => 1506782833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cfafa99b84c0_69215744 (Smarty_Internal_Template $_smarty_tpl) {
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
        <form action="singup.php" method="post">
          <table style="margin-top:25px">
            <tr>
              <td style="color:red"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</td>
            </tr>
            <tr>
              <td style="width:380px"><input class="form-control" type="type" name="user" autocomplete="off"autocapitalize="off" placeholder="Felhasználónév"></td>
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
<?php }
}
