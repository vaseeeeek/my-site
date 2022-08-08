<?php /* Smarty version Smarty-3.1.14, created on 2022-08-07 10:10:49
         compiled from "C:\OpenServer\OpenServer\domains\my-site.ru\wa-apps\site\templates\actions-legacy\backend\BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:38713265662ef65793dcf78-78557360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37a3b2b9eaf2998db7e8c6e6aa45f87e7ab95493' => 
    array (
      0 => 'C:\\OpenServer\\OpenServer\\domains\\my-site.ru\\wa-apps\\site\\templates\\actions-legacy\\backend\\BackendLoc.html',
      1 => 1624000810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38713265662ef65793dcf78-78557360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62ef65794006c6_54434604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62ef65794006c6_54434604')) {function content_62ef65794006c6_54434604($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>