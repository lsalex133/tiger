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
define( 'DB_NAME', 'tigers_bd' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'XgLU*K44KoH?:#K$`^-BmuP}znOk+F+!A}=>rPt>[[b`P[AQ;pfF~;n9QA;^Y}1z' );
define( 'SECURE_AUTH_KEY',  'uV:^(hrUmmyYeQD$3M.uhF}6Fq6-G4%ADAD/a:7G-6;j1s0h7BnUB)u~<8/jMw>:' );
define( 'LOGGED_IN_KEY',    'PI_~Lb,W4aHi_Xb^Bo[p@rwP*:9Kc*nL7~-Yt7!^wE`iNr*(N)RG&wD|KVn>n0ap' );
define( 'NONCE_KEY',        'xRgTO;00/KsKzwQ7QK_dD90&X&PQO>2tj$~:YbR>C_sW@,iu6~m-,,y?6H`<ua,8' );
define( 'AUTH_SALT',        'nibZ7v0.St((,C5`K4`zAL[r[IpQz<eF<l1 .pWbIYdL~{Ztz7YGGbG)kHTM=1)<' );
define( 'SECURE_AUTH_SALT', 'd+E4Yu4=2hT,1b2/q/8h;rN(xQm]4NHI8VQ=~tA{1RfYQtfr1P.)L y&f/Q }T=`' );
define( 'LOGGED_IN_SALT',   'WGpucQ.eVCu@3M(t2`,6~+;EneUQ#/LDCO4mjN:%vY59`%,TH6{w] >9Rk<fk#3E' );
define( 'NONCE_SALT',       'zh/dkr{Me=Q](z* hNzh26bvxWStwc;%s<N^h%4Tm /72^Ehh%?,S^FRip][o8ga' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
