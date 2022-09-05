<?php /* Smarty version Smarty-3.1.14, created on 2022-09-04 11:33:19
         compiled from "C:\OpenServer\domains\my-site.ru\wa-apps\shop\templates\actions\backend\BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:1693705982631462cf5d50a9-85035633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db718d6c7c1a4772f9521a190321c58b869a9d05' => 
    array (
      0 => 'C:\\OpenServer\\domains\\my-site.ru\\wa-apps\\shop\\templates\\actions\\backend\\BackendLoc.html',
      1 => 1660668034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1693705982631462cf5d50a9-85035633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_631462cf60a985_78359955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_631462cf60a985_78359955')) {function content_631462cf60a985_78359955($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>