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
define('DB_NAME', 'wp_nexthouse');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'c)K[rC>Ze3VJ8_JJjNE&ZwM6O8F]k0?AY}*0,nnhcdR~!Zt0b:g{oq.h-S|}h`No');
define('SECURE_AUTH_KEY',  ' D#Dw6|6CX ]0I>ecH0o;rXU77qFyu?s2A^=RvzP7w9$/g=)|-4j O~A,`y`FUC9');
define('LOGGED_IN_KEY',    'rrZ$jX_NN$$guB^DwkP.h{<7YN<|Y9#ne}fY`sDG5uIx@l{bW^!hC=M{;mf(.VfK');
define('NONCE_KEY',        ' E{SJYSO%kX,!.z|(@a>q@-u{7-:ypLn?e:2N2[}P=BJgho[Q4?YB+~HL.f1&mx8');
define('AUTH_SALT',        '_SFoil_hc{iFe;`Uo&Bj|vn>aCDK:&nrO/o%zbFR*>Svu$:.UR-&i|][{og[ya,5');
define('SECURE_AUTH_SALT', '1xvkX]w6gbG7}ue^BG?m:%D:FTDlM#s:Ii<0cXWaBz3Q-.MzKK?4VhX7S~#l9rS)');
define('LOGGED_IN_SALT',   '=-pn[&L+>=0o<Rq1{hzIFl%nVT)WchOkQ3 H|PuNy.W[)B)zniD<-F:HXYbJIANp');
define('NONCE_SALT',       '5kj0I:GlPV`Hs,/kr-Pr{J(@yr<A{f3TlbqV))29m3,nv[ gtQrEJvBp?naMS1lR');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

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
