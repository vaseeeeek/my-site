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

class installerUpdateAction extends waViewAction
{
    public function execute()
    {
        $messages = installerMessage::getInstance()->handle(waRequest::get('msg'));

        $counter = array(
            'total'      => 0,
            'applicable' => 0,
            'payware'    => 0,
        );
        $items = array();

        $do_logic = function () use(&$counter, &$items) {

            $items = installerHelper::getUpdates();
            $counter = installerHelper::getUpdatesCounter(null);
            if (isset($items['installer'])) {
                $items['installer']['name'] = _w('Webasyst Framework');
            };
            if (isset($items['webasyst'])) {
                $items['webasyst']['name'] = _w('Webasyst Framework');
            }
        };
        $this->safeCall($do_logic, $messages);

        installerHelper::checkUpdates($messages);

        if (!waRequest::get('_')) {
            $this->setLayout(new installerBackendStoreLayout());
            // If we get the messages in action - override the messages from the layout?
            if ($messages) {
                $this->getLayout()->assign('messages', $messages);
            }
            $this->getLayout()->assign('update_counter', $counter['total']);
            $this->getLayout()->assign('no_ajax', true);
        } elseif ($messages) {
            $this->view->assign('messages', $messages);
        }

        $this->resortItems($items);

        $this->view->assign('error', false);
        $this->view->assign('update_counter', $counter['total']);
        $this->view->assign('update_counter_applicable', $counter['applicable']);
        $this->view->assign('update_counter_payware', $counter['payware']);
        $this->view->assign('items', $items);
        $this->view->assign('domain', installerHelper::getDomain());
        $this->view->assign('version', wa()->getVersion('installer'));

        $this->view->assign('title', _w('Updates'));
    }

    protected function resortItems(array &$items)
    {
        $top = [
            'installer'
        ];

        $top_items = [];
        foreach ($top as $key) {
            if (isset($items[$key])) {
                $top_items[$key] = $items[$key];
                unset($items[$key]);
                continue;
            }
        }

        $items = array_merge($top_items, $items);
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
