<?php
/* Smarty version 3.1.30, created on 2017-09-30 20:24:53
  from "/home/u462798691/public_html/myMoney/desktop/templates/admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59cffd95be7640_41409983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '316b355b742ebe041fdc6d6fc554f29c0a1c6079' => 
    array (
      0 => '/home/u462798691/public_html/myMoney/desktop/templates/admin.tpl',
      1 => 1506802506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cffd95be7640_41409983 (Smarty_Internal_Template $_smarty_tpl) {
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
        <p style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
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
            <?php echo $_smarty_tpl->tpl_vars['user_table']->value;?>

          </table>
        </div>
      </div>
    </div>
  </body>
</html>
<?php }
}
