<?php /* Smarty version Smarty-3.1.14, created on 2022-08-16 22:06:40
         compiled from "C:\OpenServer\domains\my-site.ru\wa-system\webasyst\templates\actions-legacy\dashboard\DashboardActivity.html" */ ?>
<?php /*%%SmartyHeaderCode:134521233162fbeac0375a84-37836672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a0391878348843d4d3f013bca6bdc0d8563a490' => 
    array (
      0 => 'C:\\OpenServer\\domains\\my-site.ru\\wa-system\\webasyst\\templates\\actions-legacy\\dashboard\\DashboardActivity.html',
      1 => 1660668036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134521233162fbeac0375a84-37836672',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datetime_group' => 0,
    'activity' => 0,
    'activity_item' => 0,
    '_group' => 0,
    'app_color' => 0,
    'app_name' => 0,
    'wa_backend_url' => 0,
    'activity_load_more' => 0,
    'wa_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_62fbeac03c3575_75451037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62fbeac03c3575_75451037')) {function content_62fbeac03c3575_75451037($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_group'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['datetime_group']->value,''), null, 0);?>
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
<?php }?><?php }} ?>