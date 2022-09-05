<?php /* Smarty version Smarty-3.1.14, created on 2022-09-05 10:26:27
         compiled from "C:\OpenServer\domains\my-site.ru\wa-widgets\currencyquotes\templates\Default.html" */ ?>
<?php /*%%SmartyHeaderCode:8986219666315a4a367e749-83596439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc29e744ce5c0b308d74cdfbd9d9e240dc3b0078' => 
    array (
      0 => 'C:\\OpenServer\\domains\\my-site.ru\\wa-widgets\\currencyquotes\\templates\\Default.html',
      1 => 1659948318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8986219666315a4a367e749-83596439',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ui' => 0,
    'info' => 0,
    'quotes' => 0,
    'is_today' => 0,
    'date' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6315a4a36ccca4_00656982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6315a4a36ccca4_00656982')) {function content_6315a4a36ccca4_00656982($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_date')) include 'C:\\OpenServer\\domains\\my-site.ru\\wa-system/vendors/smarty-plugins\\modifier.wa_date.php';
?>
<?php if ($_smarty_tpl->tpl_vars['ui']->value=='2.0'){?>
    <style>
        .wa-currency-widget { padding: 16px; display: flex; justify-content: center; align-items: center; height: 100%; box-sizing: border-box; }
        .wa-currency-widget .cq-cover-block { background: #ccc; opacity: 0.6; position: absolute; top: 0; bottom: 0; left: 0; right: 0; display: flex; justify-content: center; align-items: center; }

        .wa-currency-widget .cq-info { display: flex; flex-direction: column; }
        .wa-currency-widget .cq-info > .hint { margin-bottom: 30px; }
        .wa-currency-widget .s-currency-quote:first-child { margin-bottom: 32px; }
        .wa-currency-widget .s-currency-quote-info { display: flex; justify-content: center; align-items: center; margin-bottom: 8px; }
        .wa-currency-widget .heading { font-weight: bold; font-size: 21px; line-height: 120%; margin: 0; padding: 0; }
        .wa-currency-widget .highlighted { margin-left: 8px; font-weight: bold; font-size: 1.1rem; line-height: 120%; color: #fff; padding: 2px 4px; }
        .wa-currency-widget .quote { font-weight: bold; font-size: 48px; line-height: 120%; color: var(--text-color-strongest); text-align: center; }

        .widget-2x1 .wa-currency-widget .cq-info { flex-direction: row; width: 100%; justify-content: space-around; flex-wrap: wrap; }
        .widget-2x1 .wa-currency-widget .heading { font-size: .875rem; }
        .widget-2x1 .wa-currency-widget .highlighted { font-size: .75rem; }
        .widget-2x1 .wa-currency-widget .quote { font-size: 1.6rem }
        .widget-2x1 .wa-currency-widget .s-currency-quote:first-child { margin-bottom: 0; }
        .widget-2x1 .wa-currency-widget .cq-info > .hint { margin-bottom: 20px; flex: 1 0 100%; text-align: center; }

        .widget-1x1 .wa-currency-widget .heading { font-size: .875rem; }
        .widget-1x1 .wa-currency-widget .highlighted { font-size: .75rem; }
        .widget-1x1 .wa-currency-widget .quote { font-size: 1.3rem }
        .widget-1x1 .wa-currency-widget .s-currency-quote:first-child { margin-bottom: 15px; }
        .widget-1x1 .wa-currency-widget .s-currency-quote-info { margin-bottom: 2px; }
        .widget-1x1 .wa-currency-widget .cq-info > .hint { margin-bottom: 5px; text-align: center; }
    </style>

    <div class="wa-currency-widget" id="currency-quotes-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">
        <div class="cq-info">
            <?php if (!empty($_smarty_tpl->tpl_vars['quotes']->value)){?>
                <?php if (!$_smarty_tpl->tpl_vars['is_today']->value){?>
                    <span class="hint"><?php echo sprintf("Показываются данные на %s",smarty_modifier_wa_date($_smarty_tpl->tpl_vars['date']->value));?>
</span>
                <?php }?>
                <div class="s-currency-quote">
                    <div class="s-currency-quote-info">
                        <span class="heading">USD</span>
                        <span class="highlighted<?php if ($_smarty_tpl->tpl_vars['quotes']->value['USD']['diff']>=0){?> bg-green<?php }else{ ?> bg-red<?php }?> js-format-currency" title="Изменение курса по сравнению с предыдущим днем"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['quotes']->value['USD']['diff_str'])===null||$tmp==='' ? '&mdash;' : $tmp);?>
</span>
                    </div>
                    <div class="quote js-format-currency js-format-currency-view" title="Курс ЦБ РФ на <?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['date']->value,'humandate');?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['quotes']->value['USD']['val'])===null||$tmp==='' ? '&mdash;' : $tmp);?>
</div>
                </div>
                <div class="s-currency-quote">
                    <div class="s-currency-quote-info">
                        <span class="heading">EUR</span>
                        <span class="highlighted<?php if ($_smarty_tpl->tpl_vars['quotes']->value['EUR']['diff']>=0){?> bg-green<?php }else{ ?> bg-red<?php }?> js-format-currency" title="Изменение курса по сравнению с предыдущим днем"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['quotes']->value['EUR']['diff_str'])===null||$tmp==='' ? '&mdash;' : $tmp);?>
</span>
                    </div>
                    <div class="quote js-format-currency js-format-currency-view" title="Курс ЦБ РФ на <?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['date']->value,'humandate');?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['quotes']->value['EUR']['val'])===null||$tmp==='' ? '&mdash;' : $tmp);?>
</div>
                </div>
            <?php }else{ ?>
                <span class="state-error">Нет данных за последние 10 дней.</span>
            <?php }?>
        </div>
        <div class="cq-cover-block js-cover-block" style="display: none;">
            <i class="fas fa-spin fa-spinner"></i>
        </div>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['wa']->value->get('ignore_js')){?>
    <script>$(function() {
        let widget_id = "<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
",
            uniqid = '' + (new Date).getTime() + Math.random(),
            $container = $('#currency-quotes-'+widget_id);

        // run 1 hour updater
        setTimeout(() => {
            try {
                DashboardWidgets[widget_id].uniqid = uniqid;
                setTimeout(() => {
                    try {
                        if (uniqid == DashboardWidgets[widget_id].uniqid) {
                            DashboardWidgets[widget_id].renderWidget();
                        }
                    } catch (e) {
                        console.log(e)
                    }
                }, 60*60*1000);
            } catch (e) {
                console.log(e)
            }
        }, 0);

        $container.on('click', function(e) {
            e.preventDefault();

            let $cover = $(this).find('.js-cover-block');
            $cover.show();

            try {
                DashboardWidgets[widget_id].renderWidget();
            } catch (e) {
                setTimeout(() => $cover.hide(), 500);
            }
        });

        const currentWidget = document.querySelector('#currency-quotes-<?php echo $_smarty_tpl->tpl_vars['info']->value["id"];?>
');
        const currencyValues = currentWidget.querySelectorAll('.js-format-currency');
        for(let value of currencyValues) {
            value.textContent = Number(value.textContent).toLocaleString(navigator.language, {
                minimumFractionDigits: 4
            });

            if (value.classList.contains('js-format-currency-view')) {
                const currencyParts = value.textContent.split(/(\d+)/);
                value.innerHTML = currencyParts[1] + currencyParts[2] + '<span class="small">' + currencyParts[3] + '</span>';
            }
        }

    });</script>
    <?php }?>
<?php }else{ ?>
    <style>
        #currency-quotes-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
 .s-currency-quote { display: inline-block; min-width: 49%; position: relative; }
        #currency-quotes-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
 .cq-cover-block { background: #ccc; opacity: 0.6; }

        .widget-2x1 .s-currency-quote { text-align: center; padding-top: 2rem; }
    </style>

    <div class="block" id="currency-quotes-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">
        <div class="cq-info">
            <?php if (!empty($_smarty_tpl->tpl_vars['quotes']->value)){?>
                <?php if (!$_smarty_tpl->tpl_vars['is_today']->value){?>
                    <span class="hint"><?php echo sprintf("Показываются данные на %s",smarty_modifier_wa_date($_smarty_tpl->tpl_vars['date']->value));?>
</span>
                <?php }?>
                <div class="s-currency-quote">
                    <h2 class="quote js-format-currency js-format-currency-view" title="Курс ЦБ РФ на <?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['date']->value,'humandate');?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['quotes']->value['USD']['val'])===null||$tmp==='' ? '&mdash;' : $tmp);?>
</h2>
                    <h4>
                        <span class="heading">USD</span>
                        <span class="highlighted js-format-currency" title="Изменение курса по сравнению с предыдущим днем"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['quotes']->value['USD']['diff_str'])===null||$tmp==='' ? '&mdash;' : $tmp);?>
</span>
                    </h4>
                </div>
                <div class="s-currency-quote">
                    <h2 class="quote js-format-currency js-format-currency-view" title="Курс ЦБ РФ на <?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['date']->value,'humandate');?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['quotes']->value['EUR']['val'])===null||$tmp==='' ? '&mdash;' : $tmp);?>
</h2>
                    <h4>
                        <span class="heading">EUR</span>
                        <span class="highlighted js-format-currency" title="Изменение курса по сравнению с предыдущим днем"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['quotes']->value['EUR']['diff_str'])===null||$tmp==='' ? '&mdash;' : $tmp);?>
</span>
                    </h4>
                </div>
            <?php }else{ ?>
                <span class="errormsg">Нет данных за последние 10 дней.</span>
            <?php }?>
        </div>
        <div class="block hidden cq-cover-block">
            <i class="icon16 loading"></i>
        </div>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['wa']->value->get('ignore_js')){?>
        <script>$(function() {
                var widget_id = "<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
",
                    uniqid = '' + (new Date).getTime() + Math.random();
                var $container = $('#currency-quotes-'+widget_id);

                // run 1 hour updater
                setTimeout(function() {
                    try {
                        DashboardWidgets[widget_id].uniqid = uniqid;
                        setTimeout(function() {
                            try {
                                if (uniqid == DashboardWidgets[widget_id].uniqid) {
                                    DashboardWidgets[widget_id].renderWidget();
                                }
                            } catch (e) {}
                        }, 60*60*1000);
                    } catch (e) {}
                }, 0);

                $container.click(function(e) {
                    e.preventDefault();

                    var $cover = $('.cq-cover-block', $container);
                    $cover.css({
                        position: 'absolute',
                        height: '100%',
                        width: '100%',
                        left: 0,
                        top: 0
                    }).show();
                    var loading = $cover.find('.loading');
                    var w = loading.width();
                    var h = loading.height();
                    var W = $cover.width();
                    var H = $cover.height();
                    loading.css({
                        marginTop: (H - h) / 2,
                        marginLeft: (W - w) / 2
                    });

                    try {
                        DashboardWidgets[widget_id].renderWidget();
                    } catch (e) {
                        setTimeout(function() {
                            $cover.hide();
                        }, 500);
                    }
                });

                const currencyValues = document.querySelectorAll('.js-format-currency');
                for(let value of currencyValues) {
                    value.textContent = Number(value.textContent).toLocaleString(navigator.language, {
                        minimumFractionDigits: 4
                    });

                    if (value.classList.contains('js-format-currency-view')) {
                        const currencyParts = value.textContent.split(/(\d+)/);
                        value.innerHTML = currencyParts[1] + currencyParts[2] + '<span class="small">' + currencyParts[3] + '</span>';
                    }
                }

            });</script>
    <?php }?>
<?php }?>
<?php }} ?>