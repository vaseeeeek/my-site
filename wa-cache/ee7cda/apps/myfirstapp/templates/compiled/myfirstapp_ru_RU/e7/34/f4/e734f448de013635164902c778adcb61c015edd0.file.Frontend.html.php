<?php /* Smarty version Smarty-3.1.14, created on 2022-08-07 11:08:12
         compiled from "C:\OpenServer\OpenServer\domains\my-site.ru\wa-apps\myfirstapp\templates\actions\frontend\Frontend.html" */ ?>
<?php /*%%SmartyHeaderCode:172479441362ef72ec38b442-62654271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e734f448de013635164902c778adcb61c015edd0' => 
    array (
      0 => 'C:\\OpenServer\\OpenServer\\domains\\my-site.ru\\wa-apps\\myfirstapp\\templates\\actions\\frontend\\Frontend.html',
      1 => 1659858574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172479441362ef72ec38b442-62654271',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'records' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62ef72ec3b8745_63792704',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62ef72ec3b8745_63792704')) {function content_62ef72ec3b8745_63792704($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include 'C:\\OpenServer\\OpenServer\\domains\\my-site.ru\\wa-system/vendors/smarty-plugins\\modifier.wa_datetime.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Guestbook</title>
    <style>
        .post h3 { margin-bottom: 0; }
        .post span { color: gray; font-size: 0.9em; }
        .post p { margin-top: 0; }
    </style>
</head>
<body>
<h1>Guestbook</h1>
<form method="post" action="">
    Имя:<br />
    <input name="name" type="text"><br />
    Сообщение:<br />
    <textarea rows="4" cols="70" name="text"></textarea><br />
    <input type="submit" value="Post">
</form>
<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['records']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
    <div class="post">
        <h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
        <span><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['r']->value['datetime']);?>
</span>
        <p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['text'], ENT_QUOTES, 'UTF-8', true));?>
</p>
    </div>
<?php } ?>
</body>
</html><?php }} ?>