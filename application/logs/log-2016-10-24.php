<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-10-24 18:36:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:36:47 --> No URI present. Default controller set.
DEBUG - 2016-10-24 18:36:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:36:47 --> Total execution time: 0.6533
DEBUG - 2016-10-24 18:36:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:36:48 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:36:48 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-10-24 18:38:29 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:38:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:38:30 --> Total execution time: 0.2377
DEBUG - 2016-10-24 18:38:30 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:38:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:38:30 --> Total execution time: 0.0182
DEBUG - 2016-10-24 18:38:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:38:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:38:33 --> Total execution time: 0.0363
DEBUG - 2016-10-24 18:38:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:38:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:38:38 --> Total execution time: 0.0434
DEBUG - 2016-10-24 18:38:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:38:38 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:38:38 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-24 18:38:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:38:38 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:38:38 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-24 18:38:40 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:38:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:38:40 --> Total execution time: 0.1022
DEBUG - 2016-10-24 18:38:41 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:38:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:38:41 --> 
DEBUG - 2016-10-24 18:38:41 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid LIMIT 0, 6 ;
ERROR - 2016-10-24 18:38:41 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'PRD.rate' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid='7' AND HOUR > 0 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-24 18:38:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:38:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:38:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:38:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:38:58 --> Total execution time: 0.1356
DEBUG - 2016-10-24 18:39:04 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:39:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:39:04 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:39:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:39:04 --> Total execution time: 0.0363
DEBUG - 2016-10-24 18:39:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:39:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:39:08 --> Total execution time: 0.1763
DEBUG - 2016-10-24 18:39:09 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:39:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:39:09 --> Total execution time: 0.0264
DEBUG - 2016-10-24 18:39:19 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:39:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:39:19 --> Total execution time: 0.0335
DEBUG - 2016-10-24 18:39:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:39:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:39:20 --> Total execution time: 0.0051
DEBUG - 2016-10-24 18:39:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:39:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:39:22 --> Total execution time: 0.1389
DEBUG - 2016-10-24 18:39:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:39:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:39:22 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-24 18:39:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:39:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:39:22 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-24 18:39:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:39:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:39:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:39:22 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-24 18:39:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:39:22 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-24 18:40:14 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:40:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:40:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:40:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:40:15 --> Total execution time: 0.0031
DEBUG - 2016-10-24 18:40:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:40:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:40:15 --> Total execution time: 0.0039
DEBUG - 2016-10-24 18:40:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:40:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:40:20 --> Total execution time: 0.0051
DEBUG - 2016-10-24 18:46:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:46:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:46:02 --> Total execution time: 0.0068
DEBUG - 2016-10-24 18:46:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:46:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:46:02 --> 
DEBUG - 2016-10-24 18:46:02 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid LIMIT 0, 6 ;
ERROR - 2016-10-24 18:46:02 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'PRD.rate' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid='7' AND HOUR > 0 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-24 18:46:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:46:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:46:12 --> Total execution time: 0.1041
DEBUG - 2016-10-24 18:46:16 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:46:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:46:16 --> Total execution time: 0.0068
DEBUG - 2016-10-24 18:46:16 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:46:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:46:16 --> 
DEBUG - 2016-10-24 18:46:16 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-24 18:46:16 --> 1
DEBUG - 2016-10-24 18:46:16 --> Total execution time: 0.0068
DEBUG - 2016-10-24 18:46:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:46:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:46:17 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-24 18:46:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:46:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:46:17 --> 404 Page Not Found: Static/images
DEBUG - 2016-10-24 18:47:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:47:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:47:08 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-24 18:47:08 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-24 18:47:08 --> Total execution time: 0.0778
DEBUG - 2016-10-24 18:47:09 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:47:09 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:47:09 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:47:09 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-24 18:47:09 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:47:09 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-24 18:47:09 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:47:09 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:47:09 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-24 18:47:09 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:47:09 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:47:09 --> 404 Page Not Found: P/15
DEBUG - 2016-10-24 18:47:09 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:47:09 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:47:09 --> 404 Page Not Found: P/15
DEBUG - 2016-10-24 18:47:09 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:47:09 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:47:09 --> 404 Page Not Found: P/15
DEBUG - 2016-10-24 18:47:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:47:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:47:18 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-24 18:47:18 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-24 18:47:18 --> Total execution time: 0.0094
DEBUG - 2016-10-24 18:47:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:47:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:47:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:47:18 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-24 18:47:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:47:18 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-24 18:47:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:47:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:47:18 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-24 18:47:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:47:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:47:18 --> 404 Page Not Found: P/15
DEBUG - 2016-10-24 18:47:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:47:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:47:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:47:18 --> 404 Page Not Found: P/15
DEBUG - 2016-10-24 18:47:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:47:18 --> 404 Page Not Found: P/15
DEBUG - 2016-10-24 18:57:34 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:57:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:57:34 --> Total execution time: 0.0041
DEBUG - 2016-10-24 18:57:36 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:57:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:57:36 --> Total execution time: 0.0055
DEBUG - 2016-10-24 18:57:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:57:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:57:43 --> Total execution time: 0.0591
DEBUG - 2016-10-24 18:57:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:57:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:57:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:57:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:57:48 --> Total execution time: 0.0174
DEBUG - 2016-10-24 18:57:48 --> Total execution time: 0.0196
DEBUG - 2016-10-24 18:57:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:57:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:57:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:57:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:57:53 --> Total execution time: 0.0042
DEBUG - 2016-10-24 18:57:53 --> Total execution time: 0.0062
DEBUG - 2016-10-24 18:57:54 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:57:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:57:54 --> Total execution time: 0.0446
DEBUG - 2016-10-24 18:57:56 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:57:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:57:56 --> ORDER ID : 6
ERROR - 2016-10-24 18:57:56 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-24 18:57:56 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-24 18:57:56 --> Total execution time: 0.0388
DEBUG - 2016-10-24 18:57:56 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:57:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 18:57:56 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-24 18:57:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:57:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:57:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:57:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:57:58 --> Total execution time: 0.0137
DEBUG - 2016-10-24 18:57:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:57:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:57:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:57:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:57:58 --> Total execution time: 0.0034
DEBUG - 2016-10-24 18:57:58 --> Total execution time: 0.0052
DEBUG - 2016-10-24 18:58:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:03 --> Total execution time: 0.0043
DEBUG - 2016-10-24 18:58:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:03 --> Total execution time: 0.0034
DEBUG - 2016-10-24 18:58:03 --> Total execution time: 0.0052
DEBUG - 2016-10-24 18:58:07 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:07 --> Total execution time: 0.0481
DEBUG - 2016-10-24 18:58:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:08 --> Total execution time: 0.0042
DEBUG - 2016-10-24 18:58:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:08 --> Total execution time: 0.0037
DEBUG - 2016-10-24 18:58:08 --> Total execution time: 0.0056
DEBUG - 2016-10-24 18:58:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:13 --> Total execution time: 0.0049
DEBUG - 2016-10-24 18:58:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:13 --> Total execution time: 0.0040
DEBUG - 2016-10-24 18:58:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:13 --> Total execution time: 0.0033
DEBUG - 2016-10-24 18:58:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:18 --> Total execution time: 0.0034
DEBUG - 2016-10-24 18:58:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:18 --> Total execution time: 0.0032
DEBUG - 2016-10-24 18:58:18 --> Total execution time: 0.0033
DEBUG - 2016-10-24 18:58:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:23 --> Total execution time: 0.0040
DEBUG - 2016-10-24 18:58:23 --> Total execution time: 0.0058
DEBUG - 2016-10-24 18:58:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:23 --> Total execution time: 0.0041
DEBUG - 2016-10-24 18:58:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:27 --> Total execution time: 0.0442
DEBUG - 2016-10-24 18:58:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:28 --> Total execution time: 0.0034
DEBUG - 2016-10-24 18:58:28 --> Total execution time: 0.0050
DEBUG - 2016-10-24 18:58:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:28 --> Total execution time: 0.0038
DEBUG - 2016-10-24 18:58:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:33 --> Total execution time: 0.0033
DEBUG - 2016-10-24 18:58:33 --> Total execution time: 0.0035
DEBUG - 2016-10-24 18:58:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:33 --> Total execution time: 0.0038
DEBUG - 2016-10-24 18:58:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:38 --> Total execution time: 0.0040
DEBUG - 2016-10-24 18:58:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:38 --> Total execution time: 0.0034
DEBUG - 2016-10-24 18:58:38 --> Total execution time: 0.0038
DEBUG - 2016-10-24 18:58:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:43 --> Total execution time: 0.0050
DEBUG - 2016-10-24 18:58:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:43 --> Total execution time: 0.0032
DEBUG - 2016-10-24 18:58:43 --> Total execution time: 0.0052
DEBUG - 2016-10-24 18:58:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:48 --> Total execution time: 0.0081
DEBUG - 2016-10-24 18:58:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:48 --> Total execution time: 0.0038
DEBUG - 2016-10-24 18:58:48 --> Total execution time: 0.0062
DEBUG - 2016-10-24 18:58:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:53 --> Total execution time: 0.0077
DEBUG - 2016-10-24 18:58:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:53 --> Total execution time: 0.0048
DEBUG - 2016-10-24 18:58:53 --> Total execution time: 0.0083
DEBUG - 2016-10-24 18:58:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:58 --> Total execution time: 0.0101
DEBUG - 2016-10-24 18:58:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:58:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:58:58 --> Total execution time: 0.0054
DEBUG - 2016-10-24 18:58:58 --> Total execution time: 0.0091
DEBUG - 2016-10-24 18:59:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:03 --> Total execution time: 0.0071
DEBUG - 2016-10-24 18:59:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:03 --> Total execution time: 0.0060
DEBUG - 2016-10-24 18:59:03 --> Total execution time: 0.0083
DEBUG - 2016-10-24 18:59:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:08 --> Total execution time: 0.0087
DEBUG - 2016-10-24 18:59:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:08 --> Total execution time: 0.0042
DEBUG - 2016-10-24 18:59:08 --> Total execution time: 0.0093
DEBUG - 2016-10-24 18:59:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:13 --> Total execution time: 0.0084
DEBUG - 2016-10-24 18:59:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:13 --> Total execution time: 0.0033
DEBUG - 2016-10-24 18:59:13 --> Total execution time: 0.0052
DEBUG - 2016-10-24 18:59:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:18 --> Total execution time: 0.0074
DEBUG - 2016-10-24 18:59:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:18 --> Total execution time: 0.0085
DEBUG - 2016-10-24 18:59:18 --> Total execution time: 0.0108
DEBUG - 2016-10-24 18:59:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:23 --> Total execution time: 0.0070
DEBUG - 2016-10-24 18:59:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:23 --> Total execution time: 0.0027
DEBUG - 2016-10-24 18:59:23 --> Total execution time: 0.0045
DEBUG - 2016-10-24 18:59:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:28 --> Total execution time: 0.0070
DEBUG - 2016-10-24 18:59:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:28 --> Total execution time: 0.0031
DEBUG - 2016-10-24 18:59:28 --> Total execution time: 0.0051
DEBUG - 2016-10-24 18:59:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:33 --> Total execution time: 0.0096
DEBUG - 2016-10-24 18:59:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:33 --> Total execution time: 0.0035
DEBUG - 2016-10-24 18:59:33 --> Total execution time: 0.0059
DEBUG - 2016-10-24 18:59:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:38 --> Total execution time: 0.0037
DEBUG - 2016-10-24 18:59:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:38 --> Total execution time: 0.0035
DEBUG - 2016-10-24 18:59:38 --> Total execution time: 0.0060
DEBUG - 2016-10-24 18:59:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:43 --> Total execution time: 0.0068
DEBUG - 2016-10-24 18:59:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:43 --> Total execution time: 0.0040
DEBUG - 2016-10-24 18:59:43 --> Total execution time: 0.0066
DEBUG - 2016-10-24 18:59:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:48 --> Total execution time: 0.0075
DEBUG - 2016-10-24 18:59:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:48 --> Total execution time: 0.0093
DEBUG - 2016-10-24 18:59:48 --> Total execution time: 0.0117
DEBUG - 2016-10-24 18:59:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:53 --> Total execution time: 0.0083
DEBUG - 2016-10-24 18:59:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:53 --> Total execution time: 0.0036
DEBUG - 2016-10-24 18:59:53 --> Total execution time: 0.0056
DEBUG - 2016-10-24 18:59:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:58 --> Total execution time: 0.0059
DEBUG - 2016-10-24 18:59:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 18:59:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 18:59:58 --> Total execution time: 0.0050
DEBUG - 2016-10-24 18:59:58 --> Total execution time: 0.0084
DEBUG - 2016-10-24 19:00:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:03 --> Total execution time: 0.0062
DEBUG - 2016-10-24 19:00:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:03 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:00:03 --> Total execution time: 0.0054
DEBUG - 2016-10-24 19:00:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:08 --> Total execution time: 0.0075
DEBUG - 2016-10-24 19:00:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:08 --> Total execution time: 0.0039
DEBUG - 2016-10-24 19:00:08 --> Total execution time: 0.0083
DEBUG - 2016-10-24 19:00:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:13 --> Total execution time: 0.0075
DEBUG - 2016-10-24 19:00:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:13 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:00:13 --> Total execution time: 0.0052
DEBUG - 2016-10-24 19:00:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:18 --> Total execution time: 0.0091
DEBUG - 2016-10-24 19:00:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:18 --> Total execution time: 0.0040
DEBUG - 2016-10-24 19:00:18 --> Total execution time: 0.0065
DEBUG - 2016-10-24 19:00:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:23 --> Total execution time: 0.0062
DEBUG - 2016-10-24 19:00:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:23 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:00:23 --> Total execution time: 0.0057
DEBUG - 2016-10-24 19:00:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:28 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:00:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:28 --> Total execution time: 0.0029
DEBUG - 2016-10-24 19:00:28 --> Total execution time: 0.0045
DEBUG - 2016-10-24 19:00:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:33 --> Total execution time: 0.0060
DEBUG - 2016-10-24 19:00:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:33 --> Total execution time: 0.0029
DEBUG - 2016-10-24 19:00:33 --> Total execution time: 0.0044
DEBUG - 2016-10-24 19:00:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:38 --> Total execution time: 0.0078
DEBUG - 2016-10-24 19:00:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:38 --> Total execution time: 0.0043
DEBUG - 2016-10-24 19:00:38 --> Total execution time: 0.0068
DEBUG - 2016-10-24 19:00:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:43 --> Total execution time: 0.0084
DEBUG - 2016-10-24 19:00:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:43 --> Total execution time: 0.0051
DEBUG - 2016-10-24 19:00:43 --> Total execution time: 0.0078
DEBUG - 2016-10-24 19:00:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:48 --> Total execution time: 0.0080
DEBUG - 2016-10-24 19:00:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:48 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:00:48 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:00:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:53 --> Total execution time: 0.0040
DEBUG - 2016-10-24 19:00:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:53 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:00:53 --> Total execution time: 0.0050
DEBUG - 2016-10-24 19:00:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:58 --> Total execution time: 0.0090
DEBUG - 2016-10-24 19:00:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:00:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:00:58 --> Total execution time: 0.0042
DEBUG - 2016-10-24 19:00:58 --> Total execution time: 0.0068
DEBUG - 2016-10-24 19:01:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:03 --> Total execution time: 0.0066
DEBUG - 2016-10-24 19:01:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:03 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:01:03 --> Total execution time: 0.0049
DEBUG - 2016-10-24 19:01:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:08 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:01:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:08 --> Total execution time: 0.0049
DEBUG - 2016-10-24 19:01:08 --> Total execution time: 0.0080
DEBUG - 2016-10-24 19:01:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:13 --> Total execution time: 0.0084
DEBUG - 2016-10-24 19:01:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:13 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:01:13 --> Total execution time: 0.0074
DEBUG - 2016-10-24 19:01:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:18 --> Total execution time: 0.0086
DEBUG - 2016-10-24 19:01:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:18 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:01:18 --> Total execution time: 0.0058
DEBUG - 2016-10-24 19:01:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:23 --> Total execution time: 0.0066
DEBUG - 2016-10-24 19:01:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:23 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:01:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:23 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:01:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:28 --> Total execution time: 0.0075
DEBUG - 2016-10-24 19:01:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:28 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:01:28 --> Total execution time: 0.0054
DEBUG - 2016-10-24 19:01:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:33 --> Total execution time: 0.0048
DEBUG - 2016-10-24 19:01:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:33 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:01:33 --> Total execution time: 0.0058
DEBUG - 2016-10-24 19:01:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:38 --> Total execution time: 0.0068
DEBUG - 2016-10-24 19:01:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:38 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:01:38 --> Total execution time: 0.0062
DEBUG - 2016-10-24 19:01:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:43 --> Total execution time: 0.0089
DEBUG - 2016-10-24 19:01:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:43 --> Total execution time: 0.0070
DEBUG - 2016-10-24 19:01:43 --> Total execution time: 0.0096
DEBUG - 2016-10-24 19:01:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:48 --> Total execution time: 0.0077
DEBUG - 2016-10-24 19:01:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:48 --> Total execution time: 0.0046
DEBUG - 2016-10-24 19:01:48 --> Total execution time: 0.0075
DEBUG - 2016-10-24 19:01:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:53 --> Total execution time: 0.0040
DEBUG - 2016-10-24 19:01:53 --> Total execution time: 0.0059
DEBUG - 2016-10-24 19:01:53 --> Total execution time: 0.0058
DEBUG - 2016-10-24 19:01:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:01:58 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:01:58 --> Total execution time: 0.0055
DEBUG - 2016-10-24 19:01:58 --> Total execution time: 0.0082
DEBUG - 2016-10-24 19:02:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:03 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:02:03 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:02:03 --> Total execution time: 0.0108
DEBUG - 2016-10-24 19:02:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:08 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:02:08 --> Total execution time: 0.0055
DEBUG - 2016-10-24 19:02:08 --> Total execution time: 0.0072
DEBUG - 2016-10-24 19:02:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:13 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:02:13 --> Total execution time: 0.0062
DEBUG - 2016-10-24 19:02:13 --> Total execution time: 0.0080
DEBUG - 2016-10-24 19:02:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:18 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:02:18 --> Total execution time: 0.0049
DEBUG - 2016-10-24 19:02:18 --> Total execution time: 0.0072
DEBUG - 2016-10-24 19:02:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:23 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:02:23 --> Total execution time: 0.0060
DEBUG - 2016-10-24 19:02:23 --> Total execution time: 0.0081
DEBUG - 2016-10-24 19:02:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:28 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:02:28 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:02:28 --> Total execution time: 0.0065
DEBUG - 2016-10-24 19:02:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:33 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:02:33 --> Total execution time: 0.0056
DEBUG - 2016-10-24 19:02:33 --> Total execution time: 0.0093
DEBUG - 2016-10-24 19:02:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:38 --> Total execution time: 0.0064
DEBUG - 2016-10-24 19:02:38 --> Total execution time: 0.0087
DEBUG - 2016-10-24 19:02:38 --> Total execution time: 0.0113
DEBUG - 2016-10-24 19:02:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:43 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:02:43 --> Total execution time: 0.0051
DEBUG - 2016-10-24 19:02:43 --> Total execution time: 0.0072
DEBUG - 2016-10-24 19:02:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:48 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:02:48 --> Total execution time: 0.0054
DEBUG - 2016-10-24 19:02:48 --> Total execution time: 0.0087
DEBUG - 2016-10-24 19:02:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:53 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:02:53 --> Total execution time: 0.0056
DEBUG - 2016-10-24 19:02:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:53 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:02:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:58 --> Total execution time: 0.0028
DEBUG - 2016-10-24 19:02:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:02:58 --> Total execution time: 0.0054
DEBUG - 2016-10-24 19:02:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:02:58 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:03:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:03 --> Total execution time: 0.0104
DEBUG - 2016-10-24 19:03:03 --> Total execution time: 0.0158
DEBUG - 2016-10-24 19:03:03 --> Total execution time: 0.0195
DEBUG - 2016-10-24 19:03:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:08 --> Total execution time: 0.0049
DEBUG - 2016-10-24 19:03:08 --> Total execution time: 0.0066
DEBUG - 2016-10-24 19:03:08 --> Total execution time: 0.0083
DEBUG - 2016-10-24 19:03:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:13 --> Total execution time: 0.0057
DEBUG - 2016-10-24 19:03:13 --> Total execution time: 0.0071
DEBUG - 2016-10-24 19:03:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:13 --> Total execution time: 0.0059
DEBUG - 2016-10-24 19:03:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:18 --> Total execution time: 0.0093
DEBUG - 2016-10-24 19:03:18 --> Total execution time: 0.0125
DEBUG - 2016-10-24 19:03:18 --> Total execution time: 0.0197
DEBUG - 2016-10-24 19:03:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:23 --> Total execution time: 0.0030
DEBUG - 2016-10-24 19:03:23 --> Total execution time: 0.0048
DEBUG - 2016-10-24 19:03:23 --> Total execution time: 0.0068
DEBUG - 2016-10-24 19:03:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:28 --> Total execution time: 0.0083
DEBUG - 2016-10-24 19:03:28 --> Total execution time: 0.0120
DEBUG - 2016-10-24 19:03:28 --> Total execution time: 0.0166
DEBUG - 2016-10-24 19:03:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:33 --> Total execution time: 0.0056
DEBUG - 2016-10-24 19:03:33 --> Total execution time: 0.0077
DEBUG - 2016-10-24 19:03:33 --> Total execution time: 0.0118
DEBUG - 2016-10-24 19:03:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:38 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:03:38 --> Total execution time: 0.0054
DEBUG - 2016-10-24 19:03:38 --> Total execution time: 0.0079
DEBUG - 2016-10-24 19:03:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:43 --> Total execution time: 0.0028
DEBUG - 2016-10-24 19:03:43 --> Total execution time: 0.0055
DEBUG - 2016-10-24 19:03:43 --> Total execution time: 0.0067
DEBUG - 2016-10-24 19:03:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:48 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:03:48 --> Total execution time: 0.0048
DEBUG - 2016-10-24 19:03:48 --> Total execution time: 0.0065
DEBUG - 2016-10-24 19:03:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:53 --> Total execution time: 0.0039
DEBUG - 2016-10-24 19:03:53 --> Total execution time: 0.0068
DEBUG - 2016-10-24 19:03:53 --> Total execution time: 0.0102
DEBUG - 2016-10-24 19:03:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:03:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:03:58 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:03:58 --> Total execution time: 0.0050
DEBUG - 2016-10-24 19:03:58 --> Total execution time: 0.0073
DEBUG - 2016-10-24 19:04:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:03 --> Total execution time: 0.0107
DEBUG - 2016-10-24 19:04:03 --> Total execution time: 0.0150
DEBUG - 2016-10-24 19:04:03 --> Total execution time: 0.0185
DEBUG - 2016-10-24 19:04:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:08 --> Total execution time: 0.0108
DEBUG - 2016-10-24 19:04:08 --> Total execution time: 0.0110
DEBUG - 2016-10-24 19:04:08 --> Total execution time: 0.0203
DEBUG - 2016-10-24 19:04:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:13 --> Total execution time: 0.0039
DEBUG - 2016-10-24 19:04:13 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:04:13 --> Total execution time: 0.0076
DEBUG - 2016-10-24 19:04:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:18 --> Total execution time: 0.0106
DEBUG - 2016-10-24 19:04:18 --> Total execution time: 0.0139
DEBUG - 2016-10-24 19:04:18 --> Total execution time: 0.0198
DEBUG - 2016-10-24 19:04:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:23 --> Total execution time: 0.0076
DEBUG - 2016-10-24 19:04:23 --> Total execution time: 0.0103
DEBUG - 2016-10-24 19:04:23 --> Total execution time: 0.0117
DEBUG - 2016-10-24 19:04:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:28 --> Total execution time: 0.0045
DEBUG - 2016-10-24 19:04:28 --> Total execution time: 0.0078
DEBUG - 2016-10-24 19:04:28 --> Total execution time: 0.0123
DEBUG - 2016-10-24 19:04:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:33 --> Total execution time: 0.0030
DEBUG - 2016-10-24 19:04:33 --> Total execution time: 0.0050
DEBUG - 2016-10-24 19:04:33 --> Total execution time: 0.0064
DEBUG - 2016-10-24 19:04:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:38 --> Total execution time: 0.0042
DEBUG - 2016-10-24 19:04:38 --> Total execution time: 0.0060
DEBUG - 2016-10-24 19:04:38 --> Total execution time: 0.0104
DEBUG - 2016-10-24 19:04:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:43 --> Total execution time: 0.0050
DEBUG - 2016-10-24 19:04:43 --> Total execution time: 0.0078
DEBUG - 2016-10-24 19:04:43 --> Total execution time: 0.0114
DEBUG - 2016-10-24 19:04:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:48 --> Total execution time: 0.0054
DEBUG - 2016-10-24 19:04:48 --> Total execution time: 0.0093
DEBUG - 2016-10-24 19:04:48 --> Total execution time: 0.0127
DEBUG - 2016-10-24 19:04:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:53 --> Total execution time: 0.0101
DEBUG - 2016-10-24 19:04:53 --> Total execution time: 0.0136
DEBUG - 2016-10-24 19:04:53 --> Total execution time: 0.0166
DEBUG - 2016-10-24 19:04:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:04:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:04:58 --> Total execution time: 0.0091
DEBUG - 2016-10-24 19:04:58 --> Total execution time: 0.0159
DEBUG - 2016-10-24 19:04:58 --> Total execution time: 0.0166
DEBUG - 2016-10-24 19:05:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:03 --> Total execution time: 0.0049
DEBUG - 2016-10-24 19:05:03 --> Total execution time: 0.0082
DEBUG - 2016-10-24 19:05:03 --> Total execution time: 0.0110
DEBUG - 2016-10-24 19:05:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:08 --> Total execution time: 0.0091
DEBUG - 2016-10-24 19:05:08 --> Total execution time: 0.0138
DEBUG - 2016-10-24 19:05:08 --> Total execution time: 0.0184
DEBUG - 2016-10-24 19:05:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:13 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:05:13 --> Total execution time: 0.0056
DEBUG - 2016-10-24 19:05:13 --> Total execution time: 0.0074
DEBUG - 2016-10-24 19:05:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:18 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:05:18 --> Total execution time: 0.0057
DEBUG - 2016-10-24 19:05:18 --> Total execution time: 0.0074
DEBUG - 2016-10-24 19:05:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:23 --> Total execution time: 0.0102
DEBUG - 2016-10-24 19:05:23 --> Total execution time: 0.0155
DEBUG - 2016-10-24 19:05:23 --> Total execution time: 0.0198
DEBUG - 2016-10-24 19:05:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:28 --> Total execution time: 0.0050
DEBUG - 2016-10-24 19:05:28 --> Total execution time: 0.0108
DEBUG - 2016-10-24 19:05:28 --> Total execution time: 0.0144
DEBUG - 2016-10-24 19:05:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:33 --> Total execution time: 0.0094
DEBUG - 2016-10-24 19:05:33 --> Total execution time: 0.0126
DEBUG - 2016-10-24 19:05:33 --> Total execution time: 0.0147
DEBUG - 2016-10-24 19:05:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:38 --> Total execution time: 0.0101
DEBUG - 2016-10-24 19:05:38 --> Total execution time: 0.0140
DEBUG - 2016-10-24 19:05:38 --> Total execution time: 0.0211
DEBUG - 2016-10-24 19:05:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:43 --> Total execution time: 0.0109
DEBUG - 2016-10-24 19:05:43 --> Total execution time: 0.0149
DEBUG - 2016-10-24 19:05:43 --> Total execution time: 0.0186
DEBUG - 2016-10-24 19:05:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:48 --> Total execution time: 0.0083
DEBUG - 2016-10-24 19:05:48 --> Total execution time: 0.0100
DEBUG - 2016-10-24 19:05:48 --> Total execution time: 0.0133
DEBUG - 2016-10-24 19:05:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:53 --> Total execution time: 0.0081
DEBUG - 2016-10-24 19:05:53 --> Total execution time: 0.0114
DEBUG - 2016-10-24 19:05:53 --> Total execution time: 0.0149
DEBUG - 2016-10-24 19:05:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:05:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:05:58 --> Total execution time: 0.0073
DEBUG - 2016-10-24 19:05:58 --> Total execution time: 0.0102
DEBUG - 2016-10-24 19:05:58 --> Total execution time: 0.0135
DEBUG - 2016-10-24 19:06:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:03 --> Total execution time: 0.0101
DEBUG - 2016-10-24 19:06:03 --> Total execution time: 0.0153
DEBUG - 2016-10-24 19:06:03 --> Total execution time: 0.0187
DEBUG - 2016-10-24 19:06:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:08 --> Total execution time: 0.0098
DEBUG - 2016-10-24 19:06:08 --> Total execution time: 0.0150
DEBUG - 2016-10-24 19:06:08 --> Total execution time: 0.0188
DEBUG - 2016-10-24 19:06:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:13 --> Total execution time: 0.0069
DEBUG - 2016-10-24 19:06:13 --> Total execution time: 0.0104
DEBUG - 2016-10-24 19:06:13 --> Total execution time: 0.0120
DEBUG - 2016-10-24 19:06:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:18 --> Total execution time: 0.0081
DEBUG - 2016-10-24 19:06:18 --> Total execution time: 0.0125
DEBUG - 2016-10-24 19:06:18 --> Total execution time: 0.0144
DEBUG - 2016-10-24 19:06:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:23 --> Total execution time: 0.0049
DEBUG - 2016-10-24 19:06:23 --> Total execution time: 0.0081
DEBUG - 2016-10-24 19:06:23 --> Total execution time: 0.0109
DEBUG - 2016-10-24 19:06:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:28 --> Total execution time: 0.0058
DEBUG - 2016-10-24 19:06:28 --> Total execution time: 0.0092
DEBUG - 2016-10-24 19:06:28 --> Total execution time: 0.0118
DEBUG - 2016-10-24 19:06:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:33 --> Total execution time: 0.0047
DEBUG - 2016-10-24 19:06:33 --> Total execution time: 0.0081
DEBUG - 2016-10-24 19:06:33 --> Total execution time: 0.0118
DEBUG - 2016-10-24 19:06:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:38 --> Total execution time: 0.0088
DEBUG - 2016-10-24 19:06:38 --> Total execution time: 0.0125
DEBUG - 2016-10-24 19:06:38 --> Total execution time: 0.0156
DEBUG - 2016-10-24 19:06:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:43 --> Total execution time: 0.0092
DEBUG - 2016-10-24 19:06:43 --> Total execution time: 0.0136
DEBUG - 2016-10-24 19:06:43 --> Total execution time: 0.0203
DEBUG - 2016-10-24 19:06:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:48 --> Total execution time: 0.0099
DEBUG - 2016-10-24 19:06:48 --> Total execution time: 0.0149
DEBUG - 2016-10-24 19:06:48 --> Total execution time: 0.0184
DEBUG - 2016-10-24 19:06:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:53 --> Total execution time: 0.0097
DEBUG - 2016-10-24 19:06:53 --> Total execution time: 0.0126
DEBUG - 2016-10-24 19:06:53 --> Total execution time: 0.0170
DEBUG - 2016-10-24 19:06:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:06:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:06:58 --> Total execution time: 0.0049
DEBUG - 2016-10-24 19:06:58 --> Total execution time: 0.0086
DEBUG - 2016-10-24 19:06:58 --> Total execution time: 0.0135
DEBUG - 2016-10-24 19:07:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:03 --> Total execution time: 0.0049
DEBUG - 2016-10-24 19:07:03 --> Total execution time: 0.0073
DEBUG - 2016-10-24 19:07:03 --> Total execution time: 0.0095
DEBUG - 2016-10-24 19:07:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:08 --> Total execution time: 0.0092
DEBUG - 2016-10-24 19:07:08 --> Total execution time: 0.0134
DEBUG - 2016-10-24 19:07:08 --> Total execution time: 0.0180
DEBUG - 2016-10-24 19:07:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:13 --> Total execution time: 0.0106
DEBUG - 2016-10-24 19:07:13 --> Total execution time: 0.0107
DEBUG - 2016-10-24 19:07:13 --> Total execution time: 0.0123
DEBUG - 2016-10-24 19:07:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:18 --> Total execution time: 0.0092
DEBUG - 2016-10-24 19:07:18 --> Total execution time: 0.0143
DEBUG - 2016-10-24 19:07:18 --> Total execution time: 0.0147
DEBUG - 2016-10-24 19:07:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:23 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:07:23 --> Total execution time: 0.0057
DEBUG - 2016-10-24 19:07:23 --> Total execution time: 0.0077
DEBUG - 2016-10-24 19:07:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:28 --> Total execution time: 0.0054
DEBUG - 2016-10-24 19:07:28 --> Total execution time: 0.0094
DEBUG - 2016-10-24 19:07:28 --> Total execution time: 0.0117
DEBUG - 2016-10-24 19:07:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:33 --> Total execution time: 0.0048
DEBUG - 2016-10-24 19:07:33 --> Total execution time: 0.0082
DEBUG - 2016-10-24 19:07:33 --> Total execution time: 0.0115
DEBUG - 2016-10-24 19:07:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:38 --> Total execution time: 0.0078
DEBUG - 2016-10-24 19:07:38 --> Total execution time: 0.0136
DEBUG - 2016-10-24 19:07:38 --> Total execution time: 0.0184
DEBUG - 2016-10-24 19:07:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:43 --> Total execution time: 0.0084
DEBUG - 2016-10-24 19:07:43 --> Total execution time: 0.0107
DEBUG - 2016-10-24 19:07:43 --> Total execution time: 0.0128
DEBUG - 2016-10-24 19:07:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:48 --> Total execution time: 0.0090
DEBUG - 2016-10-24 19:07:48 --> Total execution time: 0.0143
DEBUG - 2016-10-24 19:07:48 --> Total execution time: 0.0192
DEBUG - 2016-10-24 19:07:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:53 --> Total execution time: 0.0073
DEBUG - 2016-10-24 19:07:53 --> Total execution time: 0.0113
DEBUG - 2016-10-24 19:07:53 --> Total execution time: 0.0145
DEBUG - 2016-10-24 19:07:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:07:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:07:58 --> Total execution time: 0.0092
DEBUG - 2016-10-24 19:07:58 --> Total execution time: 0.0122
DEBUG - 2016-10-24 19:07:58 --> Total execution time: 0.0159
DEBUG - 2016-10-24 19:08:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:03 --> Total execution time: 0.0048
DEBUG - 2016-10-24 19:08:03 --> Total execution time: 0.0089
DEBUG - 2016-10-24 19:08:03 --> Total execution time: 0.0121
DEBUG - 2016-10-24 19:08:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:08 --> Total execution time: 0.0088
DEBUG - 2016-10-24 19:08:08 --> Total execution time: 0.0128
DEBUG - 2016-10-24 19:08:08 --> Total execution time: 0.0158
DEBUG - 2016-10-24 19:08:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:13 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:08:13 --> Total execution time: 0.0050
DEBUG - 2016-10-24 19:08:13 --> Total execution time: 0.0070
DEBUG - 2016-10-24 19:08:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:18 --> Total execution time: 0.0107
DEBUG - 2016-10-24 19:08:18 --> Total execution time: 0.0138
DEBUG - 2016-10-24 19:08:18 --> Total execution time: 0.0182
DEBUG - 2016-10-24 19:08:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:23 --> Total execution time: 0.0094
DEBUG - 2016-10-24 19:08:23 --> Total execution time: 0.0129
DEBUG - 2016-10-24 19:08:23 --> Total execution time: 0.0141
DEBUG - 2016-10-24 19:08:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:28 --> Total execution time: 0.0028
DEBUG - 2016-10-24 19:08:28 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:08:28 --> Total execution time: 0.0070
DEBUG - 2016-10-24 19:08:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:33 --> Total execution time: 0.0089
DEBUG - 2016-10-24 19:08:33 --> Total execution time: 0.0149
DEBUG - 2016-10-24 19:08:33 --> Total execution time: 0.0175
DEBUG - 2016-10-24 19:08:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:38 --> Total execution time: 0.0089
DEBUG - 2016-10-24 19:08:38 --> Total execution time: 0.0116
DEBUG - 2016-10-24 19:08:38 --> Total execution time: 0.0176
DEBUG - 2016-10-24 19:08:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:43 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:08:43 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:08:43 --> Total execution time: 0.0084
DEBUG - 2016-10-24 19:08:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:48 --> Total execution time: 0.0103
DEBUG - 2016-10-24 19:08:48 --> Total execution time: 0.0144
DEBUG - 2016-10-24 19:08:48 --> Total execution time: 0.0202
DEBUG - 2016-10-24 19:08:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:53 --> Total execution time: 0.0055
DEBUG - 2016-10-24 19:08:53 --> Total execution time: 0.0080
DEBUG - 2016-10-24 19:08:53 --> Total execution time: 0.0109
DEBUG - 2016-10-24 19:08:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:58 --> Total execution time: 0.0119
DEBUG - 2016-10-24 19:08:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:08:58 --> Total execution time: 0.0071
DEBUG - 2016-10-24 19:08:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:08:58 --> Total execution time: 0.0043
DEBUG - 2016-10-24 19:09:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:03 --> Total execution time: 0.0101
DEBUG - 2016-10-24 19:09:03 --> Total execution time: 0.0145
DEBUG - 2016-10-24 19:09:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:03 --> Total execution time: 0.0060
DEBUG - 2016-10-24 19:09:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:08 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:09:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:08 --> Total execution time: 0.0066
DEBUG - 2016-10-24 19:09:08 --> Total execution time: 0.0048
DEBUG - 2016-10-24 19:09:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:13 --> Total execution time: 0.0092
DEBUG - 2016-10-24 19:09:13 --> Total execution time: 0.0121
DEBUG - 2016-10-24 19:09:13 --> Total execution time: 0.0178
DEBUG - 2016-10-24 19:09:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:18 --> Total execution time: 0.0094
DEBUG - 2016-10-24 19:09:18 --> Total execution time: 0.0135
DEBUG - 2016-10-24 19:09:18 --> Total execution time: 0.0156
DEBUG - 2016-10-24 19:09:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:23 --> Total execution time: 0.0081
DEBUG - 2016-10-24 19:09:23 --> Total execution time: 0.0125
DEBUG - 2016-10-24 19:09:23 --> Total execution time: 0.0161
DEBUG - 2016-10-24 19:09:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:28 --> Total execution time: 0.0095
DEBUG - 2016-10-24 19:09:28 --> Total execution time: 0.0159
DEBUG - 2016-10-24 19:09:28 --> Total execution time: 0.0212
DEBUG - 2016-10-24 19:09:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:33 --> Total execution time: 0.0100
DEBUG - 2016-10-24 19:09:33 --> Total execution time: 0.0123
DEBUG - 2016-10-24 19:09:33 --> Total execution time: 0.0178
DEBUG - 2016-10-24 19:09:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:38 --> Total execution time: 0.0080
DEBUG - 2016-10-24 19:09:38 --> Total execution time: 0.0103
DEBUG - 2016-10-24 19:09:38 --> Total execution time: 0.0128
DEBUG - 2016-10-24 19:09:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:43 --> Total execution time: 0.0074
DEBUG - 2016-10-24 19:09:43 --> Total execution time: 0.0113
DEBUG - 2016-10-24 19:09:43 --> Total execution time: 0.0136
DEBUG - 2016-10-24 19:09:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:48 --> Total execution time: 0.0039
DEBUG - 2016-10-24 19:09:48 --> Total execution time: 0.0054
DEBUG - 2016-10-24 19:09:48 --> Total execution time: 0.0072
DEBUG - 2016-10-24 19:09:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:53 --> Total execution time: 0.0082
DEBUG - 2016-10-24 19:09:53 --> Total execution time: 0.0128
DEBUG - 2016-10-24 19:09:53 --> Total execution time: 0.0157
DEBUG - 2016-10-24 19:09:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:09:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:09:58 --> Total execution time: 0.0056
DEBUG - 2016-10-24 19:09:58 --> Total execution time: 0.0069
DEBUG - 2016-10-24 19:09:58 --> Total execution time: 0.0098
DEBUG - 2016-10-24 19:10:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:03 --> Total execution time: 0.0111
DEBUG - 2016-10-24 19:10:03 --> Total execution time: 0.0156
DEBUG - 2016-10-24 19:10:03 --> Total execution time: 0.0182
DEBUG - 2016-10-24 19:10:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:08 --> Total execution time: 0.0093
DEBUG - 2016-10-24 19:10:08 --> Total execution time: 0.0130
DEBUG - 2016-10-24 19:10:08 --> Total execution time: 0.0173
DEBUG - 2016-10-24 19:10:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:13 --> Total execution time: 0.0112
DEBUG - 2016-10-24 19:10:13 --> Total execution time: 0.0157
DEBUG - 2016-10-24 19:10:13 --> Total execution time: 0.0193
DEBUG - 2016-10-24 19:10:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:18 --> Total execution time: 0.0081
DEBUG - 2016-10-24 19:10:18 --> Total execution time: 0.0134
DEBUG - 2016-10-24 19:10:18 --> Total execution time: 0.0187
DEBUG - 2016-10-24 19:10:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:23 --> Total execution time: 0.0049
DEBUG - 2016-10-24 19:10:23 --> Total execution time: 0.0087
DEBUG - 2016-10-24 19:10:23 --> Total execution time: 0.0124
DEBUG - 2016-10-24 19:10:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:28 --> Total execution time: 0.0110
DEBUG - 2016-10-24 19:10:28 --> Total execution time: 0.0151
DEBUG - 2016-10-24 19:10:28 --> Total execution time: 0.0195
DEBUG - 2016-10-24 19:10:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:33 --> Total execution time: 0.0057
DEBUG - 2016-10-24 19:10:33 --> Total execution time: 0.0091
DEBUG - 2016-10-24 19:10:33 --> Total execution time: 0.0118
DEBUG - 2016-10-24 19:10:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:38 --> Total execution time: 0.0092
DEBUG - 2016-10-24 19:10:38 --> Total execution time: 0.0133
DEBUG - 2016-10-24 19:10:38 --> Total execution time: 0.0191
DEBUG - 2016-10-24 19:10:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:43 --> Total execution time: 0.0050
DEBUG - 2016-10-24 19:10:43 --> Total execution time: 0.0080
DEBUG - 2016-10-24 19:10:43 --> Total execution time: 0.0127
DEBUG - 2016-10-24 19:10:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:48 --> Total execution time: 0.0106
DEBUG - 2016-10-24 19:10:48 --> Total execution time: 0.0164
DEBUG - 2016-10-24 19:10:48 --> Total execution time: 0.0197
DEBUG - 2016-10-24 19:10:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:53 --> Total execution time: 0.0071
DEBUG - 2016-10-24 19:10:53 --> Total execution time: 0.0124
DEBUG - 2016-10-24 19:10:53 --> Total execution time: 0.0183
DEBUG - 2016-10-24 19:10:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:10:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:10:58 --> Total execution time: 0.0045
DEBUG - 2016-10-24 19:10:58 --> Total execution time: 0.0089
DEBUG - 2016-10-24 19:10:58 --> Total execution time: 0.0119
DEBUG - 2016-10-24 19:11:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:03 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:11:03 --> Total execution time: 0.0044
DEBUG - 2016-10-24 19:11:03 --> Total execution time: 0.0082
DEBUG - 2016-10-24 19:11:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:08 --> Total execution time: 0.0101
DEBUG - 2016-10-24 19:11:08 --> Total execution time: 0.0149
DEBUG - 2016-10-24 19:11:08 --> Total execution time: 0.0191
DEBUG - 2016-10-24 19:11:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:13 --> Total execution time: 0.0043
DEBUG - 2016-10-24 19:11:13 --> Total execution time: 0.0090
DEBUG - 2016-10-24 19:11:13 --> Total execution time: 0.0137
DEBUG - 2016-10-24 19:11:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:18 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:11:18 --> Total execution time: 0.0052
DEBUG - 2016-10-24 19:11:18 --> Total execution time: 0.0074
DEBUG - 2016-10-24 19:11:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:23 --> Total execution time: 0.0029
DEBUG - 2016-10-24 19:11:23 --> Total execution time: 0.0048
DEBUG - 2016-10-24 19:11:23 --> Total execution time: 0.0068
DEBUG - 2016-10-24 19:11:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:28 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:11:28 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:11:28 --> Total execution time: 0.0075
DEBUG - 2016-10-24 19:11:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:33 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:11:33 --> Total execution time: 0.0056
DEBUG - 2016-10-24 19:11:33 --> Total execution time: 0.0075
DEBUG - 2016-10-24 19:11:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:38 --> Total execution time: 0.0051
DEBUG - 2016-10-24 19:11:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:38 --> Total execution time: 0.0050
DEBUG - 2016-10-24 19:11:38 --> Total execution time: 0.0074
DEBUG - 2016-10-24 19:11:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:43 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:11:43 --> Total execution time: 0.0048
DEBUG - 2016-10-24 19:11:43 --> Total execution time: 0.0051
DEBUG - 2016-10-24 19:11:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:48 --> Total execution time: 0.0039
DEBUG - 2016-10-24 19:11:48 --> Total execution time: 0.0056
DEBUG - 2016-10-24 19:11:48 --> Total execution time: 0.0055
DEBUG - 2016-10-24 19:11:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:53 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:11:53 --> Total execution time: 0.0059
DEBUG - 2016-10-24 19:11:53 --> Total execution time: 0.0049
DEBUG - 2016-10-24 19:11:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:58 --> Total execution time: 0.0097
DEBUG - 2016-10-24 19:11:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:11:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:11:58 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:11:58 --> Total execution time: 0.0040
DEBUG - 2016-10-24 19:12:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:03 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:12:03 --> Total execution time: 0.0055
DEBUG - 2016-10-24 19:12:03 --> Total execution time: 0.0055
DEBUG - 2016-10-24 19:12:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:08 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:12:08 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:12:08 --> Total execution time: 0.0060
DEBUG - 2016-10-24 19:12:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:13 --> Total execution time: 0.0073
DEBUG - 2016-10-24 19:12:13 --> Total execution time: 0.0100
DEBUG - 2016-10-24 19:12:13 --> Total execution time: 0.0100
DEBUG - 2016-10-24 19:12:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:18 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:12:18 --> Total execution time: 0.0057
DEBUG - 2016-10-24 19:12:18 --> Total execution time: 0.0073
DEBUG - 2016-10-24 19:12:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:23 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:12:23 --> Total execution time: 0.0056
DEBUG - 2016-10-24 19:12:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:23 --> Total execution time: 0.0042
DEBUG - 2016-10-24 19:12:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:28 --> Total execution time: 0.0073
DEBUG - 2016-10-24 19:12:28 --> Total execution time: 0.0113
DEBUG - 2016-10-24 19:12:28 --> Total execution time: 0.0104
DEBUG - 2016-10-24 19:12:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:33 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:12:33 --> Total execution time: 0.0050
DEBUG - 2016-10-24 19:12:33 --> Total execution time: 0.0074
DEBUG - 2016-10-24 19:12:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:38 --> Total execution time: 0.0078
DEBUG - 2016-10-24 19:12:38 --> Total execution time: 0.0132
DEBUG - 2016-10-24 19:12:38 --> Total execution time: 0.0158
DEBUG - 2016-10-24 19:12:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:43 --> Total execution time: 0.0097
DEBUG - 2016-10-24 19:12:43 --> Total execution time: 0.0141
DEBUG - 2016-10-24 19:12:43 --> Total execution time: 0.0185
DEBUG - 2016-10-24 19:12:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:48 --> Total execution time: 0.0096
DEBUG - 2016-10-24 19:12:48 --> Total execution time: 0.0176
DEBUG - 2016-10-24 19:12:48 --> Total execution time: 0.0205
DEBUG - 2016-10-24 19:12:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:53 --> Total execution time: 0.0103
DEBUG - 2016-10-24 19:12:53 --> Total execution time: 0.0139
DEBUG - 2016-10-24 19:12:53 --> Total execution time: 0.0155
DEBUG - 2016-10-24 19:12:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:12:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:12:58 --> Total execution time: 0.0105
DEBUG - 2016-10-24 19:12:58 --> Total execution time: 0.0145
DEBUG - 2016-10-24 19:12:58 --> Total execution time: 0.0161
DEBUG - 2016-10-24 19:13:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:03 --> Total execution time: 0.0046
DEBUG - 2016-10-24 19:13:03 --> Total execution time: 0.0076
DEBUG - 2016-10-24 19:13:03 --> Total execution time: 0.0107
DEBUG - 2016-10-24 19:13:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:08 --> Total execution time: 0.0029
DEBUG - 2016-10-24 19:13:08 --> Total execution time: 0.0045
DEBUG - 2016-10-24 19:13:08 --> Total execution time: 0.0061
DEBUG - 2016-10-24 19:13:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:13 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:13:13 --> Total execution time: 0.0055
DEBUG - 2016-10-24 19:13:13 --> Total execution time: 0.0067
DEBUG - 2016-10-24 19:13:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:18 --> Total execution time: 0.0120
DEBUG - 2016-10-24 19:13:18 --> Total execution time: 0.0129
DEBUG - 2016-10-24 19:13:18 --> Total execution time: 0.0224
DEBUG - 2016-10-24 19:13:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:23 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:13:23 --> Total execution time: 0.0050
DEBUG - 2016-10-24 19:13:23 --> Total execution time: 0.0068
DEBUG - 2016-10-24 19:13:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:28 --> Total execution time: 0.0030
DEBUG - 2016-10-24 19:13:28 --> Total execution time: 0.0049
DEBUG - 2016-10-24 19:13:28 --> Total execution time: 0.0066
DEBUG - 2016-10-24 19:13:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:33 --> Total execution time: 0.0044
DEBUG - 2016-10-24 19:13:33 --> Total execution time: 0.0069
DEBUG - 2016-10-24 19:13:33 --> Total execution time: 0.0095
DEBUG - 2016-10-24 19:13:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:38 --> Total execution time: 0.0126
DEBUG - 2016-10-24 19:13:38 --> Total execution time: 0.0163
DEBUG - 2016-10-24 19:13:38 --> Total execution time: 0.0199
DEBUG - 2016-10-24 19:13:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:43 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:13:43 --> Total execution time: 0.0056
DEBUG - 2016-10-24 19:13:43 --> Total execution time: 0.0078
DEBUG - 2016-10-24 19:13:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:48 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:13:48 --> Total execution time: 0.0058
DEBUG - 2016-10-24 19:13:48 --> Total execution time: 0.0078
DEBUG - 2016-10-24 19:13:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:53 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:13:53 --> Total execution time: 0.0083
DEBUG - 2016-10-24 19:13:53 --> Total execution time: 0.0115
DEBUG - 2016-10-24 19:13:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:13:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:13:58 --> Total execution time: 0.0048
DEBUG - 2016-10-24 19:13:58 --> Total execution time: 0.0080
DEBUG - 2016-10-24 19:13:58 --> Total execution time: 0.0113
DEBUG - 2016-10-24 19:14:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:03 --> Total execution time: 0.0093
DEBUG - 2016-10-24 19:14:03 --> Total execution time: 0.0130
DEBUG - 2016-10-24 19:14:03 --> Total execution time: 0.0167
DEBUG - 2016-10-24 19:14:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:08 --> Total execution time: 0.0104
DEBUG - 2016-10-24 19:14:08 --> Total execution time: 0.0166
DEBUG - 2016-10-24 19:14:08 --> Total execution time: 0.0219
DEBUG - 2016-10-24 19:14:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:13 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:14:13 --> Total execution time: 0.0069
DEBUG - 2016-10-24 19:14:13 --> Total execution time: 0.0095
DEBUG - 2016-10-24 19:14:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:18 --> Total execution time: 0.0056
DEBUG - 2016-10-24 19:14:18 --> Total execution time: 0.0102
DEBUG - 2016-10-24 19:14:18 --> Total execution time: 0.0134
DEBUG - 2016-10-24 19:14:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:23 --> Total execution time: 0.0061
DEBUG - 2016-10-24 19:14:23 --> Total execution time: 0.0103
DEBUG - 2016-10-24 19:14:23 --> Total execution time: 0.0136
DEBUG - 2016-10-24 19:14:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:28 --> Total execution time: 0.0104
DEBUG - 2016-10-24 19:14:28 --> Total execution time: 0.0145
DEBUG - 2016-10-24 19:14:28 --> Total execution time: 0.0182
DEBUG - 2016-10-24 19:14:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:33 --> Total execution time: 0.0055
DEBUG - 2016-10-24 19:14:33 --> Total execution time: 0.0074
DEBUG - 2016-10-24 19:14:33 --> Total execution time: 0.0068
DEBUG - 2016-10-24 19:14:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:38 --> Total execution time: 0.0086
DEBUG - 2016-10-24 19:14:38 --> Total execution time: 0.0125
DEBUG - 2016-10-24 19:14:38 --> Total execution time: 0.0169
DEBUG - 2016-10-24 19:14:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:43 --> Total execution time: 0.0049
DEBUG - 2016-10-24 19:14:43 --> Total execution time: 0.0067
DEBUG - 2016-10-24 19:14:43 --> Total execution time: 0.0089
DEBUG - 2016-10-24 19:14:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:48 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:14:48 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:14:48 --> Total execution time: 0.0127
DEBUG - 2016-10-24 19:14:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:53 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:14:53 --> Total execution time: 0.0060
DEBUG - 2016-10-24 19:14:53 --> Total execution time: 0.0078
DEBUG - 2016-10-24 19:14:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:14:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:14:58 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:14:58 --> Total execution time: 0.0045
DEBUG - 2016-10-24 19:14:58 --> Total execution time: 0.0085
DEBUG - 2016-10-24 19:15:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:03 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:15:03 --> Total execution time: 0.0046
DEBUG - 2016-10-24 19:15:03 --> Total execution time: 0.0066
DEBUG - 2016-10-24 19:15:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:08 --> Total execution time: 0.0042
DEBUG - 2016-10-24 19:15:08 --> Total execution time: 0.0073
DEBUG - 2016-10-24 19:15:08 --> Total execution time: 0.0097
DEBUG - 2016-10-24 19:15:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:13 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:15:13 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:15:13 --> Total execution time: 0.0072
DEBUG - 2016-10-24 19:15:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:18 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:15:18 --> Total execution time: 0.0054
DEBUG - 2016-10-24 19:15:18 --> Total execution time: 0.0077
DEBUG - 2016-10-24 19:15:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:23 --> Total execution time: 0.0042
DEBUG - 2016-10-24 19:15:23 --> Total execution time: 0.0072
DEBUG - 2016-10-24 19:15:23 --> Total execution time: 0.0103
DEBUG - 2016-10-24 19:15:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:28 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:15:28 --> Total execution time: 0.0049
DEBUG - 2016-10-24 19:15:28 --> Total execution time: 0.0077
DEBUG - 2016-10-24 19:15:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:33 --> Total execution time: 0.0042
DEBUG - 2016-10-24 19:15:33 --> Total execution time: 0.0057
DEBUG - 2016-10-24 19:15:33 --> Total execution time: 0.0074
DEBUG - 2016-10-24 19:15:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:38 --> Total execution time: 0.0029
DEBUG - 2016-10-24 19:15:38 --> Total execution time: 0.0049
DEBUG - 2016-10-24 19:15:38 --> Total execution time: 0.0070
DEBUG - 2016-10-24 19:15:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:43 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:15:43 --> Total execution time: 0.0056
DEBUG - 2016-10-24 19:15:43 --> Total execution time: 0.0083
DEBUG - 2016-10-24 19:15:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:48 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:15:48 --> Total execution time: 0.0057
DEBUG - 2016-10-24 19:15:48 --> Total execution time: 0.0072
DEBUG - 2016-10-24 19:15:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:53 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:15:53 --> Total execution time: 0.0042
DEBUG - 2016-10-24 19:15:53 --> Total execution time: 0.0097
DEBUG - 2016-10-24 19:15:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:15:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:15:58 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:15:58 --> Total execution time: 0.0062
DEBUG - 2016-10-24 19:15:58 --> Total execution time: 0.0076
DEBUG - 2016-10-24 19:16:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:16:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:16:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:16:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:16:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:16:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:16:03 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:16:03 --> Total execution time: 0.0050
DEBUG - 2016-10-24 19:16:03 --> Total execution time: 0.0066
DEBUG - 2016-10-24 19:16:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:16:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:16:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:16:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:16:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:16:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:16:08 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:16:08 --> Total execution time: 0.0052
DEBUG - 2016-10-24 19:16:08 --> Total execution time: 0.0078
DEBUG - 2016-10-24 19:16:19 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:16:19 --> No URI present. Default controller set.
DEBUG - 2016-10-24 19:16:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:16:19 --> Total execution time: 0.0062
DEBUG - 2016-10-24 19:16:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:16:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:16:23 --> Total execution time: 0.0061
DEBUG - 2016-10-24 19:17:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:17:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:17:33 --> ORDER ID : 6
ERROR - 2016-10-24 19:17:33 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-24 19:17:33 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-24 19:17:33 --> Total execution time: 0.0058
DEBUG - 2016-10-24 19:17:34 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:17:34 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 19:17:34 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-24 19:21:39 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:21:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:21:39 --> Total execution time: 0.0322
DEBUG - 2016-10-24 19:21:44 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:21:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:21:44 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:21:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:21:44 --> Total execution time: 0.0680
DEBUG - 2016-10-24 19:23:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:23:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:23:58 --> Total execution time: 0.0039
DEBUG - 2016-10-24 19:24:07 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:24:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:24:07 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:24:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:24:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:24:10 --> Total execution time: 0.0059
DEBUG - 2016-10-24 19:24:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:24:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:24:47 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:24:50 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:24:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:24:50 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:25:00 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:25:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:25:00 --> Total execution time: 0.0040
DEBUG - 2016-10-24 19:25:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:25:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:25:35 --> Total execution time: 0.0048
DEBUG - 2016-10-24 19:25:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:25:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:25:37 --> Total execution time: 0.0059
DEBUG - 2016-10-24 19:25:59 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:25:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:25:59 --> Total execution time: 0.0066
DEBUG - 2016-10-24 19:26:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:26:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:26:03 --> Total execution time: 0.0084
DEBUG - 2016-10-24 19:26:04 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:26:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:26:04 --> Total execution time: 0.0051
DEBUG - 2016-10-24 19:26:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:26:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:26:10 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:26:11 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:26:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:26:11 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:26:14 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:26:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:26:14 --> Total execution time: 0.0079
DEBUG - 2016-10-24 19:26:34 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:26:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:26:34 --> Total execution time: 0.0072
DEBUG - 2016-10-24 19:27:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:27:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:27:12 --> Total execution time: 0.1181
DEBUG - 2016-10-24 19:27:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:27:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:27:12 --> Total execution time: 0.0057
DEBUG - 2016-10-24 19:27:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:27:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:27:17 --> Total execution time: 0.0044
DEBUG - 2016-10-24 19:27:56 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:27:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:27:56 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:28:00 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:28:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:28:00 --> Total execution time: 0.0184
DEBUG - 2016-10-24 19:28:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:28:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:28:02 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:28:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:28:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:28:02 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:28:06 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:28:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:28:06 --> Total execution time: 0.0098
DEBUG - 2016-10-24 19:28:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:28:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:28:18 --> Total execution time: 0.0042
DEBUG - 2016-10-24 19:29:11 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:29:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:29:11 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:29:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:29:11 --> Total execution time: 0.0029
DEBUG - 2016-10-24 19:29:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:29:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:29:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:29:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:29:15 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:29:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:29:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:29:20 --> Total execution time: 0.0303
DEBUG - 2016-10-24 19:29:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:29:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:29:20 --> Total execution time: 0.0045
DEBUG - 2016-10-24 19:29:24 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:29:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:29:24 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:29:24 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:29:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:29:24 --> Total execution time: 0.0046
DEBUG - 2016-10-24 19:29:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:29:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:29:27 --> Total execution time: 0.0304
DEBUG - 2016-10-24 19:29:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:29:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:29:27 --> Total execution time: 0.0080
DEBUG - 2016-10-24 19:29:29 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:29:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:29:29 --> Total execution time: 0.0149
DEBUG - 2016-10-24 19:29:29 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:29:29 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 19:29:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE p.row_disabled = 0' at line 1 - Invalid query: SELECT * FROM products p LEFT JOIN product_description pd ON (pd.product_id = p.product_id) WHERE pd.language_id = 1 WHERE p.row_disabled = 0
DEBUG - 2016-10-24 19:29:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:29:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:29:33 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:29:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:29:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 19:29:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE p.row_disabled = 0' at line 1 - Invalid query: SELECT * FROM products p LEFT JOIN product_description pd ON (pd.product_id = p.product_id) WHERE pd.language_id = 1 WHERE p.row_disabled = 0
DEBUG - 2016-10-24 19:41:29 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:41:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:41:29 --> Total execution time: 0.0050
DEBUG - 2016-10-24 19:41:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:41:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:41:33 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:41:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:41:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:41:35 --> Total execution time: 0.0045
DEBUG - 2016-10-24 19:41:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:41:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:41:38 --> Total execution time: 0.0050
DEBUG - 2016-10-24 19:41:45 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:41:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:41:45 --> Total execution time: 0.0060
DEBUG - 2016-10-24 19:41:54 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:41:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:41:54 --> Total execution time: 0.0047
DEBUG - 2016-10-24 19:41:57 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:41:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:41:57 --> Total execution time: 0.0245
DEBUG - 2016-10-24 19:42:01 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:42:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 19:42:01 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-24 19:42:01 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-24 19:42:01 --> Total execution time: 0.0258
DEBUG - 2016-10-24 19:42:01 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:42:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 19:42:01 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-24 19:43:51 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:43:51 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 19:43:51 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-24 19:44:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:44:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 19:44:18 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-24 19:45:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:45:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:45:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:45:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:45:08 --> Total execution time: 0.0058
DEBUG - 2016-10-24 19:45:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:45:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 19:45:08 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-24 19:45:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:45:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:45:13 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:45:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:45:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:45:18 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:45:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:45:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:45:23 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:45:26 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:45:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:45:26 --> Total execution time: 0.0064
DEBUG - 2016-10-24 19:45:26 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:45:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 19:45:26 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-24 19:45:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:45:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:45:32 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:45:36 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:45:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:45:36 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:45:41 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:45:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:45:41 --> Total execution time: 0.0045
DEBUG - 2016-10-24 19:45:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:45:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:45:42 --> Total execution time: 0.2034
DEBUG - 2016-10-24 19:45:46 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:45:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:45:46 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:45:50 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:45:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:45:50 --> Total execution time: 0.0055
DEBUG - 2016-10-24 19:45:50 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:45:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 19:45:50 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-24 19:45:55 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:45:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:45:55 --> Total execution time: 0.0057
DEBUG - 2016-10-24 19:46:00 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:00 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:46:05 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:05 --> Total execution time: 0.0043
DEBUG - 2016-10-24 19:46:07 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:07 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:46:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:10 --> Total execution time: 0.0057
DEBUG - 2016-10-24 19:46:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:10 --> Total execution time: 0.0039
DEBUG - 2016-10-24 19:46:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:12 --> Total execution time: 0.0181
DEBUG - 2016-10-24 19:46:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:15 --> Total execution time: 0.0045
DEBUG - 2016-10-24 19:46:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:17 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:46:17 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:46:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:20 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:46:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:22 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:46:22 --> Total execution time: 0.0055
DEBUG - 2016-10-24 19:46:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:25 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:46:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:27 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:46:27 --> Total execution time: 0.0059
DEBUG - 2016-10-24 19:46:30 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:30 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:46:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:32 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:46:32 --> Total execution time: 0.0057
DEBUG - 2016-10-24 19:46:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:35 --> Total execution time: 0.0039
DEBUG - 2016-10-24 19:46:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:37 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:46:37 --> Total execution time: 0.0049
DEBUG - 2016-10-24 19:46:40 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:40 --> Total execution time: 0.0039
DEBUG - 2016-10-24 19:46:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:42 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:46:42 --> Total execution time: 0.0048
DEBUG - 2016-10-24 19:46:45 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:45 --> Total execution time: 0.0509
DEBUG - 2016-10-24 19:46:45 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:45 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:46:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:47 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:46:47 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:46:50 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:50 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:46:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:52 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:46:52 --> Total execution time: 0.0060
DEBUG - 2016-10-24 19:46:55 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:55 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:46:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:58 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:46:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:46:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:46:58 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:47:00 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:00 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:47:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:03 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:47:03 --> Total execution time: 0.0051
DEBUG - 2016-10-24 19:47:05 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:05 --> Total execution time: 0.0039
DEBUG - 2016-10-24 19:47:07 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:07 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:07 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:47:07 --> Total execution time: 0.0052
DEBUG - 2016-10-24 19:47:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:10 --> Total execution time: 0.0039
DEBUG - 2016-10-24 19:47:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:12 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:47:12 --> Total execution time: 0.0056
DEBUG - 2016-10-24 19:47:14 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:14 --> Total execution time: 0.0538
DEBUG - 2016-10-24 19:47:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:15 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:47:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:17 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:47:17 --> Total execution time: 0.0058
DEBUG - 2016-10-24 19:47:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:20 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:47:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:23 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:47:23 --> Total execution time: 0.0043
DEBUG - 2016-10-24 19:47:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:25 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:47:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:28 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:47:28 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:47:30 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:30 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:47:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:33 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:47:33 --> Total execution time: 0.0057
DEBUG - 2016-10-24 19:47:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:35 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:47:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:37 --> Total execution time: 0.0050
DEBUG - 2016-10-24 19:47:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:38 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:47:38 --> Total execution time: 0.0052
DEBUG - 2016-10-24 19:47:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:42 --> Total execution time: 0.0040
DEBUG - 2016-10-24 19:47:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:43 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:47:43 --> Total execution time: 0.0057
DEBUG - 2016-10-24 19:47:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:47 --> Total execution time: 0.0039
DEBUG - 2016-10-24 19:47:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:48 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:47:48 --> Total execution time: 0.0048
DEBUG - 2016-10-24 19:47:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:52 --> Total execution time: 0.0043
DEBUG - 2016-10-24 19:47:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:53 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:47:53 --> Total execution time: 0.0058
DEBUG - 2016-10-24 19:47:57 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:57 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:47:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:47:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:47:58 --> Total execution time: 0.0029
DEBUG - 2016-10-24 19:47:58 --> Total execution time: 0.0047
DEBUG - 2016-10-24 19:48:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:02 --> Total execution time: 0.0043
DEBUG - 2016-10-24 19:48:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:03 --> Total execution time: 0.0086
DEBUG - 2016-10-24 19:48:03 --> Total execution time: 0.0127
DEBUG - 2016-10-24 19:48:07 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:07 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:48:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:08 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:48:08 --> Total execution time: 0.0055
DEBUG - 2016-10-24 19:48:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:12 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:48:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:13 --> Total execution time: 0.0029
DEBUG - 2016-10-24 19:48:13 --> Total execution time: 0.0044
DEBUG - 2016-10-24 19:48:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:17 --> Total execution time: 0.0042
DEBUG - 2016-10-24 19:48:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:18 --> Total execution time: 0.0098
DEBUG - 2016-10-24 19:48:18 --> Total execution time: 0.0148
DEBUG - 2016-10-24 19:48:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:22 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:48:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:23 --> Total execution time: 0.0050
DEBUG - 2016-10-24 19:48:23 --> Total execution time: 0.0067
DEBUG - 2016-10-24 19:48:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:27 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:48:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:28 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:48:28 --> Total execution time: 0.0051
DEBUG - 2016-10-24 19:48:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:32 --> Total execution time: 0.0039
DEBUG - 2016-10-24 19:48:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:33 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:48:33 --> Total execution time: 0.0054
DEBUG - 2016-10-24 19:48:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:37 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:48:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:38 --> Total execution time: 0.0049
DEBUG - 2016-10-24 19:48:38 --> Total execution time: 0.0070
DEBUG - 2016-10-24 19:48:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:42 --> Total execution time: 0.0051
DEBUG - 2016-10-24 19:48:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:43 --> Total execution time: 0.0090
DEBUG - 2016-10-24 19:48:43 --> Total execution time: 0.0131
DEBUG - 2016-10-24 19:48:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:47 --> Total execution time: 0.0040
DEBUG - 2016-10-24 19:48:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:48 --> Total execution time: 0.0030
DEBUG - 2016-10-24 19:48:48 --> Total execution time: 0.0066
DEBUG - 2016-10-24 19:48:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:52 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:48:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:53 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:48:53 --> Total execution time: 0.0052
DEBUG - 2016-10-24 19:48:57 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:57 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:48:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:48:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:48:58 --> Total execution time: 0.0076
DEBUG - 2016-10-24 19:48:58 --> Total execution time: 0.0092
DEBUG - 2016-10-24 19:49:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:02 --> Total execution time: 0.0039
DEBUG - 2016-10-24 19:49:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:03 --> Total execution time: 0.0047
DEBUG - 2016-10-24 19:49:03 --> Total execution time: 0.0073
DEBUG - 2016-10-24 19:49:07 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:07 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:49:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:08 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:49:08 --> Total execution time: 0.0047
DEBUG - 2016-10-24 19:49:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:12 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:49:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:13 --> Total execution time: 0.0028
DEBUG - 2016-10-24 19:49:13 --> Total execution time: 0.0046
DEBUG - 2016-10-24 19:49:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:17 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:49:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:18 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:49:18 --> Total execution time: 0.0056
DEBUG - 2016-10-24 19:49:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:22 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:49:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:23 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:49:23 --> Total execution time: 0.0063
DEBUG - 2016-10-24 19:49:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:27 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:49:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:28 --> Total execution time: 0.0027
DEBUG - 2016-10-24 19:49:28 --> Total execution time: 0.0049
DEBUG - 2016-10-24 19:49:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:32 --> Total execution time: 0.0040
DEBUG - 2016-10-24 19:49:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:33 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:49:33 --> Total execution time: 0.0055
DEBUG - 2016-10-24 19:49:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:37 --> Total execution time: 0.0056
DEBUG - 2016-10-24 19:49:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:38 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:49:38 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:49:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:42 --> Total execution time: 0.0042
DEBUG - 2016-10-24 19:49:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:43 --> Total execution time: 0.0030
DEBUG - 2016-10-24 19:49:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:43 --> Total execution time: 0.0040
DEBUG - 2016-10-24 19:49:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:47 --> Total execution time: 0.0040
DEBUG - 2016-10-24 19:49:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:48 --> Total execution time: 0.0052
DEBUG - 2016-10-24 19:49:48 --> Total execution time: 0.0061
DEBUG - 2016-10-24 19:49:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:52 --> Total execution time: 0.0046
DEBUG - 2016-10-24 19:49:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:53 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:49:53 --> Total execution time: 0.0061
DEBUG - 2016-10-24 19:49:57 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:57 --> Total execution time: 0.0040
DEBUG - 2016-10-24 19:49:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:49:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:49:58 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:49:58 --> Total execution time: 0.0078
DEBUG - 2016-10-24 19:50:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:02 --> Total execution time: 0.0042
DEBUG - 2016-10-24 19:50:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:03 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:50:03 --> Total execution time: 0.0056
DEBUG - 2016-10-24 19:50:07 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:07 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:50:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:08 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:50:08 --> Total execution time: 0.0054
DEBUG - 2016-10-24 19:50:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:12 --> Total execution time: 0.0047
DEBUG - 2016-10-24 19:50:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:13 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:50:13 --> Total execution time: 0.0051
DEBUG - 2016-10-24 19:50:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:17 --> Total execution time: 0.0045
DEBUG - 2016-10-24 19:50:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:18 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:50:18 --> Total execution time: 0.0050
DEBUG - 2016-10-24 19:50:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:22 --> Total execution time: 0.0046
DEBUG - 2016-10-24 19:50:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:23 --> Total execution time: 0.0060
DEBUG - 2016-10-24 19:50:23 --> Total execution time: 0.0079
DEBUG - 2016-10-24 19:50:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:27 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:50:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:28 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:50:28 --> Total execution time: 0.0058
DEBUG - 2016-10-24 19:50:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:32 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:50:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:33 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:50:33 --> Total execution time: 0.0068
DEBUG - 2016-10-24 19:50:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:35 --> Total execution time: 0.0068
DEBUG - 2016-10-24 19:50:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:38 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:50:38 --> Total execution time: 0.0057
DEBUG - 2016-10-24 19:50:40 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:40 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:50:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:43 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:50:43 --> Total execution time: 0.0056
DEBUG - 2016-10-24 19:50:45 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:45 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:50:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:48 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:50:48 --> Total execution time: 0.0051
DEBUG - 2016-10-24 19:50:50 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:50 --> Total execution time: 0.0043
DEBUG - 2016-10-24 19:50:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:53 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:50:53 --> Total execution time: 0.0051
DEBUG - 2016-10-24 19:50:55 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:55 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:50:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:50:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:50:58 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:50:58 --> Total execution time: 0.0062
DEBUG - 2016-10-24 19:51:00 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:00 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:51:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:03 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:51:03 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:51:05 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:05 --> Total execution time: 0.0062
DEBUG - 2016-10-24 19:51:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:08 --> Total execution time: 0.0029
DEBUG - 2016-10-24 19:51:08 --> Total execution time: 0.0043
DEBUG - 2016-10-24 19:51:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:10 --> Total execution time: 0.0042
DEBUG - 2016-10-24 19:51:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:13 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:51:13 --> Total execution time: 0.0052
DEBUG - 2016-10-24 19:51:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:15 --> Total execution time: 0.0047
DEBUG - 2016-10-24 19:51:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:18 --> Total execution time: 0.0028
DEBUG - 2016-10-24 19:51:18 --> Total execution time: 0.0048
DEBUG - 2016-10-24 19:51:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:20 --> Total execution time: 0.0043
DEBUG - 2016-10-24 19:51:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:23 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:51:23 --> Total execution time: 0.0051
DEBUG - 2016-10-24 19:51:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:25 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:51:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:28 --> Total execution time: 0.0057
DEBUG - 2016-10-24 19:51:28 --> Total execution time: 0.0093
DEBUG - 2016-10-24 19:51:30 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:30 --> Total execution time: 0.0074
DEBUG - 2016-10-24 19:51:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:33 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:51:33 --> Total execution time: 0.0060
DEBUG - 2016-10-24 19:51:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:35 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:51:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:38 --> Total execution time: 0.0077
DEBUG - 2016-10-24 19:51:38 --> Total execution time: 0.0095
DEBUG - 2016-10-24 19:51:40 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:40 --> Total execution time: 0.0042
DEBUG - 2016-10-24 19:51:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:43 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:51:43 --> Total execution time: 0.0045
DEBUG - 2016-10-24 19:51:45 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:45 --> Total execution time: 0.0040
DEBUG - 2016-10-24 19:51:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:48 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:51:48 --> Total execution time: 0.0061
DEBUG - 2016-10-24 19:51:50 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:50 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:51:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:53 --> Total execution time: 0.0050
DEBUG - 2016-10-24 19:51:53 --> Total execution time: 0.0082
DEBUG - 2016-10-24 19:51:55 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:55 --> Total execution time: 0.0039
DEBUG - 2016-10-24 19:51:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:51:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:51:58 --> Total execution time: 0.0049
DEBUG - 2016-10-24 19:51:58 --> Total execution time: 0.0077
DEBUG - 2016-10-24 19:52:00 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:00 --> Total execution time: 0.0064
DEBUG - 2016-10-24 19:52:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:03 --> Total execution time: 0.0046
DEBUG - 2016-10-24 19:52:03 --> Total execution time: 0.0079
DEBUG - 2016-10-24 19:52:05 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:05 --> Total execution time: 0.0043
DEBUG - 2016-10-24 19:52:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:08 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:52:08 --> Total execution time: 0.0052
DEBUG - 2016-10-24 19:52:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:10 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:52:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:13 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:52:13 --> Total execution time: 0.0055
DEBUG - 2016-10-24 19:52:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:15 --> Total execution time: 0.0042
DEBUG - 2016-10-24 19:52:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:18 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:52:18 --> Total execution time: 0.0052
DEBUG - 2016-10-24 19:52:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:20 --> Total execution time: 0.0040
DEBUG - 2016-10-24 19:52:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:23 --> Total execution time: 0.0027
DEBUG - 2016-10-24 19:52:23 --> Total execution time: 0.0046
DEBUG - 2016-10-24 19:52:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:25 --> Total execution time: 0.0044
DEBUG - 2016-10-24 19:52:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:28 --> Total execution time: 0.0046
DEBUG - 2016-10-24 19:52:28 --> Total execution time: 0.0052
DEBUG - 2016-10-24 19:52:30 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:30 --> Total execution time: 0.0045
DEBUG - 2016-10-24 19:52:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:33 --> Total execution time: 0.0040
DEBUG - 2016-10-24 19:52:33 --> Total execution time: 0.0046
DEBUG - 2016-10-24 19:52:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:35 --> Total execution time: 0.0039
DEBUG - 2016-10-24 19:52:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:38 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:52:38 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:52:40 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:40 --> Total execution time: 0.0040
DEBUG - 2016-10-24 19:52:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:43 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:52:43 --> Total execution time: 0.0052
DEBUG - 2016-10-24 19:52:45 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:45 --> Total execution time: 0.0039
DEBUG - 2016-10-24 19:52:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:48 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:52:48 --> Total execution time: 0.0050
DEBUG - 2016-10-24 19:52:50 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:50 --> Total execution time: 0.0044
DEBUG - 2016-10-24 19:52:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:53 --> Total execution time: 0.0051
DEBUG - 2016-10-24 19:52:53 --> Total execution time: 0.0075
DEBUG - 2016-10-24 19:52:55 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:55 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:52:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:52:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:52:58 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:52:58 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:53:00 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:00 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:53:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:03 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:53:03 --> Total execution time: 0.0049
DEBUG - 2016-10-24 19:53:05 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:05 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:53:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:08 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:53:08 --> Total execution time: 0.0052
DEBUG - 2016-10-24 19:53:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:10 --> Total execution time: 0.0039
DEBUG - 2016-10-24 19:53:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:13 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:53:13 --> Total execution time: 0.0054
DEBUG - 2016-10-24 19:53:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:15 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:53:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:18 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:53:18 --> Total execution time: 0.0049
DEBUG - 2016-10-24 19:53:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:20 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:53:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:23 --> Total execution time: 0.0029
DEBUG - 2016-10-24 19:53:23 --> Total execution time: 0.0049
DEBUG - 2016-10-24 19:53:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:25 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:53:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:28 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:53:28 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:53:30 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:30 --> Total execution time: 0.0089
DEBUG - 2016-10-24 19:53:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:33 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:53:33 --> Total execution time: 0.0051
DEBUG - 2016-10-24 19:53:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:35 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:53:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:38 --> Total execution time: 0.0047
DEBUG - 2016-10-24 19:53:38 --> Total execution time: 0.0078
DEBUG - 2016-10-24 19:53:40 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:40 --> Total execution time: 0.0102
DEBUG - 2016-10-24 19:53:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:43 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:53:43 --> Total execution time: 0.0052
DEBUG - 2016-10-24 19:53:45 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:45 --> Total execution time: 0.0064
DEBUG - 2016-10-24 19:53:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:48 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:53:48 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:53:50 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:50 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:53:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:53 --> Total execution time: 0.0029
DEBUG - 2016-10-24 19:53:53 --> Total execution time: 0.0046
DEBUG - 2016-10-24 19:53:55 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:55 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:53:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:53:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:53:58 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:53:58 --> Total execution time: 0.0051
DEBUG - 2016-10-24 19:54:00 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:00 --> Total execution time: 0.0067
DEBUG - 2016-10-24 19:54:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:03 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:54:03 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:54:05 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:05 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:54:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:08 --> Total execution time: 0.0040
DEBUG - 2016-10-24 19:54:08 --> Total execution time: 0.0070
DEBUG - 2016-10-24 19:54:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:10 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:54:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:13 --> Total execution time: 0.0045
DEBUG - 2016-10-24 19:54:13 --> Total execution time: 0.0072
DEBUG - 2016-10-24 19:54:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:15 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:54:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:18 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:54:18 --> Total execution time: 0.0052
DEBUG - 2016-10-24 19:54:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:20 --> Total execution time: 0.0084
DEBUG - 2016-10-24 19:54:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:23 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:54:23 --> Total execution time: 0.0057
DEBUG - 2016-10-24 19:54:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:25 --> Total execution time: 0.0052
DEBUG - 2016-10-24 19:54:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:28 --> Total execution time: 0.0029
DEBUG - 2016-10-24 19:54:28 --> Total execution time: 0.0048
DEBUG - 2016-10-24 19:54:30 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:30 --> Total execution time: 0.0112
DEBUG - 2016-10-24 19:54:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:33 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:54:33 --> Total execution time: 0.0053
DEBUG - 2016-10-24 19:54:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:35 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:54:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:38 --> Total execution time: 0.0030
DEBUG - 2016-10-24 19:54:38 --> Total execution time: 0.0047
DEBUG - 2016-10-24 19:54:40 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:40 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:54:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:43 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:54:43 --> Total execution time: 0.0056
DEBUG - 2016-10-24 19:54:45 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:45 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:54:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:48 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:54:48 --> Total execution time: 0.0046
DEBUG - 2016-10-24 19:54:50 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:50 --> Total execution time: 0.0039
DEBUG - 2016-10-24 19:54:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:53 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:54:53 --> Total execution time: 0.0051
DEBUG - 2016-10-24 19:54:55 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:55 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:54:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:54:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:54:58 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:54:58 --> Total execution time: 0.0056
DEBUG - 2016-10-24 19:55:00 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:00 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:55:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:03 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:55:03 --> Total execution time: 0.0056
DEBUG - 2016-10-24 19:55:05 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:05 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:55:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:08 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:55:08 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:55:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:10 --> Total execution time: 0.0042
DEBUG - 2016-10-24 19:55:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:13 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:55:13 --> Total execution time: 0.0052
DEBUG - 2016-10-24 19:55:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:15 --> Total execution time: 0.0081
DEBUG - 2016-10-24 19:55:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:18 --> Total execution time: 0.0050
DEBUG - 2016-10-24 19:55:18 --> Total execution time: 0.0088
DEBUG - 2016-10-24 19:55:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:20 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:55:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:23 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:55:23 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:55:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:25 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:55:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:28 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:55:28 --> Total execution time: 0.0054
DEBUG - 2016-10-24 19:55:30 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:30 --> Total execution time: 0.0099
DEBUG - 2016-10-24 19:55:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:33 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:55:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:33 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:55:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:35 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:55:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:38 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:55:38 --> Total execution time: 0.0050
DEBUG - 2016-10-24 19:55:40 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:40 --> Total execution time: 0.0067
DEBUG - 2016-10-24 19:55:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:43 --> Total execution time: 0.0046
DEBUG - 2016-10-24 19:55:43 --> Total execution time: 0.0074
DEBUG - 2016-10-24 19:55:45 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:45 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:55:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:48 --> Total execution time: 0.0030
DEBUG - 2016-10-24 19:55:48 --> Total execution time: 0.0048
DEBUG - 2016-10-24 19:55:50 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:50 --> Total execution time: 0.0105
DEBUG - 2016-10-24 19:55:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:53 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:55:53 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:55:55 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:55 --> Total execution time: 0.0079
DEBUG - 2016-10-24 19:55:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:55:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:55:58 --> Total execution time: 0.0044
DEBUG - 2016-10-24 19:55:58 --> Total execution time: 0.0069
DEBUG - 2016-10-24 19:56:00 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:00 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:56:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:03 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:56:03 --> Total execution time: 0.0056
DEBUG - 2016-10-24 19:56:05 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:05 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:56:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:08 --> Total execution time: 0.0043
DEBUG - 2016-10-24 19:56:08 --> Total execution time: 0.0065
DEBUG - 2016-10-24 19:56:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:10 --> Total execution time: 0.0045
DEBUG - 2016-10-24 19:56:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:13 --> Total execution time: 0.0030
DEBUG - 2016-10-24 19:56:13 --> Total execution time: 0.0048
DEBUG - 2016-10-24 19:56:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:15 --> Total execution time: 0.0042
DEBUG - 2016-10-24 19:56:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:18 --> Total execution time: 0.0049
DEBUG - 2016-10-24 19:56:18 --> Total execution time: 0.0079
DEBUG - 2016-10-24 19:56:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:20 --> Total execution time: 0.0043
DEBUG - 2016-10-24 19:56:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:23 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:56:23 --> Total execution time: 0.0056
DEBUG - 2016-10-24 19:56:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:25 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:56:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:28 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:56:28 --> Total execution time: 0.0057
DEBUG - 2016-10-24 19:56:30 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:30 --> Total execution time: 0.0039
DEBUG - 2016-10-24 19:56:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:33 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:56:33 --> Total execution time: 0.0059
DEBUG - 2016-10-24 19:56:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:35 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:56:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:38 --> Total execution time: 0.0030
DEBUG - 2016-10-24 19:56:38 --> Total execution time: 0.0046
DEBUG - 2016-10-24 19:56:40 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:40 --> Total execution time: 0.0055
DEBUG - 2016-10-24 19:56:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:43 --> Total execution time: 0.0066
DEBUG - 2016-10-24 19:56:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:43 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:56:43 --> Total execution time: 0.0058
DEBUG - 2016-10-24 19:56:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:48 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:56:48 --> Total execution time: 0.0059
DEBUG - 2016-10-24 19:56:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:48 --> Total execution time: 0.0698
DEBUG - 2016-10-24 19:56:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:53 --> Total execution time: 0.0027
DEBUG - 2016-10-24 19:56:53 --> Total execution time: 0.0022
DEBUG - 2016-10-24 19:56:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:58 --> Total execution time: 0.0027
DEBUG - 2016-10-24 19:56:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:56:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:56:58 --> Total execution time: 0.0028
DEBUG - 2016-10-24 19:57:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:03 --> Total execution time: 0.0024
DEBUG - 2016-10-24 19:57:03 --> Total execution time: 0.0035
DEBUG - 2016-10-24 19:57:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:08 --> Total execution time: 0.0050
DEBUG - 2016-10-24 19:57:08 --> Total execution time: 0.0061
DEBUG - 2016-10-24 19:57:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:13 --> Total execution time: 0.0025
DEBUG - 2016-10-24 19:57:13 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:57:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:18 --> Total execution time: 0.0024
DEBUG - 2016-10-24 19:57:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:18 --> Total execution time: 0.0022
DEBUG - 2016-10-24 19:57:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:23 --> Total execution time: 0.0030
DEBUG - 2016-10-24 19:57:23 --> Total execution time: 0.0026
DEBUG - 2016-10-24 19:57:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:28 --> Total execution time: 0.0026
DEBUG - 2016-10-24 19:57:28 --> Total execution time: 0.0021
DEBUG - 2016-10-24 19:57:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:33 --> Total execution time: 0.0025
DEBUG - 2016-10-24 19:57:33 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:57:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:38 --> Total execution time: 0.0028
DEBUG - 2016-10-24 19:57:38 --> Total execution time: 0.0040
DEBUG - 2016-10-24 19:57:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:43 --> Total execution time: 0.0026
DEBUG - 2016-10-24 19:57:43 --> Total execution time: 0.0022
DEBUG - 2016-10-24 19:57:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:48 --> Total execution time: 0.0027
DEBUG - 2016-10-24 19:57:48 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:57:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:53 --> Total execution time: 0.0022
DEBUG - 2016-10-24 19:57:53 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:57:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:57:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:57:58 --> Total execution time: 0.0029
DEBUG - 2016-10-24 19:57:58 --> Total execution time: 0.0030
DEBUG - 2016-10-24 19:58:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:03 --> Total execution time: 0.0041
DEBUG - 2016-10-24 19:58:03 --> Total execution time: 0.0054
DEBUG - 2016-10-24 19:58:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:08 --> Total execution time: 0.0027
DEBUG - 2016-10-24 19:58:08 --> Total execution time: 0.0034
DEBUG - 2016-10-24 19:58:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:13 --> Total execution time: 0.0027
DEBUG - 2016-10-24 19:58:13 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:58:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:18 --> Total execution time: 0.0025
DEBUG - 2016-10-24 19:58:18 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:58:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:23 --> Total execution time: 0.0025
DEBUG - 2016-10-24 19:58:23 --> Total execution time: 0.0037
DEBUG - 2016-10-24 19:58:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:28 --> Total execution time: 0.0070
DEBUG - 2016-10-24 19:58:28 --> Total execution time: 0.0095
DEBUG - 2016-10-24 19:58:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:33 --> Total execution time: 0.0023
DEBUG - 2016-10-24 19:58:33 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:58:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:38 --> Total execution time: 0.0025
DEBUG - 2016-10-24 19:58:38 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:58:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:43 --> Total execution time: 0.0023
DEBUG - 2016-10-24 19:58:43 --> Total execution time: 0.0030
DEBUG - 2016-10-24 19:58:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:48 --> Total execution time: 0.0021
DEBUG - 2016-10-24 19:58:48 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:58:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:53 --> Total execution time: 0.0024
DEBUG - 2016-10-24 19:58:53 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:58:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:58:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:58:58 --> Total execution time: 0.0022
DEBUG - 2016-10-24 19:58:58 --> Total execution time: 0.0027
DEBUG - 2016-10-24 19:59:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:03 --> Total execution time: 0.0021
DEBUG - 2016-10-24 19:59:03 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:59:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:08 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:59:08 --> Total execution time: 0.0047
DEBUG - 2016-10-24 19:59:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:13 --> Total execution time: 0.0021
DEBUG - 2016-10-24 19:59:13 --> Total execution time: 0.0030
DEBUG - 2016-10-24 19:59:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:18 --> Total execution time: 0.0042
DEBUG - 2016-10-24 19:59:18 --> Total execution time: 0.0068
DEBUG - 2016-10-24 19:59:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:23 --> Total execution time: 0.0038
DEBUG - 2016-10-24 19:59:23 --> Total execution time: 0.0047
DEBUG - 2016-10-24 19:59:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:28 --> Total execution time: 0.0023
DEBUG - 2016-10-24 19:59:28 --> Total execution time: 0.0032
DEBUG - 2016-10-24 19:59:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:33 --> Total execution time: 0.0026
DEBUG - 2016-10-24 19:59:33 --> Total execution time: 0.0036
DEBUG - 2016-10-24 19:59:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:38 --> Total execution time: 0.0024
DEBUG - 2016-10-24 19:59:38 --> Total execution time: 0.0031
DEBUG - 2016-10-24 19:59:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:43 --> Total execution time: 0.0022
DEBUG - 2016-10-24 19:59:43 --> Total execution time: 0.0033
DEBUG - 2016-10-24 19:59:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:48 --> Total execution time: 0.0044
DEBUG - 2016-10-24 19:59:48 --> Total execution time: 0.0058
DEBUG - 2016-10-24 19:59:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:53 --> Total execution time: 0.0026
DEBUG - 2016-10-24 19:59:53 --> Total execution time: 0.0039
DEBUG - 2016-10-24 19:59:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 19:59:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 19:59:58 --> Total execution time: 0.0026
DEBUG - 2016-10-24 19:59:58 --> Total execution time: 0.0034
DEBUG - 2016-10-24 20:00:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:03 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:00:03 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:00:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:08 --> Total execution time: 0.0022
DEBUG - 2016-10-24 20:00:08 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:00:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:13 --> Total execution time: 0.0020
DEBUG - 2016-10-24 20:00:13 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:00:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:18 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:00:18 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:00:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:23 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:00:23 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:00:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:28 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:00:28 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:00:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:33 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:00:33 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:00:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:38 --> Total execution time: 0.0021
DEBUG - 2016-10-24 20:00:38 --> Total execution time: 0.0066
DEBUG - 2016-10-24 20:00:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:43 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:00:43 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:00:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:48 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:00:48 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:00:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:53 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:00:53 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:00:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:00:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:00:58 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:00:58 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:01:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:03 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:01:03 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:01:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:08 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:01:08 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:01:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:13 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:01:13 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:01:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:18 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:01:18 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:01:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:23 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:01:23 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:01:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:28 --> Total execution time: 0.0021
DEBUG - 2016-10-24 20:01:28 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:01:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:33 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:01:33 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:01:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:38 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:01:38 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:01:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:43 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:01:43 --> Total execution time: 0.0034
DEBUG - 2016-10-24 20:01:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:48 --> Total execution time: 0.0022
DEBUG - 2016-10-24 20:01:48 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:01:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:53 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:01:53 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:01:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:01:58 --> Total execution time: 0.0022
DEBUG - 2016-10-24 20:01:58 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:02:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:03 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:02:03 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:02:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:08 --> Total execution time: 0.0021
DEBUG - 2016-10-24 20:02:08 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:02:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:13 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:02:13 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:02:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:18 --> Total execution time: 0.0034
DEBUG - 2016-10-24 20:02:18 --> Total execution time: 0.0056
DEBUG - 2016-10-24 20:02:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:23 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:02:23 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:02:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:28 --> Total execution time: 0.0022
DEBUG - 2016-10-24 20:02:28 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:02:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:33 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:02:33 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:02:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:38 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:02:38 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:02:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:43 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:02:43 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:02:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:48 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:02:48 --> Total execution time: 0.0034
DEBUG - 2016-10-24 20:02:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:53 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:02:53 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:02:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:02:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:02:58 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:02:58 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:03:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:03 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:03:03 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:03:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:08 --> Total execution time: 0.0021
DEBUG - 2016-10-24 20:03:08 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:03:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:13 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:03:13 --> Total execution time: 0.0034
DEBUG - 2016-10-24 20:03:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:18 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:03:18 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:03:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:23 --> Total execution time: 0.0058
DEBUG - 2016-10-24 20:03:23 --> Total execution time: 0.0082
DEBUG - 2016-10-24 20:03:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:28 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:03:28 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:03:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:33 --> Total execution time: 0.0021
DEBUG - 2016-10-24 20:03:33 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:03:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:38 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:03:38 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:03:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:43 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:03:43 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:03:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:48 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:03:48 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:03:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:53 --> Total execution time: 0.0022
DEBUG - 2016-10-24 20:03:53 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:03:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:03:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:03:58 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:03:58 --> Total execution time: 0.0049
DEBUG - 2016-10-24 20:04:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:03 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:04:03 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:04:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:08 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:04:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:08 --> Total execution time: 0.0034
DEBUG - 2016-10-24 20:04:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:13 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:04:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:13 --> Total execution time: 0.0020
DEBUG - 2016-10-24 20:04:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:18 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:04:18 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:04:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:23 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:04:23 --> Total execution time: 0.0056
DEBUG - 2016-10-24 20:04:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:28 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:04:28 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:04:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:33 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:04:33 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:04:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:38 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:04:38 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:04:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:43 --> Total execution time: 0.0022
DEBUG - 2016-10-24 20:04:43 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:04:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:48 --> Total execution time: 0.0020
DEBUG - 2016-10-24 20:04:48 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:04:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:53 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:04:53 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:04:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:04:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:04:58 --> Total execution time: 0.0021
DEBUG - 2016-10-24 20:04:58 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:05:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:03 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:05:03 --> Total execution time: 0.0068
DEBUG - 2016-10-24 20:05:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:08 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:05:08 --> Total execution time: 0.0022
DEBUG - 2016-10-24 20:05:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:13 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:05:13 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:05:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:18 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:05:18 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:05:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:23 --> Total execution time: 0.0021
DEBUG - 2016-10-24 20:05:23 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:05:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:28 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:05:28 --> Total execution time: 0.0048
DEBUG - 2016-10-24 20:05:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:33 --> Total execution time: 0.0022
DEBUG - 2016-10-24 20:05:33 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:05:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:38 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:05:38 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:05:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:43 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:05:43 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:05:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:48 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:05:48 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:05:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:53 --> Total execution time: 0.0049
DEBUG - 2016-10-24 20:05:53 --> Total execution time: 0.0071
DEBUG - 2016-10-24 20:05:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:05:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:05:58 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:05:58 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:06:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:03 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:06:03 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:06:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:08 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:06:08 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:06:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:13 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:06:13 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:06:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:18 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:06:18 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:06:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:23 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:06:23 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:06:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:28 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:06:28 --> Total execution time: 0.0034
DEBUG - 2016-10-24 20:06:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:33 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:06:33 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:06:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:38 --> Total execution time: 0.0022
DEBUG - 2016-10-24 20:06:38 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:06:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:43 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:06:43 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:06:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:48 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:06:48 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:06:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:53 --> Total execution time: 0.0022
DEBUG - 2016-10-24 20:06:53 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:06:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:06:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:06:58 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:06:58 --> Total execution time: 0.0055
DEBUG - 2016-10-24 20:07:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:03 --> Total execution time: 0.0022
DEBUG - 2016-10-24 20:07:03 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:07:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:08 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:07:08 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:07:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:13 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:07:13 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:07:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:18 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:07:18 --> Total execution time: 0.0034
DEBUG - 2016-10-24 20:07:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:23 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:07:23 --> Total execution time: 0.0034
DEBUG - 2016-10-24 20:07:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:28 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:07:28 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:07:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:33 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:07:33 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:07:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:38 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:07:38 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:07:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:43 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:07:43 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:07:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:48 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:07:48 --> Total execution time: 0.0052
DEBUG - 2016-10-24 20:07:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:53 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:07:53 --> Total execution time: 0.0022
DEBUG - 2016-10-24 20:07:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:07:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:07:58 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:07:58 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:08:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:03 --> Total execution time: 0.0022
DEBUG - 2016-10-24 20:08:03 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:08:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:08 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:08:08 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:08:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:13 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:08:13 --> Total execution time: 0.0061
DEBUG - 2016-10-24 20:08:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:18 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:08:18 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:08:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:23 --> Total execution time: 0.0022
DEBUG - 2016-10-24 20:08:23 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:08:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:28 --> Total execution time: 0.0022
DEBUG - 2016-10-24 20:08:28 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:08:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:33 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:08:33 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:08:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:38 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:08:38 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:08:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:43 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:08:43 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:08:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:48 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:08:48 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:08:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:53 --> Total execution time: 0.0022
DEBUG - 2016-10-24 20:08:53 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:08:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:08:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:08:58 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:08:58 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:09:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:03 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:09:03 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:09:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:08 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:09:08 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:09:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:13 --> Total execution time: 0.0034
DEBUG - 2016-10-24 20:09:13 --> Total execution time: 0.0049
DEBUG - 2016-10-24 20:09:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:18 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:09:18 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:09:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:23 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:09:23 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:09:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:28 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:09:28 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:09:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:33 --> Total execution time: 0.0022
DEBUG - 2016-10-24 20:09:33 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:09:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:38 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:09:38 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:09:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:43 --> Total execution time: 0.0046
DEBUG - 2016-10-24 20:09:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:43 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:09:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:48 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:09:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:48 --> Total execution time: 0.0047
DEBUG - 2016-10-24 20:09:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:53 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:09:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:53 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:09:56 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:56 --> Total execution time: 0.0051
DEBUG - 2016-10-24 20:09:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:58 --> Total execution time: 0.0046
DEBUG - 2016-10-24 20:09:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:58 --> 
DEBUG - 2016-10-24 20:09:58 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-24 20:09:58 --> 1
DEBUG - 2016-10-24 20:09:58 --> Total execution time: 0.0048
DEBUG - 2016-10-24 20:09:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:09:58 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-24 20:09:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:09:58 --> 404 Page Not Found: Static/images
DEBUG - 2016-10-24 20:09:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:09:58 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:09:58 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:09:59 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:09:59 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-24 20:09:59 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-24 20:09:59 --> Total execution time: 0.0056
DEBUG - 2016-10-24 20:09:59 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:09:59 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:10:00 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-24 20:10:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:10:00 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-24 20:10:00 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:10:00 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-24 20:10:00 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:10:00 --> 404 Page Not Found: P/15
DEBUG - 2016-10-24 20:10:00 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:00 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:10:00 --> 404 Page Not Found: P/15
ERROR - 2016-10-24 20:10:00 --> 404 Page Not Found: P/15
DEBUG - 2016-10-24 20:10:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:03 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:10:03 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:10:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:08 --> Total execution time: 0.0022
DEBUG - 2016-10-24 20:10:08 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:10:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:13 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:10:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:13 --> Total execution time: 0.0022
DEBUG - 2016-10-24 20:10:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:18 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:10:18 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:10:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:23 --> Total execution time: 0.0022
DEBUG - 2016-10-24 20:10:23 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:10:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:28 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:10:28 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:10:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:33 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:10:33 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:10:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:38 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:10:38 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:10:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:43 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:10:43 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:10:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:48 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:10:48 --> Total execution time: 0.0034
DEBUG - 2016-10-24 20:10:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:53 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:10:53 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:10:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:10:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:10:58 --> Total execution time: 0.0022
DEBUG - 2016-10-24 20:10:58 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:11:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:03 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:11:03 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:11:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:08 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:11:08 --> Total execution time: 0.0034
DEBUG - 2016-10-24 20:11:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:13 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:11:13 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:11:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:18 --> Total execution time: 0.0020
DEBUG - 2016-10-24 20:11:18 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:11:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:23 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:11:23 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:11:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:28 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:11:28 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:11:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:33 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:11:33 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:11:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:38 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:11:38 --> Total execution time: 0.0022
DEBUG - 2016-10-24 20:11:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:43 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:11:43 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:11:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:48 --> Total execution time: 0.0048
DEBUG - 2016-10-24 20:11:48 --> Total execution time: 0.0052
DEBUG - 2016-10-24 20:11:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:53 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:11:53 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:11:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:11:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:11:58 --> Total execution time: 0.0065
DEBUG - 2016-10-24 20:11:58 --> Total execution time: 0.0074
DEBUG - 2016-10-24 20:12:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:03 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:12:03 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:12:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:08 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:12:08 --> Total execution time: 0.0052
DEBUG - 2016-10-24 20:12:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:13 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:12:13 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:12:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:18 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:12:18 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:12:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:23 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:12:23 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:12:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:28 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:12:28 --> Total execution time: 0.0034
DEBUG - 2016-10-24 20:12:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:33 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:12:33 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:12:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:38 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:12:38 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:12:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:43 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:12:43 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:12:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:48 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:12:48 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:12:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:53 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:12:53 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:12:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:12:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:12:58 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:12:58 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:13:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:03 --> Total execution time: 0.0046
DEBUG - 2016-10-24 20:13:03 --> Total execution time: 0.0060
DEBUG - 2016-10-24 20:13:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:08 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:13:08 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:13:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:08 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:13:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:13 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:13:13 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:13:16 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:16 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:13:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:18 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:13:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:18 --> Total execution time: 0.0021
DEBUG - 2016-10-24 20:13:18 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:13:21 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:21 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:13:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:23 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:13:23 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:13:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:27 --> Total execution time: 0.1100
DEBUG - 2016-10-24 20:13:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:27 --> Total execution time: 0.0053
DEBUG - 2016-10-24 20:13:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:28 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:13:28 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:13:30 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:30 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:13:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:33 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:13:33 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:13:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:35 --> Total execution time: 0.0070
DEBUG - 2016-10-24 20:13:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:38 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:13:38 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:13:39 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:39 --> Total execution time: 0.0048
DEBUG - 2016-10-24 20:13:41 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:41 --> Total execution time: 0.0051
DEBUG - 2016-10-24 20:13:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:43 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:13:43 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:13:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:13:43 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-24 20:13:43 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-24 20:13:43 --> Total execution time: 0.0062
DEBUG - 2016-10-24 20:13:44 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:44 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:13:44 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-24 20:13:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:48 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:13:48 --> Total execution time: 0.0057
DEBUG - 2016-10-24 20:13:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:53 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:13:53 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:13:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:13:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:13:58 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:13:58 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:14:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:03 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:14:03 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:14:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:08 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:14:08 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:14:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:13 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:14:13 --> Total execution time: 0.0049
DEBUG - 2016-10-24 20:14:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:18 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:14:18 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:14:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:23 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:14:23 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:14:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:28 --> Total execution time: 0.0034
DEBUG - 2016-10-24 20:14:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:28 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:14:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:33 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:14:33 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:14:36 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:36 --> No URI present. Default controller set.
DEBUG - 2016-10-24 20:14:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:36 --> Total execution time: 0.0486
DEBUG - 2016-10-24 20:14:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:38 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:14:38 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:14:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:43 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:14:43 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:14:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:48 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:14:48 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:14:50 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:50 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:14:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:53 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:14:53 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:14:55 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:55 --> Total execution time: 0.1061
DEBUG - 2016-10-24 20:14:55 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:55 --> Total execution time: 0.0055
DEBUG - 2016-10-24 20:14:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:14:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:14:58 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:14:58 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:15:00 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:00 --> Total execution time: 0.0052
DEBUG - 2016-10-24 20:15:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:03 --> ORDER ID : 6
ERROR - 2016-10-24 20:15:03 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-24 20:15:03 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-24 20:15:03 --> Total execution time: 0.0123
DEBUG - 2016-10-24 20:15:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:15:03 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-24 20:15:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:03 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:15:03 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:15:06 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:06 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:15:06 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-24 20:15:06 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-24 20:15:06 --> Total execution time: 0.0092
DEBUG - 2016-10-24 20:15:06 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:06 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:06 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:15:06 --> 404 Page Not Found: Static/css
ERROR - 2016-10-24 20:15:06 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-24 20:15:06 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:06 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:15:06 --> 404 Page Not Found: P/15
DEBUG - 2016-10-24 20:15:06 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:06 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:15:06 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-24 20:15:06 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:06 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:06 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:15:06 --> 404 Page Not Found: P/15
DEBUG - 2016-10-24 20:15:06 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:15:06 --> 404 Page Not Found: P/15
DEBUG - 2016-10-24 20:15:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:08 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:15:08 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:15:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:10 --> ORDER ID : 6
ERROR - 2016-10-24 20:15:10 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-24 20:15:10 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-24 20:15:10 --> Total execution time: 0.0057
DEBUG - 2016-10-24 20:15:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:10 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:15:10 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-24 20:15:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:13 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:15:13 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:15:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:15:18 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-24 20:15:18 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-24 20:15:18 --> Total execution time: 0.0068
DEBUG - 2016-10-24 20:15:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:15:18 --> 404 Page Not Found: Static/css
ERROR - 2016-10-24 20:15:18 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-24 20:15:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:15:18 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-24 20:15:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:15:18 --> 404 Page Not Found: P/15
DEBUG - 2016-10-24 20:15:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:15:18 --> 404 Page Not Found: P/15
ERROR - 2016-10-24 20:15:18 --> 404 Page Not Found: P/15
DEBUG - 2016-10-24 20:15:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:18 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:15:18 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:15:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:23 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:15:23 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:15:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:28 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:15:28 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:15:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:33 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:15:33 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:15:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:38 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:15:38 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:15:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:43 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:15:43 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:15:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:48 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:15:48 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:15:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:53 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:15:53 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:15:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:15:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:15:58 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:15:58 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:16:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:03 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:16:03 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:16:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:08 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:16:08 --> Total execution time: 0.0048
DEBUG - 2016-10-24 20:16:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:13 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:16:13 --> Total execution time: 0.0046
DEBUG - 2016-10-24 20:16:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:18 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:16:18 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:16:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:23 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:16:23 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:16:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:28 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:16:28 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:16:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:33 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:16:33 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:16:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:38 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:16:38 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:16:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:43 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:16:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:43 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:16:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:48 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:16:48 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:16:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:53 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:16:53 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:16:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:16:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:16:58 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:16:58 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:17:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:03 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:17:03 --> Total execution time: 0.0046
DEBUG - 2016-10-24 20:17:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:08 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:17:08 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:17:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:13 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:17:13 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:17:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:18 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:17:18 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:17:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:23 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:17:23 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:17:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:28 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:17:28 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:17:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:33 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:17:33 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:17:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:38 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:17:38 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:17:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:43 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:17:43 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:17:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:48 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:17:48 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:17:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:53 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:17:53 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:17:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:17:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:17:58 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:17:58 --> Total execution time: 0.0050
DEBUG - 2016-10-24 20:18:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:03 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:18:03 --> Total execution time: 0.0059
DEBUG - 2016-10-24 20:18:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:08 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:18:08 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:18:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:13 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:18:13 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:18:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:18 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:18:18 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:18:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:23 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:18:23 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:18:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:28 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:18:28 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:18:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:33 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:18:33 --> Total execution time: 0.0049
DEBUG - 2016-10-24 20:18:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:38 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:18:38 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:18:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:43 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:18:43 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:18:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:48 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:18:48 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:18:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:53 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:18:53 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:18:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:18:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:18:58 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:18:58 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:19:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:03 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:19:03 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:19:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:08 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:19:08 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:19:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:13 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:19:13 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:19:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:18 --> Total execution time: 0.0079
DEBUG - 2016-10-24 20:19:18 --> Total execution time: 0.0109
DEBUG - 2016-10-24 20:19:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:23 --> Total execution time: 0.0051
DEBUG - 2016-10-24 20:19:23 --> Total execution time: 0.0068
DEBUG - 2016-10-24 20:19:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:28 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:19:28 --> Total execution time: 0.0061
DEBUG - 2016-10-24 20:19:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:33 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:19:33 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:19:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:38 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:19:38 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:19:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:43 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:19:43 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:19:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:48 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:19:48 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:19:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:53 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:19:53 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:19:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:19:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:19:58 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:19:58 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:20:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:03 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:20:03 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:20:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:08 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:20:08 --> Total execution time: 0.0049
DEBUG - 2016-10-24 20:20:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:13 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:20:13 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:20:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:18 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:20:18 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:20:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:23 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:20:23 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:20:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:28 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:20:28 --> Total execution time: 0.0047
DEBUG - 2016-10-24 20:20:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:33 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:20:33 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:20:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:38 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:20:38 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:20:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:43 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:20:43 --> Total execution time: 0.0059
DEBUG - 2016-10-24 20:20:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:48 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:20:48 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:20:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:53 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:20:53 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:20:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:20:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:20:58 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:20:58 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:21:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:03 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:21:03 --> Total execution time: 0.0046
DEBUG - 2016-10-24 20:21:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:08 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:21:08 --> Total execution time: 0.0065
DEBUG - 2016-10-24 20:21:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:13 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:21:13 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:21:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:18 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:21:18 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:21:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:23 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:21:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:23 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:21:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:28 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:21:28 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:21:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:33 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:21:33 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:21:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:38 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:21:38 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:21:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:43 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:21:43 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:21:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:48 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:21:48 --> Total execution time: 0.0048
DEBUG - 2016-10-24 20:21:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:53 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:21:53 --> Total execution time: 0.0052
DEBUG - 2016-10-24 20:21:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:21:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:21:58 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:21:58 --> Total execution time: 0.0051
DEBUG - 2016-10-24 20:22:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:03 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:22:03 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:22:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:08 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:22:08 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:22:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:13 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:22:13 --> Total execution time: 0.0046
DEBUG - 2016-10-24 20:22:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:18 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:22:18 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:22:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:23 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:22:23 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:22:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:28 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:22:28 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:22:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:33 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:22:33 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:22:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:38 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:22:38 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:22:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:43 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:22:43 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:22:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:48 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:22:48 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:22:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:53 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:22:53 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:22:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:22:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:22:58 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:22:58 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:23:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:03 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:23:03 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:23:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:08 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:23:08 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:23:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:13 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:23:13 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:23:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:18 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:23:18 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:23:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:23 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:23:23 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:23:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:28 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:23:28 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:23:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:33 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:23:33 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:23:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:38 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:23:38 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:23:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:43 --> Total execution time: 0.0034
DEBUG - 2016-10-24 20:23:43 --> Total execution time: 0.0057
DEBUG - 2016-10-24 20:23:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:48 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:23:48 --> Total execution time: 0.0054
DEBUG - 2016-10-24 20:23:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:53 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:23:53 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:23:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:23:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:23:58 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:23:58 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:24:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:03 --> Total execution time: 0.0046
DEBUG - 2016-10-24 20:24:03 --> Total execution time: 0.0063
DEBUG - 2016-10-24 20:24:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:08 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:24:08 --> Total execution time: 0.0049
DEBUG - 2016-10-24 20:24:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:13 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:24:13 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:24:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:18 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:24:18 --> Total execution time: 0.0034
DEBUG - 2016-10-24 20:24:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:23 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:24:23 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:24:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:28 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:24:28 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:24:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:33 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:24:33 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:24:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:38 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:24:38 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:24:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:43 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:24:43 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:24:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:48 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:24:48 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:24:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:53 --> Total execution time: 0.0057
DEBUG - 2016-10-24 20:24:53 --> Total execution time: 0.0084
DEBUG - 2016-10-24 20:24:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:24:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:24:58 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:24:58 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:25:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:03 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:25:03 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:25:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:08 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:25:08 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:25:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:13 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:25:13 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:25:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:18 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:25:18 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:25:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:23 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:25:23 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:25:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:28 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:25:28 --> Total execution time: 0.0058
DEBUG - 2016-10-24 20:25:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:33 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:25:33 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:25:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:38 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:25:38 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:25:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:43 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:25:43 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:25:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:48 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:25:48 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:25:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:53 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:25:53 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:25:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:25:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:25:58 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:25:58 --> Total execution time: 0.0053
DEBUG - 2016-10-24 20:26:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:03 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:26:03 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:26:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:08 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:26:08 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:26:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:13 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:26:13 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:26:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:18 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:26:18 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:26:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:23 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:26:23 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:26:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:28 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:26:28 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:26:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:33 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:26:33 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:26:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:38 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:26:38 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:26:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:43 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:26:43 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:26:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:48 --> Total execution time: 0.0062
DEBUG - 2016-10-24 20:26:48 --> Total execution time: 0.0075
DEBUG - 2016-10-24 20:26:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:53 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:26:53 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:26:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:26:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:26:58 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:26:58 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:27:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:03 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:27:03 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:27:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:08 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:27:08 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:27:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:13 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:27:13 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:27:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:18 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:27:18 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:27:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:23 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:27:23 --> Total execution time: 0.0052
DEBUG - 2016-10-24 20:27:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:28 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:27:28 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:27:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:33 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:27:33 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:27:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:38 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:27:38 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:27:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:43 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:27:43 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:27:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:48 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:27:48 --> Total execution time: 0.0046
DEBUG - 2016-10-24 20:27:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:53 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:27:53 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:27:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:27:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:27:58 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:27:58 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:28:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:03 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:28:03 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:28:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:08 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:28:08 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:28:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:13 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:28:13 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:28:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:18 --> Total execution time: 0.0034
DEBUG - 2016-10-24 20:28:18 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:28:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:23 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:28:23 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:28:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:28 --> Total execution time: 0.0068
DEBUG - 2016-10-24 20:28:28 --> Total execution time: 0.0110
DEBUG - 2016-10-24 20:28:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:33 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:28:33 --> Total execution time: 0.0046
DEBUG - 2016-10-24 20:28:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:38 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:28:38 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:28:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:43 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:28:43 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:28:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:48 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:28:48 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:28:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:53 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:28:53 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:28:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:28:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:28:58 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:28:58 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:29:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:03 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:29:03 --> Total execution time: 0.0047
DEBUG - 2016-10-24 20:29:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:08 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:29:08 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:29:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:13 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:29:13 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:29:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:18 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:29:18 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:29:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:23 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:29:23 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:29:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:28 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:29:28 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:29:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:33 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:29:33 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:29:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:37 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:29:37 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:29:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:42 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:29:42 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:29:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:47 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:29:47 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:29:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:52 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:29:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:52 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:29:57 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:57 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:29:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:29:57 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:29:57 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:30:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:02 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:30:02 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:30:07 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:07 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:07 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:30:07 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:30:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:12 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:30:12 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:30:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:17 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:30:17 --> Total execution time: 0.0049
DEBUG - 2016-10-24 20:30:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:22 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:30:22 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:30:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:27 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:30:27 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:30:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:32 --> Total execution time: 0.0046
DEBUG - 2016-10-24 20:30:32 --> Total execution time: 0.0066
DEBUG - 2016-10-24 20:30:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:37 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:30:37 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:30:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:42 --> Total execution time: 0.0052
DEBUG - 2016-10-24 20:30:42 --> Total execution time: 0.0064
DEBUG - 2016-10-24 20:30:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:47 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:30:47 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:30:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:52 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:30:52 --> Total execution time: 0.0066
DEBUG - 2016-10-24 20:30:57 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:57 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:30:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:30:57 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:30:57 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:31:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:02 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:31:02 --> Total execution time: 0.0048
DEBUG - 2016-10-24 20:31:07 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:07 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:07 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:31:07 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:31:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:12 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:31:12 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:31:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:17 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:31:17 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:31:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:22 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:31:22 --> Total execution time: 0.0049
DEBUG - 2016-10-24 20:31:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:27 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:31:27 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:31:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:32 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:31:32 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:31:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:37 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:31:37 --> Total execution time: 0.0049
DEBUG - 2016-10-24 20:31:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:42 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:31:42 --> Total execution time: 0.0046
DEBUG - 2016-10-24 20:31:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:47 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:31:47 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:31:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:52 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:31:52 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:31:57 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:57 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:31:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:31:57 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:31:57 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:32:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:02 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:32:02 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:32:07 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:07 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:07 --> Total execution time: 0.0069
DEBUG - 2016-10-24 20:32:07 --> Total execution time: 0.0093
DEBUG - 2016-10-24 20:32:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:12 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:32:12 --> Total execution time: 0.0049
DEBUG - 2016-10-24 20:32:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:17 --> Total execution time: 0.0058
DEBUG - 2016-10-24 20:32:17 --> Total execution time: 0.0077
DEBUG - 2016-10-24 20:32:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:22 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:32:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:22 --> Total execution time: 0.0054
DEBUG - 2016-10-24 20:32:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:27 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:32:27 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:32:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:32 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:32:32 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:32:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:37 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:32:37 --> Total execution time: 0.0054
DEBUG - 2016-10-24 20:32:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:42 --> Total execution time: 0.0047
DEBUG - 2016-10-24 20:32:42 --> Total execution time: 0.0070
DEBUG - 2016-10-24 20:32:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:47 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:32:47 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:32:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:52 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:32:52 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:32:57 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:57 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:32:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:32:57 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:32:57 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:33:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:02 --> Total execution time: 0.0058
DEBUG - 2016-10-24 20:33:02 --> Total execution time: 0.0126
DEBUG - 2016-10-24 20:33:07 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:07 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:07 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:33:07 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:33:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:12 --> Total execution time: 0.0076
DEBUG - 2016-10-24 20:33:12 --> Total execution time: 0.0100
DEBUG - 2016-10-24 20:33:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:17 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:33:17 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:33:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:22 --> Total execution time: 0.0069
DEBUG - 2016-10-24 20:33:22 --> Total execution time: 0.0087
DEBUG - 2016-10-24 20:33:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:27 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:33:27 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:33:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:32 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:33:32 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:33:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:37 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:33:37 --> Total execution time: 0.0047
DEBUG - 2016-10-24 20:33:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:42 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:33:42 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:33:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:47 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:33:47 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:33:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:52 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:33:52 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:33:57 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:57 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:33:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:33:57 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:33:57 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:34:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:02 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:34:02 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:34:07 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:07 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:07 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:34:07 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:34:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:12 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:34:12 --> Total execution time: 0.0049
DEBUG - 2016-10-24 20:34:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:17 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:34:17 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:34:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:22 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:34:22 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:34:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:27 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:34:27 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:34:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:32 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:34:32 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:34:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:37 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:34:37 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:34:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:42 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:34:42 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:34:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:47 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:34:47 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:34:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:52 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:34:52 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:34:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:34:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:34:58 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:34:58 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:35:01 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:35:01 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-24 20:35:01 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-24 20:35:01 --> Total execution time: 0.0058
DEBUG - 2016-10-24 20:35:01 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:35:01 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-24 20:35:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:03 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:35:03 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:35:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:08 --> Total execution time: 0.0023
DEBUG - 2016-10-24 20:35:08 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:35:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:13 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:35:13 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:35:16 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:16 --> No URI present. Default controller set.
DEBUG - 2016-10-24 20:35:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:16 --> Total execution time: 0.0516
DEBUG - 2016-10-24 20:35:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:18 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:35:18 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:35:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:23 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:35:23 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:35:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:28 --> Total execution time: 0.0079
DEBUG - 2016-10-24 20:35:28 --> Total execution time: 0.0105
DEBUG - 2016-10-24 20:35:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:33 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:35:33 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:35:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:35 --> Total execution time: 0.1077
DEBUG - 2016-10-24 20:35:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:35 --> Total execution time: 0.0065
DEBUG - 2016-10-24 20:35:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:38 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:35:38 --> Total execution time: 0.0046
DEBUG - 2016-10-24 20:35:39 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:39 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:35:41 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:41 --> Total execution time: 0.0049
DEBUG - 2016-10-24 20:35:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:43 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:35:43 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:35:44 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:44 --> Total execution time: 0.0046
DEBUG - 2016-10-24 20:35:46 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:46 --> ORDER ID : 6
ERROR - 2016-10-24 20:35:46 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-24 20:35:46 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-24 20:35:46 --> Total execution time: 0.0100
DEBUG - 2016-10-24 20:35:46 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:35:46 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-24 20:35:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:48 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:35:48 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:35:51 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:51 --> Total execution time: 0.2756
DEBUG - 2016-10-24 20:35:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:53 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:35:53 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:35:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:35:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:35:58 --> Total execution time: 0.0057
DEBUG - 2016-10-24 20:35:58 --> Total execution time: 0.0082
DEBUG - 2016-10-24 20:36:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:03 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:36:03 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:36:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:08 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:36:08 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:36:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:13 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:36:13 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:36:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:18 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:36:18 --> Total execution time: 0.0050
DEBUG - 2016-10-24 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:23 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:36:23 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:36:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:28 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:36:28 --> Total execution time: 0.0046
DEBUG - 2016-10-24 20:36:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:33 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:36:33 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:36:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:38 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:36:38 --> Total execution time: 0.0051
DEBUG - 2016-10-24 20:36:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:43 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:36:43 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:36:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:48 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:36:48 --> Total execution time: 0.0060
DEBUG - 2016-10-24 20:36:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:53 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:36:53 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:36:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:36:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:36:58 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:36:58 --> Total execution time: 0.0047
DEBUG - 2016-10-24 20:37:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:03 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:37:03 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:37:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:08 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:37:08 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:37:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:13 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:37:13 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:37:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:18 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:37:18 --> Total execution time: 0.0057
DEBUG - 2016-10-24 20:37:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:23 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:37:23 --> Total execution time: 0.0046
DEBUG - 2016-10-24 20:37:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:28 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:37:28 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:37:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:33 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:37:33 --> Total execution time: 0.0049
DEBUG - 2016-10-24 20:37:36 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:36 --> Total execution time: 0.0532
DEBUG - 2016-10-24 20:37:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:38 --> Total execution time: 0.0093
DEBUG - 2016-10-24 20:37:38 --> Total execution time: 0.0117
DEBUG - 2016-10-24 20:37:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:43 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:37:43 --> Total execution time: 0.0060
DEBUG - 2016-10-24 20:37:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:48 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:37:48 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:37:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:53 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:37:53 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:37:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:37:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:37:58 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:37:58 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:38:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:03 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:38:03 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:38:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:08 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:38:08 --> Total execution time: 0.0049
DEBUG - 2016-10-24 20:38:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:13 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:38:13 --> Total execution time: 0.0065
DEBUG - 2016-10-24 20:38:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:18 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:38:18 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:38:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:23 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:38:23 --> Total execution time: 0.0055
DEBUG - 2016-10-24 20:38:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:28 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:38:28 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:38:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:33 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:38:33 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:38:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:38 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:38:38 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:38:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:43 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:38:43 --> Total execution time: 0.0056
DEBUG - 2016-10-24 20:38:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:48 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:38:48 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:38:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:53 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:38:53 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:38:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:38:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:38:58 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:38:58 --> Total execution time: 0.0046
DEBUG - 2016-10-24 20:39:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:03 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:39:03 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:39:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:08 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:39:08 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:39:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:13 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:39:13 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:39:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:18 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:39:18 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:39:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:23 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:39:23 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:39:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:28 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:39:28 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:39:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:33 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:39:33 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:39:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:38 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:39:38 --> Total execution time: 0.0066
DEBUG - 2016-10-24 20:39:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:43 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:39:43 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:39:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:48 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:39:48 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:39:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:53 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:39:53 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:39:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:39:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:39:58 --> Total execution time: 0.0055
DEBUG - 2016-10-24 20:39:58 --> Total execution time: 0.0077
DEBUG - 2016-10-24 20:40:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:03 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:40:03 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:40:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:08 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:40:08 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:40:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:13 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:40:13 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:40:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:18 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:40:18 --> Total execution time: 0.0063
DEBUG - 2016-10-24 20:40:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:23 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:40:23 --> Total execution time: 0.0051
DEBUG - 2016-10-24 20:40:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:28 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:40:28 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:40:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:33 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:40:33 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:40:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:38 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:40:38 --> Total execution time: 0.0056
DEBUG - 2016-10-24 20:40:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:43 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:40:43 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:40:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:48 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:40:48 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:40:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:53 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:40:53 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:40:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:40:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:40:58 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:40:58 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:41:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:03 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:41:03 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:41:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:08 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:41:08 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:41:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:13 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:41:13 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:41:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:18 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:41:18 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:41:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:23 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:41:23 --> Total execution time: 0.0059
DEBUG - 2016-10-24 20:41:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:28 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:41:28 --> Total execution time: 0.0048
DEBUG - 2016-10-24 20:41:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:33 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:41:33 --> Total execution time: 0.0049
DEBUG - 2016-10-24 20:41:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:38 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:41:38 --> Total execution time: 0.0069
DEBUG - 2016-10-24 20:41:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:43 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:41:43 --> Total execution time: 0.0059
DEBUG - 2016-10-24 20:41:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:48 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:41:48 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:41:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:53 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:41:53 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:41:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:41:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:41:58 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:41:58 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:42:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:03 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:42:03 --> Total execution time: 0.0046
DEBUG - 2016-10-24 20:42:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:08 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:42:08 --> Total execution time: 0.0062
DEBUG - 2016-10-24 20:42:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:13 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:42:13 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:42:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:18 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:42:18 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:42:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:23 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:42:23 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:42:24 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:24 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:42:24 --> Severity: Notice --> Undefined property: Invoice::$OrdersModel /var/www/zemose/public_html/system/core/Model.php 77
ERROR - 2016-10-24 20:42:24 --> Severity: Error --> Call to a member function getOrder() on null /var/www/zemose/public_html/application/models/InvoiceModel.php 49
DEBUG - 2016-10-24 20:42:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:28 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:42:28 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:42:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:33 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:42:33 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:42:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:38 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:42:38 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:42:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:43 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:42:43 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:42:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:48 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:42:48 --> Total execution time: 0.0054
DEBUG - 2016-10-24 20:42:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:42:53 --> 404 Page Not Found: 
ERROR - 2016-10-24 20:42:53 --> 404 URL SEGMENTS (UPTO 4) ---- Invoice(1)getInvoice(2)(3)(4)
DEBUG - 2016-10-24 20:42:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:53 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:42:53 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:42:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:42:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:42:58 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:42:58 --> Total execution time: 0.0034
DEBUG - 2016-10-24 20:43:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:03 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:43:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:03 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:43:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:08 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:43:08 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:43:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:12 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:43:12 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:43:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:18 --> Total execution time: 0.0062
DEBUG - 2016-10-24 20:43:18 --> Total execution time: 0.0084
DEBUG - 2016-10-24 20:43:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:23 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:43:23 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:43:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:28 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:43:28 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:43:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:33 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:43:33 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:43:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:38 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:43:38 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:43:41 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:43:41 --> 404 Page Not Found: 
ERROR - 2016-10-24 20:43:41 --> 404 URL SEGMENTS (UPTO 4) ---- Invoice(1)getInvoice(2)(3)(4)
DEBUG - 2016-10-24 20:43:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:43:43 --> 404 Page Not Found: 
ERROR - 2016-10-24 20:43:43 --> 404 URL SEGMENTS (UPTO 4) ---- Invoice(1)getInvoice(2)(3)(4)
DEBUG - 2016-10-24 20:43:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:43 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:43:43 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:43:46 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:46 --> Total execution time: 0.0161
DEBUG - 2016-10-24 20:43:46 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:46 --> Total execution time: 0.0145
DEBUG - 2016-10-24 20:43:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:48 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:43:48 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:43:51 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:51 --> Total execution time: 0.0152
DEBUG - 2016-10-24 20:43:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:53 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:43:53 --> Total execution time: 0.0046
DEBUG - 2016-10-24 20:43:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:43:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:43:58 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:43:58 --> Total execution time: 0.0047
DEBUG - 2016-10-24 20:44:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:03 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:44:03 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:44:07 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:07 --> Total execution time: 0.0146
DEBUG - 2016-10-24 20:44:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:08 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:44:08 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:44:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:13 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:44:13 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:44:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:18 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:44:18 --> Total execution time: 0.0048
DEBUG - 2016-10-24 20:44:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:23 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:44:23 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:44:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:28 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:44:28 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:44:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:33 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:44:33 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:44:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:38 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:44:38 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:44:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:43 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:44:43 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:44:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:48 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:44:48 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:44:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:53 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:44:53 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:44:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:44:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:44:58 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:44:58 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:45:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:03 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:45:03 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:45:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:08 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:45:08 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:45:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:13 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:45:13 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:45:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:18 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:45:18 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:45:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:23 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:45:23 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:45:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:28 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:45:28 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:45:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:33 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:45:33 --> Total execution time: 0.0047
DEBUG - 2016-10-24 20:45:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:38 --> Total execution time: 0.0034
DEBUG - 2016-10-24 20:45:38 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:45:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:43 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:45:43 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:45:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:48 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:45:48 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:45:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:53 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:45:53 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:45:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:45:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:45:58 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:45:58 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:46:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:03 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:46:03 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:46:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:08 --> Total execution time: 0.0054
DEBUG - 2016-10-24 20:46:08 --> Total execution time: 0.0068
DEBUG - 2016-10-24 20:46:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:13 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:46:13 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:46:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:18 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:46:18 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:46:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:23 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:46:23 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:46:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:28 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:46:28 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:46:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:33 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:46:33 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:46:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:38 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:46:38 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:46:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:43 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:46:43 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:46:46 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:46 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:46 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:46:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:48 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:46:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:48 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:46:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:53 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:46:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:53 --> Total execution time: 0.0050
DEBUG - 2016-10-24 20:46:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:46:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:46:58 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:46:58 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:47:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:03 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:47:03 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:47:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:08 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:47:08 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:47:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:13 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:47:13 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:47:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:18 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:47:18 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:47:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:23 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:47:23 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:47:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:28 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:47:28 --> Total execution time: 0.0059
DEBUG - 2016-10-24 20:47:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:33 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:47:33 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:47:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:38 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:47:38 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:47:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:43 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:47:43 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:47:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:48 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:47:48 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:47:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:53 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:47:53 --> Total execution time: 0.0049
DEBUG - 2016-10-24 20:47:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:47:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:47:58 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:47:58 --> Total execution time: 0.0053
DEBUG - 2016-10-24 20:48:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:03 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:48:03 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:48:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:08 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:48:08 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:48:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:13 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:48:13 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:48:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:18 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:48:18 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:48:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:23 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:48:23 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:48:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:28 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:48:28 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:48:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 20:48:33 --> 404 Page Not Found: 
ERROR - 2016-10-24 20:48:33 --> 404 URL SEGMENTS (UPTO 4) ---- Invoice(1)getInvoice(2)(3)(4)
DEBUG - 2016-10-24 20:48:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:33 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:48:33 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:48:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:37 --> Total execution time: 0.0143
DEBUG - 2016-10-24 20:48:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:38 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:48:38 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:48:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:43 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:48:43 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:48:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:48 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:48:48 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:48:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:53 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:48:53 --> Total execution time: 0.0046
DEBUG - 2016-10-24 20:48:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:48:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:48:58 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:48:58 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:49:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:03 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:49:03 --> Total execution time: 0.0048
DEBUG - 2016-10-24 20:49:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:08 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:49:08 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:49:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:13 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:49:13 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:49:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:18 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:49:18 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:49:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:23 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:49:23 --> Total execution time: 0.0061
DEBUG - 2016-10-24 20:49:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:28 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:49:28 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:49:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:33 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:49:33 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:49:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:38 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:49:38 --> Total execution time: 0.0047
DEBUG - 2016-10-24 20:49:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:43 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:49:43 --> Total execution time: 0.0050
DEBUG - 2016-10-24 20:49:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:48 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:49:48 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:49:51 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:51 --> Total execution time: 0.0172
DEBUG - 2016-10-24 20:49:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:53 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:49:53 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:49:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:49:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:49:58 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:49:58 --> Total execution time: 0.0060
DEBUG - 2016-10-24 20:50:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:03 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:50:03 --> Total execution time: 0.0047
DEBUG - 2016-10-24 20:50:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:08 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:50:08 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:50:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:13 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:50:13 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:50:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:18 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:50:18 --> Total execution time: 0.0048
DEBUG - 2016-10-24 20:50:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:23 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:50:23 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:50:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:28 --> Total execution time: 0.0056
DEBUG - 2016-10-24 20:50:28 --> Total execution time: 0.0047
DEBUG - 2016-10-24 20:50:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:33 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:50:33 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:50:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:38 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:50:38 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:50:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:43 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:50:43 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:50:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:48 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:50:48 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:50:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:53 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:50:53 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:50:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:50:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:50:58 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:50:58 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:51:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:03 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:51:03 --> Total execution time: 0.0050
DEBUG - 2016-10-24 20:51:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:08 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:51:08 --> Total execution time: 0.0068
DEBUG - 2016-10-24 20:51:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:13 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:51:13 --> Total execution time: 0.0064
DEBUG - 2016-10-24 20:51:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:18 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:51:18 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:51:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:23 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:51:23 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:51:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:28 --> Total execution time: 0.0037
DEBUG - 2016-10-24 20:51:28 --> Total execution time: 0.0058
DEBUG - 2016-10-24 20:51:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:33 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:51:33 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:51:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:38 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:51:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:38 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:51:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:43 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:51:43 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:51:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:48 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:51:48 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:51:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:53 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:51:53 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:51:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:51:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:51:58 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:51:58 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:52:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:03 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:52:03 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:52:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:08 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:52:08 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:52:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:13 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:52:13 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:52:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:18 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:52:18 --> Total execution time: 0.0039
DEBUG - 2016-10-24 20:52:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:23 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:52:23 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:52:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:28 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:52:28 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:52:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:33 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:52:33 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:52:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:38 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:52:38 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:52:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:43 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:52:43 --> Total execution time: 0.0032
DEBUG - 2016-10-24 20:52:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:48 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:52:48 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:52:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:53 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:52:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:53 --> Total execution time: 0.0033
DEBUG - 2016-10-24 20:52:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:58 --> Total execution time: 0.0028
DEBUG - 2016-10-24 20:52:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:52:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:52:58 --> Total execution time: 0.0052
DEBUG - 2016-10-24 20:53:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:03 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:53:03 --> Total execution time: 0.0048
DEBUG - 2016-10-24 20:53:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:08 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:53:08 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:53:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:13 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:53:13 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:53:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:18 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:53:18 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:53:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:23 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:53:23 --> Total execution time: 0.0051
DEBUG - 2016-10-24 20:53:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:28 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:53:28 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:53:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:33 --> Total execution time: 0.0080
DEBUG - 2016-10-24 20:53:33 --> Total execution time: 0.0113
DEBUG - 2016-10-24 20:53:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:38 --> Total execution time: 0.0045
DEBUG - 2016-10-24 20:53:38 --> Total execution time: 0.0063
DEBUG - 2016-10-24 20:53:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:43 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:53:43 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:53:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:48 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:53:48 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:53:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:53 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:53:53 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:53:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:53:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:53:58 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:53:58 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:54:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:03 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:54:03 --> Total execution time: 0.0068
DEBUG - 2016-10-24 20:54:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:08 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:54:08 --> Total execution time: 0.0036
DEBUG - 2016-10-24 20:54:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:13 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:54:13 --> Total execution time: 0.0040
DEBUG - 2016-10-24 20:54:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:18 --> Total execution time: 0.0024
DEBUG - 2016-10-24 20:54:18 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:54:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:23 --> Total execution time: 0.0025
DEBUG - 2016-10-24 20:54:23 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:54:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:28 --> Total execution time: 0.0027
DEBUG - 2016-10-24 20:54:28 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:54:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:33 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:54:33 --> Total execution time: 0.0043
DEBUG - 2016-10-24 20:54:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:38 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:54:38 --> Total execution time: 0.0048
DEBUG - 2016-10-24 20:54:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:43 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:54:43 --> Total execution time: 0.0065
DEBUG - 2016-10-24 20:54:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:48 --> Total execution time: 0.0026
DEBUG - 2016-10-24 20:54:48 --> Total execution time: 0.0042
DEBUG - 2016-10-24 20:54:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:53 --> Total execution time: 0.0035
DEBUG - 2016-10-24 20:54:53 --> Total execution time: 0.0050
DEBUG - 2016-10-24 20:54:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:54:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:54:58 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:54:58 --> Total execution time: 0.0047
DEBUG - 2016-10-24 20:55:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:55:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:55:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:55:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:55:03 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:55:03 --> Total execution time: 0.0051
DEBUG - 2016-10-24 20:55:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:55:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:55:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:55:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:55:08 --> Total execution time: 0.0038
DEBUG - 2016-10-24 20:55:08 --> Total execution time: 0.0044
DEBUG - 2016-10-24 20:55:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:55:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:55:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:55:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:55:13 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:55:13 --> Total execution time: 0.0041
DEBUG - 2016-10-24 20:55:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:55:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:55:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:55:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:55:18 --> Total execution time: 0.0067
DEBUG - 2016-10-24 20:55:18 --> Total execution time: 0.0093
DEBUG - 2016-10-24 20:55:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:55:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:55:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:55:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:55:23 --> Total execution time: 0.0030
DEBUG - 2016-10-24 20:55:23 --> Total execution time: 0.0029
DEBUG - 2016-10-24 20:55:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:55:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 20:55:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:55:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 20:55:27 --> Total execution time: 0.0031
DEBUG - 2016-10-24 20:55:27 --> Total execution time: 0.0045
DEBUG - 2016-10-24 22:32:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 22:32:52 --> No URI present. Default controller set.
DEBUG - 2016-10-24 22:32:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 22:32:52 --> Total execution time: 0.6721
DEBUG - 2016-10-24 22:32:56 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 22:32:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 22:32:56 --> Total execution time: 0.1286
DEBUG - 2016-10-24 22:32:57 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 22:32:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 22:32:57 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-10-24 23:25:26 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:25:26 --> No URI present. Default controller set.
DEBUG - 2016-10-24 23:25:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:25:26 --> Total execution time: 0.0086
DEBUG - 2016-10-24 23:25:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:25:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:25:32 --> Total execution time: 0.0078
DEBUG - 2016-10-24 23:25:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:25:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:25:35 --> Total execution time: 0.0617
DEBUG - 2016-10-24 23:25:36 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:25:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:25:36 --> Total execution time: 0.1146
DEBUG - 2016-10-24 23:25:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:25:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:25:37 --> 
DEBUG - 2016-10-24 23:25:37 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid LIMIT 0, 6 ;
ERROR - 2016-10-24 23:25:37 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'PRD.rate' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid='7' AND HOUR > 0 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-24 23:25:40 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:25:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:25:40 --> Total execution time: 0.1036
DEBUG - 2016-10-24 23:25:49 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:25:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:25:49 --> Total execution time: 0.1149
DEBUG - 2016-10-24 23:28:34 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:28:34 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 23:28:34 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-24 23:28:34 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-24 23:28:34 --> Total execution time: 0.0564
DEBUG - 2016-10-24 23:28:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:28:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 23:28:35 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-24 23:31:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:31:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:31:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:31:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:31:37 --> Total execution time: 0.0784
DEBUG - 2016-10-24 23:33:04 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:33:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:33:04 --> Total execution time: 0.1869
DEBUG - 2016-10-24 23:33:04 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:33:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:33:04 --> Total execution time: 0.0052
DEBUG - 2016-10-24 23:33:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:33:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:33:08 --> Total execution time: 0.0585
DEBUG - 2016-10-24 23:33:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:33:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:33:10 --> ORDER ID : 6
ERROR - 2016-10-24 23:33:10 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-24 23:33:10 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-24 23:33:10 --> Total execution time: 0.0071
DEBUG - 2016-10-24 23:33:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:33:10 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 23:33:10 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-24 23:33:14 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:33:14 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 23:33:14 --> Severity: Notice --> Undefined property: Invoice::$FilterModel /var/www/zemose/public_html/system/core/Model.php 77
ERROR - 2016-10-24 23:33:14 --> Severity: Error --> Call to a member function productFilters() on null /var/www/zemose/public_html/application/models/ProductModel.php 563
DEBUG - 2016-10-24 23:36:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:36:08 --> No URI present. Default controller set.
DEBUG - 2016-10-24 23:36:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:36:08 --> Total execution time: 0.0058
DEBUG - 2016-10-24 23:36:24 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:36:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:36:24 --> Total execution time: 0.0061
DEBUG - 2016-10-24 23:36:40 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:36:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:36:40 --> ORDER ID : 6
ERROR - 2016-10-24 23:36:40 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-24 23:36:40 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-24 23:36:40 --> Total execution time: 0.0067
DEBUG - 2016-10-24 23:36:40 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:36:40 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 23:36:40 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-24 23:36:44 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:36:44 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-24 23:36:44 --> Severity: Notice --> Undefined property: Invoice::$FilterModel /var/www/zemose/public_html/system/core/Model.php 77
ERROR - 2016-10-24 23:36:44 --> Severity: Error --> Call to a member function productFilters() on null /var/www/zemose/public_html/application/models/ProductModel.php 563
DEBUG - 2016-10-24 23:39:01 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:39:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:39:01 --> Total execution time: 0.0891
DEBUG - 2016-10-24 23:48:44 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:48:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:48:44 --> Exception : 1M201| userId is not provided.
DEBUG - 2016-10-24 23:48:44 --> Total execution time: 0.1170
DEBUG - 2016-10-24 23:49:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:49:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:49:10 --> Total execution time: 0.1660
DEBUG - 2016-10-24 23:49:24 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:49:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:49:24 --> Total execution time: 0.0038
DEBUG - 2016-10-24 23:49:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:49:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:49:43 --> Total execution time: 0.0037
DEBUG - 2016-10-24 23:52:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:52:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:52:53 --> Total execution time: 0.0065
DEBUG - 2016-10-24 23:53:04 --> UTF-8 Support Enabled
DEBUG - 2016-10-24 23:53:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-24 23:53:04 --> Total execution time: 0.0063
