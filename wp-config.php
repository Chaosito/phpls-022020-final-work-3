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
define( 'DB_NAME', 'final-work-3' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'final-work-3' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'final-work-3' );

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
define( 'AUTH_KEY',         'CZci!~h?HKHOI3en+aNd3s>bx58KTE#3xNN@QFh)z.dgg/1v~ggcH0.n:$xdxTQh' );
define( 'SECURE_AUTH_KEY',  'ZOXXDQWVk>!w+I9~63MM>Z6Z<K-T`<1Jv:5Fk:K$(X~I}83/HxT3V;u]/.R_M]$Q' );
define( 'LOGGED_IN_KEY',    '%SYVqvkUf;)WD,|{LNnr-?S:00AeBC?ixJOViW;pa|:hUOeL<^]}RK[S#[8UZ^m/' );
define( 'NONCE_KEY',        'QOUi3O`*R$_uq ex{KD[2pGcTN}2,;Ag%L50:<Rd=#1Q0~,hb@q5A|i=8e9XM O4' );
define( 'AUTH_SALT',        'sJzyeI=`1KhE}.JwQ84LkG Xa dEW1.mVBs;IhNR2rBvKF^3*&6nd+ac/0o-Fx-:' );
define( 'SECURE_AUTH_SALT', 's&D+q>BQC_~3a]OD#^7Q2l6nrWO|{2Ay[c9#hyd=@wy5sJN|quvV[H(*VkF`_,@L' );
define( 'LOGGED_IN_SALT',   '{c}T8z+v45U{,{*P3)6Cd[j15WbSsi@]kFT>*XS{@RjJ<lh2kWumH Cf=(<%+L$u' );
define( 'NONCE_SALT',       'zADJ,y:rI~<Ap,dGlIN&FC /uEl(:&mqCZ)l^H3IA>3F=ldaI-HP8Z.;p=BO<KEO' );

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
