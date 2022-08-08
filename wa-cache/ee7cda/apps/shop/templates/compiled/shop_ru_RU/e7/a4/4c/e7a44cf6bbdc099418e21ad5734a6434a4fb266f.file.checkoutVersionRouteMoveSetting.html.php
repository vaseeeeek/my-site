<?php /* Smarty version Smarty-3.1.14, created on 2022-08-07 10:10:59
         compiled from "C:\OpenServer\OpenServer\domains\my-site.ru\wa-apps\shop\templates\includes\checkoutVersionRouteMoveSetting.html" */ ?>
<?php /*%%SmartyHeaderCode:33193078362ef65839e5ba6-89627830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7a44cf6bbdc099418e21ad5734a6434a4fb266f' => 
    array (
      0 => 'C:\\OpenServer\\OpenServer\\domains\\my-site.ru\\wa-apps\\shop\\templates\\includes\\checkoutVersionRouteMoveSetting.html',
      1 => 1543322160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33193078362ef65839e5ba6-89627830',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62ef6583a07e91_75633178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62ef6583a07e91_75633178')) {function content_62ef6583a07e91_75633178($_smarty_tpl) {?>


<style>
    .checkout-2-background { background-color: #9cff9e; }
</style>
<script>
    (function ($) {
        var $version_field = $('input[name="params[checkout_version]"]').parents('.field'),
            $theme_field = $('select[name="params[theme_mobile]"]').parents('.field');

        $version_field.insertAfter($theme_field);
    })(jQuery);
</script><?php }} ?>