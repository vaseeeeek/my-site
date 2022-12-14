<?php /* Smarty version Smarty-3.1.14, created on 2022-08-30 14:25:11
         compiled from "C:\OpenServer\domains\my-site.ru\wa-apps\myfirstapp\templates\actions\frontend\FrontendPhp.html" */ ?>
<?php /*%%SmartyHeaderCode:9979828516304691f26ba37-84319660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef0ede4c53a664c00b04a6f7158c05bb25e86edc' => 
    array (
      0 => 'C:\\OpenServer\\domains\\my-site.ru\\wa-apps\\myfirstapp\\templates\\actions\\frontend\\FrontendPhp.html',
      1 => 1661406720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9979828516304691f26ba37-84319660',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6304691f28fec9_73707875',
  'variables' => 
  array (
    'wa_app_static_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6304691f28fec9_73707875')) {function content_6304691f28fec9_73707875($_smarty_tpl) {?><!doctype html>
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
            </div>

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
        <div class="examples__item">
            <div class="examples__title-date--box">
                <div class="examples__title">Форма</div>
                <blockquote class="examples__date">22.08.2022</blockquote>
            </div>

            <ul>
                <li>
                    <p>$_SERVER['QUERY_SYTRING'</p>
                    <p>Строка из url после /?</p>
                </li>
                <li>
                    <p>Получить данные можно запроса формы можно из: $_GET $_POST и обьединение их $_REQUEST</p>
                </li>
                <li>
                    <p>атрибут name в полях формы лучше указывать массивом name="Sel[]" - В случае мультиселекта name="Data[name] - обычный инпут"</p>
                    <p></p>
                </li>
                <li>
                    <p>checkbox</p>
                    <p>Указывается соседний checkbox - hidden c value 0</p>
                    <p>input type="hidden" name="know[php]" value="0"</p>
                    <p>input type="checkbox" name="know[php]" value="1"</p>
                    <p>если пользователь поставит флажок know[php]=1 перебьет инпут:хидден</p>
                </li>
            </ul>
        </div>
        <div class="examples__item">
            <div class="examples__title-date--box">
                <div class="examples__title">Сессия</div>
                <blockquote class="examples__date">24.08.2022</blockquote>
            </div>
            <ul>
                <li>
                    <div class="examples__title-date--box">
                        <div class="examples__title examples__title--lvl2">Управление сеансами</div>
                        <blockquote class="examples__date">24.08.2022</blockquote>
                    </div>

                    <ul>
                        <li>
                            <p>// Создание и(или) доступ к сессии</p>
                            <p>session_start();</p>
                        </li>
                        <li>
                            <p>// Запись в сессионную переменную</p>
                            <p>$_SESSION['name'] = 'John';</p>
                        </li>
                        <li>
                            <p>// Чтение из сессионной переменной</p>
                            <p>echo $_SESSION['name'];</p>
                        </li>
                        <li>
                            <p>// Очистка сессионных переменных</p>
                            <p>session_destroy();</p>
                        </li>
                        <li>
                            <p>// Принудительное удаление сессионной cookie</p>
                            <p>setcookie(session_name(), session_id(), time()-3600);</p>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="examples__title-date--box">
                        <div class="examples__title examples__title--lvl2">Дополнительные параметры сеанса
                        </div>
                        <blockquote class="examples__date">24.08.2022</blockquote>
                    </div>
                    <p>
                        // session.auto_start = 0<br>
                        ini_set('session.name', 'PHPSESSID');<br>
                        ini_set('session.save_path', '');<br>
                        ini_set('session.gc_maxlifetime', '1440');<br>
                        ini_set('session.cookie_lifetime', '0');<br>
                        ini_set('session.cookie_httponly', '');<br>
                        ini_set('session.cookie_path', '/');<br>
                    </p>
                </li>
            </ul>
        </div>
        <div class="examples__item">
            <div class="examples__title-date--box">
                <div class="examples__title">Сессия</div>
                <blockquote class="examples__date">24.08.2022</blockquote>
            </div>

            <ul>
                <li>
                    Полезные функции
                    <ul>
                        <li>
                            <p>// Проверка файлов и директорий на существование</p>
                            <p>
                                if( file_exists("file.txt") ){<br>
                                    echo "Файл или директория существует";<br>
                                }<br>
                                if( is_file("file.txt") ){<br>
                                    echo "Файл существует";<br>
                                }<br>

                                if( is_dit("images") ){<br>
                                    echo "Директория существует";<br>
                                }
                            </p>
                        </li>
                        <li>
                            <p>// Размер файла</p>
                            <p>echo "Длина файла file.txt: " . filesize("file.txt");</p>
                        </li>
                        <li>
                            <p>// Время изменения и доступа к файлу</p>
                            <p>echo "Файл file.txt был изменён: " . filemtime("file.txt");<br>
                                echo "и запрошен: " . fileatime("file.txt");</p>
                        </li>
                        <li>
                            <p>// Что можно с файлом делать?</p>
                            <p>if( is_readable("file.txt") ){<br>
                                    echo "Файл можно читать";<br>
                                }<br>

                                if( is_writable("file.txt") ){<br>
                                    echo "В файл можно писать";<br>
                                }<br>

                                if( is_executable("file.exe") ){<br>
                                    echo "Файл можно исполнять";<br>
                                }
                            </p>
                        </li>
                    </ul>
                </li>
                <li>
                    <p>
                        // Открытие потока на чтение и получение его дескриптора <br>
                        $f = fopen("file.txt", "r") or die("Не могу открыть файл!"); <br>

                        // Закрытие потока <br>
                        fclose($f); <br>

                        // Открытие потока на чтение и запись <br>
                        $f = fopen("file.txt", "r+"); <br>
                        // Открытие потока на запись. Указатель помещается в конец файла <br>
                        $f = fopen("file.txt", "a"); <br>
                        // Открытие потока на чтение и запись. Указатель помещается в конец файла <br>
                        $f = fopen("file.txt", "a+"); <br>
                        // Открытие потока на запись. Файл обрезается до нулевой длины <br>
                        $f = fopen("file.txt", "w"); <br>
                        // Открытие потока на чтение и запись. Файл обрезается до нулевой длины <br>
                        $f = fopen("file.txt", "w+"); <br>


                        // Читаем файл кусками <br>
                        $f = fopen("file.txt", "r"); <br>
                        // Читаем первые 5 байт из потока <br>
                        echo fread($f, 5); <br>
                        // Читаем следующие 3 байта из потока <br>
                        echo fread($f, 3); <br>
                        // Выводим всё с текущей позиции до конца <br>
                        fpassthru($f); <br>
                        fclose($f); <br>

                        // Читаем файл построчно в массив <br>
                        $f = fopen("file.txt", "r"); <br>
                        $lines = []; <br>
                        while ( $line = fgets($f) ){ <br>
                        $lines[] = $line; <br>
                        } <br>
                        fclose($f); <br>

                        // Читаем файл построчно в массив и вырезаем html-тэги, оставляя нужные <br>
                        $f = fopen("file.html", "r"); <br>
                        $lines = []; <br>
                        while ( $line = fgetss($f, 4096, "<p><br>") ){ <br>
                        $lines[] = $line; <br>
                        } <br>
                        fclose($f); <br>

                        // Читаем файл побайтово в массив <br>
                        $f = fopen("file.txt", "r"); <br>
                        $bytes = []; <br>
                        while ( !feof($f) ){ <br>
                        $bytes[] = fgetc($f); <br>
                        } <br>
                        fclose($f); <br>


                        // Пишем файл <br>
                        $f = fopen("file.txt", "r+"); <br>
                        fwrite($f, "Новый текст", 25); <br>
                        fclose($f); <br>


                        // Пишем в конец файла <br>
                        $f = fopen("file.txt", "a"); <br>
                        fputs($f, "\nНовая строка"); <br>
                        fclose($f); <br>


                        // Читаем последние 10 байт из потока <br>
                        $f = fopen("file.txt", "r"); <br>
                        // Устанавливаем указатель в нужную позицию <br>
                        fseek($f, -10, SEEK_END); <br>
                        // В какой позиции мы находимся? <br>
                        echo ftell($f); <br>
                        // Читаем данные <br>
                        echo fread($f, 10); <br>
                        // Устанавливаем указатель в начало потока <br>
                        rewind($f); <br>
                        fclose($f); <br>

                    </p>
                </li>
                <li>
                    <p>Прямая работа с файлами</p>
                    <p>// Читаем весь файл напрямую в буфер вывода <br>
                        readfile("file.txt"); <br>
                        // Что и <br>
                        $f = fopen("file.txt", "r"); <br>
                        echo fread($f, filesize("file.txt")); <br>
                        fclose($f); <br>

                        // Читаем файл построчно в массив <br>
                        $lines = file("file.txt");; <br>
                        // Что и <br>
                        $f = fopen("file.txt", "r"); <br>
                        while ( $lines[] = fgets($f) ); <br>
                        fclose($f); <br>

                        // Получаем весь файл в виде строки <br>
                        $file = file_get_contents("file.txt"); <br>
                        // Что и <br>
                        $f = fopen("file.txt", "r"); <br>
                        $file = fread($f, filesize("file.txt")); <br>
                        fclose($f); <br>

                        // Пишем в файл затирая содержимое <br>
                        file_put_contents("file.txt", "Новое содержимое"); <br>
                        // Что и <br>
                        $f = fopen("file.txt", "w"); <br>
                        fputs($f, "Новое содержимое"); <br>
                        fclose($f); <br>

                        // Пишем в файл добавляя содержимое в конец <br>
                        file_put_contents("file.txt", "Новое содержимое", FILE_APPEND); <br>
                        // Что и <br>
                        $f = fopen("file.txt", "a"); <br>
                        fputs($f, "Новое содержимое"); <br>
                        fclose($f); <br>
                    </p>
                </li>
                <li>
                    <p>Управление файлами</p>
                    <p>// Копируем файл
                        copy("source.txt", "destination.txt");

                        // Переименовываем файл
                        rename("old.txt", "new.txt");

                        // Удаляем файл
                        unlink("file-to-delete.txt");
                    </p>
                </li>
            </ul>
        </div>
        <div class="examples__item">
            <div class="examples__title-date--box">
                <div class="examples__title">Подключение файлов</div>
                <blockquote class="examples__date">24.08.2022</blockquote>
            </div>
            <ul>
                <li>
                    <div class="examples__title-date--box">
                        <div class="examples__title examples__title--lvl2">Подключение файлов</div>
                        <blockquote class="examples__date">24.08.2022</blockquote>
                    </div>
                    <ul>
                        <li>require</li>
                        <li>require_once</li>
                        <li>include</li>
                        <li>include_once</li>
                        <li>include в случае ошибки выдает ошибку и продолжает работу, require в случае ошибки выводит ерор и останавливает </li>
                        <li>once - не подключает если на странице уже есть подключение</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="examples__item">
            <div class="examples__title-date--box">
                <div class="examples__title">Функции</div>
                <blockquote class="examples__date">24.08.2022</blockquote>
            </div>
            <ul>
                <li>
                    <p>Для изменения переменной за пределами функции, аргументом нужно указывать ссылку на переменную</p>
                    <p>
                        $num = 10; <br>
                        function numUp(&$a){ <br>
                            $a++; <br>
                        }; <br>
                        numUp($num); <br>
                        echo $num // 11 <br>
                    </p>
                </li>
                <li>
                    <p>Доступ к аргументам функций</p>
                    <p>func_num_args()</p>
                    <p>func_get_arg(int $num)</p>
                    <p>func_num_args()</p>
                </li>
                <li>
                    <p>статические переменные не уничтожаются после выполнения функции, похоже с замыканимем</p>
                    <p>static $count = 0</p>
                </li>
                <li><p>рекурсия</p>
                    <p>вызов функции внутри себя</p></li>
                <li>
                    <p>скрипт нормального дампа</p>
                    <p>11.16</p>
                </li>
                <li>
                    <p>Генераторы</p>
                    <p>
                        функция делает множество return с помощью yield
                    </p>
                    <a href="https://www.php.net/manual/ru/language.generators.overview.php">Пример</a>
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
    </div>
    <script src="{$wa_app_static_url}js/frontend/FrontendJavascript.js"></script>
    
</body>
</html><?php }} ?>