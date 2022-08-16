<?php /* Smarty version Smarty-3.1.14, created on 2022-08-16 19:45:27
         compiled from "C:\OpenServer\domains\my-site\wa-system\webasyst\templates\actions\login\Login.html" */ ?>
<?php /*%%SmartyHeaderCode:123427259962fbc9a74470f8-05225742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89f7ae288ad6f8904d88b3425c3caf6de8d57551' => 
    array (
      0 => 'C:\\OpenServer\\domains\\my-site\\wa-system\\webasyst\\templates\\actions\\login\\Login.html',
      1 => 1660668036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123427259962fbc9a74470f8-05225742',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class_id' => 0,
    'wrapper_id' => 0,
    'title' => 0,
    'renderer' => 0,
    'data' => 0,
    'errors' => 0,
    'messages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62fbc9a7480978_84162118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62fbc9a7480978_84162118')) {function content_62fbc9a7480978_84162118($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['class_id'] = new Smarty_variable('wa-backend-login-form', null, 0);?>
<?php $_smarty_tpl->tpl_vars['wrapper_id'] = new Smarty_variable(uniqid($_smarty_tpl->tpl_vars['class_id']->value), null, 0);?>
<div class="<?php echo $_smarty_tpl->tpl_vars['class_id']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['wrapper_id']->value;?>
">
    <?php echo $_smarty_tpl->tpl_vars['renderer']->value->setTitle($_smarty_tpl->tpl_vars['title']->value);?>

    <?php echo $_smarty_tpl->tpl_vars['renderer']->value->render($_smarty_tpl->tpl_vars['data']->value,$_smarty_tpl->tpl_vars['errors']->value,$_smarty_tpl->tpl_vars['messages']->value);?>

</div>
<?php }} ?>