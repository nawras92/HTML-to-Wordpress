<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'keepitsimple' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'keepitsimple' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '123' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'WAk6(9TpsKsy`#c{WWws9yV#+D~1*@xOi#!C^u,wYYJ7!/x1.DH&1BLzI#wSi8_F' );
define( 'SECURE_AUTH_KEY',  '%Xi&w{^c@V*mI6Fb<L[-ra.@Wo5(aI:Cyu_/xfy1;&#`9-n3gCX]I&w8Q]+)^3[+' );
define( 'LOGGED_IN_KEY',    '37=N`I&Xz#W@4Pjs)I18ky+xkjjq0vPN.,U?iFR}H#^`{F8e8`XfTKe.;#?(?o8K' );
define( 'NONCE_KEY',        'e|WF3L$c+S<r1/ogp!?nU)I&t^)1A%g[RrXNaEdGUzK_qo?jG0=>[txHDs52(aod' );
define( 'AUTH_SALT',        'l.cC.8N^CA&7~4ON%V?IKbAIaa3?8|JK9,>GC)u ;?4GV?- w5R,B$G,4snL1iTf' );
define( 'SECURE_AUTH_SALT', 'MjQ`mfKE&Z|M<4VKe:Og7^t^3wlG[q+/>$fyvI9LXogDF0 rL2 >NFkjWY#_N.KA' );
define( 'LOGGED_IN_SALT',   ';3[nz-W|l(EI?v4E-gsNodrZKXPV>-arfmXP|0WYD%*0KVY-A/_C0jyQf!QV?zX<' );
define( 'NONCE_SALT',       '%-ee?@j@{d[E4iSf& mwxyZjKIvxI^gGr+&R^4v.+p._%0~`C{#W#UdPWb8J~*dN' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once( ABSPATH . 'wp-settings.php' );
