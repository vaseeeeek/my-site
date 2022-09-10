<?php /* Smarty version Smarty-3.1.14, created on 2022-08-08 22:11:42
         compiled from "C:\OpenServer\OpenServer\domains\my-site.ru\wa-apps\shop\templates\actions\backend\BackendStorefronts.html" */ ?>
<?php /*%%SmartyHeaderCode:200345445562f15feea4e679-05295912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a9d3c8c1cdfa6e1990cf41a1f8f0b153b2f4c15' => 
    array (
      0 => 'C:\\OpenServer\\OpenServer\\domains\\my-site.ru\\wa-apps\\shop\\templates\\actions\\backend\\BackendStorefronts.html',
      1 => 1543322160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200345445562f15feea4e679-05295912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_app_static_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62f15feea77487_65984797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62f15feea77487_65984797')) {function content_62f15feea77487_65984797($_smarty_tpl) {?><div class="sidebar right15px">
    <div class="block s-nolevel2-sidebar"></div>
</div>
<div class="sidebar left15px">
    <div class="block s-nolevel2-sidebar"></div>
</div>

<div class="content right15px left15px s-nolevel2-box" id="s-storefronts-content" <?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('design')){?>data-design="1"<?php }?> <?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('pages')){?>data-pages="1"<?php }?>>
    <div class="block double-padded s-settings-form">
        Загрузка...
        <i class="icon16 loading"></i>
    </div>

    <div class="clear"></div>
    <!-- settings placeholder -->
</div>

<div class="clear"></div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/storefronts.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript">
    $.storefronts.init();
</script><?php }} ?>