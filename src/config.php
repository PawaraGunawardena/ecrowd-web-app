<?php

// Always provide a TRAILING SLASH (/) AFTER A PATH
define('URL', 'http://localhost/eCrowd/src/');
define('LIBS', 'libs/');

define('DB_TYPE','mysql');
define('DB_HOST','localhost');
define('DB_NAME','ecrowd_test');
define('DB_USER','root');
define('DB_PASS','');

// The sitewide hashkey, do not change this because its used for passwords!
// This is for other hash keys... Not sure yet
define('HASH_PASSWORD_KEY', '5$68ejfj6$#%&00&9oll  ');

// This is for database passwords only
//define('HASH_PASSWORD_KEY', 'catsFLYhigh2000miles');