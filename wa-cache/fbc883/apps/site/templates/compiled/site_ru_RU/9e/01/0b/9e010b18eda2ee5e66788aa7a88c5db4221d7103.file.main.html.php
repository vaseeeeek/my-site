<?php /* Smarty version Smarty-3.1.14, created on 2022-08-16 19:46:29
         compiled from "C:\OpenServer\domains\my-site.ru\wa-apps\site\themes\default\main.html" */ ?>
<?php /*%%SmartyHeaderCode:153924319862fbc9e5795b89-87380362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e010b18eda2ee5e66788aa7a88c5db4221d7103' => 
    array (
      0 => 'C:\\OpenServer\\domains\\my-site.ru\\wa-apps\\site\\themes\\default\\main.html',
      1 => 1660668035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153924319862fbc9e5795b89-87380362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_app_url' => 0,
    'page' => 0,
    'wa_backend_url' => 0,
    'content' => 0,
    'action' => 0,
    'theme_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62fbc9e57a2494_45807674',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62fbc9e57a2494_45807674')) {function content_62fbc9e57a2494_45807674($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['wa']->value->currentUrl()==$_smarty_tpl->tpl_vars['wa_app_url']->value&&(empty($_smarty_tpl->tpl_vars['page']->value['id'])&&empty($_smarty_tpl->tpl_vars['page']->value['content']))){?>

    <div class="welcome">
        <h1>Добро пожаловать на ваш новый сайт!</h1>
        <p><?php echo sprintf('Перейдите в раздел «<a href="%s">Страницы</a>» и создайте страницу с пустым адресом. Здесь вы увидите её текст.',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('site/#/pages/'));?>
</p>
    </div>

<?php }else{ ?>

    <article class="content with-sidebar" itemscope itemtype="http://schema.org/WebPage">
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
 
    </article>

    <?php if (isset($_smarty_tpl->tpl_vars['page']->value)&&(empty($_smarty_tpl->tpl_vars['action']->value)||$_smarty_tpl->tpl_vars['action']->value=='page')){?>
        <div class="content">

            <!-- FOLLOW -->
            <aside class="connect inline">
                <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['facebook_likebox_code'])){?>
                    <div class="likebox">
                        <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['facebook_likebox_code'];?>

                    </div>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['twitter_timeline_code'])){?>
                    <div class="likebox">
                        <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['twitter_timeline_code'];?>

                    </div>
                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['vk_widget_code'])){?>
                    <div class="likebox">
                        <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['vk_widget_code'];?>

                    </div>
                <?php }?>
                
            </aside>

        </div>
    <?php }?>

<?php }?><?php }} ?>