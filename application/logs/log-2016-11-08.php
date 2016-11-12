<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-11-08 15:21:52 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:21:52 --> No URI present. Default controller set.
DEBUG - 2016-11-08 15:21:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:21:52 --> Total execution time: 0.3917
DEBUG - 2016-11-08 15:22:16 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:22:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:22:16 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:22:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:22:16 --> Total execution time: 0.2000
DEBUG - 2016-11-08 15:22:16 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:22:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:22:16 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-11-08 15:22:21 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:22:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:22:21 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:22:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:22:21 --> Total execution time: 0.0569
DEBUG - 2016-11-08 15:22:28 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:22:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:22:28 --> Total execution time: 0.0316
DEBUG - 2016-11-08 15:22:29 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:22:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:22:29 --> Total execution time: 0.0181
DEBUG - 2016-11-08 15:22:32 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:22:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:22:32 --> Total execution time: 0.0211
DEBUG - 2016-11-08 15:22:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:22:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:22:33 --> Total execution time: 0.0049
DEBUG - 2016-11-08 15:22:34 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:22:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:22:34 --> Total execution time: 0.0228
DEBUG - 2016-11-08 15:22:38 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:22:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:22:38 --> Total execution time: 0.0069
DEBUG - 2016-11-08 15:23:13 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:23:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:23:13 --> Total execution time: 0.1076
DEBUG - 2016-11-08 15:23:20 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:23:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:23:20 --> Total execution time: 0.0735
DEBUG - 2016-11-08 15:23:30 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:23:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:23:30 --> Total execution time: 0.0540
DEBUG - 2016-11-08 15:25:24 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:25:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:25:24 --> HJ_TOOLid16
DEBUG - 2016-11-08 15:25:24 --> Total execution time: 0.1922
DEBUG - 2016-11-08 15:25:24 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:25:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:25:24 --> Total execution time: 0.0029
DEBUG - 2016-11-08 15:25:25 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:25:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:25:25 --> Total execution time: 0.0074
DEBUG - 2016-11-08 15:25:40 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:25:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:25:40 --> Total execution time: 0.0164
DEBUG - 2016-11-08 15:25:40 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:25:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:25:40 --> Total execution time: 0.0036
DEBUG - 2016-11-08 15:25:45 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:25:45 --> No URI present. Default controller set.
DEBUG - 2016-11-08 15:25:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:25:45 --> Total execution time: 0.0067
DEBUG - 2016-11-08 15:26:23 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:26:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:26:23 --> Total execution time: 0.0374
DEBUG - 2016-11-08 15:26:25 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:26:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:26:25 --> Total execution time: 0.0331
DEBUG - 2016-11-08 15:26:25 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:26:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:26:25 --> 
DEBUG - 2016-11-08 15:26:25 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS MONTH
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid ORDER BY p.hits DESC LIMIT 0, 6 ;
ERROR - 2016-11-08 15:26:25 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'PRD.rate' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS MONTH
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid='9' AND HOUR > 0 GROUP BY pid ORDER BY p.hits DESC LIMIT 0, 6 ;
DEBUG - 2016-11-08 15:27:36 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:27:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:27:37 --> Total execution time: 0.4040
DEBUG - 2016-11-08 15:27:43 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:27:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:27:43 --> Total execution time: 0.0028
DEBUG - 2016-11-08 15:27:53 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:27:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:27:53 --> Total execution time: 0.0087
DEBUG - 2016-11-08 15:27:53 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:27:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:27:53 --> 
DEBUG - 2016-11-08 15:27:53 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS MONTH
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid ORDER BY p.hits DESC LIMIT 0, 6 ;
DEBUG - 2016-11-08 15:27:54 --> 0
DEBUG - 2016-11-08 15:27:54 --> Total execution time: 0.0057
DEBUG - 2016-11-08 15:28:32 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:28:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:28:33 --> Total execution time: 0.2650
DEBUG - 2016-11-08 15:28:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:28:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:28:33 --> Total execution time: 0.0071
DEBUG - 2016-11-08 15:28:42 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:28:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:28:42 --> Total execution time: 0.0294
DEBUG - 2016-11-08 15:28:45 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:28:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:28:45 --> Total execution time: 0.0381
DEBUG - 2016-11-08 15:28:48 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:28:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:28:48 --> Total execution time: 0.0067
DEBUG - 2016-11-08 15:28:51 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:28:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:28:51 --> Total execution time: 0.0060
DEBUG - 2016-11-08 15:28:51 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:28:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:28:51 --> Total execution time: 0.0044
DEBUG - 2016-11-08 15:28:54 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:28:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:28:54 --> Total execution time: 0.0225
DEBUG - 2016-11-08 15:30:05 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:30:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:30:05 --> {"pid":"16","zemose_type":"request","quantity":"15","latitude":"11.1202984","longitude":"76.11996769999996","location":"Manjeri, Kerala, India","deposit":"1500","price_hour":"1","p_price_hour":"100","p_price_day":"","p_price_month":"","skilled_labour":"0","c_skilled_labour":"0","s_p_price_hour":"","s_p_price_day":"","s_p_price_month":"","provide_delivery":"1","p_delivery":"150","p_delivery_area":"10"}
DEBUG - 2016-11-08 15:30:05 --> Total execution time: 0.0605
DEBUG - 2016-11-08 15:30:05 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:30:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:30:05 --> Total execution time: 0.0044
DEBUG - 2016-11-08 15:30:12 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:30:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:30:12 --> Total execution time: 0.0093
DEBUG - 2016-11-08 15:30:13 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:30:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:30:13 --> Total execution time: 0.0074
DEBUG - 2016-11-08 15:30:13 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:30:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:30:13 --> 
DEBUG - 2016-11-08 15:30:13 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS MONTH
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid ORDER BY p.hits DESC LIMIT 0, 6 ;
DEBUG - 2016-11-08 15:30:13 --> 1
DEBUG - 2016-11-08 15:30:13 --> Total execution time: 0.0095
DEBUG - 2016-11-08 15:30:13 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:30:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:30:13 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-08 15:30:13 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:30:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:30:13 --> 404 Page Not Found: Static/images
DEBUG - 2016-11-08 15:33:41 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:33:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:33:41 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:33:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:33:41 --> Total execution time: 0.0632
DEBUG - 2016-11-08 15:34:09 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:34:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:34:09 --> Total execution time: 0.0063
DEBUG - 2016-11-08 15:34:14 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:34:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:34:14 --> Total execution time: 0.0093
DEBUG - 2016-11-08 15:34:25 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:34:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:34:25 --> Total execution time: 0.0070
DEBUG - 2016-11-08 15:34:31 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:34:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:34:31 --> Total execution time: 0.1118
DEBUG - 2016-11-08 15:34:31 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:34:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:34:31 --> Total execution time: 0.0058
DEBUG - 2016-11-08 15:34:34 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:34:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:34:34 --> Total execution time: 0.0053
DEBUG - 2016-11-08 15:34:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:34:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:34:37 --> Total execution time: 0.0069
DEBUG - 2016-11-08 15:34:38 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:34:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:34:38 --> Total execution time: 0.0099
DEBUG - 2016-11-08 15:34:38 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:34:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:34:38 --> 
DEBUG - 2016-11-08 15:34:38 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS MONTH
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid ORDER BY p.hits DESC LIMIT 0, 6 ;
DEBUG - 2016-11-08 15:34:38 --> 1
DEBUG - 2016-11-08 15:34:38 --> Total execution time: 0.0070
DEBUG - 2016-11-08 15:34:38 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:34:38 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:34:38 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-08 15:34:38 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:34:38 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:34:38 --> 404 Page Not Found: Static/images
DEBUG - 2016-11-08 15:34:40 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:34:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:34:40 --> [{"inventory_id":"24","user_id":"15","latitude":"45.493050","longitude":"12.417700","location":"Venice, Italy","zemose_type":"request","quantity":"10","deposit":"1000","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"10","p_price_day":"100","p_price_month":"4000","skilled_labour":"1","c_skilled_labour":"1","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"1200","p_s_price_day":"2300","p_s_price_month":"30000","provide_delivery":"1","p_delivery":"1000","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"50","row_disabled":"0","shopname":"Veliancode Hardwares","shopaddress":"Veliancode P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128","rate":null}]
DEBUG - 2016-11-08 15:34:40 --> product id used
DEBUG - 2016-11-08 15:34:40 --> Total execution time: 0.1201
DEBUG - 2016-11-08 15:34:41 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:34:41 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:34:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:34:41 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-08 15:34:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:34:41 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-08 15:34:41 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:34:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:34:41 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-08 15:34:41 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:34:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:34:41 --> 404 Page Not Found: P/16
DEBUG - 2016-11-08 15:34:41 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:34:41 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:34:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:34:41 --> 404 Page Not Found: P/16
DEBUG - 2016-11-08 15:34:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:34:41 --> 404 Page Not Found: P/16
DEBUG - 2016-11-08 15:35:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:35:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:35:33 --> {"from_date":"11\/09\/2016 00:00","type":"request","product_id":16,"pricing":"Hour","rent_for":120,"c_skill":0,"need_skill":false,"skill_pricing":0,"skill_for":0,"calculated_total":14100}
ERROR - 2016-11-08 15:35:33 --> Severity: Notice --> Undefined property: stdClass::$zemoser_id /var/www/zemose/public_html/application/models/CartModel.php 59
DEBUG - 2016-11-08 15:35:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:35:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:35:33 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 52
ERROR - 2016-11-08 15:35:33 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 52
DEBUG - 2016-11-08 15:35:33 --> Total execution time: 0.0215
DEBUG - 2016-11-08 15:35:44 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:35:44 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:35:44 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 52
ERROR - 2016-11-08 15:35:44 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 52
DEBUG - 2016-11-08 15:35:44 --> Total execution time: 0.0161
DEBUG - 2016-11-08 15:36:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:36:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:36:08 --> Severity: Notice --> Undefined property: stdClass::$zemoser_id /var/www/zemose/public_html/application/models/CartModel.php 367
DEBUG - 2016-11-08 15:36:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:36:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:36:08 --> Total execution time: 0.0702
DEBUG - 2016-11-08 15:36:11 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:36:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:36:11 --> ORDER ID : 8
ERROR - 2016-11-08 15:36:11 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 52
ERROR - 2016-11-08 15:36:11 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 52
DEBUG - 2016-11-08 15:36:11 --> Total execution time: 0.0240
DEBUG - 2016-11-08 15:36:11 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:36:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:36:11 --> 404 Page Not Found: Static/content
DEBUG - 2016-11-08 15:36:47 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:36:47 --> No URI present. Default controller set.
DEBUG - 2016-11-08 15:36:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:36:47 --> Total execution time: 0.0511
DEBUG - 2016-11-08 15:37:51 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:37:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:37:51 --> Total execution time: 0.0965
DEBUG - 2016-11-08 15:37:51 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:37:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:37:51 --> Total execution time: 0.0063
DEBUG - 2016-11-08 15:37:55 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:37:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:37:55 --> Total execution time: 0.0044
DEBUG - 2016-11-08 15:37:58 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:37:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:37:58 --> Total execution time: 0.0076
DEBUG - 2016-11-08 15:38:00 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:38:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:38:00 --> Total execution time: 0.0106
DEBUG - 2016-11-08 15:38:02 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:38:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:38:02 --> Total execution time: 0.0050
DEBUG - 2016-11-08 15:38:04 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:38:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:38:04 --> Total execution time: 0.0234
DEBUG - 2016-11-08 15:38:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:38:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:38:08 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 52
ERROR - 2016-11-08 15:38:08 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 52
DEBUG - 2016-11-08 15:38:08 --> Total execution time: 0.0276
DEBUG - 2016-11-08 15:38:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:38:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:38:08 --> 404 Page Not Found: Static/content
DEBUG - 2016-11-08 15:40:10 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:40:10 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:40:10 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 52
ERROR - 2016-11-08 15:40:10 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 52
DEBUG - 2016-11-08 15:40:10 --> Total execution time: 0.0054
DEBUG - 2016-11-08 15:40:10 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:40:10 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:40:10 --> 404 Page Not Found: Static/content
DEBUG - 2016-11-08 15:40:14 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:40:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:40:14 --> ORDER ID : 8
ERROR - 2016-11-08 15:40:14 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 52
ERROR - 2016-11-08 15:40:14 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 52
DEBUG - 2016-11-08 15:40:14 --> Total execution time: 0.0056
DEBUG - 2016-11-08 15:40:15 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:40:15 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:40:15 --> 404 Page Not Found: Static/content
DEBUG - 2016-11-08 15:40:21 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:40:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:40:21 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:40:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:40:21 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 52
ERROR - 2016-11-08 15:40:21 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 52
DEBUG - 2016-11-08 15:40:21 --> Total execution time: 0.0067
DEBUG - 2016-11-08 15:40:21 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:40:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:40:21 --> 404 Page Not Found: Static/content
DEBUG - 2016-11-08 15:40:28 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:40:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:40:28 --> ORDER ID : 8
ERROR - 2016-11-08 15:40:28 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 52
ERROR - 2016-11-08 15:40:28 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 52
DEBUG - 2016-11-08 15:40:28 --> Total execution time: 0.0053
DEBUG - 2016-11-08 15:40:28 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:40:28 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:40:28 --> 404 Page Not Found: Static/content
DEBUG - 2016-11-08 15:40:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:40:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:40:33 --> Total execution time: 0.2010
DEBUG - 2016-11-08 15:42:11 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:42:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:42:11 --> {"mihpayid":"403993715515174901","mode":"CC","status":"failure","unmappedstatus":"failed","key":"gtKFFx","txnid":"ZEMPUM0IN019","amount":"14100.00","cardCategory":"domestic","discount":"0.00","net_amount_debit":"0.00","addedon":"2016-11-08 15:40:38","productinfo":"Payment for Order   ZOIN008","firstname":"Saleem","lastname":"","address1":"","address2":"","city":"","state":"","country":"","zipcode":"","email":"sabeersulaiman@outlook.com","phone":"8893979247","udf1":"","udf2":"","udf3":"","udf4":"","udf5":"","udf6":"","udf7":"","udf8":"","udf9":"","udf10":"","hash":"a5315ba9269688062a3828674211947894458dfa863e1f1e6212366b995881b2899250f1010b0fe0b8951635ac3d099f331d781d1214fabafdffe7fe2f225cc7","field1":"","field2":"","field3":"","field4":"","field5":" !ERROR!-GV00010-Missing data typeError Code: GV00010","field6":"","field7":"","field8":"failed in enrollment","field9":" !ERROR!-GV00010-Missing data typeError Code: GV00010","payment_source":"payu","PG_TYPE":"HDFCPG","bank_ref_num":"","bankcode":"CC","error":"E500","error_Message":"Bank failed to authenticate the customer","name_on_card":"any name","cardnum":"512345XXXXXX2346","cardhash":"This field is no longer supported in postback params.","issuing_bank":"HDFC","card_type":"MAST"}
DEBUG - 2016-11-08 15:42:12 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:42:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:42:12 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:42:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:42:12 --> ORDER ID : 8
ERROR - 2016-11-08 15:42:12 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 52
ERROR - 2016-11-08 15:42:12 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 52
DEBUG - 2016-11-08 15:42:12 --> Total execution time: 0.0060
DEBUG - 2016-11-08 15:42:12 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:42:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:42:12 --> 404 Page Not Found: Static/content
DEBUG - 2016-11-08 15:42:16 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:42:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:42:16 --> Total execution time: 0.1480
DEBUG - 2016-11-08 15:44:56 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:44:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:44:56 --> {"mihpayid":"403993715515174924","mode":"COD","status":"in progress","unmappedstatus":"in progress","key":"gtKFFx","txnid":"ZEMPUM0IN020","amount":"14100.00","discount":"0.00","net_amount_debit":"0.00","addedon":"2016-11-08 15:42:17","productinfo":"Payment for Order   ZOIN008","firstname":"Saleem","lastname":"","address1":"","address2":"","city":"","state":"","country":"","zipcode":"","email":"sabeersulaiman@outlook.com","phone":"8893979247","udf1":"","udf2":"","udf3":"","udf4":"","udf5":"","udf6":"","udf7":"","udf8":"","udf9":"","udf10":"","hash":"b982a09bdebf8101a472d3b0548cdc9e9dcceb246e98b4a4c0de89c0164ef84c6405de008603a3c908e94e3a8251b8e52c039d4e4cb40c3b4b631deec6f75341","field1":"","field2":"","field3":"","field4":"","field5":"","field6":"","field7":"","field8":"","field9":"","payment_source":"payu","PG_TYPE":"COD","bank_ref_num":"","bankcode":"COD","error":"","error_Message":"","shipping_firstname":"Hello","shipping_lastname":"Sir","shipping_address1":"Bashk","shipping_address2":"klnjk","shipping_city":"Majndjdn","shipping_state":"Kerala","shipping_country":"India","shipping_zipcode":"679579","shipping_phone":"8893979247","shipping_phoneverified":""}
DEBUG - 2016-11-08 15:44:56 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:44:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:44:56 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:44:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-08 15:44:56 --> ORDER ID : 8
ERROR - 2016-11-08 15:44:56 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 52
ERROR - 2016-11-08 15:44:56 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 52
DEBUG - 2016-11-08 15:44:56 --> Total execution time: 0.0068
DEBUG - 2016-11-08 15:44:56 --> UTF-8 Support Enabled
DEBUG - 2016-11-08 15:44:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-08 15:44:56 --> 404 Page Not Found: Static/content
