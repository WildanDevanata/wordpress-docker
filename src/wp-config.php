<?php
// **Pengaturan Database MySQL - Sesuai dengan docker-compose.yml**
define('DB_NAME', 'wordpress_db');
define('DB_USER', 'wordpress_user');
define('DB_PASSWORD', 'sandi_wordpress');
define('DB_HOST', 'mysql-server');

// **Charset dan Collate**
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// **Pengaturan Redis Cache**
define('FS_METHOD', 'direct'); // Mengizinkan WordPress menulis ke filesystem
define('WP_REDIS_HOST', 'redis-server');
define('WP_REDIS_PORT', 6379);
define('WP_REDIS_PREFIX', 'dolanan');
define('WP_REDIS_DATABASE', 0);
define('WP_REDIS_TIMEOUT', 1);
define('WP_REDIS_READ_TIMEOUT', 1);


// **Security Keys (Dapat digenerate dari WordPress API)**
define('AUTH_KEY',         'your-random-key');
define('SECURE_AUTH_KEY',  'your-random-key');
define('LOGGED_IN_KEY',    'your-random-key');
define('NONCE_KEY',        'your-random-key');
define('AUTH_SALT',        'your-random-key');
define('SECURE_AUTH_SALT', 'your-random-key');
define('LOGGED_IN_SALT',   'your-random-key');
define('NONCE_SALT',       'your-random-key');

// **Table Prefix**
$table_prefix = 'wp_';

// **Debug Mode**
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */


// **Path ke WordPress**
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

// **Load settings WordPress**
require_once ABSPATH . 'wp-settings.php';
?>
