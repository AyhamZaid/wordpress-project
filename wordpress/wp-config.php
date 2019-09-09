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
define( 'DB_NAME', 'wordpress' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'vAN1_>|&wI~C*9RYYuMXvm )^g)/Dq>EexT9wz2R5jVnJ`VAM(+3`nQf:l-J:,$Y' );
define( 'SECURE_AUTH_KEY',  ',,s?|)TGN#m)Auy6=X5d5QWZn%<FeC1$PqZ:NeKA`d?R[4H?/l_8voiv`rg*iX,j' );
define( 'LOGGED_IN_KEY',    'r)pot&*EFfg!E.CNa:)0H(_dC;VH%;,2{7Qf3?T%0W.QYTC9:h2l^d,D09Zai,a$' );
define( 'NONCE_KEY',        ' AaH2N|QbjIjlIe/iRKlgmGRG]_/}H7EwcoTGu0ANKYj1t9+A&(4sR@qm:|h~MA6' );
define( 'AUTH_SALT',        '&72jmRel1x=$772D+Lc(.(n_6 B/??h6MciEJt!95<Wz47L>a75oLL;TU8[#=~Oq' );
define( 'SECURE_AUTH_SALT', '%6V)n_q~n6yFFy<#HP[)bYJ<SUQhc{u#{xkXUI+7XK+J?yzF3mgg62d;GG5_cSH6' );
define( 'LOGGED_IN_SALT',   'U<c/(_A_*Bub@Y|VMLG}.Q_NG:om0`K$rmC]2$nLcx&9:SbD5}hrFv=Rc&+KWtCy' );
define( 'NONCE_SALT',       'd~0kI8-yP1e:,]z!c$$pW/8MJq/2f6ui01v>;=[fO`Qm^Gtq{s]tWjL}ng+~t[Uh' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'ay_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once( ABSPATH . 'wp-settings.php' );
