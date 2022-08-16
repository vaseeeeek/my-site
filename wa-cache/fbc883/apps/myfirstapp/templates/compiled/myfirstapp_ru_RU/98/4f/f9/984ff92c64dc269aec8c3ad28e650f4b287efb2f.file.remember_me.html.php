<?php /* Smarty version Smarty-3.1.14, created on 2022-08-16 22:04:17
         compiled from "C:\OpenServer\domains\my-site.ru\wa-system\login\templates\login\backend\remember_me.html" */ ?>
<?php /*%%SmartyHeaderCode:14060540062fbea31b562d5-84605492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '984ff92c64dc269aec8c3ad28e650f4b287efb2f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\my-site.ru\\wa-system\\login\\templates\\login\\backend\\remember_me.html',
      1 => 1660668036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14060540062fbea31b562d5-84605492',
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
  'unifunc' => 'content_62fbea31b5a442_73020477',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62fbea31b5a442_73020477')) {function content_62fbea31b5a442_73020477($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['is_api_oauth']->value)){?>
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