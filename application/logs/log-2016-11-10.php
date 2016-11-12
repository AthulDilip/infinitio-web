<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-11-10 00:03:39 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 00:03:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 00:03:39 --> Exception : Unable to locate the model you have specified: OrderRest
DEBUG - 2016-11-10 00:04:03 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 00:04:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 00:04:03 --> Total execution time: 0.0072
DEBUG - 2016-11-10 00:21:19 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 00:21:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 00:21:19 --> Total execution time: 0.0100
DEBUG - 2016-11-10 00:25:06 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 00:25:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 00:25:06 --> Total execution time: 0.0056
DEBUG - 2016-11-10 00:25:46 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 00:25:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 00:25:46 --> Total execution time: 0.0086
DEBUG - 2016-11-10 00:27:23 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 00:27:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 00:27:23 --> Total execution time: 0.0120
DEBUG - 2016-11-10 00:28:50 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 00:28:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 00:28:50 --> Total execution time: 0.0119
DEBUG - 2016-11-10 00:50:26 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 00:50:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 00:50:26 --> Total execution time: 0.0057
DEBUG - 2016-11-10 00:54:27 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 00:54:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 00:54:27 --> Total execution time: 0.0049
DEBUG - 2016-11-10 00:55:53 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 00:55:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 00:55:53 --> Total execution time: 0.0035
DEBUG - 2016-11-10 00:56:38 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 00:56:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 00:56:38 --> Total execution time: 0.0036
DEBUG - 2016-11-10 00:57:20 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 00:57:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 00:57:20 --> Total execution time: 0.0034
DEBUG - 2016-11-10 00:57:41 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 00:57:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 00:57:41 --> Total execution time: 0.0044
DEBUG - 2016-11-10 15:59:52 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 15:59:52 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-10 15:59:52 --> Severity: Notice --> Undefined property: ZemoserOrders::$OrderRest /var/www/zemose/public_html/application/controllers/v1/ZemoserOrders.php 63
ERROR - 2016-11-10 15:59:52 --> Severity: Error --> Call to a member function getCancelledOrders() on null /var/www/zemose/public_html/application/controllers/v1/ZemoserOrders.php 63
DEBUG - 2016-11-10 16:01:17 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 16:01:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-10 16:01:17 --> Query error: Table 'zemose.order_addresses' doesn't exist - Invalid query: SELECT * FROM (SELECT * FROM orders WHERE status IN (-2, -1)) o LEFT JOIN products p ON (o.product_id = p.product_id) LEFT JOIN product_description pd ON(pd.product_id = p.product_id) LEFT JOIN product_images pi ON (pi.image_id = p.featured_image) LEFT JOIN order_addresses oa ON(o.address_id = oa.id) LEFT JOIN users u ON(u.id = o.user_id) WHERE pd.language_id = 1 AND o.zemoser_id = '22' ORDER BY o.order_date LIMIT 0,10
DEBUG - 2016-11-10 16:01:55 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 16:01:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 16:01:55 --> Total execution time: 0.1385
DEBUG - 2016-11-10 16:02:18 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 16:02:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 16:02:18 --> Total execution time: 0.0805
DEBUG - 2016-11-10 16:03:25 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 16:03:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 16:03:25 --> Total execution time: 0.0064
DEBUG - 2016-11-10 16:14:47 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 16:14:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-10 16:14:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '* FROM (SELECT * FROM orders WHERE status IN (-2, -1)) o LEFT JOIN products p ON' at line 9 - Invalid query: SELECT
                oa.phone AS phone_a,
                oa.name AS name_a,
                oa.streetaddress AS streetaddress,
                oa.city AS city_a,
                oa.lat AS lat_a,
                oa.lon AS lon_a,
                oa.pin AS pin_a,
                * FROM (SELECT * FROM orders WHERE status IN (-2, -1)) o LEFT JOIN products p ON (o.product_id = p.product_id) LEFT JOIN product_description pd ON(pd.product_id = p.product_id) LEFT JOIN product_images pi ON (pi.image_id = p.featured_image) LEFT JOIN order_address oa ON(o.address_id = oa.id) LEFT JOIN users u ON(u.id = o.user_id) WHERE pd.language_id = 1 AND o.zemoser_id = '15' ORDER BY o.order_date LIMIT 0,10
DEBUG - 2016-11-10 16:15:13 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 16:15:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-10 16:15:13 --> Severity: Notice --> Undefined property: ZemoserOrders::$UserRest /var/www/zemose/public_html/system/core/Model.php 77
ERROR - 2016-11-10 16:15:13 --> Severity: Error --> Call to a member function getProfilePic() on null /var/www/zemose/public_html/application/models/REST/ZOrderRest.php 74
DEBUG - 2016-11-10 16:15:39 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 16:15:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 16:15:39 --> Exception : Unable to locate the model you have specified: UserRest
DEBUG - 2016-11-10 16:15:52 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 16:15:52 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-10 16:15:53 --> Severity: Notice --> Undefined property: stdClass::$streetaddress_a /var/www/zemose/public_html/application/models/REST/ZOrderRest.php 80
DEBUG - 2016-11-10 16:15:53 --> Total execution time: 0.1589
DEBUG - 2016-11-10 16:17:27 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 16:17:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 16:17:27 --> Total execution time: 0.0090
DEBUG - 2016-11-10 16:20:46 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 16:20:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 16:20:46 --> Total execution time: 0.0110
DEBUG - 2016-11-10 16:21:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 16:21:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 16:21:37 --> Total execution time: 0.0095
DEBUG - 2016-11-10 16:22:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 16:22:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 16:22:37 --> Total execution time: 0.0049
DEBUG - 2016-11-10 16:22:52 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 16:22:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 16:22:52 --> Total execution time: 0.0057
DEBUG - 2016-11-10 16:23:09 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 16:23:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 16:23:09 --> Total execution time: 0.0056
DEBUG - 2016-11-10 16:23:21 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 16:23:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 16:23:21 --> Total execution time: 0.0097
DEBUG - 2016-11-10 16:23:29 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 16:23:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 16:23:29 --> Total execution time: 0.0073
DEBUG - 2016-11-10 16:33:32 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 16:33:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 16:33:32 --> Total execution time: 0.0058
DEBUG - 2016-11-10 16:34:58 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 16:34:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 16:34:58 --> Total execution time: 0.0069
DEBUG - 2016-11-10 16:35:48 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 16:35:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 16:35:48 --> Total execution time: 0.0098
DEBUG - 2016-11-10 18:33:57 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 18:33:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 18:33:57 --> Total execution time: 0.0725
DEBUG - 2016-11-10 19:29:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 19:29:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 19:29:08 --> Total execution time: 0.0170
DEBUG - 2016-11-10 21:33:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 21:33:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 21:33:37 --> Total execution time: 0.5316
DEBUG - 2016-11-10 21:45:25 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 21:45:25 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-10 21:45:25 --> Severity: Notice --> Undefined property: ZemoserOrders::$OrdersModel /var/www/zemose/public_html/system/core/Model.php 77
ERROR - 2016-11-10 21:45:25 --> Severity: Error --> Call to a member function getOrder() on null /var/www/zemose/public_html/application/models/REST/ZOrderRest.php 322
DEBUG - 2016-11-10 21:47:13 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 21:47:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 21:47:13 --> Exception : 4H204|You are not authorized to access this resource.
DEBUG - 2016-11-10 21:47:13 --> Total execution time: 0.1059
DEBUG - 2016-11-10 21:53:44 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 21:53:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 21:53:44 --> Exception : 4H204|You are not authorized to access this resource.
DEBUG - 2016-11-10 21:53:44 --> Total execution time: 0.0181
DEBUG - 2016-11-10 21:57:51 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 21:57:51 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-10 21:57:51 --> Severity: Notice --> Undefined variable: 15 /var/www/zemose/public_html/application/models/REST/ZOrderRest.php 319
DEBUG - 2016-11-10 21:57:51 --> Exception : 4H204|You are not authorized to access this resource.
DEBUG - 2016-11-10 21:57:51 --> Total execution time: 0.0244
DEBUG - 2016-11-10 22:00:22 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 22:00:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 22:00:22 --> Total execution time: 0.2301
DEBUG - 2016-11-10 22:05:01 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 22:05:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 22:05:01 --> Exception : 4H205|Invalid action.
DEBUG - 2016-11-10 22:05:01 --> Total execution time: 0.0159
DEBUG - 2016-11-10 22:06:13 --> UTF-8 Support Enabled
DEBUG - 2016-11-10 22:06:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-10 22:06:13 --> Total execution time: 0.1320
