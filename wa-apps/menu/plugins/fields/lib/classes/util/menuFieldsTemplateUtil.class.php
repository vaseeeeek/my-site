<?php

class menuFieldsTemplateUtil
{
	public static function getAssetsIncluderJsUrl()
	{
		return menuFieldsRoutingUtil::getPluginUrl(true) . 'js/util/assets_includer.js';
	}
}
