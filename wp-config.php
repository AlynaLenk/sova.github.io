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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'sovamentalclub' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U7]5_E^:d&UYq5tf*e81|5AV/_Hu$OEK|rn #&x*IfCHZ%hq?~?>lD[bl)*6aL`V' );
define( 'SECURE_AUTH_KEY',  'P4_aNgs e+R;A}Ucj-+Jd?dS}R{q,h/W?}>F?(*V!+)LH,ZW|-<Tby?8xYW^7p`m' );
define( 'LOGGED_IN_KEY',    'E9*r|-iSZjaR5jCicI|6#`s`>|0$0c2q}L/]7<H1|mL[zpa=Zj(`tey*Sz9(x6Fh' );
define( 'NONCE_KEY',        'JWCtY/wAfQ2s:YC?yuv9hju)AaR|/,F3+5t:wl)c:e R!5+k>H^W84V]p0L~j}Ik' );
define( 'AUTH_SALT',        'g%.xD*w-W=.$tj|_[/~b vv&J1weiXzRy]=sTo{pJ~njJO:u>9r3S~P]^I@vA0R&' );
define( 'SECURE_AUTH_SALT', 'w4f*h||6PHIJClg35TZc}FiM8x+,1vA1tUtlNdbR,wFRrg~XG}j^|Nb]/DBOZ#&^' );
define( 'LOGGED_IN_SALT',   'sKoNtg43?]4t7(^&3`Us2kUSg-iVbpac,b=Sff^j,Kv.U<a/eEsMXkFP;mQE&f43' );
define( 'NONCE_SALT',       ';#TdtG_~E$X;=syDLgN]d)QMT/hP2OE[qS;]##za|VWfLiIS{mdGU3m#!E0Ke,>j' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
