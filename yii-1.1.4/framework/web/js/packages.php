<?php

$packages=array(
	'jquery'=>array(
		YII_DEBUG ? 'jquery.js' : 'jquery.min.js',
	),
	'yii'=>array(
		'jquery.yii.js',
	),
	'yiitab'=>array(
		'jquery.yiitab.js',
	),
	'yiiactiveform'=>array(
		'jquery.yiiactiveform.js',
	),
	'jquery.ui'=>array(
		'jui/js/jquery-ui.min.js',
	),
	'bgiframe'=>array(
		'jquery.bgiframe.js',
	),
	'dimensions'=>array(
		'jquery.dimensions.js',
	),
	'ajaxqueue'=>array(
		'jquery.ajaxqueue.js',
	),
	'autocomplete'=>array(
		'jquery.autocomplete.js',
	),
	'maskedinput'=>array(
		'jquery.maskedinput.js',
	),
	'cookie'=>array(
		'jquery.cookie.js',
	),
	'treeview'=>array(
		'jquery.treeview.js',
		'jquery.treeview.async.js',
	),
	'multifile'=>array(
		'jquery.multifile.js',
	),
	'rating'=>array(
		'jquery.rating.js',
	),
	'metadata'=>array(
		'jquery.metadata.js',
	),
	'bbq'=>array(
		'jquery.ba-bbq.js',
	),
);

$dependencies=array(
	'yii'=>array(
		'jquery',
	),
	'jquery.ui'=>array(
		'jquery',
	),
	'yiitab'=>array(
		'jquery',
	),
	'yiiactiveform'=>array(
		'jquery',
	),
	'bgiframe'=>array(
		'jquery',
	),
	'dimensions'=>array(
		'jquery',
	),
	'ajaxqueue'=>array(
		'jquery',
	),
	'autocomplete'=>array(
		'jquery',
		'bgiframe',
		'dimensions',
		'ajaxqueue',
	),
	'maskedinput'=>array(
		'jquery',
	),
	'cookie'=>array(
		'jquery',
	),
	'treeview'=>array(
		'jquery',
		'cookie',
	),
	'multifile'=>array(
		'jquery',
	),
	'rating'=>array(
		'jquery',
		'metadata',
	),
	'bbq'=>array(
		'jquery',
	),
);

return array($packages,$dependencies);