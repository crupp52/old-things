<?php
/* Smarty version 3.1.30, created on 2017-09-30 20:11:18
  from "/home/u462798691/public_html/myMoney/desktop/templates/index_mobile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59cffa66401106_16086858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b1e3ff93195169fe76cb23de79923bdec093bac' => 
    array (
      0 => '/home/u462798691/public_html/myMoney/desktop/templates/index_mobile.tpl',
      1 => 1506802160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cffa66401106_16086858 (Smarty_Internal_Template $_smarty_tpl) {
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
  	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
  </head>
  <body>
    <div id="container">

      <div class="center" id="content">
        <form class="bevitel" action="index.php" method="post" name="form" onsubmit="return checkInput()">
          <table style="margin-top:25px">
            <tr>
              <td>
                <div class="btn-group" data-toggle="buttons" style="width:100%;">
                  <label class="btn btn-outline-primary active" style="width:50%;">
                    <input type="radio" name="route" value="out" autocomplete="off" checked>Kiadás
                  </label>
                  <label class="btn btn-outline-primary" style="width:50%;">
                    <input type="radio" name="route" value="in" autocomplete="off">Bevétel
                  </label>
                </div>
              </td>
            </tr>
            <tr>
              <td style="width:380px">
                <select class="form-control" name="mode">
                  <option value="" disabled selected>Fizetés módja</option>
                  <option value="cash">Készpénz</option>
                  <option value="debit">Bankkártya</option>
                </select>
              </td>
            </tr>
            <tr>
              <td style="width:380px">
                <select class="form-control" name="category">
                  <option value="" disabled selected>Kategória</option>
                  <option value="Étel">Étel</option>
                  <option value="Utazás">Utazás</option>
                  <option value="Szolgáltatás">Szolgáltatás</option>
                  <option value="Szórakozás">Szórakozás</option>
                  <option value="Életszínvonal">Életszínvonal</option>
                  <option value="Bevétel">Bevétel</option>
                  <option value="Egyéb">Egyéb</option>
                </select>
              </td>
            </tr>
            <tr>
              <td style="width:380px"><input class="form-control" type="number" name="unit" autocomplete="off" placeholder="Összeg (Ft.)"></td>
            </tr>
            <tr>
              <td>
                <input class="btn btn-primary" style="margin-top:25px;width:380px;font-size:20px;" type="submit" name="add" value="Mehet">
              </td>
            </tr>
          </table>
        </form>
    		<table class="last_moves" style='width:100%;border: solid 1px black;'>
    			<?php echo $_smarty_tpl->tpl_vars['last_move']->value;?>

    			<tr>
    				<td colspan="5">
    					Sum: <?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
 <img src='img/money.png' style='width:25px;height:27px;margin-left:13px'>: <?php echo $_smarty_tpl->tpl_vars['kp']->value;?>
 	<img src='img/credit_card.png' style='width:25px;height:27px;margin-left:13px'>: <?php echo $_smarty_tpl->tpl_vars['credit']->value;?>

    				</td>
    			</tr>
    		</table>
    		<div id="weekly_button" style="margin-top:10px">
    			<label style="margin:0">Heti mozgások:</label></br>
    			<a href="translist.php?date=week"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Heti mozgás</button></a>
    			<a href="translist.php?date=week&category=out"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Heti kiadás</button></a>
    			<a href="translist.php?date=week&category=Étel"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Heti kaja</button></a>
    		</div>
    		<div id="monthly_button" style="margin-top:10px">
    			<label style="margin:0">Havi mozgások:</label></br>
    			<a href="translist.php?date=month"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Havi mozgás</button></a>
    			<a href="translist.php?date=month&category=out"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Havi kiadás</button></a>
    			<a href="translist.php?date=month&category=Étel"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Havi kaja</button></a>
    			<a href="translist.php?date=month&category=Utazás"><button type="button" class="btn btn-primary button" style="width:32%;margin-top:5px">Havi utazás</button></a>
    		</div>
    		<div style="margin-top:50px;margin-bottom:25px">
    			<a href="modify.php"><button class="btn btn-danger" style="margin-top:25px;width:380px;font-size:20px;">Módosítás</button></a><br>
          <a href="logout.php">Kijelentkezés</a>
    		</div>
          </div>
        </div>
  	<?php echo '<script'; ?>
 type="text/javascript">
  		function checkRoute(){
  			with(document.form){
  				if(route.checked == true){
  					category.value = "Bevétel";
  					category.disabled = true;
  				}
  			}
  			return false;
  		}
  		function checkInput(){
  			with(document.form){
  				if(unit.value=="" && isNaN(unit.value)){
  					return false;
  				}else if(mode.value==""){
  					return false;
  				}else if(category.value==""){
  					return false;
  				}else{
  					return true;
  				}
  			}
  		}
  	<?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
