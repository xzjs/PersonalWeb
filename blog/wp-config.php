<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'xzjsroot1993');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'N|FyGma&%6sSSS$;]PWxaou[Xtcl-Z`g-uC%u2umqb-1jFxv3}Nnmu$z)l%;WQDp');
define('SECURE_AUTH_KEY',  'Q42{]?QSl|+^3lVJSc*)1{-d^hcZy2[}jmL!_Rx,dV=-`~!]u``O{-P?TZ2WOcP-');
define('LOGGED_IN_KEY',    'jGG+iG!(~E~nlfF-wC7+MW<lyfg%RhF+l,c+fvhz{0 0l^ROv|kLtMBZ[ H 3TZP');
define('NONCE_KEY',        'T<]*C |Xn:M:FzCW&MRV~e[>O|+<82TbmHF`|OEgmY^e?|Bxfv2-/{7Om6eG]YC%');
define('AUTH_SALT',        'C}~tnt|A^V.Tvx@GM^x89tiE13o0]2g+H+aNIIVS/ypgOtQ<C2f<-cG&Y%*e8<qm');
define('SECURE_AUTH_SALT', 'zfGs((7ML5>8TsN:Uz3bC=(JYX55D?WT?v&w|ynOTiKU `bg*Zu1P_lb7yuL|U=G');
define('LOGGED_IN_SALT',   '~EDc,v[Rc~O(1ttP^<9mK&QAxO-k~/#n$).4g2KG:b*nyTg/<<YM@6uK#sP-d2&*');
define('NONCE_SALT',       'v^q.#J]+.qgWF }*(/+q8!(^Uz wM!W&!@{xUF}.2l@A.~6U_Xyehc2o$eiPPwnZ');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
