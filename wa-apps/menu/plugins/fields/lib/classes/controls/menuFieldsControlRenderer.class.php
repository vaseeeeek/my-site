<?php

class menuFieldsControlRenderer
{
	/**
	 * @param string $id
	 * @param string $name
	 * @param array $params
	 * @return string
	 */
	public static function render($id, $name, $params = [])
	{
		try
		{
			$template_path = menuFieldsRoutingUtil::getPluginPath() . "templates/controls/{$id}.html";
			if (!file_exists($template_path))
			{
				throw new Exception("Шаблон {$template_path} не найден");
			}

			$view = new waSmarty3View(wa());

			$view->assign('name', $name);
			$view->assign('params', $params);

			$assets = [];

			$js_path = menuFieldsRoutingUtil::getPluginPath() . "js/controls/{$id}.js";
			if (file_exists($js_path))
			{
				$assets['js'] = [];
				$assets['js'][] = menuFieldsRoutingUtil::getPluginUrl(true) . "js/controls/{$id}.js";
			}

			$css_path = menuFieldsRoutingUtil::getPluginPath() . "css/controls/{$id}.css";
			if (file_exists($css_path))
			{
				$assets['css'] = [];
				$assets['css'][] = menuFieldsRoutingUtil::getPluginUrl(true) . "css/controls/{$id}.css";
			}

			$view->assign('assets', $assets);

			return $view->fetch($template_path);
		}
		catch (\Exception $e)
		{
			return '';
		}
	}
}
