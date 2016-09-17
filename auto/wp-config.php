<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'auto');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'RW}u~ gk  SC_KK7k@)W>?RcN74F~pm1dY`uKRE7%*-3wwBpaNJ `j:6*g4|-%jr');
define('SECURE_AUTH_KEY',  'qOxQVMA3yQ!VOrdrm^9uG5*<x$5LCVJo;lDM# 4uQaP5Kl8] T<YX}q5^t7qQjS.');
define('LOGGED_IN_KEY',    'Z$Szb]ypKp;LTXKRBS|^7BLYs)L+^x>_doL|ub3AdUy+2k=$td+,,8GCLeI*[&p!');
define('NONCE_KEY',        '0 *:TI!O%ea![BRCBd48bQ#v35lL~I.ckSGjDh#a,n=Wm/nPQZ? CoBOtL|H|1K^');
define('AUTH_SALT',        '[nmNAZK5-/p7s 5@]@+uw9.-o wyj9~$G!Ds!|x(kA=K#2Y9EN+:l}W@+A?r4I)Q');
define('SECURE_AUTH_SALT', 'cj%@O%f{$0Uc$}[z<_$-@t!lL)Fk+ok}VoQd@-%rMK,JBI8c[B<{,}B ),:o)zY}');
define('LOGGED_IN_SALT',   '/,uqoylUnm!R)R!|$z4O+9M7!1q,+Ttes|bv<XW4/*qilf~qiC- L*><T3v[+/@B');
define('NONCE_SALT',       '4U`Lz2;}{:=f+$@k4Bj>9hBqMUK>713fE^ZM*i46KyJxs|>Z2s7U7T((-XH/tP2>');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
