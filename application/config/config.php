<?php

define('BASE_URL', 'http://localhost/ias-cms/');
define('PUBLIC_URL', BASE_URL . 'public/');
define('STOCK_IMAGE_URL', PUBLIC_URL . 'images/stock/');
define('PRECAST_URL', BASE_URL . 'precast/');
define('DATA_URL', PUBLIC_URL . 'data/');

// Physical location of resources
define('PHY_BASE_URL', '/var/www/html/ias-cms/');
define('PHY_PUBLIC_URL', PHY_BASE_URL . 'public/');
define('PHY_FLAT_URL', PHY_BASE_URL . 'application/views/flat/');
define('PHY_STOCK_IMAGE_URL', PHY_PUBLIC_URL . 'images/stock/');
define('PHY_PRECAST_URL', PHY_BASE_URL . 'precast/');
define('PHY_DATA_URL', PHY_PUBLIC_URL . 'data/');

// Login config
define('LOGIN_USERNAME', 'admin@ias.ac.in');
define('LOGIN_PASSWORD', 'iasSeeMyes');

// Git config
define('GIT_USER_NAME', 'sriranga-deploy');
define('GIT_PASSWORD', 'xxx');
define('GIT_REPO', 'github.com/SrirangaDigital/ias-cms.git');
define('GIT_REMOTE', 'https://' . GIT_USER_NAME . ':' . GIT_PASSWORD . '@' . GIT_REPO);
define('GIT_EMAIL', 'accounts@srirangadigital.com');

?>
