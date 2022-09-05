<?php /* Smarty version Smarty-3.1.14, created on 2022-09-05 10:26:27
         compiled from "C:\OpenServer\domains\my-site.ru\wa-apps\site\templates\actions-legacy\backend\BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:9766366606315a4a3405a19-23866193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48e3f83bd8965af8f66598ef8b1aa2a989c14bd3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\my-site.ru\\wa-apps\\site\\templates\\actions-legacy\\backend\\BackendLoc.html',
      1 => 1659948317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9766366606315a4a3405a19-23866193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6315a4a3423981_07242553',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6315a4a3423981_07242553')) {function content_6315a4a3423981_07242553($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>