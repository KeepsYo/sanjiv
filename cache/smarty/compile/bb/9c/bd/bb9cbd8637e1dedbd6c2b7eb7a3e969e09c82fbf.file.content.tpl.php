<?php /* Smarty version Smarty-3.1.19, created on 2017-05-08 09:49:18
         compiled from "C:\xampp\htdocs\prestashop\admin407dxkzrt\themes\default\template\controllers\shop\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:310525910775ea3e493-08236950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb9cbd8637e1dedbd6c2b7eb7a3e969e09c82fbf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin407dxkzrt\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1491816802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310525910775ea3e493-08236950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5910775eaaeb84_37521943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5910775eaaeb84_37521943')) {function content_5910775eaaeb84_37521943($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
