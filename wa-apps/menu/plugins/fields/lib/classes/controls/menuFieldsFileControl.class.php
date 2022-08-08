<?php

class menuFieldsFileControl
{
	/**
	 * @param string $name
	 * @param array $params
	 * @return string
	 */
	public static function render($name, $params = [])
	{
		return menuFieldsControlRenderer::render('file', $name, $params);
	}
}
