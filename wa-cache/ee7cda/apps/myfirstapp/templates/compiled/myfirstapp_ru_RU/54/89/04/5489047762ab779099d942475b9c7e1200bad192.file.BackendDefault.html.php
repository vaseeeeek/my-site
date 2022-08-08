<?php /* Smarty version Smarty-3.1.14, created on 2022-08-07 11:00:41
         compiled from "C:\OpenServer\OpenServer\domains\my-site.ru\wa-apps\myfirstapp\templates\actions\backend\BackendDefault.html" */ ?>
<?php /*%%SmartyHeaderCode:97429510062ee80365bfd71-44272446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5489047762ab779099d942475b9c7e1200bad192' => 
    array (
      0 => 'C:\\OpenServer\\OpenServer\\domains\\my-site.ru\\wa-apps\\myfirstapp\\templates\\actions\\backend\\BackendDefault.html',
      1 => 1659859234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97429510062ee80365bfd71-44272446',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62ee80365ee079_96044427',
  'variables' => 
  array (
    'wa' => 0,
    'wa_url' => 0,
    'records' => 0,
    'rights_delete' => 0,
    'r' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62ee80365ee079_96044427')) {function content_62ee80365ee079_96044427($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include 'C:\\OpenServer\\OpenServer\\domains\\my-site.ru\\wa-system/vendors/smarty-plugins\\modifier.wa_datetime.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['wa']->value->appName();?>
 - <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>

    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.4.2.min.js"
            type="text/javascript"></script>
</head>
<body>
<div id="wa">
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>

    <div id="wa-app">
        <div class="block">
            <ul class="zebra">
                <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['records']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                    <li>
                        <?php if ($_smarty_tpl->tpl_vars['rights_delete']->value){?><a class="count" href="?action=delete&id=<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
">
                                <i class="icon16 remove-red"></i></a><?php }?>
                        <span class="hint">
              <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
              <?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['r']->value['datetime']);?>

            </span>
                        <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['text'], ENT_QUOTES, 'UTF-8', true));?>

                    </li>
                <?php } ?>
            </ul>
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" target="_blank">Guestbook on site</a>
            <i class="icon10 new-window"></i>
        </div>
    </div>
</div>
</body>
</html><?php }} ?>