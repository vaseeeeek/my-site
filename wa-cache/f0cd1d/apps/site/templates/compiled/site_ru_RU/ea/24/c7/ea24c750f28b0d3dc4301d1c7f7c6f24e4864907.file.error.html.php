<?php /* Smarty version Smarty-3.1.14, created on 2022-08-23 08:43:46
         compiled from "C:\OpenServer\domains\my-site.ru\wa-apps\site\themes\default\error.html" */ ?>
<?php /*%%SmartyHeaderCode:158749282963046912094278-75952771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea24c750f28b0d3dc4301d1c7f7c6f24e4864907' => 
    array (
      0 => 'C:\\OpenServer\\domains\\my-site.ru\\wa-apps\\site\\themes\\default\\error.html',
      1 => 1659948317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158749282963046912094278-75952771',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_code' => 0,
    'error_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_630469120c5153_73326149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_630469120c5153_73326149')) {function content_630469120c5153_73326149($_smarty_tpl) {?><h1>
	<?php if ($_smarty_tpl->tpl_vars['error_code']->value){?><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
. <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['error_message']->value){?><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<?php }else{ ?>Ошибка<?php }?>
</h1>
Запрашиваемый ресурс недоступен.
<?php }} ?>