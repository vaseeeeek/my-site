<?php /* Smarty version Smarty-3.1.14, created on 2022-08-23 13:39:46
         compiled from "C:\OpenServer\domains\my-site.ru\wa-apps\myfirstapp\templates\actions\frontend\FrontendJavascript.html" */ ?>
<?php /*%%SmartyHeaderCode:589093317630498f6085065-54723328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ce30e78a46db55a0c08c9ae9ca51214f7f17e17' => 
    array (
      0 => 'C:\\OpenServer\\domains\\my-site.ru\\wa-apps\\myfirstapp\\templates\\actions\\frontend\\FrontendJavascript.html',
      1 => 1661250724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '589093317630498f6085065-54723328',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_630498f60bdf12_49494066',
  'variables' => 
  array (
    'wa_app_static_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_630498f60bdf12_49494066')) {function content_630498f60bdf12_49494066($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Javascript</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
/css/reset.css">
</head>
<body>
    <h1>Javascript</h1>
        Примеры из Javascript

    
    <div class="examples__list">
        <div class="examples__item">
            <div class="examples__title-date--box">
                <div class="examples__title">Переменные</div>
                <blockquote class="examples__date">23.08.2022</blockquote>
            </div>
            <ul>
                <li>
                    <p>Наименование переменных</p>
                    <p>PascalCase -> Типы и классы<br>
                       DB_PASSWORD -> значения известны до запуска приложения и не меняются<br>
                       camelCase -> Остальное
                    </p>
                </li>
                <li>
                    <div class="examples__title-date--box">
                        <div class="examples__title examples__title--lvl2">Обьявление переменных</div>
                        <blockquote class="examples__date">23.08.2022</blockquote>
                    </div>
                    <ul>
                        <li>
                            <p>let</p>
                            <p>Если значени переменной не присвоено, то значение будет равно undifine</p>
                        </li>
                        <li>
                            <p>const</p>
                            <p>Нельзя присвоить значение повторно</p>
                        </li>
                        <li>
                            <p>var</p>
                            <p>Лучше не использовать</p>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="examples__title-date--box">
                        <div class="examples__title examples__title--lvl2">Типы переменных</div>
                        <blockquote class="examples__date">23.08.2022</blockquote>
                    </div>
                    <ul>
                        <li>
                            <p>Приметивные типы переменных</p>
                            <p>string, boolean, number, null, undefined, symbol</p>
                            <p>Значение приметивных типов хранит само значение, а не ссылку на значение как object</p>
                        </li>
                        <li>
                            <p>Ссылочный тип</p>
                            <p>object(обьект)</p>
                            <p>Переменная хронящая обьект будет хранить только ссылку на обьет а не сам обьект</p>
                            <p>Поменяв значение в обьекте через одну переменную, вы меняете значение всех переменных ссылающихся на тот же обьект</p>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="examples__title-date--box">
                        <div class="examples__title examples__title--lvl2">Типизация</div>
                        <blockquote class="examples__date">23.08.2022</blockquote>
                    </div>
                    <ul>
                        <li>Javascript динамически типизированный язык</li>
                        <li>
                            <p>Статическая типизация</p>
                            <p>String a = "abc";<br> int b = 10;<br>b='xyz' //Error</p>
                        </li>
                        <li>
                            <p>Динамическая типизация</p>
                            <p>a = function a(){};a = "abc";<br>a = 1<br>a = undifiend</p>
                        </li>
                        <li></li>
                    </ul>
                </li>
                <li>
                    <div class="examples__title-date--box">
                        <div class="examples__title examples__title--lvl2">Обьекты</div>
                        <blockquote class="examples__date">23.08.2022</blockquote>
                    </div>
                    <ul>
                        <li>
                            <p>Создания нового свойства</p>
                            <p>
                                $myCity.popular = true<br>
                                $myCity["popular"] = true - Используется если в квадратных скобках необхадимо указать переменную
                            </p>
                        </li>
                        <li>
                            <p>Удаление свойства</p>
                            <p>delete $myCity.popular</p>
                        </li>
                        <li>
                            <p></p>
                            <p></p>
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