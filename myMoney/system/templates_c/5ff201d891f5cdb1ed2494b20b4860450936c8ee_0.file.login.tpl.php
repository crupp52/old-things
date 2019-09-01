<?php
/* Smarty version 3.1.30, created on 2018-01-29 12:57:05
  from "/home/u462798691/public_html/myMoney/system/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6f1a21aada08_80354204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ff201d891f5cdb1ed2494b20b4860450936c8ee' => 
    array (
      0 => '/home/u462798691/public_html/myMoney/system/templates/login.tpl',
      1 => 1517230613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6f1a21aada08_80354204 (Smarty_Internal_Template $_smarty_tpl) {
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
      <div class="login" id="login_content" style="margin: auto">
        <form action="login.php" method="post">
          <table style="margin-top:25px">
            <tr>
              <td align="center"><img style="width:50%;margin-bottom:30px" src="img/login_cover.png"></td>
            </tr>
            <tr>
              <td style="color:#007bff"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</td>
            </tr>
            <tr>
              <td><input class="form-control" type="type" name="user" autocomplete="off" autocapitalize="off" placeholder="Felhasználónév"></td>
            </tr>
            <tr>
              <td><input class="form-control" type="password" name="pass" autocomplete="off" autocapitalize="off" placeholder="Jelszó"></td>
            </tr>
            <tr>
              <td><a href="forgot_pass.php">Elfelejtett jelszó </a><!--<span> | </span><a href="singup.php"> Regisztráció</a>--></td>
            </tr>
            <tr>
              <td>
                <input class="btn btn-primary" style="margin-top:25px;width:100%;font-size:20px;" type="submit" name="add" value="Belépés">
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
