<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

ERROR - 2017-11-12 00:14:02 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column '0' in 'where clause' with query: "SELECT COUNT(*) as count, date_usage FROM `voucher` WHERE `0` = 'date_usage' AND `1` = 'IS NOT' AND `2` IS null GROUP BY `date_usage`" in /Library/WebServer/Documents/voucherbox/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-11-12 00:18:41 --> Notice - Undefined index: usage_date in /Library/WebServer/Documents/voucherbox/fuel/app/views/dashboard/index.php on line 180
ERROR - 2017-11-12 00:19:34 --> Parsing Error - parse error in /Library/WebServer/Documents/voucherbox/fuel/app/views/dashboard/index.php on line 182
ERROR - 2017-11-12 00:19:35 --> Parsing Error - parse error in /Library/WebServer/Documents/voucherbox/fuel/app/views/dashboard/index.php on line 182
ERROR - 2017-11-12 15:49:01 --> Notice - Array to string conversion in /Library/WebServer/Documents/voucherbox/fuel/app/views/dashboard/index.php on line 174
ERROR - 2017-11-12 15:50:44 --> Parsing Error - parse error, expecting `')'' in /Library/WebServer/Documents/voucherbox/fuel/app/classes/controller/dashboard.php on line 54
ERROR - 2017-11-12 15:52:26 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.5' in 'field list' with query: "SELECT `t0`.`5` AS `t0_c0`, `t0`.`id_voucher` AS `t0_c1` FROM `voucher` AS `t0` WHERE `t0`.`date_usage` IS NOT null" in /Library/WebServer/Documents/voucherbox/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-11-12 15:52:42 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.limit' in 'where clause' with query: "SELECT `t0`.`id_voucher` AS `t0_c0`, `t0`.`id_recipient` AS `t0_c1`, `t0`.`id_offer` AS `t0_c2`, `t0`.`date_expiration` AS `t0_c3`, `t0`.`date_usage` AS `t0_c4`, `t0`.`code` AS `t0_c5` FROM `voucher` AS `t0` WHERE `t0`.`date_usage` IS NOT null AND (`t0`.`limit` = 5)" in /Library/WebServer/Documents/voucherbox/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-11-12 15:52:53 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.5' in 'field list' with query: "SELECT `t0`.`5` AS `t0_c0`, `t0`.`id_voucher` AS `t0_c1` FROM `voucher` AS `t0` WHERE `t0`.`date_usage` IS NOT null" in /Library/WebServer/Documents/voucherbox/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-11-12 16:09:11 --> Runtime Recoverable error - Argument 1 passed to Orm\Query::_parse_where_array() must be of the type array, string given, called in /Library/WebServer/Documents/voucherbox/fuel/packages/orm/classes/query.php on line 634 and defined in /Library/WebServer/Documents/voucherbox/fuel/packages/orm/classes/query.php on line 621
ERROR - 2017-11-12 16:09:16 --> Parsing Error - parse error in /Library/WebServer/Documents/voucherbox/fuel/app/classes/controller/dashboard.php on line 54
ERROR - 2017-11-12 16:22:09 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.date' in 'order clause' with query: "SELECT `t0`.`id_voucher` AS `t0_c0`, `t0`.`id_recipient` AS `t0_c1`, `t0`.`id_offer` AS `t0_c2`, `t0`.`date_expiration` AS `t0_c3`, `t0`.`date_usage` AS `t0_c4`, `t0`.`code` AS `t0_c5` FROM `voucher` AS `t0` WHERE `t0`.`date_usage` IS null ORDER BY `t0`.`date` DESC LIMIT 5" in /Library/WebServer/Documents/voucherbox/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-11-12 16:25:03 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.5' in 'field list' with query: "SELECT `t0`.`5` AS `t0_c0`, `t0`.`id_voucher` AS `t0_c1` FROM `voucher` AS `t0` WHERE `t0`.`date_usage` IS null ORDER BY `t0`.`date_usage` DESC" in /Library/WebServer/Documents/voucherbox/fuel/core/classes/database/pdo/connection.php on line 253
ERROR - 2017-11-12 18:38:47 --> Notice - Undefined variable: list_vouchers_created2 in /Library/WebServer/Documents/voucherbox/fuel/app/views/dashboard/index.php on line 147
ERROR - 2017-11-12 18:51:05 --> Parsing Error - parse error in /Library/WebServer/Documents/voucherbox/fuel/app/classes/controller/dashboard.php on line 65
ERROR - 2017-11-12 18:51:06 --> Parsing Error - parse error in /Library/WebServer/Documents/voucherbox/fuel/app/classes/controller/dashboard.php on line 65