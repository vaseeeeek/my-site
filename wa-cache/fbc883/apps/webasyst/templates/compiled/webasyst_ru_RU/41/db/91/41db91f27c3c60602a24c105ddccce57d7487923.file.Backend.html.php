<?php /* Smarty version Smarty-3.1.14, created on 2022-08-16 22:06:24
         compiled from "C:\OpenServer\domains\my-site.ru\wa-system\webasyst\templates\layouts-legacy\Backend.html" */ ?>
<?php /*%%SmartyHeaderCode:82820755762fbeab00609c5-05796879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41db91f27c3c60602a24c105ddccce57d7487923' => 
    array (
      0 => 'C:\\OpenServer\\domains\\my-site.ru\\wa-system\\webasyst\\templates\\layouts-legacy\\Backend.html',
      1 => 1660668036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82820755762fbeab00609c5-05796879',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_url' => 0,
    'wa_app' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62fbeab0067bd5_38791778',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62fbeab0067bd5_38791778')) {function content_62fbeab0067bd5_38791778($_smarty_tpl) {?><!DOCTYPE html><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>

    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.core.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
</head>
<body<?php if ($_smarty_tpl->tpl_vars['wa_app']->value=='webasyst'&&$_smarty_tpl->tpl_vars['wa']->value->get('tv')===''){?> class="tv"<?php }?>>
    <div id="wa">
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>

        <div id="wa-app" class="block double-padded">
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        </div>
    </div>
</body>
</html><?php }} ?>