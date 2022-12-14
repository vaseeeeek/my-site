<?php /* Smarty version Smarty-3.1.14, created on 2022-08-22 22:26:16
         compiled from "C:\OpenServer\domains\my-site.ru\wa-apps\myfirstapp\templates\actions\frontend\FrontendPhp.html" */ ?>
<?php /*%%SmartyHeaderCode:18958916863025864e76c78-58290082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef0ede4c53a664c00b04a6f7158c05bb25e86edc' => 
    array (
      0 => 'C:\\OpenServer\\domains\\my-site.ru\\wa-apps\\myfirstapp\\templates\\actions\\frontend\\FrontendPhp.html',
      1 => 1661196373,
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
                <blockquote class="examples__date">21.08.2022</blockquote>
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
        <div class="examples__item">
            <div class="examples__title-date--box">
                <div class="examples__title">Cookie</div>
                <blockquote class="examples__date">22.08.2022</blockquote>
            </div>

            <ul>
                <li>
                    Установка Cookie
                    <ul>
                        <li>
                            <p>Создание временной cookie</p>
                            <p>setcookie("name", "John");</p>
                        </li>
                        <li>
                            <p>Создание долговременной cookie на один час</p>
                            <p>setcookie("name", "John", time()+3600);</p>
                        </li>
                        <li>
                            <p>Cookie доступны один час по пути /docs/</p>
                            <p>setcookie("name", "John", time()+3600, "/docs/");</p>
                        </li>
                        <li>
                            <p>Cookie доступны один час по пути для всех поддоменов</p>
                            <p>setcookie("name", "John", time()+3600, "/", ".example.com");</p>
                        </li>
                        <li>
                            <p>Сookie можно отдавать только при https</p>
                            <p>setcookie("name", "John", time()+3600, "/", ".example.com", true);</p>
                        </li>
                        <li>
                            <p>Сookie можно отдавать только при http запросе</p>
                            <p>setcookie("name", "John", time()+3600, "/", ".example.com", false, true);</p>
                        </li>
                    </ul>
                </li>
                <li>
                    <p>// Внимание: ошибка!</p>
                    <p>
                        echo "Привет!";<br>
                        setcookie("name", "John");<br>
                        тк setcookie работает вначале страницы,как только передается не инструкция php, заголовок отправляется и с ней все куки что были указаны до.
                    </p>
                </li>
                <li>
                    <p>// Чтение cookie</p>
                    <p>echo $_COOKIE["name"];</p>
                </li>
                <li>
                    <p>// Удаление cookie
                    </p>
                    <p>setcookie("name", "John", time()-3600);
                    </p>
                </li>
                <li>
                    <p>// Массивы и cookie</p>
                    <p>
                        $user = [<br>
                        'name' => 'John',<br>
                        'login' => 'root',<br>
                        'password' => '1234'<br>
                        ];<br>
                        $str = serialize($user);<br>
                        setcookie("user",  $str);<br>

                        $user = unserialize($_COOKIE["user"]);<br>
                        print_r($user);<br>
                    </p>
                </li>
                <li>
                    <p>// Для сохранения целостности</p>
                    <p>
                        $str = base64_encode( serialize($user) );<br>
                        setcookie("user",  $str);<br>

                        $user = unserialize( base64_decode($_COOKIE["user"]) );<br>
                        print_r($user);<br>
                    </p>
                </li>
            </ul>
        </div>
        <div class="examples__item">
            <div class="examples__title-date--box">
                <div class="examples__title">Заголовки Headers</div>
                <blockquote class="examples__date">22.08.2022</blockquote>
            </div>

            <ul>
                <li>
                    <div class="examples__title-date--box">
                        <div class="examples__title examples__title--lvl2">Установка типа содержимого</div>
                        <blockquote class="examples__date">22.08.2022</blockquote>
                    </div>
                    <ul>
                        <li>
                            <p>// Принудительная установка типа передаваемого ресурса</p>
                            <p>header("Content-Type: text/xml");</p>
                        </li>
                        <li>
                            <p>// Принудительная установка кодировки передаваемого ресурса</p>
                            <p>header("Content-Type: text/html; charset=utf-8");</p>
                        </li>
                        <li>
                            <p>// Перенаправление вывода передаваемых данных</p>
                            <p> header("Content-Type: text/plain");<br>
                                header("Content-Disposition: attachment; filename=\"myfile.txt\"");
                            </p>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="examples__title-date--box">
                        <div class="examples__title examples__title--lvl2">Установка типа содержимого</div>
                        <blockquote class="examples__date">22.08.2022</blockquote>
                    </div>
                    <ul>
                        <li>
                            <p>// Принудительная установка типа передаваемого ресурса</p>
                            <p>header("Content-Type: text/xml");
                            </p>
                        </li>
                        <li>
                            <p>// Принудительная установка кодировки передаваемого ресурса
                            </p>
                            <p>header("Content-Type: text/html; charset=utf-8");
                            </p>
                        </li>
                        <li>
                            <p>
                                // Перенаправление вывода передаваемых данных
                            </p>
                            <p>
                                header("Content-Type: text/plain");<br>
                               header("Content-Disposition: attachment; filename=\"myfile.txt\"");
                            </p>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="examples__title-date--box">
                        <div class="examples__title examples__title--lvl2">Управление кэшированием</div>
                        <blockquote class="examples__date">22.08.2022</blockquote>
                    </div>
                    <ul>
                        <li>
                            <p>// Запрет кэширования</p>
                            <p>header("Cache-Control: no-cache, max-age=0");</p>
                        </li>
                        <li>
                            <p>// Полный запрет кэширования</p>
                            <p>header("Cache-Control: no-store");</p>
                        </li>
                        <li>
                            <p>// Разрешение кэширования на один час относительно времени запроса
                            </p>
                            <p> header("Cache-Control: max-age=3600");
                            </p>
                        </li>
                        <li>
                            <p>// Разрешение кэширования на один час</p>
                            <p>header("Expires: " . date("r", time() + 3600);</p>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="examples__item">

            <div class="examples__title-date--box">
                <div class="examples__title">Оператор</div>
                <blockquote class="examples__date">22.08.2022</blockquote>
            </div>

            <ul>
                <li>
                    <div class="examples__title-date--box">
                        <div class="examples__title examples__title--lvl2">Условные операторы</div>
                        <blockquote class="examples__date">22.08.2022</blockquote>
                        <ul>
                            <li>
                                <p>$x ? 'text1' : 'text2'</p>
                                <p>если $x=true то text1, если false то text2</p>
                            </li>
                            <li>
                                <p>$x ?: 'text2'</p>
                                <p>если $x=false то text2</p>
                            </li>
                            <li>
                                <p>$val = $peremennaya ?? false</p>
                                <p>Если $premennaya != null; != false то переменная $val = $peremennaya</p>
                                <p>Если $premennaya == null; == false то переменная $val = false (значению после ??)</p>
                            </li>
                        </ul>
                    </div>
                </li>
            <ul>
        </div>
        <div class="examples__item">
            <div class="examples__title-date--box">
                <div class="examples__title">Буферизация</div>
                <blockquote class="examples__date">22.08.2022</blockquote>

                <ul>
                    <li>
                        <p>// Включаем буферизацию</p>
                        <p>ob_start();<br>
                            echo 'Hello world!';<br>
                            setcookie("name", "John");</p>
                    </li>
                    <li>
                        <p>// Посылаем содержимое буфера</p>
                        <p>ob_flush();</p>
                    </li>
                    <li>
                        <p>
                            echo 'Ещё контент!';<br>
                            echo 'И ещё контент!';</p>
                        <p> // Посылаем содержимое буфера и отключаем его<br>
                            ob_end_flush();</p>
                    </li>
                    <li>
                        <p>// Посылаем содержимое буфера и отключаем его</p>
                        <p>ob_end_flush();</p>
                    </li>
                    <li>
                        <p>// Включаем буферизацию</p>
                        <p>ob_start();</p>
                    </li>
                    <li>
                        <p>echo "Hello ";</p>
                        <p>// Выбираем то, что находится в буфере. Его содержимое на очищается!<br>
                            $out1 = ob_get_contents();</p>
                    </li>
                    <li>
                        <p>echo "World";</p>
                        <p>// Выбираем то, что находится в буфере. Его содержимое на очищается!<br>
                            $out2 = ob_get_contents();
                        </p>
                    </li>
                    <li>
                        <p> // А теперь очищаем буфер, но не закрываем
                            </p>
                        <p>ob_clean();</p>
                    </li>
                    <li>
                        <p>echo "Саша";<br>
                            echo " и ";<br>
                            echo "Маша";</p>
                    </li>
                    <li>
                        <p>// Выбираем то, что находится в буфере</p>
                        <p>$out3 = ob_get_contents();</p>
                    </li>
                    <li>
                        <p>// Очищаем буфер и закрываем его</p>
                        <p>ob_end_clean();</p>
                    </li>
                    <li>
                        <p>echo $out1; // Hello<br>
                            echo $out2; // Hello World<br>
                            echo $out3; // Саша и Маша</p>
                    </li>
                </ul>
            </div>
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
    </div>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/frontend/FrontendJavascript.js"></script>
</body>
</html><?php }} ?>