<?php

class menuFieldsSettingsControlUtil
{
	private $name;
	private $namespace;
	private $params;
	private $vars;

	/**
	 * @param string $name
	 * @param string $namespace
	 * @param mixed[] $params
	 * @param mixed[] $vars
	 */
	private function __construct($name, $namespace, array $params, array $vars = [])
	{
		$this->name = $name;
		$this->namespace = $namespace;
		$this->params = $params;
		$this->vars = $vars;
	}

	/**
	 * @return string
	 */
	private function getTemplatePath()
	{
		return menuFieldsRoutingUtil::getPluginPath() . "templates/settings_controls/{$this->name}.html";
	}

	/**
	 * @return bool
	 */
	private function hasTemplate()
	{
		return file_exists($this->getTemplatePath());
	}

	/**
	 * @return waSmarty3View
	 */
	private function createView()
	{
		return new waSmarty3View(wa());
	}

	/**
	 * @return string
	 */
	protected function renderBeforeOutput()
	{
		$output = '';

		$css_path = menuFieldsRoutingUtil::getPluginPath() . "css/settings_controls/{$this->name}.css";
		if (file_exists($css_path))
		{
			$css_url = menuFieldsRoutingUtil::getPluginUrl() . "css/settings_controls/{$this->name}.css";

			$output .= "<link rel=\"stylesheet\" href=\"{$css_url}\"/>";
		}

		return $output;
	}

	/**
	 * @return string
	 */
	protected function renderAfterOutput()
	{
		$output = '';

		$js_path = menuFieldsRoutingUtil::getPluginPath() . "js/settings_controls/{$this->name}.js";
		if (file_exists($js_path))
		{
			$js_url = menuFieldsRoutingUtil::getPluginUrl() . "js/settings_controls/{$this->name}.js";

			$output .= "<script src=\"{$js_url}\"></script>";
		}

		return $output;
	}

	/**
	 * @return string
	 */
	public function render()
	{
		if (!$this->hasTemplate())
		{
			return '';
		}

		$view = $this->createView();
		$view->assign($this->vars);
		$view->assign('namespace', $this->namespace);
		$view->assign('params', $this->params);

		$before_output = $this->renderBeforeOutput();
		$general_output = $view->fetch($this->getTemplatePath());
		$after_output = $this->renderAfterOutput();

		$output = $before_output . $general_output . $after_output;

		return $output;
	}

	/**
	 * @param string $namespace
	 * @param mixed[] $params
	 * @return string
	 */
	public static function renderFieldsControl($namespace, $params)
	{
		if (!is_array($params))
		{
			$params = [];
		}

		$control = new self('fields', $namespace, $params);

		return $control->render();
	}
}