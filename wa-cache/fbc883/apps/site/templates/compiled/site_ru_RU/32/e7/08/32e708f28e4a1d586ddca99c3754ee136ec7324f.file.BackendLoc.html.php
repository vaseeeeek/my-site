<?php /* Smarty version Smarty-3.1.14, created on 2022-08-16 19:45:44
         compiled from "C:\OpenServer\domains\my-site\wa-apps\site\templates\actions-legacy\backend\BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:194214200362fbc9b87b8847-26626260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32e708f28e4a1d586ddca99c3754ee136ec7324f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\my-site\\wa-apps\\site\\templates\\actions-legacy\\backend\\BackendLoc.html',
      1 => 1660668035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194214200362fbc9b87b8847-26626260',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62fbc9b87e26a7_86672418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62fbc9b87e26a7_86672418')) {function content_62fbc9b87e26a7_86672418($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>