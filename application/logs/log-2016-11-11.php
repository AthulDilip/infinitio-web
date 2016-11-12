<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-11-11 00:11:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:11:08 --> No URI present. Default controller set.
DEBUG - 2016-11-11 00:11:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:11:09 --> Query error: Expression #24 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'zemose.pi.image_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT * FROM featured_products fp LEFT JOIN products p ON (fp.product_id = p.product_id) 
                LEFT JOIN product_description pd ON (pd.product_id = p.product_id) LEFT JOIN product_images pi ON (pi.product_id = p.product_id)
                 WHERE pd.language_id = 1 GROUP  BY p.product_id
DEBUG - 2016-11-11 00:11:09 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:11:09 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:11:09 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-11-11 00:11:23 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:11:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:11:23 --> Total execution time: 0.2388
DEBUG - 2016-11-11 00:11:26 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:11:26 --> No URI present. Default controller set.
DEBUG - 2016-11-11 00:11:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:11:26 --> Total execution time: 0.0216
DEBUG - 2016-11-11 00:11:55 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:11:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:11:55 --> Total execution time: 0.2058
DEBUG - 2016-11-11 00:11:55 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:11:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:11:55 --> Total execution time: 0.0080
DEBUG - 2016-11-11 00:11:57 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:11:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:11:57 --> Total execution time: 0.0413
DEBUG - 2016-11-11 00:11:59 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:11:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:11:59 --> Total execution time: 0.0287
DEBUG - 2016-11-11 00:12:00 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:12:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:12:00 --> 
DEBUG - 2016-11-11 00:12:00 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS MONTH
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid ORDER BY p.hits DESC LIMIT 0, 6 ;
DEBUG - 2016-11-11 00:12:00 --> 1
DEBUG - 2016-11-11 00:12:00 --> Total execution time: 0.0053
DEBUG - 2016-11-11 00:12:00 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:12:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:12:00 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 00:12:00 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:12:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:12:00 --> 404 Page Not Found: Static/images
DEBUG - 2016-11-11 00:12:03 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:12:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:12:03 --> [{"inventory_id":"24","user_id":"15","latitude":"45.493050","longitude":"12.417700","location":"Venice, Italy","zemose_type":"request","quantity":"10","deposit":"1000","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"10","p_price_day":"100","p_price_month":"4000","skilled_labour":"1","c_skilled_labour":"1","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"1200","p_s_price_day":"2300","p_s_price_month":"30000","provide_delivery":"1","p_delivery":"1000","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"50","row_disabled":"0","shopname":"Veliancode Hardwares","shopaddress":"Veliancode P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128","rate":null}]
DEBUG - 2016-11-11 00:12:03 --> product id used
DEBUG - 2016-11-11 00:12:03 --> Total execution time: 0.1461
DEBUG - 2016-11-11 00:12:03 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:12:03 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:12:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:12:03 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 00:12:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:12:03 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 00:12:03 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:12:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:12:03 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 00:12:03 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:12:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:12:03 --> 404 Page Not Found: P/15
DEBUG - 2016-11-11 00:12:03 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:12:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:12:03 --> UTF-8 Support Enabled
ERROR - 2016-11-11 00:12:03 --> 404 Page Not Found: P/15
DEBUG - 2016-11-11 00:12:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:12:03 --> 404 Page Not Found: P/15
DEBUG - 2016-11-11 00:12:15 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:12:15 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:12:15 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 00:12:15 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 00:12:15 --> Total execution time: 0.0109
DEBUG - 2016-11-11 00:12:30 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:12:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:12:30 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 00:12:30 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 00:12:30 --> Total execution time: 0.0105
DEBUG - 2016-11-11 00:14:48 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:14:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:14:48 --> Total execution time: 0.0059
DEBUG - 2016-11-11 00:14:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:14:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:14:49 --> Total execution time: 0.0071
DEBUG - 2016-11-11 00:14:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:14:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:14:49 --> 
DEBUG - 2016-11-11 00:14:49 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS MONTH
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid ORDER BY p.hits DESC LIMIT 0, 6 ;
DEBUG - 2016-11-11 00:14:49 --> 1
DEBUG - 2016-11-11 00:14:49 --> Total execution time: 0.0053
DEBUG - 2016-11-11 00:14:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:14:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:14:49 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 00:14:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:14:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:14:49 --> 404 Page Not Found: Static/images
DEBUG - 2016-11-11 00:14:52 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:14:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:14:52 --> [{"inventory_id":"24","user_id":"15","latitude":"45.493050","longitude":"12.417700","location":"Venice, Italy","zemose_type":"request","quantity":"10","deposit":"1000","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"10","p_price_day":"100","p_price_month":"4000","skilled_labour":"1","c_skilled_labour":"1","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"1200","p_s_price_day":"2300","p_s_price_month":"30000","provide_delivery":"1","p_delivery":"1000","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"50","row_disabled":"0","shopname":"Veliancode Hardwares","shopaddress":"Veliancode P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128","rate":null}]
DEBUG - 2016-11-11 00:14:53 --> product id used
DEBUG - 2016-11-11 00:14:53 --> Total execution time: 0.0591
DEBUG - 2016-11-11 00:14:53 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:14:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:14:53 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 00:14:53 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:14:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:14:53 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 00:14:53 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:14:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:14:53 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 00:14:53 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:14:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:14:53 --> 404 Page Not Found: P/15
DEBUG - 2016-11-11 00:14:53 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:14:53 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:14:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:14:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:14:53 --> 404 Page Not Found: P/15
ERROR - 2016-11-11 00:14:53 --> 404 Page Not Found: P/15
DEBUG - 2016-11-11 00:15:06 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:15:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:15:06 --> {"from_date":"11\/18\/2016 00:00","type":"request","product_id":15,"pricing":"Hour","rent_for":10,"c_skill":0,"need_skill":false,"skill_pricing":0,"skill_for":0,"calculated_total":2050}
ERROR - 2016-11-11 00:15:06 --> Severity: Notice --> Undefined property: stdClass::$zemoser_id /var/www/zemose/public_html/application/models/CartModel.php 59
DEBUG - 2016-11-11 00:15:06 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:15:06 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:15:06 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 00:15:06 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 00:15:06 --> Total execution time: 0.0067
DEBUG - 2016-11-11 00:15:16 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:15:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:15:16 --> [{"inventory_id":"24","user_id":"15","latitude":"45.493050","longitude":"12.417700","location":"Venice, Italy","zemose_type":"request","quantity":"10","deposit":"1000","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"10","p_price_day":"100","p_price_month":"4000","skilled_labour":"1","c_skilled_labour":"1","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"1200","p_s_price_day":"2300","p_s_price_month":"30000","provide_delivery":"1","p_delivery":"1000","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"50","row_disabled":"0","shopname":"Veliancode Hardwares","shopaddress":"Veliancode P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128","rate":null}]
DEBUG - 2016-11-11 00:15:16 --> product id used
DEBUG - 2016-11-11 00:15:16 --> Total execution time: 0.0512
DEBUG - 2016-11-11 00:15:17 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:15:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:15:17 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 00:15:17 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:15:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:15:17 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 00:15:17 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:15:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:15:17 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 00:15:17 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:15:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:15:17 --> 404 Page Not Found: P/15
DEBUG - 2016-11-11 00:15:17 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:15:17 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:15:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:15:17 --> 404 Page Not Found: P/15
DEBUG - 2016-11-11 00:15:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:15:17 --> 404 Page Not Found: P/15
DEBUG - 2016-11-11 00:15:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:15:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:15:49 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 00:15:49 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 00:15:49 --> Total execution time: 0.0079
DEBUG - 2016-11-11 00:22:00 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:22:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:22:00 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 00:22:00 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 00:22:00 --> Total execution time: 0.0095
DEBUG - 2016-11-11 00:26:45 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:26:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:26:45 --> 10000 10000
DEBUG - 2016-11-11 00:26:45 --> 10000 10000
ERROR - 2016-11-11 00:26:45 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 00:26:45 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 00:26:45 --> Total execution time: 0.0130
DEBUG - 2016-11-11 00:29:01 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:29:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:29:01 --> 10000 10000
DEBUG - 2016-11-11 00:29:01 --> 1000 10
DEBUG - 2016-11-11 00:29:01 --> 10000 10000
DEBUG - 2016-11-11 00:29:01 --> 1000 100
ERROR - 2016-11-11 00:29:01 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 00:29:01 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 00:29:01 --> Total execution time: 0.0123
DEBUG - 2016-11-11 00:32:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:32:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:32:37 --> 10000 10000
DEBUG - 2016-11-11 00:32:37 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 00:32:37 --> 10000 10000
DEBUG - 2016-11-11 00:32:37 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 00:32:37 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 00:32:37 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 00:32:37 --> Total execution time: 0.0120
DEBUG - 2016-11-11 00:34:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:34:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:34:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '* FROM cart c LEFT JOIN product_description pd ON (c.product_id = pd.product_id ' at line 1 - Invalid query: SELECT c.quantity AS c_quantity,* FROM cart c LEFT JOIN product_description pd ON (c.product_id = pd.product_id AND c.user_id = '15') LEFT JOIN inventory i ON (c.inventory_id = i.inventory_id) WHERE pd.language_id = 1
DEBUG - 2016-11-11 00:35:42 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:35:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:35:42 --> 1000 1000
DEBUG - 2016-11-11 00:35:42 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 00:35:42 --> 1000 1000
DEBUG - 2016-11-11 00:35:42 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 00:35:42 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 00:35:42 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 00:35:42 --> Total execution time: 0.0090
DEBUG - 2016-11-11 00:36:18 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:36:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:36:18 --> 1000 1000
DEBUG - 2016-11-11 00:36:18 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 00:36:18 --> 1000 1000
DEBUG - 2016-11-11 00:36:18 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 00:36:18 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 00:36:18 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 00:36:18 --> Total execution time: 0.0077
DEBUG - 2016-11-11 00:38:38 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:38:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:38:38 --> 1000 1000
DEBUG - 2016-11-11 00:38:38 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 00:38:38 --> 1000 1000
DEBUG - 2016-11-11 00:38:38 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 00:38:38 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 00:38:38 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 00:38:38 --> Total execution time: 0.0111
DEBUG - 2016-11-11 00:39:30 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:39:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:39:30 --> 1000 1000
DEBUG - 2016-11-11 00:39:30 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 00:39:30 --> 1000 1000
DEBUG - 2016-11-11 00:39:30 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 00:39:30 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 00:39:30 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 00:39:30 --> Total execution time: 0.0080
DEBUG - 2016-11-11 00:39:47 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:39:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:39:47 --> 1000 1000
DEBUG - 2016-11-11 00:39:47 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 00:39:47 --> 1000 1000
DEBUG - 2016-11-11 00:39:47 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 00:39:47 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 00:39:47 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 00:39:47 --> Total execution time: 0.0085
DEBUG - 2016-11-11 00:40:22 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:40:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:40:22 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:40:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:40:22 --> Total execution time: 0.0547
DEBUG - 2016-11-11 00:40:27 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:40:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:40:27 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:40:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:40:27 --> Total execution time: 0.0771
DEBUG - 2016-11-11 00:40:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:40:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:40:33 --> Total execution time: 0.0472
DEBUG - 2016-11-11 00:40:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:40:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:40:33 --> Total execution time: 0.0048
DEBUG - 2016-11-11 00:40:42 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:40:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 00:40:42 --> 404 Page Not Found: gdf79/Coupons/remove
DEBUG - 2016-11-11 00:41:57 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:41:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:41:57 --> Total execution time: 0.0035
DEBUG - 2016-11-11 00:41:57 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:41:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:41:57 --> Total execution time: 0.0044
DEBUG - 2016-11-11 00:45:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:45:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:45:08 --> 1000 1000
DEBUG - 2016-11-11 00:45:08 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 00:45:08 --> 1000 1000
DEBUG - 2016-11-11 00:45:08 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 00:45:08 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 00:45:08 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 00:45:08 --> Total execution time: 0.0089
DEBUG - 2016-11-11 00:46:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:46:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:46:49 --> 1000 1000
DEBUG - 2016-11-11 00:46:49 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 00:46:49 --> 1000 1000
DEBUG - 2016-11-11 00:46:49 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 00:46:49 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 00:46:49 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 00:46:49 --> Total execution time: 0.0093
DEBUG - 2016-11-11 00:47:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 00:47:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 00:47:33 --> 1000 1000
DEBUG - 2016-11-11 00:47:33 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 00:47:33 --> 1000 1000
DEBUG - 2016-11-11 00:47:33 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 00:47:33 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 00:47:33 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 00:47:33 --> Total execution time: 0.0092
DEBUG - 2016-11-11 01:05:24 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:05:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:05:24 --> 1000 1000
DEBUG - 2016-11-11 01:05:24 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:05:24 --> 1000 1000
DEBUG - 2016-11-11 01:05:24 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:05:24 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:05:24 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:05:24 --> Total execution time: 0.0136
DEBUG - 2016-11-11 01:05:26 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:05:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:05:26 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:05:57 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:05:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:05:57 --> 1000 1000
DEBUG - 2016-11-11 01:05:57 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:05:57 --> 1000 1000
DEBUG - 2016-11-11 01:05:57 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:05:57 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:05:57 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:05:57 --> Total execution time: 0.0106
DEBUG - 2016-11-11 01:05:57 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:05:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:05:57 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:08:03 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:08:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:08:03 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:10:00 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:10:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:10:00 --> 1000 1000
DEBUG - 2016-11-11 01:10:00 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:10:00 --> 1000 1000
DEBUG - 2016-11-11 01:10:00 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:10:00 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:10:00 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:10:00 --> Total execution time: 0.0113
DEBUG - 2016-11-11 01:10:00 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:10:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:10:00 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:10:03 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:10:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:10:03 --> 404 Page Not Found: Cart/Cart
DEBUG - 2016-11-11 01:10:46 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:10:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:10:46 --> 1000 1000
DEBUG - 2016-11-11 01:10:46 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:10:46 --> 1000 1000
DEBUG - 2016-11-11 01:10:46 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:10:46 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:10:46 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:10:46 --> Total execution time: 0.0087
DEBUG - 2016-11-11 01:10:46 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:10:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:10:46 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:10:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:10:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:10:49 --> Total execution time: 0.0036
DEBUG - 2016-11-11 01:10:57 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:10:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:10:57 --> Total execution time: 0.0051
DEBUG - 2016-11-11 01:16:29 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:16:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:16:29 --> 1000 1000
DEBUG - 2016-11-11 01:16:29 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:16:29 --> 1000 1000
DEBUG - 2016-11-11 01:16:29 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:16:29 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:16:29 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:16:29 --> Total execution time: 0.0089
DEBUG - 2016-11-11 01:16:30 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:16:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:16:30 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:16:45 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:16:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:16:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '* FROM cart c LEFT JOIN inventory i ON(i.inventory_id = c.inventory_id) WHERE id' at line 1 - Invalid query: SELECT c.quantity AS c_quantity,* FROM cart c LEFT JOIN inventory i ON(i.inventory_id = c.inventory_id) WHERE id = '12'
DEBUG - 2016-11-11 01:16:55 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:16:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:16:55 --> 1000 1000
DEBUG - 2016-11-11 01:16:55 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:16:55 --> 1000 1000
DEBUG - 2016-11-11 01:16:55 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:16:55 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:16:55 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:16:55 --> Total execution time: 0.0103
DEBUG - 2016-11-11 01:17:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:17:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:17:33 --> 1000 1000
DEBUG - 2016-11-11 01:17:33 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:17:33 --> 1000 1000
DEBUG - 2016-11-11 01:17:33 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:17:33 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:17:33 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:17:33 --> Total execution time: 0.0089
DEBUG - 2016-11-11 01:17:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:17:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:17:33 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:17:36 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:17:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:17:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '* FROM cart c LEFT JOIN inventory i ON(i.inventory_id = c.inventory_id) WHERE id' at line 1 - Invalid query: SELECT c.quantity AS c_quantity,* FROM cart c LEFT JOIN inventory i ON(i.inventory_id = c.inventory_id) WHERE id = '12'
DEBUG - 2016-11-11 01:19:06 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:19:06 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:19:06 --> Severity: Notice --> Undefined variable: q /var/www/zemose/public_html/application/models/CartModel.php 504
ERROR - 2016-11-11 01:19:06 --> Severity: Notice --> Undefined variable: q /var/www/zemose/public_html/application/models/CartModel.php 505
ERROR - 2016-11-11 01:19:06 --> Severity: Notice --> Undefined property: stdClass::$cart_id /var/www/zemose/public_html/application/models/CartModel.php 509
DEBUG - 2016-11-11 01:19:06 --> Total execution time: 0.0092
DEBUG - 2016-11-11 01:21:38 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:21:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:21:38 --> Total execution time: 0.0063
DEBUG - 2016-11-11 01:23:58 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:23:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:23:58 --> Severity: Notice --> Undefined property: stdClass::$cart_id /var/www/zemose/public_html/application/models/CartModel.php 502
DEBUG - 2016-11-11 01:23:58 --> Total execution time: 0.0115
DEBUG - 2016-11-11 01:24:28 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:24:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:24:28 --> 1000 1000
DEBUG - 2016-11-11 01:24:28 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:24:28 --> 1000 1000
DEBUG - 2016-11-11 01:24:28 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:24:28 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:24:28 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:24:28 --> Total execution time: 0.0095
DEBUG - 2016-11-11 01:24:28 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:24:28 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:24:28 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:24:30 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:24:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:24:30 --> Severity: Notice --> Undefined property: stdClass::$cart_id /var/www/zemose/public_html/application/models/CartModel.php 509
DEBUG - 2016-11-11 01:24:30 --> Total execution time: 0.0052
DEBUG - 2016-11-11 01:25:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:25:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:25:33 --> 1000 1000
DEBUG - 2016-11-11 01:25:33 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:25:33 --> 1000 1000
DEBUG - 2016-11-11 01:25:33 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:25:33 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:25:33 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:25:33 --> Total execution time: 0.0087
DEBUG - 2016-11-11 01:25:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:25:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:25:33 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:25:36 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:25:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:25:36 --> Total execution time: 0.1216
DEBUG - 2016-11-11 01:26:21 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:26:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:26:21 --> 2000 2000
DEBUG - 2016-11-11 01:26:21 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:26:21 --> 1000 1000
DEBUG - 2016-11-11 01:26:21 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:26:21 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:26:21 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:26:21 --> Total execution time: 0.0098
DEBUG - 2016-11-11 01:26:22 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:26:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:26:22 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:27:18 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:27:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:27:18 --> Total execution time: 0.0607
DEBUG - 2016-11-11 01:30:48 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:30:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:30:48 --> 3000 3000
DEBUG - 2016-11-11 01:30:48 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:30:48 --> 1000 1000
DEBUG - 2016-11-11 01:30:48 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:30:48 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:30:48 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:30:48 --> Total execution time: 0.0084
DEBUG - 2016-11-11 01:30:48 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:30:48 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:30:48 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:34:46 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:34:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:34:46 --> 3000 3000
DEBUG - 2016-11-11 01:34:46 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:34:46 --> 1000 1000
DEBUG - 2016-11-11 01:34:46 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:34:46 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:34:46 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:34:46 --> Total execution time: 0.0081
DEBUG - 2016-11-11 01:34:46 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:34:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:34:46 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:34:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:34:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:34:49 --> Total execution time: 0.1242
DEBUG - 2016-11-11 01:35:07 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:35:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:35:07 --> 4000 4000
DEBUG - 2016-11-11 01:35:07 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:35:07 --> 1000 1000
DEBUG - 2016-11-11 01:35:07 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:35:07 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:35:07 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:35:07 --> Total execution time: 0.0080
DEBUG - 2016-11-11 01:35:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:35:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:35:08 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:35:42 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:35:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:35:42 --> Total execution time: 0.0548
DEBUG - 2016-11-11 01:36:27 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:36:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:36:27 --> 4000 4000
DEBUG - 2016-11-11 01:36:27 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:36:27 --> 2000 2000
DEBUG - 2016-11-11 01:36:27 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:36:27 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:36:27 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:36:27 --> Total execution time: 0.0079
DEBUG - 2016-11-11 01:36:27 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:36:27 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:36:27 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:37:06 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:37:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:37:06 --> Total execution time: 0.0414
DEBUG - 2016-11-11 01:37:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:37:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:37:08 --> Total execution time: 0.0474
DEBUG - 2016-11-11 01:39:51 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:39:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:39:51 --> 6000 6000
DEBUG - 2016-11-11 01:39:51 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:39:51 --> 2000 2000
DEBUG - 2016-11-11 01:39:51 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:39:51 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:39:51 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:39:51 --> Total execution time: 0.0099
DEBUG - 2016-11-11 01:39:51 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:39:51 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:39:51 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:39:54 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:39:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:39:54 --> Total execution time: 0.1308
DEBUG - 2016-11-11 01:39:56 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:39:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:39:56 --> 7000 7000
DEBUG - 2016-11-11 01:39:56 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:39:56 --> 2000 2000
DEBUG - 2016-11-11 01:39:56 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:39:56 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:39:56 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:39:56 --> Total execution time: 0.0093
DEBUG - 2016-11-11 01:39:56 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:39:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:39:56 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:40:22 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:40:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:40:22 --> 7000 7000
DEBUG - 2016-11-11 01:40:22 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:40:22 --> 2000 2000
DEBUG - 2016-11-11 01:40:22 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:40:22 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:40:22 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:40:22 --> Total execution time: 0.0085
DEBUG - 2016-11-11 01:40:23 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:40:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:40:23 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:40:26 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:40:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:40:26 --> Total execution time: 0.0748
DEBUG - 2016-11-11 01:40:27 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:40:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:40:28 --> Total execution time: 0.0518
DEBUG - 2016-11-11 01:40:29 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:40:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:40:29 --> 5000 5000
DEBUG - 2016-11-11 01:40:29 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:40:29 --> 2000 2000
DEBUG - 2016-11-11 01:40:29 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:40:29 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:40:29 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:40:29 --> Total execution time: 0.0072
DEBUG - 2016-11-11 01:40:29 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:40:29 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:40:29 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:43:20 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:43:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:43:20 --> 5000 5000
DEBUG - 2016-11-11 01:43:20 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:43:20 --> 2000 2000
DEBUG - 2016-11-11 01:43:20 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:43:20 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:43:20 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:43:20 --> Total execution time: 0.0107
DEBUG - 2016-11-11 01:43:20 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:43:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:43:20 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:43:23 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:43:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:43:23 --> Total execution time: 0.1231
DEBUG - 2016-11-11 01:44:15 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:44:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:44:15 --> 6000 6000
DEBUG - 2016-11-11 01:44:15 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:44:15 --> 2000 2000
DEBUG - 2016-11-11 01:44:15 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:44:15 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:44:15 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:44:15 --> Total execution time: 0.0101
DEBUG - 2016-11-11 01:44:15 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:44:15 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:44:15 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:44:18 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:44:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:44:18 --> Total execution time: 0.1225
DEBUG - 2016-11-11 01:44:24 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:44:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:44:24 --> Total execution time: 0.0611
DEBUG - 2016-11-11 01:44:41 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:44:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:44:41 --> 7000 7000
DEBUG - 2016-11-11 01:44:41 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:44:41 --> 3000 3000
DEBUG - 2016-11-11 01:44:41 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:44:41 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:44:41 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:44:41 --> Total execution time: 0.0085
DEBUG - 2016-11-11 01:44:41 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:44:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:44:41 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:44:43 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:44:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:44:44 --> Total execution time: 0.0686
DEBUG - 2016-11-11 01:45:20 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:45:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:45:20 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:46:54 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:46:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:46:54 --> 8000 8000
DEBUG - 2016-11-11 01:46:54 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:46:54 --> 3000 3000
DEBUG - 2016-11-11 01:46:54 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:46:54 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:46:54 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:46:54 --> Total execution time: 0.0121
DEBUG - 2016-11-11 01:46:54 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:46:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:46:54 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:46:57 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:46:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:46:57 --> Total execution time: 0.1077
DEBUG - 2016-11-11 01:47:05 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:47:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:47:05 --> 9000 9000
DEBUG - 2016-11-11 01:47:05 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 01:47:05 --> 3000 3000
DEBUG - 2016-11-11 01:47:05 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 01:47:05 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 01:47:05 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 01:47:05 --> Total execution time: 0.0094
DEBUG - 2016-11-11 01:47:05 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:47:05 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 01:47:05 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 01:47:11 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:47:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:47:11 --> Total execution time: 0.0678
DEBUG - 2016-11-11 01:47:34 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 01:47:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 01:47:34 --> Total execution time: 0.0593
DEBUG - 2016-11-11 02:24:30 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:24:30 --> No URI present. Default controller set.
DEBUG - 2016-11-11 02:24:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:24:30 --> Total execution time: 0.0077
DEBUG - 2016-11-11 02:24:34 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:24:34 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 02:24:34 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header.php 126
ERROR - 2016-11-11 02:24:34 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header.php 126
DEBUG - 2016-11-11 02:24:34 --> Total execution time: 0.0229
DEBUG - 2016-11-11 02:24:42 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:24:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:24:42 --> Total execution time: 0.0124
DEBUG - 2016-11-11 02:24:43 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:24:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:24:43 --> Total execution time: 0.0036
DEBUG - 2016-11-11 02:24:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:24:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:24:49 --> Total execution time: 0.0306
DEBUG - 2016-11-11 02:24:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:24:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:24:49 --> Total execution time: 0.0039
DEBUG - 2016-11-11 02:24:52 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:24:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:24:52 --> Total execution time: 0.0037
DEBUG - 2016-11-11 02:25:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:25:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:25:08 --> new fid : 21
DEBUG - 2016-11-11 02:25:09 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:25:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:25:09 --> Total execution time: 0.0030
DEBUG - 2016-11-11 02:25:09 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:25:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:25:09 --> Total execution time: 0.0034
DEBUG - 2016-11-11 02:25:11 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:25:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:25:11 --> Total execution time: 0.0040
DEBUG - 2016-11-11 02:25:15 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:25:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:25:15 --> Total execution time: 0.0055
DEBUG - 2016-11-11 02:25:19 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:25:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:25:19 --> Total execution time: 0.0033
DEBUG - 2016-11-11 02:33:05 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:33:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:33:05 --> {"gid":"19","gname":["Speed"],"sort-order":"1","fil-1":["56562","sabeer","sabeer2","sabeer3"],"id":["21","0","0","0"],"sort":["3","4","5","6"]}
DEBUG - 2016-11-11 02:33:05 --> new fid : 22
DEBUG - 2016-11-11 02:33:05 --> new fid : 23
DEBUG - 2016-11-11 02:33:05 --> new fid : 24
DEBUG - 2016-11-11 02:33:06 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:33:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:33:06 --> Total execution time: 0.0032
DEBUG - 2016-11-11 02:33:06 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:33:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:33:06 --> Total execution time: 0.0051
DEBUG - 2016-11-11 02:33:09 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:33:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:33:09 --> Total execution time: 0.0036
DEBUG - 2016-11-11 02:36:20 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:36:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:36:20 --> {"gid":"19","gname":["Speed"],"sort-order":"1","fil-1":["sabeer","sabeer2","sabeer3","muje"],"id":["22","23","24","0"],"sort":["4","5","6","5"]}
DEBUG - 2016-11-11 02:36:20 --> new fid : 25
DEBUG - 2016-11-11 02:36:21 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:36:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:36:21 --> Total execution time: 0.0045
DEBUG - 2016-11-11 02:36:21 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:36:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:36:21 --> Total execution time: 0.0041
DEBUG - 2016-11-11 02:36:23 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:36:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:36:23 --> Total execution time: 0.0041
DEBUG - 2016-11-11 02:49:00 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:49:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:49:00 --> 10000 10000
DEBUG - 2016-11-11 02:49:00 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 02:49:00 --> 4000 4000
DEBUG - 2016-11-11 02:49:00 --> deposit : 1000 price 100 duration : 10 q 10
ERROR - 2016-11-11 02:49:00 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 02:49:00 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 02:49:00 --> Total execution time: 0.0100
DEBUG - 2016-11-11 02:49:01 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:49:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 02:49:01 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 02:49:04 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:49:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:49:04 --> 9000 9000
DEBUG - 2016-11-11 02:49:04 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 02:49:04 --> 4000 4000
DEBUG - 2016-11-11 02:49:04 --> deposit : 1000 price 100 duration : 10 q 10
DEBUG - 2016-11-11 02:49:04 --> Total execution time: 0.0761
DEBUG - 2016-11-11 02:49:09 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:49:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:49:09 --> 8000 8000
DEBUG - 2016-11-11 02:49:09 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 02:49:09 --> 4000 4000
DEBUG - 2016-11-11 02:49:09 --> deposit : 1000 price 100 duration : 10 q 10
DEBUG - 2016-11-11 02:49:09 --> Total execution time: 0.0479
DEBUG - 2016-11-11 02:49:11 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:49:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:49:11 --> 7000 7000
DEBUG - 2016-11-11 02:49:11 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 02:49:11 --> 4000 4000
DEBUG - 2016-11-11 02:49:11 --> deposit : 1000 price 100 duration : 10 q 10
DEBUG - 2016-11-11 02:49:11 --> Total execution time: 0.0544
DEBUG - 2016-11-11 02:49:12 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:49:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:49:12 --> 6000 6000
DEBUG - 2016-11-11 02:49:12 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 02:49:12 --> 4000 4000
DEBUG - 2016-11-11 02:49:12 --> deposit : 1000 price 100 duration : 10 q 10
DEBUG - 2016-11-11 02:49:12 --> Total execution time: 0.0646
DEBUG - 2016-11-11 02:49:13 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:49:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:49:13 --> 5000 5000
DEBUG - 2016-11-11 02:49:13 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 02:49:13 --> 4000 4000
DEBUG - 2016-11-11 02:49:13 --> deposit : 1000 price 100 duration : 10 q 10
DEBUG - 2016-11-11 02:49:13 --> Total execution time: 0.0901
DEBUG - 2016-11-11 02:49:14 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:49:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:49:14 --> 4000 4000
DEBUG - 2016-11-11 02:49:14 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 02:49:14 --> 4000 4000
DEBUG - 2016-11-11 02:49:14 --> deposit : 1000 price 100 duration : 10 q 10
DEBUG - 2016-11-11 02:49:14 --> Total execution time: 0.0525
DEBUG - 2016-11-11 02:49:14 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:49:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:49:14 --> 3000 3000
DEBUG - 2016-11-11 02:49:14 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 02:49:14 --> 4000 4000
DEBUG - 2016-11-11 02:49:14 --> deposit : 1000 price 100 duration : 10 q 10
DEBUG - 2016-11-11 02:49:14 --> Total execution time: 0.0572
DEBUG - 2016-11-11 02:49:15 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:49:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:49:15 --> 2000 2000
DEBUG - 2016-11-11 02:49:15 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 02:49:15 --> 4000 4000
DEBUG - 2016-11-11 02:49:15 --> deposit : 1000 price 100 duration : 10 q 10
DEBUG - 2016-11-11 02:49:15 --> Total execution time: 0.0554
DEBUG - 2016-11-11 02:49:16 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:49:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:49:16 --> 1000 1000
DEBUG - 2016-11-11 02:49:16 --> deposit : 1000 price 10 duration : 100 q 10
DEBUG - 2016-11-11 02:49:16 --> 4000 4000
DEBUG - 2016-11-11 02:49:16 --> deposit : 1000 price 100 duration : 10 q 10
DEBUG - 2016-11-11 02:49:16 --> Total execution time: 0.0596
DEBUG - 2016-11-11 02:52:45 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:52:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:52:45 --> Total execution time: 0.0099
DEBUG - 2016-11-11 02:52:48 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:52:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:52:48 --> Total execution time: 0.0573
DEBUG - 2016-11-11 02:52:54 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:52:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:52:54 --> Total execution time: 0.0446
DEBUG - 2016-11-11 02:52:56 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:52:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:52:56 --> Total execution time: 0.0547
DEBUG - 2016-11-11 02:52:56 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:52:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:52:56 --> Total execution time: 0.0505
DEBUG - 2016-11-11 02:52:59 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:52:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:52:59 --> Total execution time: 0.0041
DEBUG - 2016-11-11 02:57:07 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:57:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 02:57:07 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 02:57:07 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 02:57:07 --> Total execution time: 0.0106
DEBUG - 2016-11-11 02:57:07 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:57:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 02:57:07 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 02:57:13 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:57:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:57:13 --> Verified Login
DEBUG - 2016-11-11 02:57:13 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:57:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 02:57:13 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 02:57:13 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 02:57:13 --> Total execution time: 0.0062
DEBUG - 2016-11-11 02:57:13 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:57:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 02:57:13 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 02:57:19 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:57:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:57:20 --> Total execution time: 0.0697
DEBUG - 2016-11-11 02:57:20 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:57:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:57:20 --> Total execution time: 0.0580
DEBUG - 2016-11-11 02:57:22 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:57:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:57:22 --> Total execution time: 0.0438
DEBUG - 2016-11-11 02:57:22 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:57:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:57:22 --> Total execution time: 0.0569
DEBUG - 2016-11-11 02:57:23 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:57:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:57:23 --> Total execution time: 0.0042
DEBUG - 2016-11-11 02:59:22 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:59:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 02:59:22 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 02:59:22 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 02:59:22 --> Total execution time: 0.0074
DEBUG - 2016-11-11 02:59:24 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:59:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 02:59:24 --> Total execution time: 0.0083
DEBUG - 2016-11-11 02:59:27 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 02:59:27 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 02:59:27 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 02:59:27 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 02:59:27 --> Total execution time: 0.0083
DEBUG - 2016-11-11 03:01:36 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:01:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:01:36 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:01:36 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:01:36 --> Total execution time: 0.0109
DEBUG - 2016-11-11 03:01:40 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:01:40 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:01:40 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:02:05 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:02:05 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:02:05 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:02:05 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:02:05 --> Total execution time: 0.0073
DEBUG - 2016-11-11 03:02:05 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:02:05 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:02:05 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:02:20 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:02:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:02:20 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:02:20 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:02:20 --> Total execution time: 0.0076
DEBUG - 2016-11-11 03:02:21 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:02:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:02:21 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:02:31 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:02:31 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:02:31 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:02:31 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:02:31 --> Total execution time: 0.0068
DEBUG - 2016-11-11 03:02:32 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:02:32 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:02:32 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:02:58 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:02:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:02:58 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:02:58 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:02:58 --> Total execution time: 0.0074
DEBUG - 2016-11-11 03:02:58 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:02:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:02:58 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:04:21 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:04:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:04:21 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:04:21 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:04:21 --> Total execution time: 0.0111
DEBUG - 2016-11-11 03:04:22 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:04:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:04:22 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:04:58 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:04:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:04:58 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:04:58 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:04:59 --> Total execution time: 0.0066
DEBUG - 2016-11-11 03:05:12 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:05:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:05:12 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:07:25 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:07:25 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:07:25 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:07:25 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:07:25 --> Total execution time: 0.0108
DEBUG - 2016-11-11 03:07:25 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:07:25 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:07:25 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:07:36 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:07:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:07:36 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:07:36 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:07:36 --> Total execution time: 0.0076
DEBUG - 2016-11-11 03:07:43 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:07:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:07:43 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:07:43 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:07:43 --> Total execution time: 0.0090
DEBUG - 2016-11-11 03:08:02 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:08:02 --> No URI present. Default controller set.
DEBUG - 2016-11-11 03:08:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:08:02 --> Total execution time: 0.0071
DEBUG - 2016-11-11 03:08:42 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:08:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:08:42 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:08:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:08:42 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:08:42 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:08:42 --> Total execution time: 0.0241
DEBUG - 2016-11-11 03:08:46 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:08:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:08:46 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:08:46 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:08:46 --> Total execution time: 0.0093
DEBUG - 2016-11-11 03:08:51 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:08:51 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:08:51 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:08:51 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:08:51 --> Total execution time: 0.0944
DEBUG - 2016-11-11 03:09:07 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:09:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:09:07 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-11-11 03:09:24 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:09:24 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:09:24 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:09:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:09:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:09:33 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:09:33 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:09:33 --> Total execution time: 0.0091
DEBUG - 2016-11-11 03:10:05 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:10:05 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:10:05 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:10:05 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:10:05 --> Total execution time: 0.0073
DEBUG - 2016-11-11 03:10:05 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:10:05 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:10:05 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:11:16 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:11:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:11:16 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:11:16 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:11:16 --> Total execution time: 0.0114
DEBUG - 2016-11-11 03:11:16 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:11:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:11:16 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:11:59 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:11:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:11:59 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:11:59 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:11:59 --> Total execution time: 0.0085
DEBUG - 2016-11-11 03:12:00 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:12:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:12:00 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:12:13 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:12:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:12:13 --> 404 Page Not Found: Cart/Cart
DEBUG - 2016-11-11 03:12:44 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:12:44 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:12:44 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:12:44 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:12:44 --> Total execution time: 0.0103
DEBUG - 2016-11-11 03:12:55 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:12:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:12:55 --> Verified Login
DEBUG - 2016-11-11 03:12:55 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:12:55 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:12:55 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:12:55 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:12:55 --> Total execution time: 0.0062
DEBUG - 2016-11-11 03:13:07 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:13:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:13:07 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:13:07 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:13:07 --> Total execution time: 0.0056
DEBUG - 2016-11-11 03:14:57 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:14:57 --> No URI present. Default controller set.
DEBUG - 2016-11-11 03:14:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:14:57 --> Total execution time: 0.0061
DEBUG - 2016-11-11 03:15:17 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:15:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:15:17 --> Total execution time: 0.0041
DEBUG - 2016-11-11 03:15:17 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:15:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:15:17 --> Total execution time: 0.0045
DEBUG - 2016-11-11 03:15:24 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:15:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:15:24 --> Total execution time: 0.0055
DEBUG - 2016-11-11 03:15:24 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:15:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:15:24 --> Total execution time: 0.0061
DEBUG - 2016-11-11 03:15:26 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:15:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:15:26 --> 404 Page Not Found: gdf79/Coupons/remove
DEBUG - 2016-11-11 03:23:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:23:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:23:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:23:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:23:33 --> Total execution time: 0.0033
DEBUG - 2016-11-11 03:23:34 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:23:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:23:34 --> Total execution time: 0.0040
DEBUG - 2016-11-11 03:23:36 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:23:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:23:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:23:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:23:37 --> Total execution time: 0.0029
DEBUG - 2016-11-11 03:23:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:23:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:23:37 --> Total execution time: 0.0051
DEBUG - 2016-11-11 03:23:39 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:23:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:23:39 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:23:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:23:39 --> Total execution time: 0.0032
DEBUG - 2016-11-11 03:23:39 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:23:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:23:39 --> Total execution time: 0.0051
DEBUG - 2016-11-11 03:23:59 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:23:59 --> No URI present. Default controller set.
DEBUG - 2016-11-11 03:23:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:23:59 --> Total execution time: 0.0088
DEBUG - 2016-11-11 03:24:46 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:24:46 --> No URI present. Default controller set.
DEBUG - 2016-11-11 03:24:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:24:46 --> Total execution time: 0.0061
DEBUG - 2016-11-11 03:24:53 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:24:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:24:53 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:24:53 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:24:53 --> Total execution time: 0.0086
DEBUG - 2016-11-11 03:25:13 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:25:13 --> Total execution time: 0.0065
DEBUG - 2016-11-11 03:25:14 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:25:14 --> Total execution time: 0.0071
DEBUG - 2016-11-11 03:25:14 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:25:14 --> 
DEBUG - 2016-11-11 03:25:14 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS MONTH
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10000 GROUP BY pid ORDER BY p.hits DESC LIMIT 0, 6 ;
DEBUG - 2016-11-11 03:25:14 --> 1
DEBUG - 2016-11-11 03:25:14 --> Total execution time: 0.0061
DEBUG - 2016-11-11 03:25:14 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:14 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:14 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:25:14 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:14 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:14 --> 404 Page Not Found: Static/images
DEBUG - 2016-11-11 03:25:15 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:25:15 --> [{"inventory_id":"24","user_id":"15","latitude":"45.493050","longitude":"12.417700","location":"Venice, Italy","zemose_type":"request","quantity":"10","deposit":"1000","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"10","p_price_day":"100","p_price_month":"4000","skilled_labour":"1","c_skilled_labour":"1","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"1200","p_s_price_day":"2300","p_s_price_month":"30000","provide_delivery":"1","p_delivery":"1000","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"50","row_disabled":"0","shopname":"Veliancode Hardwares","shopaddress":"Veliancode P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128","rate":null}]
DEBUG - 2016-11-11 03:25:15 --> product id used
DEBUG - 2016-11-11 03:25:15 --> Total execution time: 0.0696
DEBUG - 2016-11-11 03:25:16 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:16 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:16 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:25:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:16 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:25:16 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:16 --> 404 Page Not Found: P/15
DEBUG - 2016-11-11 03:25:16 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:16 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:25:16 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:16 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:16 --> 404 Page Not Found: P/15
DEBUG - 2016-11-11 03:25:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:16 --> 404 Page Not Found: P/15
DEBUG - 2016-11-11 03:25:26 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:25:26 --> {"from_date":"11\/12\/2016 00:00","type":"request","product_id":15,"pricing":"Hour","rent_for":10,"c_skill":0,"need_skill":false,"skill_pricing":"Hour","skill_for":0,"calculated_total":710}
DEBUG - 2016-11-11 03:25:26 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:26 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:25:26 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:25:26 --> Total execution time: 0.0061
DEBUG - 2016-11-11 03:25:29 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:25:29 --> Total execution time: 0.0068
DEBUG - 2016-11-11 03:25:31 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:25:31 --> Total execution time: 0.0073
DEBUG - 2016-11-11 03:25:32 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:25:32 --> 
DEBUG - 2016-11-11 03:25:32 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS MONTH
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10000 GROUP BY pid ORDER BY p.hits DESC LIMIT 0, 6 ;
DEBUG - 2016-11-11 03:25:32 --> 1
DEBUG - 2016-11-11 03:25:32 --> Total execution time: 0.0093
DEBUG - 2016-11-11 03:25:32 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:32 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:32 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:25:32 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:32 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:32 --> 404 Page Not Found: Static/images
DEBUG - 2016-11-11 03:25:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:25:33 --> [{"inventory_id":"24","user_id":"15","latitude":"45.493050","longitude":"12.417700","location":"Venice, Italy","zemose_type":"request","quantity":"10","deposit":"1000","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"10","p_price_day":"100","p_price_month":"4000","skilled_labour":"1","c_skilled_labour":"1","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"1200","p_s_price_day":"2300","p_s_price_month":"30000","provide_delivery":"1","p_delivery":"1000","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"50","row_disabled":"0","shopname":"Veliancode Hardwares","shopaddress":"Veliancode P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128","rate":null}]
DEBUG - 2016-11-11 03:25:33 --> product id used
DEBUG - 2016-11-11 03:25:33 --> Total execution time: 0.0633
DEBUG - 2016-11-11 03:25:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:25:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:33 --> 404 Page Not Found: Static/css
ERROR - 2016-11-11 03:25:33 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:25:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:33 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:25:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:33 --> 404 Page Not Found: P/16
DEBUG - 2016-11-11 03:25:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:33 --> 404 Page Not Found: P/16
DEBUG - 2016-11-11 03:25:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:33 --> 404 Page Not Found: P/16
DEBUG - 2016-11-11 03:25:43 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:25:43 --> {"from_date":"11\/12\/2016 00:00","type":"request","product_id":16,"pricing":"Hour","rent_for":10,"c_skill":0,"need_skill":false,"skill_pricing":0,"skill_for":0,"calculated_total":2550}
DEBUG - 2016-11-11 03:25:43 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:43 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 55
ERROR - 2016-11-11 03:25:43 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 55
DEBUG - 2016-11-11 03:25:43 --> Total execution time: 0.0072
DEBUG - 2016-11-11 03:25:46 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:25:46 --> Total execution time: 0.0058
DEBUG - 2016-11-11 03:25:47 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:25:47 --> Total execution time: 0.0080
DEBUG - 2016-11-11 03:25:47 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:25:47 --> 
DEBUG - 2016-11-11 03:25:47 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS MONTH
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10000 GROUP BY pid ORDER BY p.hits DESC LIMIT 0, 6 ;
DEBUG - 2016-11-11 03:25:47 --> 1
DEBUG - 2016-11-11 03:25:47 --> Total execution time: 0.0051
DEBUG - 2016-11-11 03:25:47 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:47 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:25:47 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:47 --> 404 Page Not Found: Static/images
DEBUG - 2016-11-11 03:25:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:25:49 --> [{"inventory_id":"24","user_id":"15","latitude":"45.493050","longitude":"12.417700","location":"Venice, Italy","zemose_type":"request","quantity":"10","deposit":"1000","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"10","p_price_day":"100","p_price_month":"4000","skilled_labour":"1","c_skilled_labour":"1","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"1200","p_s_price_day":"2300","p_s_price_month":"30000","provide_delivery":"1","p_delivery":"1000","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"50","row_disabled":"0","shopname":"Veliancode Hardwares","shopaddress":"Veliancode P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128","rate":null}]
DEBUG - 2016-11-11 03:25:49 --> product id used
DEBUG - 2016-11-11 03:25:49 --> Total execution time: 0.0481
DEBUG - 2016-11-11 03:25:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:25:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:49 --> 404 Page Not Found: Static/css
ERROR - 2016-11-11 03:25:49 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:25:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:49 --> 404 Page Not Found: P/15
DEBUG - 2016-11-11 03:25:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:49 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:25:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:49 --> 404 Page Not Found: P/15
DEBUG - 2016-11-11 03:25:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:49 --> 404 Page Not Found: P/15
DEBUG - 2016-11-11 03:25:55 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:25:55 --> [{"inventory_id":"24","user_id":"15","latitude":"45.493050","longitude":"12.417700","location":"Venice, Italy","zemose_type":"request","quantity":"10","deposit":"1000","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"10","p_price_day":"100","p_price_month":"4000","skilled_labour":"1","c_skilled_labour":"1","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"1200","p_s_price_day":"2300","p_s_price_month":"30000","provide_delivery":"1","p_delivery":"1000","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"50","row_disabled":"0","shopname":"Veliancode Hardwares","shopaddress":"Veliancode P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128","rate":null}]
DEBUG - 2016-11-11 03:25:55 --> Total execution time: 0.0545
DEBUG - 2016-11-11 03:25:56 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:56 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:56 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:25:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:56 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:25:56 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:56 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:25:56 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:56 --> 404 Page Not Found: P/15
DEBUG - 2016-11-11 03:25:56 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:56 --> 404 Page Not Found: P/15
DEBUG - 2016-11-11 03:25:56 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:25:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:25:56 --> 404 Page Not Found: P/15
DEBUG - 2016-11-11 03:26:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:26:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:26:08 --> [{"inventory_id":"24","user_id":"15","latitude":"45.493050","longitude":"12.417700","location":"Venice, Italy","zemose_type":"request","quantity":"10","deposit":"1000","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"10","p_price_day":"100","p_price_month":"4000","skilled_labour":"1","c_skilled_labour":"1","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"1200","p_s_price_day":"2300","p_s_price_month":"30000","provide_delivery":"1","p_delivery":"1000","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"50","row_disabled":"0","shopname":"Veliancode Hardwares","shopaddress":"Veliancode P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128","rate":null}]
DEBUG - 2016-11-11 03:26:08 --> product id used
DEBUG - 2016-11-11 03:26:08 --> Total execution time: 0.0873
DEBUG - 2016-11-11 03:26:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:26:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:26:08 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:26:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:26:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:26:08 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:26:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:26:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:26:08 --> 404 Page Not Found: P/15
DEBUG - 2016-11-11 03:26:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:26:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:26:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:26:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:26:08 --> 404 Page Not Found: P/15
ERROR - 2016-11-11 03:26:08 --> 404 Page Not Found: P/15
DEBUG - 2016-11-11 03:26:35 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:26:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:26:35 --> Total execution time: 0.0061
DEBUG - 2016-11-11 03:26:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:26:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:26:37 --> Total execution time: 0.0071
DEBUG - 2016-11-11 03:26:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:26:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:26:37 --> 
DEBUG - 2016-11-11 03:26:37 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS MONTH
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10000 GROUP BY pid ORDER BY p.hits DESC LIMIT 0, 6 ;
DEBUG - 2016-11-11 03:26:37 --> 1
DEBUG - 2016-11-11 03:26:37 --> Total execution time: 0.0050
DEBUG - 2016-11-11 03:26:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:26:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:26:37 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:26:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:26:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:26:37 --> 404 Page Not Found: Static/images
DEBUG - 2016-11-11 03:26:39 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:26:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:26:39 --> [{"inventory_id":"24","user_id":"15","latitude":"45.493050","longitude":"12.417700","location":"Venice, Italy","zemose_type":"request","quantity":"10","deposit":"1000","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"10","p_price_day":"100","p_price_month":"4000","skilled_labour":"1","c_skilled_labour":"1","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"1200","p_s_price_day":"2300","p_s_price_month":"30000","provide_delivery":"1","p_delivery":"1000","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"50","row_disabled":"0","shopname":"Veliancode Hardwares","shopaddress":"Veliancode P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128","rate":null}]
DEBUG - 2016-11-11 03:26:39 --> product id used
DEBUG - 2016-11-11 03:26:39 --> Total execution time: 0.0631
DEBUG - 2016-11-11 03:26:39 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:26:39 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:26:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 03:26:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:26:39 --> 404 Page Not Found: Static/css
ERROR - 2016-11-11 03:26:39 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:26:39 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:26:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:26:39 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-11 03:26:39 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:26:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:26:39 --> 404 Page Not Found: P/15
DEBUG - 2016-11-11 03:26:39 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:26:39 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 03:26:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:26:39 --> 404 Page Not Found: P/15
DEBUG - 2016-11-11 03:26:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 03:26:39 --> 404 Page Not Found: P/15
DEBUG - 2016-11-11 04:51:43 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 04:51:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 04:51:43 --> Total execution time: 0.0060
DEBUG - 2016-11-11 04:51:43 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 04:51:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 04:51:43 --> Total execution time: 0.0047
DEBUG - 2016-11-11 04:51:47 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 04:51:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 04:51:47 --> Severity: error --> Exception: Unable to locate the model you have specified: SafetyModel /var/www/zemose/public_html/system/core/Loader.php 344
DEBUG - 2016-11-11 04:54:39 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 04:54:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 04:54:39 --> Total execution time: 0.0058
DEBUG - 2016-11-11 04:54:39 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 04:54:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 04:54:39 --> Total execution time: 0.0295
DEBUG - 2016-11-11 05:01:00 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 05:01:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 05:01:00 --> Severity: Notice --> Undefined variable: lan /var/www/zemose/public_html/application/views/Admin/Safety/add.php 41
ERROR - 2016-11-11 05:01:00 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/Admin/Safety/add.php 41
ERROR - 2016-11-11 05:01:00 --> Severity: Notice --> Undefined variable: lan /var/www/zemose/public_html/application/views/Admin/Safety/add.php 47
ERROR - 2016-11-11 05:01:00 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/Admin/Safety/add.php 47
DEBUG - 2016-11-11 05:01:00 --> Total execution time: 0.0043
DEBUG - 2016-11-11 05:02:10 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 05:02:10 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-11 05:02:10 --> Severity: Notice --> Undefined property: Safety::$LanguageModel /var/www/zemose/public_html/application/controllers/gdf79/Safety.php 91
ERROR - 2016-11-11 05:02:10 --> Severity: Error --> Call to a member function getAll() on null /var/www/zemose/public_html/application/controllers/gdf79/Safety.php 91
DEBUG - 2016-11-11 05:02:36 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 05:02:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 05:02:36 --> Total execution time: 0.0059
DEBUG - 2016-11-11 15:21:40 --> UTF-8 Support Enabled
DEBUG - 2016-11-11 15:21:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-11 15:21:40 --> Total execution time: 0.7325
