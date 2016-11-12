<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-09-18 19:25:33 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 19:25:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 19:25:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-09-18 19:25:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-09-18 19:25:33 --> Total execution time: 0.4726
DEBUG - 2016-09-18 19:25:33 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 19:25:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 19:25:33 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-09-18 19:26:33 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 19:26:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 19:26:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-09-18 19:26:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2016-09-18 19:26:33 --> Total execution time: 0.0034
DEBUG - 2016-09-18 19:28:17 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 19:28:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 19:28:17 --> Total execution time: 0.0064
DEBUG - 2016-09-18 22:02:19 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:02:19 --> No URI present. Default controller set.
DEBUG - 2016-09-18 22:02:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:02:20 --> Total execution time: 0.8472
DEBUG - 2016-09-18 22:03:10 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:03:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:03:10 --> Total execution time: 0.1107
DEBUG - 2016-09-18 22:03:17 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:03:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:03:18 --> Total execution time: 0.1049
DEBUG - 2016-09-18 22:03:18 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:03:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:03:18 --> Total execution time: 0.0522
DEBUG - 2016-09-18 22:03:23 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:03:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:03:23 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-18 22:03:23 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-18 22:03:23 --> Total execution time: 0.1256
DEBUG - 2016-09-18 22:03:29 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:03:29 --> No URI present. Default controller set.
DEBUG - 2016-09-18 22:03:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:03:29 --> Total execution time: 0.0107
DEBUG - 2016-09-18 22:03:39 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:03:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:03:39 --> Total execution time: 0.0968
DEBUG - 2016-09-18 22:03:40 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:03:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:03:40 --> Total execution time: 0.0637
DEBUG - 2016-09-18 22:03:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:03:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:03:41 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
ERROR - 2016-09-18 22:03:41 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'PRD.rate' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid='5'  GROUP BY pid;
DEBUG - 2016-09-18 22:03:48 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:03:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:03:48 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:03:48 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:03:49 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-18 22:03:49 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-18 22:03:49 --> Total execution time: 0.6412
ERROR - 2016-09-18 22:03:49 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-18 22:03:49 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-18 22:03:49 --> Total execution time: 0.4287
DEBUG - 2016-09-18 22:03:49 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:03:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:03:49 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-18 22:03:49 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:03:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:03:49 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-18 22:03:49 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:03:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:03:49 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-18 22:03:49 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:03:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:03:49 --> 404 Page Not Found: P/12
DEBUG - 2016-09-18 22:03:49 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:03:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:03:49 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-18 22:03:49 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:03:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:03:49 --> UTF-8 Support Enabled
ERROR - 2016-09-18 22:03:49 --> 404 Page Not Found: P/12
DEBUG - 2016-09-18 22:03:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:03:49 --> 404 Page Not Found: P/12
DEBUG - 2016-09-18 22:04:01 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:04:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:04:01 --> {"from_date":"09\/21\/2016 00:00","type":"request","product_id":12,"pricing":"Hour","rent_for":10,"c_skill":0,"need_skill":false,"skill_pricing":"Hour","skill_for":0,"calculated_total":1111000}
DEBUG - 2016-09-18 22:04:01 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:04:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:04:01 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-18 22:04:01 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-18 22:04:01 --> Total execution time: 0.0077
DEBUG - 2016-09-18 22:04:11 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:04:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:04:11 --> Verified Login
DEBUG - 2016-09-18 22:04:11 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:04:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:04:11 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-18 22:04:11 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-18 22:04:11 --> Total execution time: 0.2286
DEBUG - 2016-09-18 22:04:23 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:04:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:04:23 --> Total execution time: 0.0096
DEBUG - 2016-09-18 22:04:31 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:04:31 --> No URI present. Default controller set.
DEBUG - 2016-09-18 22:04:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:04:31 --> Total execution time: 0.0069
DEBUG - 2016-09-18 22:04:45 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:04:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:04:45 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:04:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:04:45 --> Total execution time: 0.0422
DEBUG - 2016-09-18 22:04:49 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:04:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:04:49 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-18 22:04:49 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-18 22:04:49 --> Total execution time: 0.0079
DEBUG - 2016-09-18 22:04:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:04:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:04:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:04:50 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-18 22:04:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:04:50 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-18 22:04:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:04:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:04:50 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-18 22:04:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:04:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:04:50 --> 404 Page Not Found: P/12
DEBUG - 2016-09-18 22:04:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:04:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:04:50 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-18 22:04:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:04:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:04:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:04:50 --> 404 Page Not Found: P/12
DEBUG - 2016-09-18 22:04:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:04:50 --> 404 Page Not Found: P/12
DEBUG - 2016-09-18 22:05:01 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:05:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:05:01 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:05:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:05:01 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-18 22:05:01 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-18 22:05:01 --> Total execution time: 0.0079
DEBUG - 2016-09-18 22:05:04 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:05:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:05:04 --> Visitor ID : 142
DEBUG - 2016-09-18 22:05:04 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:05:04 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:05:04 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-18 22:05:04 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-18 22:05:04 --> Total execution time: 0.0076
DEBUG - 2016-09-18 22:05:06 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:05:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:05:06 --> Visitor ID : 142
DEBUG - 2016-09-18 22:05:07 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:05:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:05:07 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-18 22:05:07 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-18 22:05:07 --> Total execution time: 0.0069
DEBUG - 2016-09-18 22:14:28 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:14:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:14:28 --> Visitor ID : 142
DEBUG - 2016-09-18 22:14:28 --> Visitor : {"id":"8","product_id":"12","inventory_id":"1","from_date":"2016-09-20 18:30:00","to_date":"2016-09-21 04:30:00","price_term":"Hour","duration":"10","skill":null,"skill_duration":"0","user_id":null,"visitor_id":"142","date_added":"2016-09-18 22:05:01"}
DEBUG - 2016-09-18 22:14:28 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:14:28 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:14:28 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-18 22:14:28 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-18 22:14:28 --> Total execution time: 0.0074
DEBUG - 2016-09-18 22:16:01 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:16:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:16:01 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:16:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-18 22:16:01 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-18 22:16:01 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-18 22:16:01 --> Total execution time: 0.0669
DEBUG - 2016-09-18 22:20:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:20:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:20:30 --> Total execution time: 0.0098
DEBUG - 2016-09-18 22:20:35 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:20:35 --> No URI present. Default controller set.
DEBUG - 2016-09-18 22:20:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:20:35 --> Total execution time: 0.0071
DEBUG - 2016-09-18 22:33:08 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:33:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:33:08 --> Total execution time: 0.0066
DEBUG - 2016-09-18 22:33:11 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:33:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:33:11 --> Total execution time: 0.0080
DEBUG - 2016-09-18 22:33:11 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:33:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:33:11 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
ERROR - 2016-09-18 22:33:11 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'PRD.rate' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid='4'  GROUP BY pid;
DEBUG - 2016-09-18 22:33:15 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:33:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:33:15 --> Total execution time: 0.0065
DEBUG - 2016-09-18 22:33:17 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:33:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:33:17 --> Total execution time: 0.0069
DEBUG - 2016-09-18 22:33:17 --> UTF-8 Support Enabled
DEBUG - 2016-09-18 22:33:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-18 22:33:17 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
ERROR - 2016-09-18 22:33:17 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'PRD.rate' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid='5'  GROUP BY pid;
