<?php
/* Smarty version 3.1.30, created on 2017-10-21 18:54:23
  from "/home/u462798691/public_html/myMoney/system/templates/admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59eb97df712b34_42456750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42b23662528f13b2a943479cbee523d1d886e41c' => 
    array (
      0 => '/home/u462798691/public_html/myMoney/system/templates/admin.tpl',
      1 => 1508593466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59eb97df712b34_42456750 (Smarty_Internal_Template $_smarty_tpl) {
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
