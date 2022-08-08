<?php

class menuFieldsPluginFileControlRemoveController extends waJsonController
{
	public function execute()
	{
		$url = waRequest::post('url', '', waRequest::TYPE_STRING);
		$basic_url = wa()->getDataUrl(
			menuFieldsPlugin::PLUGIN_ID . '/files/',
			true,
			menuFieldsPlugin::APP_ID
		);

		if (substr($url, 0, strlen($basic_url)) !== $basic_url)
		{
			$this->errors[] = 'Этот файл нельзя удалить';

			return;
		}

		$file = substr($url, strlen($basic_url));
		$path = wa()->getDataPath(menuFieldsPlugin::PLUGIN_ID . '/files', true, menuFieldsPlugin::APP_ID);
		if (file_exists($path . "/{$file}"))
		{
			try
			{
				waFiles::delete($path . "/{$file}");
			}
			catch (waException $e)
			{
				$this->errors[] = $e->getMessage();

				return;
			}
		}

		$this->response = $file;
	}
}
