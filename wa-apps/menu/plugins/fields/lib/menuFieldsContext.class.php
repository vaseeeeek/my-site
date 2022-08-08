<?php

class menuFieldsContext
{
	private static $self;

	/**
	 * @return self
	 */
	public static function getInstance()
	{
		if (!isset(self::$self))
		{
			self::$self = new self(menuFieldsPlugin::getInstance());
		}

		return self::$self;
	}

	/**
	 * @return string
	 */
	public function getPluginPath()
	{
		$plugin_id = menuFieldsPlugin::PLUGIN_ID;
		$path = wa(menuFieldsPlugin::APP_ID)->getAppPath("plugins/{$plugin_id}/");

		return $path;
	}

	/**
	 * @param bool $absolute
	 * @return string
	 */
	public function getPluginUrl($absolute = true)
	{
		$plugin_id = menuFieldsPlugin::PLUGIN_ID;
		$url = wa(menuFieldsPlugin::APP_ID)->getAppStaticUrl(menuFieldsPlugin::APP_ID, $absolute)
			. "plugins/{$plugin_id}/";

		return $url;
	}
}