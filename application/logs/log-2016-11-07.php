<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-11-07 00:09:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 00:09:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 00:09:37 --> Total execution time: 0.0048
DEBUG - 2016-11-07 00:09:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 00:09:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 00:09:37 --> Total execution time: 0.0041
DEBUG - 2016-11-07 22:06:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:06:33 --> No URI present. Default controller set.
DEBUG - 2016-11-07 22:06:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:06:34 --> Total execution time: 0.6250
DEBUG - 2016-11-07 22:07:10 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:07:10 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:07:10 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-11-07 22:30:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:30:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:30:37 --> Total execution time: 0.3806
DEBUG - 2016-11-07 22:30:40 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:30:40 --> No URI present. Default controller set.
DEBUG - 2016-11-07 22:30:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:30:40 --> Total execution time: 0.0068
DEBUG - 2016-11-07 22:30:42 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:30:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:30:42 --> Total execution time: 0.0465
DEBUG - 2016-11-07 22:30:45 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:30:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:30:45 --> Total execution time: 0.1274
DEBUG - 2016-11-07 22:30:48 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:30:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:30:48 --> 
DEBUG - 2016-11-07 22:30:48 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS MONTH
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid ORDER BY p.hits DESC LIMIT 0, 6 ;
DEBUG - 2016-11-07 22:30:48 --> 1
DEBUG - 2016-11-07 22:30:48 --> Total execution time: 0.0567
DEBUG - 2016-11-07 22:30:48 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:30:48 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:30:48 --> 404 Page Not Found: Static/images
DEBUG - 2016-11-07 22:30:48 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:30:48 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:30:48 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-07 22:30:50 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:30:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:30:50 --> [{"inventory_id":"24","user_id":"15","latitude":"45.493050","longitude":"12.417700","location":"Venice, Italy","zemose_type":"request","quantity":"10","deposit":"1000","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"10","p_price_day":"100","p_price_month":"4000","skilled_labour":"1","c_skilled_labour":"1","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"1200","p_s_price_day":"2300","p_s_price_month":"30000","provide_delivery":"1","p_delivery":"1000","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"50","row_disabled":"0","shopname":"Veliancode Hardwares","shopaddress":"Veliancode P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128","rate":null}]
DEBUG - 2016-11-07 22:30:50 --> product id used
DEBUG - 2016-11-07 22:30:50 --> Total execution time: 0.3660
DEBUG - 2016-11-07 22:30:51 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:30:51 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:30:51 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-07 22:30:51 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:30:51 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:30:51 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-07 22:30:52 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:30:52 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:30:52 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-07 22:30:52 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:30:52 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:30:52 --> 404 Page Not Found: P/15
DEBUG - 2016-11-07 22:30:52 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:30:52 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:30:52 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:30:52 --> 404 Page Not Found: P/15
DEBUG - 2016-11-07 22:30:52 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:30:52 --> 404 Page Not Found: P/15
DEBUG - 2016-11-07 22:32:14 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:32:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:32:15 --> [{"inventory_id":"24","user_id":"15","latitude":"45.493050","longitude":"12.417700","location":"Venice, Italy","zemose_type":"request","quantity":"10","deposit":"1000","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"10","p_price_day":"100","p_price_month":"4000","skilled_labour":"1","c_skilled_labour":"1","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"1200","p_s_price_day":"2300","p_s_price_month":"30000","provide_delivery":"1","p_delivery":"1000","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"50","row_disabled":"0","shopname":"Veliancode Hardwares","shopaddress":"Veliancode P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128","rate":null}]
DEBUG - 2016-11-07 22:32:15 --> product id used
DEBUG - 2016-11-07 22:32:15 --> Total execution time: 0.1090
DEBUG - 2016-11-07 22:33:44 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:33:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:33:44 --> [{"inventory_id":"24","user_id":"15","latitude":"45.493050","longitude":"12.417700","location":"Venice, Italy","zemose_type":"request","quantity":"10","deposit":"1000","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"10","p_price_day":"100","p_price_month":"4000","skilled_labour":"1","c_skilled_labour":"1","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"1200","p_s_price_day":"2300","p_s_price_month":"30000","provide_delivery":"1","p_delivery":"1000","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"50","row_disabled":"0","shopname":"Veliancode Hardwares","shopaddress":"Veliancode P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128","rate":null}]
DEBUG - 2016-11-07 22:33:44 --> Total execution time: 0.0660
DEBUG - 2016-11-07 22:33:45 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:33:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:33:45 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-07 22:33:45 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:33:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:33:45 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-07 22:33:45 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:33:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:33:45 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-07 22:33:45 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:33:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:33:45 --> 404 Page Not Found: P/15
DEBUG - 2016-11-07 22:33:45 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:33:45 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:33:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:33:45 --> 404 Page Not Found: P/15
DEBUG - 2016-11-07 22:33:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:33:45 --> 404 Page Not Found: P/15
DEBUG - 2016-11-07 22:34:14 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:34:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:34:14 --> Total execution time: 0.2862
DEBUG - 2016-11-07 22:34:14 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:34:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:34:14 --> Total execution time: 0.0304
DEBUG - 2016-11-07 22:34:24 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:34:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:34:24 --> Total execution time: 0.0421
DEBUG - 2016-11-07 22:34:28 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:34:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:34:28 --> Total execution time: 0.0272
DEBUG - 2016-11-07 22:37:58 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:37:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:37:58 --> Total execution time: 0.0058
DEBUG - 2016-11-07 22:38:05 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:38:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:38:05 --> Total execution time: 0.0127
DEBUG - 2016-11-07 22:38:19 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:38:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:38:19 --> Total execution time: 0.0048
DEBUG - 2016-11-07 22:38:23 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:38:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:38:23 --> Total execution time: 0.0048
DEBUG - 2016-11-07 22:38:26 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:38:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:38:26 --> Total execution time: 0.0539
DEBUG - 2016-11-07 22:38:29 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:38:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:38:29 --> Total execution time: 0.0093
DEBUG - 2016-11-07 22:38:34 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:38:34 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:38:34 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 52
ERROR - 2016-11-07 22:38:34 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 52
DEBUG - 2016-11-07 22:38:34 --> Total execution time: 0.0386
DEBUG - 2016-11-07 22:39:05 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:39:05 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:39:05 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 52
ERROR - 2016-11-07 22:39:05 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 52
DEBUG - 2016-11-07 22:39:05 --> Total execution time: 0.0079
DEBUG - 2016-11-07 22:41:45 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:41:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:41:45 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 52
ERROR - 2016-11-07 22:41:45 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 52
DEBUG - 2016-11-07 22:41:45 --> Total execution time: 0.0564
DEBUG - 2016-11-07 22:41:45 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:41:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:41:45 --> 404 Page Not Found: Static/content
DEBUG - 2016-11-07 22:41:45 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:41:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:41:45 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-07 22:43:05 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:43:05 --> No URI present. Default controller set.
DEBUG - 2016-11-07 22:43:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:43:05 --> Total execution time: 0.0070
DEBUG - 2016-11-07 22:51:15 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:51:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:51:15 --> Total execution time: 0.0076
DEBUG - 2016-11-07 22:51:35 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:51:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:51:35 --> Total execution time: 0.0169
DEBUG - 2016-11-07 22:51:35 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:51:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:51:35 --> 
DEBUG - 2016-11-07 22:51:35 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS MONTH
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid ORDER BY p.hits DESC LIMIT 0, 6 ;
DEBUG - 2016-11-07 22:51:35 --> 1
DEBUG - 2016-11-07 22:51:35 --> Total execution time: 0.0050
DEBUG - 2016-11-07 22:51:35 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:51:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:51:35 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-07 22:51:35 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:51:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:51:35 --> 404 Page Not Found: Static/images
DEBUG - 2016-11-07 22:54:51 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:54:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:54:51 --> 
DEBUG - 2016-11-07 22:54:51 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS MONTH
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid ORDER BY p.hits DESC LIMIT 0, 6 ;
DEBUG - 2016-11-07 22:54:51 --> 1
DEBUG - 2016-11-07 22:54:51 --> Total execution time: 0.0089
DEBUG - 2016-11-07 22:55:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:55:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:55:08 --> 
DEBUG - 2016-11-07 22:55:08 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS MONTH
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid ORDER BY HOUR ASC LIMIT 0, 6 ;
DEBUG - 2016-11-07 22:55:08 --> 1
DEBUG - 2016-11-07 22:55:08 --> Total execution time: 0.0074
DEBUG - 2016-11-07 22:55:09 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:55:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:55:09 --> 
DEBUG - 2016-11-07 22:55:09 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS MONTH
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid ORDER BY HOUR DESC LIMIT 0, 6 ;
DEBUG - 2016-11-07 22:55:09 --> 1
DEBUG - 2016-11-07 22:55:09 --> Total execution time: 0.0053
DEBUG - 2016-11-07 22:55:11 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:55:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:55:11 --> 
DEBUG - 2016-11-07 22:55:11 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS MONTH
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid ORDER BY p.date_modified DESC LIMIT 0, 6 ;
DEBUG - 2016-11-07 22:55:11 --> 1
DEBUG - 2016-11-07 22:55:11 --> Total execution time: 0.0062
DEBUG - 2016-11-07 22:55:21 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:55:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:55:21 --> Total execution time: 0.0048
DEBUG - 2016-11-07 22:55:29 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:55:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:55:29 --> Total execution time: 0.0086
DEBUG - 2016-11-07 22:55:36 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:55:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:55:36 --> Total execution time: 0.0552
DEBUG - 2016-11-07 22:55:39 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:55:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:55:39 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS hour,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS day,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS month
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 )
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id)  WHERE pd.name like '%po%' AND hour > 0 GROUP BY pid ORDER BY p.hits DESC LIMIT 0,8 ;
DEBUG - 2016-11-07 22:55:39 --> Total execution time: 0.0051
DEBUG - 2016-11-07 22:55:39 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:55:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:55:39 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-07 22:55:39 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:55:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:55:39 --> 404 Page Not Found: Static/images
DEBUG - 2016-11-07 22:55:54 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:55:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:55:54 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS hour,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS day,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS month
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 )
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id)  WHERE pd.name like '%po%' AND hour BETWEEN 10 AND 10 GROUP BY pid ORDER BY p.hits DESC LIMIT 1,8 ;
DEBUG - 2016-11-07 22:55:54 --> Total execution time: 0.0059
DEBUG - 2016-11-07 22:55:56 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:55:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:55:56 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS hour,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS day,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1 AND row_disabled = 0) AS month
                    FROM inventory i WHERE active = 1 AND row_disabled = 0 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 )
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id)  WHERE pd.name like '%po%' AND hour BETWEEN 10 AND 10 GROUP BY pid ORDER BY p.hits DESC LIMIT 1,8 ;
DEBUG - 2016-11-07 22:55:56 --> Total execution time: 0.0054
DEBUG - 2016-11-07 22:56:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:56:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:56:49 --> [{"inventory_id":"24","user_id":"15","latitude":"45.493050","longitude":"12.417700","location":"Venice, Italy","zemose_type":"request","quantity":"10","deposit":"1000","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"10","p_price_day":"100","p_price_month":"4000","skilled_labour":"1","c_skilled_labour":"1","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"1200","p_s_price_day":"2300","p_s_price_month":"30000","provide_delivery":"1","p_delivery":"1000","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"50","row_disabled":"0","shopname":"Veliancode Hardwares","shopaddress":"Veliancode P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128","rate":null}]
DEBUG - 2016-11-07 22:56:49 --> product id used
DEBUG - 2016-11-07 22:56:49 --> Total execution time: 0.0556
DEBUG - 2016-11-07 22:56:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:56:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:56:49 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-07 22:56:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:56:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:56:49 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-07 22:56:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:56:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:56:49 --> 404 Page Not Found: P/15
DEBUG - 2016-11-07 22:56:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:56:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:56:49 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-07 22:56:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:56:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 22:56:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 22:56:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 22:56:49 --> 404 Page Not Found: P/15
ERROR - 2016-11-07 22:56:49 --> 404 Page Not Found: P/15
DEBUG - 2016-11-07 19:11:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:11:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 19:11:08 --> 404 Page Not Found: Test/imageCrop
DEBUG - 2016-11-07 19:11:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:11:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 19:11:37 --> 404 Page Not Found: Test/imageCrop
DEBUG - 2016-11-07 19:12:01 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:12:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:12:01 --> Total execution time: 0.0249
DEBUG - 2016-11-07 19:12:10 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:12:10 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 19:12:10 --> 404 Page Not Found: Test/imageCrop
DEBUG - 2016-11-07 19:13:24 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:13:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:13:24 --> Total execution time: 0.0030
DEBUG - 2016-11-07 19:15:06 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:15:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:15:06 --> Total execution time: 0.0031
DEBUG - 2016-11-07 19:15:10 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:15:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:15:10 --> Total execution time: 0.0030
DEBUG - 2016-11-07 19:15:10 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:15:10 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 19:15:10 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-11-07 19:15:10 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:15:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:15:10 --> Total execution time: 0.0041
DEBUG - 2016-11-07 19:15:11 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:15:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 19:15:11 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-11-07 19:15:11 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:15:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:15:11 --> Total execution time: 0.0034
DEBUG - 2016-11-07 19:15:11 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:15:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 19:15:11 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-11-07 19:15:11 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:15:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:15:11 --> Total execution time: 0.0055
DEBUG - 2016-11-07 19:15:12 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:15:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 19:15:12 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-11-07 19:15:12 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:15:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:15:12 --> Total execution time: 0.0030
DEBUG - 2016-11-07 19:15:12 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:15:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 19:15:12 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-11-07 19:15:12 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:15:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:15:12 --> Total execution time: 0.0033
DEBUG - 2016-11-07 19:15:12 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:15:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 19:15:12 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-11-07 19:15:12 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:15:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:15:12 --> Total execution time: 0.0035
DEBUG - 2016-11-07 19:15:12 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:15:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 19:15:12 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-11-07 19:15:13 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:15:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:15:13 --> Total execution time: 0.0032
DEBUG - 2016-11-07 19:15:13 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:15:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 19:15:13 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-11-07 19:15:13 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:15:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:15:13 --> Total execution time: 0.0034
DEBUG - 2016-11-07 19:15:13 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:15:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 19:15:13 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-11-07 19:15:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:15:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 19:15:33 --> 404 Page Not Found: Test/imageCrop
DEBUG - 2016-11-07 19:16:16 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:16:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:16:16 --> Total execution time: 0.0658
DEBUG - 2016-11-07 19:16:40 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:16:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:16:40 --> Total execution time: 0.0071
DEBUG - 2016-11-07 19:16:44 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:16:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:16:44 --> Total execution time: 0.0070
DEBUG - 2016-11-07 19:16:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:16:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:16:49 --> Total execution time: 0.0045
DEBUG - 2016-11-07 19:17:13 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:17:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:17:13 --> Total execution time: 0.0056
DEBUG - 2016-11-07 19:17:14 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:17:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:17:14 --> Total execution time: 0.0033
DEBUG - 2016-11-07 19:17:15 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:17:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:17:15 --> Total execution time: 0.0033
DEBUG - 2016-11-07 19:17:15 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:17:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:17:15 --> Total execution time: 0.0031
DEBUG - 2016-11-07 19:17:16 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:17:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:17:16 --> Total execution time: 0.0032
DEBUG - 2016-11-07 19:17:16 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:17:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:17:16 --> Total execution time: 0.0041
DEBUG - 2016-11-07 19:17:54 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:17:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:17:54 --> Total execution time: 0.0063
DEBUG - 2016-11-07 19:17:56 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 19:17:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 19:17:56 --> Total execution time: 0.0032
DEBUG - 2016-11-07 20:05:41 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:05:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 20:05:41 --> Total execution time: 0.0814
DEBUG - 2016-11-07 20:05:44 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:05:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 20:05:44 --> Total execution time: 0.0742
DEBUG - 2016-11-07 20:11:02 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:11:02 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 20:11:02 --> Unable to save the image. Please make sure the image and file directory are writable.
DEBUG - 2016-11-07 20:11:02 --> Total execution time: 0.0800
DEBUG - 2016-11-07 20:11:16 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:11:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 20:11:16 --> Unable to save the image. Please make sure the image and file directory are writable.
DEBUG - 2016-11-07 20:11:16 --> Total execution time: 0.0719
DEBUG - 2016-11-07 20:11:57 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:11:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 20:11:57 --> Unable to save the image. Please make sure the image and file directory are writable.
DEBUG - 2016-11-07 20:11:57 --> Total execution time: 0.0695
DEBUG - 2016-11-07 20:11:58 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:11:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 20:11:58 --> Unable to save the image. Please make sure the image and file directory are writable.
DEBUG - 2016-11-07 20:11:58 --> Total execution time: 0.0694
DEBUG - 2016-11-07 20:12:17 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:12:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 20:12:17 --> Unable to save the image. Please make sure the image and file directory are writable.
DEBUG - 2016-11-07 20:12:17 --> Total execution time: 0.0745
DEBUG - 2016-11-07 20:25:27 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:25:27 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 20:25:28 --> Unable to save the image. Please make sure the image and file directory are writable.
DEBUG - 2016-11-07 20:25:28 --> Total execution time: 0.7061
DEBUG - 2016-11-07 20:25:28 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:25:28 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 20:25:28 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-11-07 20:25:59 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:25:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 20:25:59 --> Unable to save the image. Please make sure the image and file directory are writable.
DEBUG - 2016-11-07 20:25:59 --> Total execution time: 0.0719
DEBUG - 2016-11-07 20:26:23 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:26:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 20:26:23 --> Unable to save the image. Please make sure the image and file directory are writable.
DEBUG - 2016-11-07 20:26:23 --> Total execution time: 0.0707
DEBUG - 2016-11-07 20:28:40 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:28:40 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 20:28:40 --> Unable to save the image. Please make sure the image and file directory are writable.
DEBUG - 2016-11-07 20:28:40 --> Total execution time: 0.0748
DEBUG - 2016-11-07 20:29:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:29:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 20:29:33 --> Total execution time: 0.0774
DEBUG - 2016-11-07 20:30:07 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:30:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 20:30:07 --> Total execution time: 0.1491
DEBUG - 2016-11-07 20:30:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:30:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 20:30:49 --> Total execution time: 0.0071
DEBUG - 2016-11-07 20:31:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:31:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 20:31:37 --> Total execution time: 0.0070
DEBUG - 2016-11-07 20:31:59 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:31:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 20:31:59 --> Total execution time: 0.0075
DEBUG - 2016-11-07 20:32:35 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:32:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 20:32:35 --> Total execution time: 0.1015
DEBUG - 2016-11-07 20:33:00 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:33:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 20:33:00 --> Total execution time: 0.1060
DEBUG - 2016-11-07 20:36:09 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:36:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 20:36:09 --> Total execution time: 0.0622
DEBUG - 2016-11-07 20:44:16 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:44:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 20:44:16 --> Total execution time: 0.0556
DEBUG - 2016-11-07 20:46:28 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:46:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 20:46:28 --> Total execution time: 0.0586
DEBUG - 2016-11-07 20:47:04 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 20:47:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 20:47:04 --> Total execution time: 0.0062
DEBUG - 2016-11-07 23:32:38 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 23:32:38 --> No URI present. Default controller set.
DEBUG - 2016-11-07 23:32:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 23:32:39 --> Total execution time: 1.0664
DEBUG - 2016-11-07 23:32:59 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 23:32:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 23:32:59 --> Total execution time: 0.2030
DEBUG - 2016-11-07 23:33:01 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 23:33:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 23:33:01 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-11-07 23:33:06 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 23:33:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-07 23:33:06 --> ORDER ID : 7
ERROR - 2016-11-07 23:33:06 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 52
ERROR - 2016-11-07 23:33:06 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 52
DEBUG - 2016-11-07 23:33:06 --> Total execution time: 0.0969
DEBUG - 2016-11-07 23:33:07 --> UTF-8 Support Enabled
DEBUG - 2016-11-07 23:33:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-07 23:33:07 --> 404 Page Not Found: Static/content
