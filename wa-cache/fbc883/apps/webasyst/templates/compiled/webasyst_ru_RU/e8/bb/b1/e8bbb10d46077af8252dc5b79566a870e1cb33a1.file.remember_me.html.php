<?php /* Smarty version Smarty-3.1.14, created on 2022-08-16 19:45:27
         compiled from "C:\OpenServer\domains\my-site\wa-system\login\templates\login\backend\remember_me.html" */ ?>
<?php /*%%SmartyHeaderCode:54257223562fbc9a7536fd2-08301015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8bbb10d46077af8252dc5b79566a870e1cb33a1' => 
    array (
      0 => 'C:\\OpenServer\\domains\\my-site\\wa-system\\login\\templates\\login\\backend\\remember_me.html',
      1 => 1660668036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54257223562fbc9a7536fd2-08301015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_api_oauth' => 0,
    'is_onetime_password_auth_type' => 0,
    'input_name' => 0,
    'checked' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62fbc9a753b338_54024842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62fbc9a753b338_54024842')) {function content_62fbc9a753b338_54024842($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['is_api_oauth']->value)){?>
<div class="field field-remember-me"<?php if ($_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value){?> style="display:none;"<?php }?>>
    <div class="value">
        <label>
            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="0">
            <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['checked']->value){?>checked="checked"<?php }?>> Запомнить меня
        </label>
    </div>
</div>
<?php }?>
<?php }} ?>