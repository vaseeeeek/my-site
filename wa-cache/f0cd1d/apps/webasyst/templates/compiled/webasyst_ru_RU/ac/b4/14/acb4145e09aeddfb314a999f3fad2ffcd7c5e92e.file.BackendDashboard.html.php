<?php /* Smarty version Smarty-3.1.14, created on 2022-09-05 10:26:23
         compiled from "C:\OpenServer\domains\my-site.ru\wa-system\webasyst\templates\actions-legacy\backend\BackendDashboard.html" */ ?>
<?php /*%%SmartyHeaderCode:20627337786315a49f34d5d0-99852001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acb4145e09aeddfb314a999f3fad2ffcd7c5e92e' => 
    array (
      0 => 'C:\\OpenServer\\domains\\my-site.ru\\wa-system\\webasyst\\templates\\actions-legacy\\backend\\BackendDashboard.html',
      1 => 1659948318,
      2 => 'file',
    ),
    'bd9c878f3aaf1e2ed4aabf5117f2749c1ed9d7b0' => 
    array (
      0 => 'C:\\OpenServer\\domains\\my-site.ru\\wa-system\\webasyst\\templates\\actions-legacy\\dashboard\\DashboardAnnouncement.html',
      1 => 1659948318,
      2 => 'file',
    ),
    '4a0391878348843d4d3f013bca6bdc0d8563a490' => 
    array (
      0 => 'C:\\OpenServer\\domains\\my-site.ru\\wa-system\\webasyst\\templates\\actions-legacy\\dashboard\\DashboardActivity.html',
      1 => 1659948318,
      2 => 'file',
    ),
    '66283152a3d06b2cca814735a067dee01fc85eff' => 
    array (
      0 => 'C:\\OpenServer\\domains\\my-site.ru\\wa-system\\webasyst\\templates\\actions-legacy\\dashboard\\DashboardWidget.html',
      1 => 1659948318,
      2 => 'file',
    ),
    '6c2acc13117c153a94884857aac739d4323fab22' => 
    array (
      0 => 'C:\\OpenServer\\domains\\my-site.ru\\wa-system\\webasyst\\templates\\actions-legacy\\dashboard\\DashboardWidgets.html',
      1 => 1659948318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20627337786315a49f34d5d0-99852001',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_url' => 0,
    'wa' => 0,
    'notifications' => 0,
    'show_tutorial' => 0,
    'apps' => 0,
    'app_id' => 0,
    'user_filters' => 0,
    'check_count' => 0,
    'checked' => 0,
    'app' => 0,
    'is_not_full' => 0,
    'select_options' => 0,
    'activity' => 0,
    'wa_backend_url' => 0,
    'is_admin' => 0,
    'public_dashboards' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6315a49f3cc874_57042398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6315a49f3cc874_57042398')) {function content_6315a49f3cc874_57042398($_smarty_tpl) {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/css/dashboard/legacy/dashboard.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
">
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.dialog.js"></script>

<div class="d-page-wrapper" id="d-page-wrapper">

    <div class="d-content-wrapper">
        <section class="d-activity-wrapper" id="d-activity-wrapper">
            
            <?php if (!empty($_smarty_tpl->tpl_vars['notifications']->value)){?>
                <?php /*  Call merged included template "../dashboard/DashboardAnnouncement.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../dashboard/DashboardAnnouncement.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '20627337786315a49f34d5d0-99852001');
content_6315a49f375e63_66025924($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../dashboard/DashboardAnnouncement.html" */?>
            <?php }?>

            
            <div class="d-activity-block <?php if (empty($_smarty_tpl->tpl_vars['show_tutorial']->value)){?>is-shown<?php }?>" id="widget-activity">
                <header class="activity-header-wrapper block">
                    <h4 class="activity-header heading">Лента событий<i class="icon16 loading" style="display: none;"></i></h4>
                    <div class="activity-filter-wrapper">
                        <ul class="menu-h dropdown">
                            <li>
                                <?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable('', null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['is_not_full'] = new Smarty_variable(false, null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['check_count'] = new Smarty_variable(0, null, 0);?>
                                <?php $_smarty_tpl->_capture_stack[0][] = array('default', "select_options", null); ob_start(); ?>
                                    <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_smarty_tpl->tpl_vars['app_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
 $_smarty_tpl->tpl_vars['app_id']->value = $_smarty_tpl->tpl_vars['app']->key;
?>
                                        <?php if (in_array($_smarty_tpl->tpl_vars['app_id']->value,$_smarty_tpl->tpl_vars['user_filters']->value)||!$_smarty_tpl->tpl_vars['user_filters']->value){?>
                                            <?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable("checked", null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['check_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['check_count']->value+1, null, 0);?>
                                        <?php }else{ ?>
                                            <?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable('', null, 0);?>
                                            <?php $_smarty_tpl->tpl_vars['is_not_full'] = new Smarty_variable(true, null, 0);?>
                                        <?php }?>
                                        <li>
                                            <label><input <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 type="checkbox" name="app_id[]" value="<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
</label>
                                        </li>
                                    <?php } ?>
                                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                <a href="javascript:void(0);" class="inline-link"><b><i id="activity-select-text" data-full-text="Все приложения" data-not-full-text="Приложения"><?php if ($_smarty_tpl->tpl_vars['is_not_full']->value){?>Приложения (<?php echo $_smarty_tpl->tpl_vars['check_count']->value;?>
)<?php }else{ ?>Все приложения<?php }?></i></b><i class="icon10 darr-tiny"></i></a>
                                <form action="" id="activity-filter">
                                    <ul class="menu-v">
                                        <?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['select_options']->value);?>

                                    </ul>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="cl"></div>
                </header>
                <section class="activity-list-wrapper">
                    <div class="activity-list-block" data-empty-text="Лента событий пока пуста.">
                        <?php if (!empty($_smarty_tpl->tpl_vars['activity']->value)){?>
                            <?php /*  Call merged included template "../dashboard/DashboardActivity.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../dashboard/DashboardActivity.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('datetime_group'=>''), 0, '20627337786315a49f34d5d0-99852001');
content_6315a49f390122_91990879($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../dashboard/DashboardActivity.html" */?>
                        <?php }else{ ?>
                            <div class="empty-activity-text">
                                <h2>Лента событий пока пуста.</h2>
                                <p>Лента отображает события из всех приложений, установленных в вашем Webasyst.</p>
                            </div>
                        <?php }?>
                    </div>
                </section>
            </div>

            
            <div class="d-first-notice-wrapper" id="d-first-notice-wrapper" data-show-notice="<?php if (!empty($_smarty_tpl->tpl_vars['show_tutorial']->value)){?>true<?php }else{ ?>false<?php }?>">
                <div class="d-first-notice-block">
                    <div class="notice-ornament"></div>
                    <div class="notice-content">
                        <h3>Добро пожаловать на ваш дашборд Webasyst!</h3>
                        <p>Настройте свой дашборд с помощью ссылки выше. Располагайте виджеты так, как удобно именно вам. Набор виджетов на дашборде у каждого пользователя Webasyst индивидуален.</p>
                    </div>
                    <div class="notice-buttons">
                        <input class="close-notice-link" type="button" value="Понятно, спасибо">
                    </div>
                </div>
            </div>

            
            <div class="d-widgets-list-wrapper" id="widgets-list-wrapper" data-backend-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa_backend_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">

                
                <div class="rotated-image-wrapper">
                    <img class="rotated-image" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/img/loading32.gif" title="Загрузка">
                </div>
            </div>
        </section>

        
        <?php /*  Call merged included template "../dashboard/DashboardWidgets.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../dashboard/DashboardWidgets.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '20627337786315a49f34d5d0-99852001');
content_6315a49f3a5c24_36112718($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../dashboard/DashboardWidgets.html" */?>

    </div>

    <div class="d-settings-wrapper" id="d-settings-wrapper">
        <div class="d-settings-container" id="d-settings-container">

            <div class="d-settings-inner-container">
                <div class="d-settings-block" id="d-settings-block"></div>
            </div>

        </div>
    </div>

    <?php if (!empty($_smarty_tpl->tpl_vars['is_admin']->value)){?>

        
        <select class="d-dashboards-select" id="d-dashboards-select" name="">
            <option value="default_dashboard" selected>Мой дашборд</option>
            <optgroup label="Webasyst TV">
                <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['public_dashboards']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                <?php } ?>
                <option value="new_dashboard">Новый дашборд Webasyst TV...</option>
            </optgroup>
        </select>

        
        <div class="dialog width400px height200px" id="dashboard-editor-dialog">
            <div class="dialog-background"></div>
            <form action="?module=dashboard&action=dashboardSave">
                <div class="dialog-window">
                    <div class="dialog-content">
                        <div class="dialog-content-indent">
                            <h1>Новый дашборд</h1>
                            <div class="fields form width100px">
                                <div class="field">
                                    <div class="name">Название</div>
                                    <div class="value"><input type="text" name="dashboard[name]" value=""></div>
                                </div>
                            </div>
                            <p class="hint">Дашборд Webasyst TV можно просматривать в любом современном браузере и транслировать на телевизоры 4K или Full HD.</p>
                        </div>
                    </div>
                    <div class="dialog-buttons">
                        <div class="dialog-buttons-gradient">
                            <input type="submit" value="Сохранить" class="button green">
                            или <a class="cancel" href="#">отмена</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    <?php }?>
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-09-05 10:26:23
         compiled from "C:\OpenServer\domains\my-site.ru\wa-system\webasyst\templates\actions-legacy\dashboard\DashboardAnnouncement.html" */ ?>
<?php if ($_valid && !is_callable('content_6315a49f375e63_66025924')) {function content_6315a49f375e63_66025924($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['wa']->value->whichUI()=='1.3'){?>
<div class="d-notification-wrapper <?php if (empty($_smarty_tpl->tpl_vars['show_tutorial']->value)){?>is-shown<?php }?>" id="d-notification-wrapper">
    <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
    <div class="d-notification-block">

        <a href="#" rel="<?php echo $_smarty_tpl->tpl_vars['n']->value['app_id'];?>
" class="wa-announcement-close d-notification-close" title="Закрыть">&times;</a>
        
        <div class="description-wrapper">
            <?php echo $_smarty_tpl->tpl_vars['n']->value['text'];?>

            <span class="hint nowrap"><?php echo waDateTime::format('humandatetime',$_smarty_tpl->tpl_vars['n']->value['datetime']);?>
</span>
        </div>

        

    </div>
    <?php } ?>
</div>
<?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-09-05 10:26:23
         compiled from "C:\OpenServer\domains\my-site.ru\wa-system\webasyst\templates\actions-legacy\dashboard\DashboardActivity.html" */ ?>
<?php if ($_valid && !is_callable('content_6315a49f390122_91990879')) {function content_6315a49f390122_91990879($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_group'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['datetime_group']->value,''), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['activity_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['activity_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activity']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['activity_item']->key => $_smarty_tpl->tpl_vars['activity_item']->value){
$_smarty_tpl->tpl_vars['activity_item']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars['app_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['activity_item']->value['app']['name'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars['app_color'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['activity_item']->value['app']['sash_color'],"#aaa"), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['activity_item']->value['datetime_group']!=$_smarty_tpl->tpl_vars['_group']->value){?>
        <div class="activity-divider heading"><?php echo $_smarty_tpl->tpl_vars['activity_item']->value['datetime_group'];?>
</div>
    <?php }?>
    <?php $_smarty_tpl->tpl_vars['_group'] = new Smarty_variable($_smarty_tpl->tpl_vars['activity_item']->value['datetime_group'], null, 0);?>

    <div class="activity-item" data-id="<?php echo $_smarty_tpl->tpl_vars['activity_item']->value['id'];?>
">
        <?php if (!empty($_smarty_tpl->tpl_vars['activity_item']->value['contact_photo'])&&$_smarty_tpl->tpl_vars['activity_item']->value['is_user']){?>
            <header class="item-image-wrapper">
                <img class="image-item userpic" src="<?php echo waContact::getPhotoUrl($_smarty_tpl->tpl_vars['activity_item']->value['contact_id'],$_smarty_tpl->tpl_vars['activity_item']->value['contact_photo'],32,32);?>
" alt="">
            </header>
        <?php }?>
        <div class="item-content-wrapper">
            <div class="inline-content">
                <span class="activity-app" style="background: <?php echo $_smarty_tpl->tpl_vars['app_color']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
</span>
                <span class="activity-username">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
contacts/#/contact/<?php echo $_smarty_tpl->tpl_vars['activity_item']->value['contact_id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activity_item']->value['contact_name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                </span>
                <span class="activity-action gray"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['activity_item']->value['action_name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                <?php if (!empty($_smarty_tpl->tpl_vars['activity_item']->value['params_html'])){?>
                    <?php echo $_smarty_tpl->tpl_vars['activity_item']->value['params_html'];?>

                <?php }?>
            </div>
            <div class="activity-datetime hint"><?php echo waDateTime::format('humandatetime',$_smarty_tpl->tpl_vars['activity_item']->value['datetime']);?>
</div>
        </div>
    </div>
<?php } ?>

<?php if (!empty($_smarty_tpl->tpl_vars['activity_load_more']->value)){?>
    <div class="activity-divider show-more-activity-wrapper is-loading">
        <a class="d-load-more-activity inline-link" id="d-load-more-activity" href="javascript:void(0);"><b><i>Показать еще</i></b></a>
        <img class="d-load-more-animation" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/img/loading32.gif" title="Loading">
    </div>
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-09-05 10:26:23
         compiled from "C:\OpenServer\domains\my-site.ru\wa-system\webasyst\templates\actions-legacy\dashboard\DashboardWidgets.html" */ ?>
<?php if ($_valid && !is_callable('content_6315a49f3a5c24_36112718')) {function content_6315a49f3a5c24_36112718($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_join')) include 'C:\\OpenServer\\domains\\my-site.ru\\wa-system/vendors/smarty-plugins\\modifier.join.php';
?><?php $_smarty_tpl->tpl_vars['_capture_array'] = new Smarty_variable(array(), null, 0);?>
<section class="d-widgets-wrapper" id="d-widgets-wrapper"><div class="d-widgets-block"><div id="d-widgets-block"><?php  $_smarty_tpl->tpl_vars['block_widgets'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block_widgets']->_loop = false;
 $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['block_widgets']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['block_widgets']->key => $_smarty_tpl->tpl_vars['block_widgets']->value){
$_smarty_tpl->tpl_vars['block_widgets']->_loop = true;
 $_smarty_tpl->tpl_vars['block']->value = $_smarty_tpl->tpl_vars['block_widgets']->key;
 $_smarty_tpl->tpl_vars['block_widgets']->index++;
?><div class="widget-group-wrapper"><?php  $_smarty_tpl->tpl_vars['w'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['w']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block_widgets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['w']->key => $_smarty_tpl->tpl_vars['w']->value){
$_smarty_tpl->tpl_vars['w']->_loop = true;
?><?php /*  Call merged included template "./DashboardWidget.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./DashboardWidget.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '20627337786315a49f34d5d0-99852001');
content_6315a49f3ac209_03235085($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./DashboardWidget.html" */?><?php $_smarty_tpl->_capture_stack[0][] = array('default', null, "_capture_array"); ob_start(); ?><script>DashboardWidgets["<?php echo $_smarty_tpl->tpl_vars['w']->value['id'];?>
"] = new DashboardWidget({widget_id: "<?php echo $_smarty_tpl->tpl_vars['w']->value['id'];?>
",widget_href: <?php echo json_encode($_smarty_tpl->tpl_vars['w']->value['href']);?>
,widget_sort: "<?php echo $_smarty_tpl->tpl_vars['w']->value['sort'];?>
",widget_group_index: "<?php echo $_smarty_tpl->tpl_vars['block_widgets']->index;?>
",widget_size: {width: "<?php echo $_smarty_tpl->tpl_vars['w']->value['size'][0];?>
",height: "<?php echo $_smarty_tpl->tpl_vars['w']->value['size'][1];?>
"}});</script><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php } ?></div><?php } ?><div class="widget-group-wrapper"></div></div><div class="empty-widgets-wrapper <?php if (empty($_smarty_tpl->tpl_vars['widgets']->value)){?>is-shown<?php }?>" id="empty-widgets-wrapper">Дашборд пока пустой. Добавьте виджеты на дашборд, щелкнув по ссылке «Настроить виджеты» в левом верхнем углу.</div><div class="loading-ornament-wrapper"><div class="image-wrapper"></div></div></div><script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/dashboard-legacy.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script><script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/d3/d3.min.js"></script><?php echo preg_replace('!\s+!u', ' ',smarty_modifier_join($_smarty_tpl->tpl_vars['_capture_array']->value,''));?>
</section>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-09-05 10:26:23
         compiled from "C:\OpenServer\domains\my-site.ru\wa-system\webasyst\templates\actions-legacy\dashboard\DashboardWidget.html" */ ?>
<?php if ($_valid && !is_callable('content_6315a49f3ac209_03235085')) {function content_6315a49f3ac209_03235085($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_widget_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['w']->value['size'][0], null, 0);?><?php $_smarty_tpl->tpl_vars['_widget_height'] = new Smarty_variable($_smarty_tpl->tpl_vars['w']->value['size'][1], null, 0);?><?php $_smarty_tpl->tpl_vars['is_small'] = new Smarty_variable((($_smarty_tpl->tpl_vars['_widget_width']->value==1)&&($_smarty_tpl->tpl_vars['_widget_height']->value==1)), null, 0);?><?php $_smarty_tpl->tpl_vars['is_medium'] = new Smarty_variable((($_smarty_tpl->tpl_vars['_widget_width']->value==2)&&($_smarty_tpl->tpl_vars['_widget_height']->value==1)), null, 0);?><?php $_smarty_tpl->tpl_vars['is_big'] = new Smarty_variable((($_smarty_tpl->tpl_vars['_widget_width']->value==2)&&($_smarty_tpl->tpl_vars['_widget_height']->value==2)), null, 0);?><?php ob_start();?><?php echo rand(0,9);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo rand(0,9);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo rand(0,9);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['widget_color'] = new Smarty_variable("#".$_tmp1.$_tmp2.$_tmp3, null, 0);?><?php $_smarty_tpl->tpl_vars['has_small_size'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['w']->value['has_sizes']['small']), null, 0);?><?php $_smarty_tpl->tpl_vars['has_medium_size'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['w']->value['has_sizes']['medium']), null, 0);?><?php $_smarty_tpl->tpl_vars['has_big_size'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['w']->value['has_sizes']['big']), null, 0);?><?php $_smarty_tpl->tpl_vars['has_settings'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['w']->value['has_settings']), null, 0);?><div class="widget-wrapper widget-<?php echo $_smarty_tpl->tpl_vars['w']->value['size'][0];?>
x<?php echo $_smarty_tpl->tpl_vars['w']->value['size'][1];?>
" id="widget-wrapper-<?php echo $_smarty_tpl->tpl_vars['w']->value['id'];?>
" data-widget-id="<?php echo $_smarty_tpl->tpl_vars['w']->value['id'];?>
"><div class="widget-outer-container"><div class="widget-inner-container"><div class="widget-drop-ornament"></div><div class="widget-settings-wrapper"></div><div class="widget-block" id="widget-<?php echo $_smarty_tpl->tpl_vars['w']->value['id'];?>
"><div class="loading-wrapper"><i class="icon16 loading"></i></div></div><div class="widget-controls-wrapper"><div class="delete-control-wrapper"><a class="control-item delete-widget-link" href="javascript:void(0);" title="Удалить виджет" draggable="false"></a></div><div class="size-controls-wrapper"><?php if ($_smarty_tpl->tpl_vars['has_small_size']->value){?><a class="control-item set-small-size <?php if ($_smarty_tpl->tpl_vars['is_small']->value){?>is-active<?php }?>" href="javascript:void(0);" title="Маленький размер" draggable="false"></a><?php }?><?php if ($_smarty_tpl->tpl_vars['has_medium_size']->value){?><a class="control-item set-medium-size <?php if ($_smarty_tpl->tpl_vars['is_medium']->value){?>is-active<?php }?>" href="javascript:void(0);" title="Средний размер" draggable="false"></a><?php }?><?php if ($_smarty_tpl->tpl_vars['has_big_size']->value){?><a class="control-item set-big-size <?php if ($_smarty_tpl->tpl_vars['is_big']->value){?>is-active<?php }?>" href="javascript:void(0);" title="Большой размер" draggable="false"></a><?php }?></div><?php if ($_smarty_tpl->tpl_vars['has_settings']->value){?><div class="settings-control-wrapper"><a class="control-item show-settings-link inline-link" href="javascript:void(0);" title="Настройки" draggable="false"><b><i>Настройки</i></b></a></div><?php }?></div><div class="widget-draggable-block" draggable="true"><div class="widget-draggable-ornament" style="background-color: <?php echo $_smarty_tpl->tpl_vars['widget_color']->value;?>
;"></div></div></div></div></div><?php }} ?>