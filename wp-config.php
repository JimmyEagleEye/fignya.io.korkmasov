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
define('DB_NAME', 'inetbase');

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
define('AUTH_KEY',         'VN7QA=M-3:4F5!Y/ FJ>/>hm8ZpB65Pd8myqw@j?2AuO&N(3R6H5{d1S<<t(o+ey');
define('SECURE_AUTH_KEY',  '7t?|!a(Any54s/nfqyxy<)euJo0+jiZ++:OF3TAn7[j=RJDA%*0m~Z)JeqS~c3`R');
define('LOGGED_IN_KEY',    '#H[4d7Cr&OfM~|I{s#1n)S:@E>vKQeoe@NF4 >~b#)gqmDGlh+o(Htz$P.mc{]ty');
define('NONCE_KEY',        'bwod3`6gNbu5 uN1jWeXMtf!~. tk.t(oyii6AudPP.V<DX^Ak0zWBw7DV{MnqSP');
define('AUTH_SALT',        'Fy#? 7%byv^&wbS[%*n3=.5oiHq+,jFmM3t8aQgOrD6__$,5nY0Z@*(xK![j]g6E');
define('SECURE_AUTH_SALT', '*c6x@*`V[{i;)%KAi``6E1)}5MvDXai{h!u`?hP75PDgG&U~(zx[&t2]wN{fn|OA');
define('LOGGED_IN_SALT',   'B:wL#Gn*A.k.eUQASX3(k =&bKnF,/A0HxU~5d7S+W,EX2Zu])uX9pO3&oQ:=G 8');
define('NONCE_SALT',       '>C=eUss+1Zp>[-H}Ix!c@BSzXK!Afb?eZG%qxn0C*/:oM+#Z:#MH:,i |I]Ze!9R');

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
