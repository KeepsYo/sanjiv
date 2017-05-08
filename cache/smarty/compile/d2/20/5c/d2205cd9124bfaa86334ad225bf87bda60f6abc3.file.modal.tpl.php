<?php /* Smarty version Smarty-3.1.19, created on 2017-05-08 09:47:56
         compiled from "C:\xampp\htdocs\prestashop\admin407dxkzrt\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134665910770c9d6443-23995511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2205cd9124bfaa86334ad225bf87bda60f6abc3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin407dxkzrt\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1491816802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134665910770c9d6443-23995511',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5910770c9e2878_00164406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5910770c9e2878_00164406')) {function content_5910770c9e2878_00164406($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
