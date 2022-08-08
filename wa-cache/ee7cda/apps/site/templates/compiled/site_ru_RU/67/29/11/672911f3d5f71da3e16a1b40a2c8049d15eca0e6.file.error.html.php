<?php /* Smarty version Smarty-3.1.14, created on 2022-08-06 17:43:09
         compiled from "C:\OpenServer\OpenServer\domains\my-site.ru\wa-apps\site\themes\default\error.html" */ ?>
<?php /*%%SmartyHeaderCode:35025994462ee7dfd9f3421-75583793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '672911f3d5f71da3e16a1b40a2c8049d15eca0e6' => 
    array (
      0 => 'C:\\OpenServer\\OpenServer\\domains\\my-site.ru\\wa-apps\\site\\themes\\default\\error.html',
      1 => 1540900260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35025994462ee7dfd9f3421-75583793',
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
  'unifunc' => 'content_62ee7dfda1fd40_75445787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62ee7dfda1fd40_75445787')) {function content_62ee7dfda1fd40_75445787($_smarty_tpl) {?><h1>
	<?php if ($_smarty_tpl->tpl_vars['error_code']->value){?><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
. <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['error_message']->value){?><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<?php }else{ ?>Ошибка<?php }?>
</h1>
Запрашиваемый ресурс недоступен.
<?php }} ?>