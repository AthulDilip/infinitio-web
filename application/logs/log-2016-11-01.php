<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-11-01 21:47:21 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:47:21 --> No URI present. Default controller set.
DEBUG - 2016-11-01 21:47:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-01 21:47:22 --> Total execution time: 0.6040
DEBUG - 2016-11-01 21:47:56 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:47:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-01 21:47:56 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-11-01 21:48:35 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:48:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-01 21:48:35 --> Total execution time: 0.2792
DEBUG - 2016-11-01 21:48:35 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:48:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-01 21:48:35 --> Total execution time: 0.0284
DEBUG - 2016-11-01 21:48:44 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:48:44 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-01 21:48:44 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 52
ERROR - 2016-11-01 21:48:44 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 52
ERROR - 2016-11-01 21:48:44 --> Severity: Notice --> Undefined variable: cart_item /var/www/zemose/public_html/application/views/cart.php 67
DEBUG - 2016-11-01 21:48:44 --> Total execution time: 0.0562
DEBUG - 2016-11-01 21:48:54 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:48:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-01 21:48:54 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 52
ERROR - 2016-11-01 21:48:54 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 52
ERROR - 2016-11-01 21:48:54 --> Severity: Notice --> Undefined variable: cart_item /var/www/zemose/public_html/application/views/cart.php 67
DEBUG - 2016-11-01 21:48:54 --> Total execution time: 0.0066
DEBUG - 2016-11-01 21:48:56 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:48:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-01 21:48:56 --> Total execution time: 0.0266
DEBUG - 2016-11-01 21:48:57 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:48:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-01 21:48:57 --> Total execution time: 0.1436
DEBUG - 2016-11-01 21:48:58 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:48:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-01 21:48:58 --> 
DEBUG - 2016-11-01 21:48:58 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid LIMIT 0, 6 ;
ERROR - 2016-11-01 21:48:58 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'PRD.rate' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid='7' AND HOUR > 0 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-11-01 21:49:14 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:49:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-01 21:49:14 --> Total execution time: 0.1840
DEBUG - 2016-11-01 21:49:17 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:49:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-01 21:49:17 --> Total execution time: 0.0069
DEBUG - 2016-11-01 21:49:17 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:49:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-01 21:49:17 --> 
DEBUG - 2016-11-01 21:49:17 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-11-01 21:49:17 --> 1
DEBUG - 2016-11-01 21:49:17 --> Total execution time: 0.0049
DEBUG - 2016-11-01 21:49:17 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:49:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-01 21:49:17 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-01 21:49:17 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:49:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-01 21:49:17 --> 404 Page Not Found: Static/images
DEBUG - 2016-11-01 21:49:19 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:49:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-01 21:49:19 --> [{"inventory_id":"5","user_id":"2","latitude":"11.120298","longitude":"76.119965","location":"Manjeri, Kerala, India","zemose_type":"request","quantity":"10","deposit":"100","price_hour":"1","price_day":"0","price_month":"0","p_price_hour":"10","p_price_day":null,"p_price_month":null,"skilled_labour":"0","c_skilled_labour":"0","s_price_hour":"0","s_price_day":"0","s_price_month":"0","p_s_price_hour":null,"p_s_price_day":null,"p_s_price_month":null,"provide_delivery":"0","p_delivery":"0","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"0","row_disabled":"1","shopname":"Hello World Rental Portal","shopaddress":"Thangalpadi","city":"Thangalpadi, Kerala, India","lat":"11.057568","lon":"76.005821"},{"inventory_id":"24","user_id":"15","latitude":"45.493050","longitude":"12.417700","location":"Venice, Italy","zemose_type":"request","quantity":"10","deposit":"1000","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"10","p_price_day":"100","p_price_month":"4000","skilled_labour":"1","c_skilled_labour":"1","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"1200","p_s_price_day":"2300","p_s_price_month":"30000","provide_delivery":"1","p_delivery":"1000","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"50","row_disabled":"0","shopname":"Veliancode Hardwares","shopaddress":"Veliancode P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128"},{"inventory_id":"8","user_id":"15","latitude":"10.727724","longitude":"75.948128","location":"Veliancode, Kerala, India","zemose_type":"request","quantity":"1","deposit":"500","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"20","p_price_day":"200","p_price_month":"1000","skilled_labour":"1","c_skilled_labour":"0","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"100","p_s_price_day":"600","p_s_price_month":"5000","provide_delivery":"0","p_delivery":"0","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"0","row_disabled":"1","shopname":"Veliancode Hardwares","shopaddress":"Veliancode P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128"},{"inventory_id":"9","user_id":"22","latitude":"0.000000","longitude":"0.000000","location":"126 Princes Highway, Bolwarra, Victoria, Australia","zemose_type":"request","quantity":"10","deposit":"1000","price_hour":"1","price_day":"0","price_month":"0","p_price_hour":"100","p_price_day":null,"p_price_month":null,"skilled_labour":"0","c_skilled_labour":"0","s_price_hour":"0","s_price_day":"0","s_price_month":"0","p_s_price_hour":null,"p_s_price_day":null,"p_s_price_month":null,"provide_delivery":"0","p_delivery":"0","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"0","row_disabled":"1","shopname":"Maliyakkal Stores","shopaddress":"Veliancode, P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128"},{"inventory_id":"6","user_id":"6","latitude":"19.751480","longitude":"75.713890","location":"Maharashtra, India","zemose_type":"request","quantity":"10","deposit":"3000","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"350","p_price_day":"3500","p_price_month":"35000","skilled_labour":"1","c_skilled_labour":"1","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"300","p_s_price_day":"500","p_s_price_month":"4810","provide_delivery":"0","p_delivery":"1220","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"0","row_disabled":"1","shopname":"zemose india","shopaddress":"malappuram","city":"Malappuram, Kerala, India","lat":"11.073182","lon":"76.073997"}]
DEBUG - 2016-11-01 21:49:19 --> product id used
DEBUG - 2016-11-01 21:49:19 --> Total execution time: 0.3980
DEBUG - 2016-11-01 21:49:19 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:49:19 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:49:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-01 21:49:19 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-01 21:49:19 --> 404 Page Not Found: Static/css
ERROR - 2016-11-01 21:49:19 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-01 21:49:20 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:49:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-01 21:49:20 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-01 21:49:20 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:49:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-01 21:49:20 --> 404 Page Not Found: P/15
DEBUG - 2016-11-01 21:49:20 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:49:20 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:49:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-01 21:49:20 --> 404 Page Not Found: P/15
DEBUG - 2016-11-01 21:49:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-01 21:49:20 --> 404 Page Not Found: P/15
DEBUG - 2016-11-01 21:49:31 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:49:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-01 21:49:31 --> {"from_date":"11\/02\/2016 00:00","type":"request","product_id":15,"pricing":"Hour","rent_for":100,"c_skill":0,"need_skill":false,"skill_pricing":0,"skill_for":0,"calculated_total":2050}
ERROR - 2016-11-01 21:49:31 --> Severity: Notice --> Undefined property: stdClass::$zemoser_id /var/www/zemose/public_html/application/models/CartModel.php 59
DEBUG - 2016-11-01 21:49:31 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:49:31 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-01 21:49:31 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 52
ERROR - 2016-11-01 21:49:31 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 52
DEBUG - 2016-11-01 21:49:31 --> Total execution time: 0.0070
DEBUG - 2016-11-01 21:49:41 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 21:49:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-01 21:49:41 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 52
ERROR - 2016-11-01 21:49:41 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 52
DEBUG - 2016-11-01 21:49:41 --> Total execution time: 0.0288
DEBUG - 2016-11-01 23:28:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 23:28:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-01 23:28:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-01 23:28:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-01 23:28:08 --> Total execution time: 0.1623
