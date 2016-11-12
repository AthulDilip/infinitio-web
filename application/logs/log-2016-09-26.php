<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-09-26 13:36:02 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:36:02 --> No URI present. Default controller set.
DEBUG - 2016-09-26 13:36:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:36:03 --> Total execution time: 1.0472
DEBUG - 2016-09-26 13:36:04 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:36:04 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:36:04 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-09-26 13:36:09 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:36:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:36:12 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:36:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:36:12 --> Total execution time: 0.0644
DEBUG - 2016-09-26 13:36:17 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:36:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:36:17 --> Total execution time: 0.0636
DEBUG - 2016-09-26 13:36:18 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:36:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:36:19 --> Total execution time: 0.0652
DEBUG - 2016-09-26 13:36:19 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:36:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:36:19 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
ERROR - 2016-09-26 13:36:19 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'PRD.rate' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid='5'  GROUP BY pid;
DEBUG - 2016-09-26 13:36:23 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:36:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:36:23 --> Total execution time: 0.0101
DEBUG - 2016-09-26 13:36:24 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:36:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:36:24 --> Total execution time: 0.0086
DEBUG - 2016-09-26 13:36:24 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:36:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:36:24 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
ERROR - 2016-09-26 13:36:24 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'PRD.rate' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid='4'  GROUP BY pid;
DEBUG - 2016-09-26 13:36:34 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:36:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:36:34 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:36:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:36:34 --> Total execution time: 0.0502
DEBUG - 2016-09-26 13:41:59 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:41:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:41:59 --> Total execution time: 0.0069
DEBUG - 2016-09-26 13:42:04 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:42:06 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:42:06 --> Total execution time: 0.1731
DEBUG - 2016-09-26 13:42:14 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:42:14 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:14 --> No URI present. Default controller set.
DEBUG - 2016-09-26 13:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:42:15 --> Total execution time: 0.0081
DEBUG - 2016-09-26 13:42:19 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:42:19 --> Total execution time: 0.0643
DEBUG - 2016-09-26 13:42:24 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:42:24 --> Total execution time: 0.0088
DEBUG - 2016-09-26 13:42:26 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:42:26 --> Total execution time: 0.0079
DEBUG - 2016-09-26 13:42:26 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:42:26 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
DEBUG - 2016-09-26 13:42:26 --> Total execution time: 0.0504
DEBUG - 2016-09-26 13:42:26 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:26 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:42:26 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:42:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:42:26 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-26 13:42:27 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:27 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:42:28 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:42:28 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:42:28 --> Total execution time: 0.4845
DEBUG - 2016-09-26 13:42:28 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:28 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:28 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:42:28 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:42:28 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:42:28 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:42:28 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:28 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:42:28 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:42:28 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:28 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:42:28 --> 404 Page Not Found: P/13
DEBUG - 2016-09-26 13:42:28 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:42:28 --> UTF-8 Support Enabled
ERROR - 2016-09-26 13:42:28 --> 404 Page Not Found: P/13
DEBUG - 2016-09-26 13:42:28 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:42:28 --> 404 Page Not Found: P/13
DEBUG - 2016-09-26 13:42:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:42:41 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:42:41 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:42:41 --> Total execution time: 0.0119
DEBUG - 2016-09-26 13:42:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:42:41 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:42:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:42:41 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:42:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:42:41 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:42:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:42:41 --> 404 Page Not Found: P/13
DEBUG - 2016-09-26 13:42:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:42:41 --> 404 Page Not Found: P/13
DEBUG - 2016-09-26 13:42:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:42:41 --> 404 Page Not Found: P/13
DEBUG - 2016-09-26 13:42:57 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:42:57 --> {"from_date":"09\/26\/2016 00:00","type":"request","product_id":13,"pricing":"Day","rent_for":1,"c_skill":0,"need_skill":false,"skill_pricing":0,"skill_for":0,"calculated_total":1133}
DEBUG - 2016-09-26 13:42:57 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:42:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:42:57 --> Error : There was an error in product data. Please try again.
ERROR - 2016-09-26 13:42:57 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:42:57 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:42:57 --> Total execution time: 0.0253
DEBUG - 2016-09-26 13:43:02 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:02 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:43:02 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:43:02 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:43:02 --> Total execution time: 0.0097
DEBUG - 2016-09-26 13:43:03 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:03 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:43:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:43:03 --> 404 Page Not Found: Static/css
ERROR - 2016-09-26 13:43:03 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:43:03 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:43:03 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:43:03 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:43:03 --> 404 Page Not Found: P/13
DEBUG - 2016-09-26 13:43:03 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:03 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:43:03 --> 404 Page Not Found: P/13
DEBUG - 2016-09-26 13:43:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:43:03 --> 404 Page Not Found: P/13
DEBUG - 2016-09-26 13:43:10 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:43:10 --> {"from_date":"09\/26\/2016 00:00","type":"request","product_id":13,"pricing":"Day","rent_for":1,"c_skill":0,"need_skill":false,"skill_pricing":0,"skill_for":0,"calculated_total":1133}
DEBUG - 2016-09-26 13:43:10 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:43:10 --> Error : There was an error in product data. Please try again.
ERROR - 2016-09-26 13:43:10 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:43:10 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:43:10 --> Total execution time: 0.0077
DEBUG - 2016-09-26 13:43:15 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:43:15 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:43:15 --> Total execution time: 0.0566
DEBUG - 2016-09-26 13:43:29 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:43:29 --> Total execution time: 0.0387
DEBUG - 2016-09-26 13:43:29 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:43:29 --> Total execution time: 0.0080
DEBUG - 2016-09-26 13:43:32 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:43:32 --> Total execution time: 0.0220
DEBUG - 2016-09-26 13:43:33 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:43:33 --> Total execution time: 0.0077
DEBUG - 2016-09-26 13:43:35 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:43:35 --> Total execution time: 0.0098
DEBUG - 2016-09-26 13:43:35 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:43:35 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
DEBUG - 2016-09-26 13:43:35 --> Total execution time: 0.0085
DEBUG - 2016-09-26 13:43:35 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:43:35 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:43:35 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:43:35 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-26 13:43:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:43:36 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:43:36 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:43:36 --> Total execution time: 0.0135
DEBUG - 2016-09-26 13:43:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:43:36 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:43:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:43:36 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:43:37 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:43:37 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:43:37 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:43:37 --> 404 Page Not Found: P/13
DEBUG - 2016-09-26 13:43:37 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:43:37 --> 404 Page Not Found: P/13
DEBUG - 2016-09-26 13:43:37 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:43:37 --> 404 Page Not Found: P/13
DEBUG - 2016-09-26 13:43:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:43:50 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:43:50 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:43:50 --> Total execution time: 0.0111
DEBUG - 2016-09-26 13:43:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:43:50 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:43:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:43:50 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:43:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:43:50 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:43:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:43:50 --> 404 Page Not Found: P/13
DEBUG - 2016-09-26 13:43:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:43:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:43:50 --> 404 Page Not Found: P/13
DEBUG - 2016-09-26 13:43:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:43:50 --> 404 Page Not Found: P/13
DEBUG - 2016-09-26 13:44:02 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:44:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:44:02 --> {"from_date":"09\/27\/2016 00:00","type":"request","product_id":13,"pricing":"Day","rent_for":1,"c_skill":0,"need_skill":false,"skill_pricing":0,"skill_for":0,"calculated_total":1133}
DEBUG - 2016-09-26 13:44:02 --> HERE : 12
DEBUG - 2016-09-26 13:44:02 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:44:02 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:44:02 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:44:02 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:44:02 --> Total execution time: 0.0165
DEBUG - 2016-09-26 13:44:10 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:44:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:44:10 --> Verified Login
DEBUG - 2016-09-26 13:44:10 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:44:10 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:44:10 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:44:10 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:44:10 --> Total execution time: 0.0145
DEBUG - 2016-09-26 13:44:12 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:44:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:44:12 --> Verified Login
DEBUG - 2016-09-26 13:44:12 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:44:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:44:12 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:44:12 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:44:12 --> Total execution time: 0.0721
DEBUG - 2016-09-26 13:44:13 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:44:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:44:13 --> Verified Login
DEBUG - 2016-09-26 13:44:13 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:44:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:44:13 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:44:13 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:44:13 --> Total execution time: 0.0131
DEBUG - 2016-09-26 13:44:14 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:44:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:44:14 --> Verified Login
DEBUG - 2016-09-26 13:44:14 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:44:14 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:44:14 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:44:14 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:44:14 --> Total execution time: 0.0126
DEBUG - 2016-09-26 13:44:15 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:44:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:44:15 --> Verified Login
DEBUG - 2016-09-26 13:44:15 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:44:15 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:44:15 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:44:15 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:44:15 --> Total execution time: 0.0112
DEBUG - 2016-09-26 13:44:16 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:44:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:44:16 --> Verified Login
DEBUG - 2016-09-26 13:44:16 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:44:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:44:16 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:44:16 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:44:16 --> Total execution time: 0.0103
DEBUG - 2016-09-26 13:44:17 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:44:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:44:17 --> Verified Login
DEBUG - 2016-09-26 13:44:17 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:44:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:44:17 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:44:17 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:44:17 --> Total execution time: 0.0099
DEBUG - 2016-09-26 13:44:18 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:44:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:44:18 --> Verified Login
DEBUG - 2016-09-26 13:44:18 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:44:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:44:18 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:44:18 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:44:18 --> Total execution time: 0.0087
DEBUG - 2016-09-26 13:44:20 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:44:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:44:20 --> Verified Login
DEBUG - 2016-09-26 13:44:20 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:44:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:44:20 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:44:20 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:44:20 --> Total execution time: 0.0072
DEBUG - 2016-09-26 13:44:24 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:44:24 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:44:24 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:44:24 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:44:24 --> Total execution time: 0.0260
DEBUG - 2016-09-26 13:44:53 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:44:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:44:53 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:45:20 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:45:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:45:20 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:45:20 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:45:20 --> Total execution time: 0.0078
DEBUG - 2016-09-26 13:45:20 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:45:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:45:20 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:46:23 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:46:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:46:23 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:46:23 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:46:23 --> Total execution time: 0.0065
DEBUG - 2016-09-26 13:50:23 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:50:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:50:23 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:50:23 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:50:23 --> Total execution time: 0.0066
DEBUG - 2016-09-26 13:50:23 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:50:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:50:23 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:50:42 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:50:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:50:42 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:50:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:50:42 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:50:42 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:50:42 --> Total execution time: 0.0055
DEBUG - 2016-09-26 13:50:43 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:50:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:50:43 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:54:29 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:54:29 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:54:29 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:54:29 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:54:29 --> Total execution time: 0.0059
DEBUG - 2016-09-26 13:54:29 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:54:29 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:54:29 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:55:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:55:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:55:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:55:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:55:41 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:55:41 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:55:41 --> Total execution time: 0.0065
DEBUG - 2016-09-26 13:55:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:55:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:55:41 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:56:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:56:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:56:30 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:56:30 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:56:30 --> Total execution time: 0.0094
DEBUG - 2016-09-26 13:56:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:56:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:56:30 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 13:57:49 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:57:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 13:57:49 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:57:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:57:49 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 13:57:49 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 13:57:49 --> Total execution time: 0.0062
DEBUG - 2016-09-26 13:57:49 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 13:57:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 13:57:49 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 14:00:10 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 14:00:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 14:00:10 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 14:00:10 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 14:00:10 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 14:00:10 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 14:00:10 --> Total execution time: 0.0058
DEBUG - 2016-09-26 14:00:10 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 14:00:10 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 14:00:10 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 14:02:19 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 14:02:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 14:02:19 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 14:02:19 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 14:02:19 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 14:02:19 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 14:02:19 --> Total execution time: 0.0054
DEBUG - 2016-09-26 14:02:19 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 14:02:19 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 14:02:19 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-26 14:03:09 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 14:03:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 14:03:09 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 14:03:09 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 14:03:09 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 14:03:09 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 14:03:09 --> Total execution time: 0.0051
DEBUG - 2016-09-26 14:05:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 14:05:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 14:05:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 14:05:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-26 14:05:50 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 14:05:50 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 14:05:50 --> Total execution time: 0.0062
DEBUG - 2016-09-26 14:06:52 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 14:06:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 14:06:52 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 14:06:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 14:06:53 --> Total execution time: 0.0646
DEBUG - 2016-09-26 14:12:19 --> UTF-8 Support Enabled
DEBUG - 2016-09-26 14:12:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-26 14:12:19 --> ORDER ID : 9
ERROR - 2016-09-26 14:12:19 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-26 14:12:19 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-26 14:12:19 --> {"order_id":"9","action":"0","date":"2016-09-26 08:36:52","code":null}
DEBUG - 2016-09-26 14:12:19 --> Total execution time: 0.0228
