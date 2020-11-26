<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'cms' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'P]+#) !m~,P3yTK#HHv&x55bNlequ 3h~=,/]%DhW+&Cd}u(Q%&0YY.y`L`j+<lN' );
define( 'SECURE_AUTH_KEY',  '2J$c]88Vg`A3<h<{Xe<Pao$;)Z3<AUnT_s=mNMQsJ,~x1>)}{x0/_8rO3~^X!P-_' );
define( 'LOGGED_IN_KEY',    '_;xL2wLjb>I:(L&d~Bjrs74oV6p)vtu.QH=3`H@r#g_#)QPS|L8mk[=POfXXym.G' );
define( 'NONCE_KEY',        '^y@^yRpp6jO`3}$h3W:.: ~V.7` vQ_|8h_quTRPTPxI>2A&^Hl]c[ vm(v:o1Jz' );
define( 'AUTH_SALT',        '}E Zb)}BGmMJM/V9/W~4@8:1EO.4!>`STpOM?1v}E~>W|(g<-9-1QI<<dk7SRFNw' );
define( 'SECURE_AUTH_SALT', 'besEMj#EV[$6;HkGS&wbc!;:%0)P]VA3a8kzcX7G)Muub]S.iYMveYsTIO@3/UPh' );
define( 'LOGGED_IN_SALT',   '=;)&^+~%eAhv~@%+[`@6+{c~`h@SZU_86nwq;_*KDB-mO95Vv0<d~oI(Co k%Csv' );
define( 'NONCE_SALT',       '^5P8Z`(C^/!j9eY]?D.m_n{)lBz4sYUn[vpqs&3N~hd *BUSeuWA-#:32%wx PsI' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
