<?php
return array (
  'meta' => 
  array (
    'Project-Id-Version' => 'menu',
    'POT-Creation-Date' => '2017-12-20 02:25+0300',
    'PO-Revision-Date' => '',
    'Last-Translator' => 'menu',
    'Language-Team' => 'menu',
    'MIME-Version' => '1.0',
    'Content-Type' => 'text/plain; charset=utf-8',
    'Content-Transfer-Encoding' => '8bit',
    'Plural-Forms' => 
    array (
      'nplurals' => '3',
      'plural' => 'return (((($n%10)==1)&&(($n%100)!=11))?(0):((((($n%10)>=2)&&(($n%10)<=4))&&((($n%100)<10)||(($n%100)>=20)))?(1):2));',
    ),
    'X-Poedit-SourceCharset' => 'utf-8',
    'X-Poedit-Basepath' => '.',
    'Language' => 'ru_RU',
    'X-Generator' => 'Poedit 2.2.3',
    'X-Poedit-SearchPath-0' => '.',
    'X-Poedit-SearchPath-1' => '.',
  ),
  'messages' => 
  array (
    'Extended menu' => 'Управление меню',
    'This app allows you to create multiply different menus. You can use them at your website frontend.' => 'С помощью приложения вы можете создать и настроить различные меню для фронтенда вашего сайта.',
    'If your theme doesn\'t support this app by default you will need some basics HTML skills.' => 'Если ваша тема дизайна не поддерживает приложение по умолчанию, то вам потребуются базовые знания HTML-вёрстки, чтобы модифицировать шаблоны.',
    'The next code can be used to get an array of menu items.' => 'При помощи следующего кода можно получить массив элементов определённого меню.',
    'Please note that <code><strong>$menu_id</strong></code> is a concrete menu ID (see "Examples" section below).' => 'Обратите внимание, что <code><strong>$menu_id</strong></code> &mdash; это ID определённого меню (см. секцию "Примеры").',
    'Next step is creating th HTML structure of your menu. The simplest way to do this is <code><a href="https://developers.webasyst.com/templates/smarty-plugins/#method-wa_print_tree" target="_blank">wa_print_tree</a></code> function:' => 'Следующий шаг &mdash; создать HTML структуру вашего меню. Самый простой способ это сделать &mdash; использовать функцию <code><a href="https://developers.webasyst.ru/templates/smarty-plugins/#method-wa_print_tree" target="_blank">wa_print_tree</a></code>:',
    'It will build folded UL-tags list structure.' => 'Она выведет вложенную структуру UL списков.',
    'A little more advanced way is to use Smarty <code><a href="https://www.smarty.net/docsv2/en/language.function.foreach.tpl" target="_blank ">foreach</a></code> loops.' => 'Немного более продвинутый способ &mdash; использовать циклы Smarty, например <code><a href="https://www.smarty.net/docsv2/ru/language.function.foreach.tpl" target="_blank ">foreach</a></code>.',
    'top level items loop' => 'цикл по элементам верхнего уровня',
    'render link' => 'отрисовка ссылки',
    'the item ma have some children' => 'у элемента могут быть вложенные элементы',
    'second level items loop' => 'цикл по элементам второго уровня',
    'here can be some more children: {$child.childs} etc.' => 'далее могут быть ещё вложенные элементы: {$child.childs} и т.д.',
    'Cache' => 'Кэш',
    'This app uses cache to reduce server load. You can change cache life time at the <a href="#/settings/">settings page</a>.' => 'В приложении используется кеш для снижения нагрузки на сервер. Вы можете изменить время жизни кеша на <a href="#/settings/">странице настроек</a>.',
    'File cache is used by default. But you can change cache settings of your Webasyst follow by this guide:' => 'По умолчанию используется файловый кеш. Но следуя этому руководству вы можете изменить настройки кэша вашего Webasyst:',
    'https://developers.webasyst.com/features/cache/' => 'https://developers.webasyst.ru/features/cache/',
    'Examples' => 'Примеры',
    'You have no menus yet. Please use the link at the left sidebar to create a new one.' => 'У вас пока нет меню. Создать новое меню вы можете по клику на ссылку в левом сайдбаре.',
    'Select menu to render the structure.' => 'Выберите меню для отрисовки его структуры.',
    'Name' => 'Название',
    'Type' => 'Тип',
    'Enabled' => 'Включен',
    'delete' => 'удалить',
    'Save' => 'Сохранить',
    'This will permanently delete item and all its sub-items without the ability to recover. Are you sure?' => 'Элемент меню и все вложенные элементы будут удалены безвозвратно. Продолжить?',
    'settings' => 'настройки',
    'New item' => 'Новый пункт меню',
    'Select menu item to change settings.' => 'Для изменения настроек выберите пункт меню.',
    'Copied' => 'Скопировано',
    'Icon' => 'Иконка',
    'Code' => 'Код',
    'Result' => 'Результат',
    'Menu not found' => 'Меню не найдено',
    'Settings' => 'Настройки',
    'Cache lifetime' => 'Время жизни кэша',
    'Menu cache lifetime value (in seconds).' => 'Время жизни кэша меню (в сек.)',
    'Info' => 'Информация',
    'Add menu' => 'Добавить меню',
    'Item not found' => 'Пункт меню не найден',
    'test' => 
    array (
      0 => 'тест',
      1 => 'теста',
      2 => 'тесты',
    ),
    'Item couldn\'t be inserted before itself' => 'Невозможно добавить пункт перед самим собой',
    'Item couldn\'t be parent of itself' => 'Пункт меню не может быть родительским для себя самого',
    'Before item couldn\'t be parent item' => 'Невозможно добавить родительский элемент',
    'Empty request.' => 'Пустой запрос.',
    'New menu' => 'Новое меню',
    'Target' => 'Цель',
    'New tab' => 'Новая вкладка (_blank)',
    'Current tab' => 'Текущая вкладка (_current)',
    'Parent window' => 'Родительская вкладка (_parent)',
    'Top frame' => 'Родительский фрейм (_top)',
    'Simple link' => 'Обычная ссылка',
    'Error' => 'Ошибка',
    'Close' => 'Закрыть',
    'Saved' => 'Сохранено',
    'or' => 'или',
    'cancel' => 'отмена',
    'An error occurred.' => 'Произошла ошибка.',
    'This will permanently delete menu and all its items without the ability to recover. Are you sure?' => 'Меню и все его элементы будут удалены безвозвратно. Продолжить?',
    'Plugins' => 'Плагины',
    'filter menus' => 'фильтр меню',
    'Backend menu sorting' => 'Сортировка меню в бекенде',
    'Refresh page to apply this setting.' => 'Для изменения сортировки в боковом меню обновите страницу.',
  ),
);