<?php /* Smarty version Smarty-3.1.14, created on 2022-08-21 22:15:14
         compiled from "C:\OpenServer\domains\my-site.ru\wa-apps\myfirstapp\templates\actions\frontend\FrontendPhp.html" */ ?>
<?php /*%%SmartyHeaderCode:18958916863025864e76c78-58290082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef0ede4c53a664c00b04a6f7158c05bb25e86edc' => 
    array (
      0 => 'C:\\OpenServer\\domains\\my-site.ru\\wa-apps\\myfirstapp\\templates\\actions\\frontend\\FrontendPhp.html',
      1 => 1661109313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18958916863025864e76c78-58290082',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_63025864e99ae7_68527526',
  'variables' => 
  array (
    'wa_app_static_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63025864e99ae7_68527526')) {function content_63025864e99ae7_68527526($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
/css/reset.css">
</head>
<body>
    <h1>Php</h1>
        Примеры из Php
    <div class="examples__list">
        <div class="examples__item">
            <div class="examples__title-date--box">
                <div class="examples__title">Переменные</div>
                <div class="examples__date">21.08.2022</div>
            </div>
            <ul>
                <li>Переменные зависимы от регистра</li>
                <li>Типы переменных:
                    <ul>
                        <li>
                            <p>Interger (целое число)</p>
                            <p>Пример: 1</p>
                        </li>
                        <li>
                            <p>double (вещественное число)</p>
                            <p>Пример: 0,00012->12x10e-4->1.2e-4</p>
                        </li>
                        <li>
                            <p>string (Строка)</p>
                            <p>Пример: "Значение строки"</p>
                        </li>
                        <li>
                            <p>boolean (логический тип)</p>
                            <p>Пример: true</p>
                        </li>
                        <li>
                            <p>null (специальное значение)</p>
                            <p>Пример: null</p>
                        </li>
                        <li>
                            <p>callable (фунция обратного вызова)</p>
                            <p>Пример: Некоторые функции могут принимтаь в качестве аргументов другие функции, которые называются "функциями обратного вызова"</p>
                        </li>
                    </ul>
                </li>
                <li>Действия с переменными:
                    <ul>
                        <li>
                            <p>Присвоение значения</p>
                            <p>Пример: null</p>
                        </li>
                        <li>
                            <p>Проверка существования</p>
                            <p>Пример: isset($myVar)</p>
                        </li>
                        <li>
                            <p>Уничтожение</p>
                            <p>Пример: unset($myVar) или unset($myVar['ключ'])</p>
                        </li>
                    </ul>
                </li>
                <li>
                    Определение типа переменной
                    <ul>
                        <li>is_int</li>
                        <li>is_double</li>
                        <li>is_infinite - бесконечное действительное число INF</li>
                        <li>is_nan - недопустимое числовое значение</li>
                        <li>is_string</li>
                        <li>is_numeric - если является либо числом, либо строковым прелставлением число ( состоит из цифр и точки), рекомедуется использовать вместо is_integer  и is_double, потому что над числами содержащимися в строках можно выполнять обычные арифметические операции</li>
                        <li>is_scalar - если это один из вышеперечисленных типов (сколярный)</li>
                        <li>is_null</li>
                        <li>is_array</li>
                        <li>is_object</li>
                        <li>gettype</li>
                    </ul>
                </li>
                <li>Установка типа переменной
                    <ul>
                        <li>settype($var, $type)</li>
                        <li>floatval - к вещественному числу</li>
                        <li>strval</li>
                        <li>intval</li>
                        <li>Также в скобка перед переменной можно указать тип переменной
                            int,bool,float,string,array,object,unset
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
        <div class="examples__item"></div>
    </div>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/frontend/FrontendJavascript.js"></script>
</body>
</html><?php }} ?>