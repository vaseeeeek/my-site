<?php

class menuFieldsRoutingUtil
{
	/**
	 * @return string
	 */
	public static function getPluginPath()
	{
		return menuFieldsContext::getInstance()->getPluginPath();
	}

	/**
	 * @param bool $absolute
	 * @return string
	 */
	public static function getPluginUrl($absolute = true)
	{
		return menuFieldsContext::getInstance()->getPluginUrl($absolute);
	}
}