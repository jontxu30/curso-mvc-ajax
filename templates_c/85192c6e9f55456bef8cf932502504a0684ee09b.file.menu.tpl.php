<?php /* Smarty version Smarty-3.1.8, created on 2012-04-02 13:06:48
         compiled from ".\templates\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15654f7988488760b1-72752341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85192c6e9f55456bef8cf932502504a0684ee09b' => 
    array (
      0 => '.\\templates\\menu.tpl',
      1 => 1333358005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15654f7988488760b1-72752341',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f798848878249_11524045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f798848878249_11524045')) {function content_4f798848878249_11524045($_smarty_tpl) {?><div id="menu">
	<h2>Menú principal</h2>
    	<ol>
	    	<li><a href="index.php">Inicio</a></li>
	    	<li><a href="index.php?module=usuarios&action=login">Login</a></li>
	    	<li><a href="index.php?module=clientes">Clientes</a></li>
	    	<li><a href="index.php?module=usuarios">Usuarios</a></li>
	    	<li><a href="index.php?module=socios">Socios</a></li>
    	</ol>
</div><?php }} ?>