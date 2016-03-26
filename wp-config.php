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
define('DB_NAME', 'bikes');

/** Имя пользователя MySQL */
define('DB_USER', 'bikes');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'bikesusr');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '!Ye;}|~8(^v&N#0 E[Ay*QVNy.+y+B|1)!#3opL<>DcE|&@?wCahK kr-![=Yn*D');
define('SECURE_AUTH_KEY',  '#r/bT0X:Z|z|hd=eh{t]Dzy-kJ,|Z2y_CM_fB}V)2E+3|DHp4Nl`Xs@,s|_a})!Z');
define('LOGGED_IN_KEY',    'kZK1@j:70m?^fGJ*Pi9y8mmbRh`*YrpWx#;jQ25||ImU(N>JF-zXQkj%X[`0ebq?');
define('NONCE_KEY',        ')zqQw3,Jeyd-B#6KgfSfrW|9N$Fenop3?LL$F[+M{0A5s-sO=`_%:LUrCel|{IX3');
define('AUTH_SALT',        '|d!-/@Qq5lWR5:!.nL,hF8J,4@5;h`|3KC`.tC1SI% wq&&q@zV R_*D+p3miZZF');
define('SECURE_AUTH_SALT', '5i%-xN!*#6Ijv+Fn?~k*K?r9pcq,1!WAc~gD|x}Q|(-%!}LB->#17ywC.wRYzD(z');
define('LOGGED_IN_SALT',   'u(^j.T)da1`mR`n2w_S9KX(%Mf([Kv6mp=J)Hjb,,5CRSQnCJrHyqik!8EbT8Xpd');
define('NONCE_SALT',       '/O{:i|s`{-^0JHl7~R)Xs9V_((>+[oPvk,(p<hJ*!V8;|_Y88,+E:_HEq|g!]AC{');

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
