<?php /* Smarty version Smarty-3.1.14, created on 2022-08-23 08:43:46
         compiled from "C:\OpenServer\domains\my-site.ru\wa-apps\site\themes\default\header.html" */ ?>
<?php /*%%SmartyHeaderCode:247366117630469125abb33-26599500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '423408c08a67cd56ebecc6aa986b6cd8418e792f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\my-site.ru\\wa-apps\\site\\themes\\default\\header.html',
      1 => 1659948317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '247366117630469125abb33-26599500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'pages' => 0,
    'p' => 0,
    'selected_node' => 0,
    'wa_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_630469125b7126_44209260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_630469125b7126_44209260')) {function content_630469125b7126_44209260($_smarty_tpl) {?><!-- Site app page list -->
<?php $_smarty_tpl->tpl_vars['pages'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->site->pages(), null, 0);?>

<?php if (count($_smarty_tpl->tpl_vars['pages']->value)){?>
    <ul class="pages">

        
        <?php $_smarty_tpl->tpl_vars['selected_node'] = new Smarty_variable(null, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
            <?php if (strstr($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),$_smarty_tpl->tpl_vars['p']->value['url'])&&strlen($_smarty_tpl->tpl_vars['p']->value['url'])>=strlen(ifset($_smarty_tpl->tpl_vars['selected_node']->value,'url',''))){?><?php $_smarty_tpl->tpl_vars['selected_node'] = new Smarty_variable($_smarty_tpl->tpl_vars['p']->value, null, 0);?><?php }?>
        <?php } ?>
        <?php if (!$_smarty_tpl->tpl_vars['selected_node']->value){?><?php $_smarty_tpl->createLocalArrayVariable('selected_node', null, 0);
$_smarty_tpl->tpl_vars['selected_node']->value['id'] = null;?><?php }?>

        
        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['p']->value['url']!=$_smarty_tpl->tpl_vars['wa_url']->value){?> 
                <li<?php if ($_smarty_tpl->tpl_vars['p']->value['id']==$_smarty_tpl->tpl_vars['selected_node']->value['id']){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</a></li>
            <?php }?>
        <?php } ?>

    </ul>
<?php }?><?php }} ?>