<?php /* Smarty version Smarty-3.1.14, created on 2022-08-08 22:09:13
         compiled from "C:\OpenServer\OpenServer\domains\my-site.ru\wa-apps\installer\lib\handlers\templates\webasyst.backend_header.notification.announcement.html" */ ?>
<?php /*%%SmartyHeaderCode:90579824962f15f597903c8-74929123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '113cabcfde5a0a604bb871f3dc3e818fd2590f6e' => 
    array (
      0 => 'C:\\OpenServer\\OpenServer\\domains\\my-site.ru\\wa-apps\\installer\\lib\\handlers\\templates\\webasyst.backend_header.notification.announcement.html',
      1 => 1648029633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90579824962f15f597903c8-74929123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'announcements' => 0,
    '_key' => 0,
    '_a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62f15f59797221_12539546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62f15f59797221_12539546')) {function content_62f15f59797221_12539546($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['announcements']->value){?>
    <div class="js-wa-announcement-wrap">
        <?php  $_smarty_tpl->tpl_vars['_a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_a']->_loop = false;
 $_smarty_tpl->tpl_vars['_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['announcements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_a']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_a']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_a']->key => $_smarty_tpl->tpl_vars['_a']->value){
$_smarty_tpl->tpl_vars['_a']->_loop = true;
 $_smarty_tpl->tpl_vars['_key']->value = $_smarty_tpl->tpl_vars['_a']->key;
 $_smarty_tpl->tpl_vars['_a']->iteration++;
 $_smarty_tpl->tpl_vars['_a']->last = $_smarty_tpl->tpl_vars['_a']->iteration === $_smarty_tpl->tpl_vars['_a']->total;
?>
            <div class="js-wa-announcement" data-key="<?php echo $_smarty_tpl->tpl_vars['_key']->value;?>
">
                <?php echo $_smarty_tpl->tpl_vars['_a']->value['html'];?>

                <a data-app-id="installer" href="javascript:void(0);" class="custom-mt-8 hint js-announcement-close flexbox" title="Закрыть">Пометить как прочитанное</a>
                <?php if (!$_smarty_tpl->tpl_vars['_a']->last){?>
                    <hr class="custom-my-16">
                <?php }?>
            </div>
        <?php } ?>
    </div>
<?php }?>
<?php }} ?>