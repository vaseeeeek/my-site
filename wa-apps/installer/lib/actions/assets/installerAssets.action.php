<?php

/*
 * This file is part of Webasyst framework.
 *
 * Licensed under the terms of the GNU Lesser General Public License (LGPL).
 * http://www.webasyst.com/framework/license/
 *
 * @link http://www.webasyst.com/
 * @author Webasyst LLC
 * @copyright 2011 Webasyst LLC
 * @package installer
 */

class installerAssetsAction extends waViewAction
{
    public function execute()
    {
        $messages = array();

        $do_logic = function() {
            $options = array(
                'installed'    => true,  // list all local apps
                'requirements' => true,  // check system requirements
                'action'       => true,  // strict checking requirements
                'system'       => true,  // include system plugins
                'status'       => false, // check app status at app.php

                'filter' => (array)waRequest::get('filter'),
            );

            $filter = array();

            $items = installerHelper::getInstaller()->getApps($options, $filter);

            $local_apps = wa()->getApps();
            foreach ($items as $app_id => &$app) {
                if (isset($local_apps[$app_id])) {
                    $app['name'] = $local_apps[$app_id]['name'];
                } else {
                    $app['name'] = _wd($app_id, $app['name']);
                }
                unset($app);
            }

            $types = array(
                'plugins',
                'widgets',
                'themes',
            );

            $types_options = array(
                'plugins' => array(
                    'system' => true,
                ),
            );

            $extras_options = array(
                'local'            => true,
                'status'           => false,
                'installed'        => true,
                'translate_titles' => true,
            );

            foreach ($types as $type) {
                $apps = array_keys($items);

                $extras = installerHelper::getInstaller()->getExtras(
                    $apps,
                    $type,
                    $extras_options + ifset($types_options[$type], array())
                );
                foreach ($extras as $app_id => $extras_item) {
                    if (!empty($extras_item[$type])) {
                        if (isset($items[$app_id][$type])) {
                            unset($items[$app_id][$type]);
                        }
                        $items[$app_id] += $extras_item;
                    }
                }
            }

            $this->view->assign('items', $items);
        };

        $this->safeCall($do_logic, $messages);

        if (!waRequest::get('_')) {
            $this->setLayout(new installerBackendStoreLayout());
            // If we get the messages in action - override the messages from the layout?
            if ($messages) {
                $this->getLayout()->assign('messages', $messages);
            }
        } elseif ($messages) {
            $this->view->assign('messages', $messages);
        }

        $this->view->assign('title', _w('Assets'));
    }

    protected function safeCall($callback, &$messages = [])
    {
        $legacy = version_compare(PHP_VERSION, '7.0') < 0;
        if ($legacy) {
            try {
                $callback();
            } catch (Exception $ex) {
                // Save the error in the log and add to the common array
                installerHelper::handleException($ex, $messages);
            }
        } else {
            try {
                $callback();
            } catch (Throwable $ex) {
                // Save the error in the log and add to the common array
                installerHelper::handleException($ex, $messages);
            }
        }
    }
}
