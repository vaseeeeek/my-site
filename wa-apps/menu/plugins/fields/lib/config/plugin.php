<?php

return array(
	'name' => 'Дополнительные поля',
	'description' => 'Дополнительные поля для пунктов меню',
	'img' => 'img/fields.png',
	'vendor' => '1015472',
	'version' => '2.0.2',
	'handlers' => array(
		'item_params' => 'itemParamsHandler',
		'item_params_allowed' => 'itemParamsAllowedHandler'
	)
);
