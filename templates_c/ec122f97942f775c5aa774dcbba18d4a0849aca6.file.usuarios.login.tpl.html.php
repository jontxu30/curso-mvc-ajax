<?php /* Smarty version Smarty-3.1.8, created on 2012-04-02 12:50:14
         compiled from ".\templates\usuarios.login.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:26594f79846692cda8-69878036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec122f97942f775c5aa774dcbba18d4a0849aca6' => 
    array (
      0 => '.\\templates\\usuarios.login.tpl.html',
      1 => 1333357952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26594f79846692cda8-69878036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f798466938032_15101467',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f798466938032_15101467')) {function content_4f798466938032_15101467($_smarty_tpl) {?><form id="login" name="login" 
		action="index.php?module=usuarios&action=login" method="post">
	<label for="data[username]">Nombre de usuario</label>
	<input type="text" id="username" tabindex="1" 
	name="data[username]" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['username'];?>
"/><br />
	<label for="data[password]">password</label>
	<input type="password" id="password" tabindex="2" 
	name="data[password]" value=""/><br />
	<input 
	type="submit" name="data[submit]" 
	id="submit" value="Enviar"/><br />
</form>
<br/>
<a href="index.php?module=usuarios&action=listado">Volver</a><?php }} ?>