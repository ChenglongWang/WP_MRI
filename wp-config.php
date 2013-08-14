
<?php
/** 
 * WordPress 基础配置文件�?
 *
 * 本文件包含以下配置�?项：MySQL 设置、数据库表名前缀、密钥�?
 * WordPress 语言设定以及 ABSPATH。如�?��多信息，请访�?
 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 * 编辑 wp-config.php} Codex 页面。MySQL 设置具体信息请咨询您的空间提供商�?
 *
 * 这个文件用在于安装程序自动生�?wp-config.php 配置文件�?
 * 您可以手动复制这个文件，并重命名为�?wp-config.php”，然后输入相关信息�?
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress 数据库的名称 */
define('DB_NAME', 'mri_wpc');

/** MySQL 数据库用户名 */
define('DB_USER', 'root');

/** MySQL 数据库密�?*/
define('DB_PASSWORD', '');

/** MySQL 主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编�?*/
define('DB_CHARSET', 'utf8');

/** 数据库整理类型�?如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密匙设定�?
 *
 * 您可以随意写�?��字符
 * 或�?直接访问 {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org 私钥生成服务}�?
 * 任何修改都会导致 cookie 失效，所有用户必须重新登录�?
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Onh>[6|7mB&4#%c-|=yQ#l]Fm2l|Sm,48lDZIo`fR-)=19pg#:ff/:GAhoRy*Nu>');
define('SECURE_AUTH_KEY',  'b!sphjr=Q T1;mS9-t`3t>P*7/GyDELA.ZfkTdMQHWu3dZ~ gXf13v[$&hqa*vxO');
define('LOGGED_IN_KEY',    'g7)zB&Y>0l<g3v~^3[f:1CV5Y&zRPhKB/3V,1(yUp caCf.U;3Dozz Odd5%}@;i');
define('NONCE_KEY',        'poK<<VdXkh6wvfnIjoq>H<wTk>b[_[GLQH3Yn.$FYj m]7f__ =ar5LClq3Ock;_');
define('AUTH_SALT',        's$fHhjD9(3E%oI}9mM6wvAo&(a^?@#:OQV|nNk#J!1cXK:q_DR[hZdGjNwB+g`{P');
define('SECURE_AUTH_SALT', '+cGPox(6km+:#:5c]D8bokDg<e-#Yt;VK:^tB5|z^V#Hh,?|1B:#vrZx_T;YHoq_');
define('LOGGED_IN_SALT',   'd-p`S/bZ_4|`u3?O>J0j9j#R6.SrRoOQ6*Q$*?RMqp}CuBvs/G#Or2P.~}1QG-fh');
define('NONCE_SALT',       'P%zZjiF-m%LA(F<uz]v+@m4:vJh29AW!bM{Td@3&4Hq!#8L9%};_}02})f^.yD(8');

/**#@-*/

/**
 * WordPress 数据表前�??
 *
 * 如果您有在同�?��据库内安装多�?WordPress 的需求，请为每个 WordPress 设置不同的数据表前缀�?
 * 前缀名只能为数字、字母加下划线�?
 */
$table_prefix  = 'wp_';

/**
 * WordPress 语言设置，中文版本默认为中文�?
 *
 * 本项设定能够�?WordPress 显示您需要的语言�?
 * wp-content/languages 内应放置同名�?.mo 语言文件�?
 * 要使�?WordPress �?��中文界面，只�?���?zh_CN�?
 */
define('WPLANG', 'zh_CN');

/**
 * �?��者专用：WordPress 调试模式�?
 *
 * 将这个�?改为“true”，WordPress 将显示所有用于开发的提示�?
 * 强烈建议插件�?��者在�?��环境中启用本功能�?
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑�?请保存本文件。使用愉快！ */

/** WordPress 目录的绝对路径�? */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置 WordPress 变量和包含文件�? */
require_once(ABSPATH . 'wp-settings.php');

