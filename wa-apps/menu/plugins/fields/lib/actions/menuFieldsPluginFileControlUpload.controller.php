<?php

class menuFieldsPluginFileControlUploadController extends waUploadJsonController
{
	protected $name;

	protected function process()
	{
		$f = waRequest::file('file');
		$this->name = $f->name;

		if ($this->processFile($f))
		{
			$this->response = wa()->getDataUrl(
				menuFieldsPlugin::PLUGIN_ID . '/files/' . $this->name,
				true,
				menuFieldsPlugin::APP_ID
			);
		}
	}

	protected function getPath()
	{
		return wa()->getDataPath(menuFieldsPlugin::PLUGIN_ID . '/files', true, menuFieldsPlugin::APP_ID);
	}

	protected function isValid($f)
	{
		$not_allowed = ['php', 'php5', 'ini', 'htaccess'];
		if (in_array(strtolower($f->extension), $not_allowed))
		{
			$this->errors[] = 'Файлы этого формата запрещены к загрузке';

			return false;
		}

		return true;
	}

	protected function save(waRequestFile $f)
	{
		if (file_exists($this->path . DIRECTORY_SEPARATOR . $f->name))
		{
			$i = strrpos($f->name, '.');
			$name = substr($f->name, 0, $i);
			$ext = substr($f->name, $i + 1);
			$i = 1;
			while (file_exists($this->path . DIRECTORY_SEPARATOR . $name . '-' . $i . '.' . $ext))
			{
				$i++;
			}

			$this->name = $name . '-' . $i . '.' . $ext;

			return $f->moveTo($this->path, $this->name);
		}

		return $f->moveTo($this->path, $f->name);
	}
}
