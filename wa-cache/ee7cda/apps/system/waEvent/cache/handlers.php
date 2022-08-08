<?php
return array (
  'plugins' => 
  array (
    'shop' => 
    array (
      'migrate' => 
      array (
        'name' => 'Переход на Shop-Script',
        'description' => 'Перенос данных в Shop-Script из других CMS для интернет-магазинов',
        'img' => 'wa-apps/shop/plugins/migrate/img/migrate.png',
        'vendor' => 'webasyst',
        'version' => '2.1.4',
        'importexport' => true,
        'handlers' => 
        array (
          'backend_welcome' => 'backendWelcomeHandler',
        ),
        'id' => 'migrate',
        'app_id' => 'shop',
      ),
      'redirect' => 
      array (
        'name' => '301 Редирект',
        'description' => 'Помогает перейти на Shop-Script с других CMS и обновить адреса страниц интернет-магазина, сохранив их индексацию поисковыми системами.',
        'vendor' => 'webasyst',
        'version' => '1.1',
        'img' => 'wa-apps/shop/plugins/redirect/img/redirect.png',
        'icons' => 
        array (
          16 => 'img/redirect.png',
        ),
        'shop_settings' => true,
        'handlers' => 
        array (
          'frontend_error' => 'frontendError',
          'frontend_search' => 'frontendSearch',
        ),
        'id' => 'redirect',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
    ),
  ),
  'handlers' => 
  array (
    'webasyst' => 
    array (
      'backend_header' => 
      array (
        0 => 
        array (
          'app_id' => 'installer',
          'regex' => '/backend_header/',
          'file' => 'webasyst.backend_header.handler.php',
          'class' => 'installerWebasystBackend_headerHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'waid_auth' => 
      array (
        0 => 
        array (
          'app_id' => 'installer',
          'regex' => '/waid_auth/',
          'file' => 'webasyst.waid_auth.handler.php',
          'class' => 'installerWebasystWaid_authHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'backend_push' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/backend_push/',
          'file' => 'webasyst.backend_push.handler.php',
          'class' => 'shopWebasystBackend_pushHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'backend_dispatch_miss' => 
      array (
        0 => 
        array (
          'app_id' => 'team',
          'regex' => '/backend_dispatch_miss/',
          'file' => 'webasyst.backend_dispatch_miss.handler.php',
          'class' => 'teamWebasystBackend_dispatch_missHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'backend_personal_profile' => 
      array (
        0 => 
        array (
          'app_id' => 'team',
          'regex' => '/backend_personal_profile/',
          'file' => 'webasyst.backend_personal_profile.handler.php',
          'class' => 'teamWebasystBackend_personal_profileHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
    ),
    'contacts' => 
    array (
      'contacts_collection' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/contacts_collection/',
          'file' => 'contacts.contacts_collection.handler.php',
          'class' => 'shopContactsContacts_collectionHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'team',
          'regex' => '/contacts_collection/',
          'file' => 'contacts.contacts_collection.handler.php',
          'class' => 'teamContactsContacts_collectionHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'delete' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'shopContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'team',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'teamContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        2 => 
        array (
          'app_id' => 'webasyst',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'webasystContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'explore' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/explore/',
          'file' => 'contacts.explore.handler.php',
          'class' => 'shopContactsExploreHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'links' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/links/',
          'file' => 'contacts.links.handler.php',
          'class' => 'shopContactsLinksHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'merge' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/merge/',
          'file' => 'contacts.merge.handler.php',
          'class' => 'shopContactsMergeHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'profile.tab' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/profile\\.tab/',
          'file' => 'contacts.profile.tab.handler.php',
          'class' => 'shopContactsProfileTabHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'team',
          'regex' => '/profile\\.tab/',
          'file' => 'contacts.profile.tab.handler.php',
          'class' => 'teamContactsProfileTabHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
    ),
    'installer' => 
    array (
      'end_installation' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/end_installation/',
          'file' => 'installer.end_installation.handler.php',
          'class' => 'shopInstallerEnd_installationHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
    ),
    'site' => 
    array (
      'route_delete.after' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/route_delete\\.after/',
          'file' => 'site.route_delete.after.handler.php',
          'class' => 'shopSiteRoute_deleteAfterHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'route_save.after' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/route_save\\.after/',
          'file' => 'site.route_save.after.handler.php',
          'class' => 'shopSiteRoute_saveAfterHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'route_save.before' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/route_save\\.before/',
          'file' => 'site.route_save.before.handler.php',
          'class' => 'shopSiteRoute_saveBeforeHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'update.route' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/update\\.route/',
          'file' => 'site.update.route.handler.php',
          'class' => 'shopSiteUpdateRouteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
    ),
    'shop' => 
    array (
      'backend_welcome' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'migrate',
          'regex' => '/backend_welcome/',
          'class' => 'shopMigratePlugin',
          'method' => 
          array (
            0 => 'backendWelcomeHandler',
          ),
        ),
      ),
      'frontend_error' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'redirect',
          'regex' => '/frontend_error/',
          'class' => 'shopRedirectPlugin',
          'method' => 
          array (
            0 => 'frontendError',
          ),
        ),
      ),
      'frontend_search' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'redirect',
          'regex' => '/frontend_search/',
          'class' => 'shopRedirectPlugin',
          'method' => 
          array (
            0 => 'frontendSearch',
          ),
        ),
      ),
    ),
  ),
);
