<?php
define('CONFIGS_DIR',__DIR__.'/configs');
define('CONTROLLERS_DIR',__DIR__.'/controllers');
define('VIEWS_DIR',__DIR__.'/views');

include('configs/settings.php');
set_include_path(get_include_path().PATH_SEPARATOR.CONFIGS_DIR.PATH_SEPARATOR.CONTROLLERS_DIR.PATH_SEPARATOR.VIEWS_DIR);

include('tableController.php')