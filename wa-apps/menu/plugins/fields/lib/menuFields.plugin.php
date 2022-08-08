<?php

class menuFieldsPlugin extends waPlugin
{
	const APP_ID = 'menu';
	const PLUGIN_ID = 'fields';

	/**
	 * @return self
	 */
	public static function getInstance()
	{
		return wa(self::APP_ID)->getPlugin(self::PLUGIN_ID);
	}

	/**
	 * @inheritDoc
	 */
	public function saveSettings($settings = array())
	{
		parent::saveSettings($settings);

		$menu_item_model = new menuItemModel();
		$ids = array_keys($menu_item_model->getAll('id'));

		/**
		 * @var menuConfig $config
		 */
		$config = wa('menu')->getConfig();
		foreach ($ids as $id)
		{
			$config->clearCache($id);
		}
	}

	/**
	 * @return mixed[]
	 */
	public function itemParamsHandler()
	{
		$params = [];

		$fields = $this->getSettings('fields');
		if (!is_array($fields) || empty($fields))
		{
			return [];
		}

		$params['fields_delimiter'] = [
			'title' => '',
			'control_type' => waHtmlControl::INPUT,
			'custom_control_wrapper' => '<h3 style="margin: 5px 0 15px 0;">Дополнительные поля</h3>',
		];

		foreach ($fields as $id => $field)
		{
			$key = ifempty($field, 'key', $id);
			$control_type = $this->getControlType($field['type']);

			$params["field_{$key}"] = [
				'title' => $field['name'],
				'control_type' => $control_type,
				'description' => '{$item.field_' . $key . '}',
			];
		}

		return $params;
	}

	public function itemParamsAllowedHandler()
	{
		$params = [];

		$fields = $this->getSettings('fields');
		if (!is_array($fields) || empty($fields))
		{
			return [];
		}

		foreach ($fields as $id => $field)
		{
			$key = ifempty($field, 'key', $id);

			$params[] = "field_{$key}";
		}

		return $params;
	}

	private function getControlType($type)
	{
		if ($type === 'file')
		{
			return 'custom menuFieldsFileControl::render';
		}

		return $type;
	}
}
