<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-09-23 00:37:09 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 00:37:09 --> No URI present. Default controller set.
DEBUG - 2016-09-23 00:37:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 00:37:09 --> Total execution time: 0.0641
DEBUG - 2016-09-23 00:37:13 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 00:37:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 00:37:13 --> Severity: 4096 --> Argument 3 passed to GuzzleHttp\Client::request() must be of the type array, string given, called in /var/www/zemose/public_html/application/libraries/plivo-php/vendor/guzzlehttp/guzzle/src/Client.php on line 87 and defined /var/www/zemose/public_html/application/libraries/plivo-php/vendor/guzzlehttp/guzzle/src/Client.php 126
ERROR - 2016-09-23 00:37:13 --> Severity: Warning --> Illegal string offset 'synchronous' /var/www/zemose/public_html/application/libraries/plivo-php/vendor/guzzlehttp/guzzle/src/Client.php 128
ERROR - 2016-09-23 00:37:13 --> Severity: 4096 --> Argument 3 passed to GuzzleHttp\Client::requestAsync() must be of the type array, string given, called in /var/www/zemose/public_html/application/libraries/plivo-php/vendor/guzzlehttp/guzzle/src/Client.php on line 129 and defined /var/www/zemose/public_html/application/libraries/plivo-php/vendor/guzzlehttp/guzzle/src/Client.php 107
ERROR - 2016-09-23 00:37:13 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, string given /var/www/zemose/public_html/application/libraries/plivo-php/vendor/guzzlehttp/guzzle/src/Client.php 223
ERROR - 2016-09-23 00:37:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/zemose/public_html/system/core/Exceptions.php:272) /var/www/zemose/public_html/system/core/Common.php 573
ERROR - 2016-09-23 00:37:13 --> Severity: Error --> Unsupported operand types /var/www/zemose/public_html/application/libraries/plivo-php/vendor/guzzlehttp/guzzle/src/Client.php 234
DEBUG - 2016-09-23 00:46:25 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 00:46:25 --> No URI present. Default controller set.
DEBUG - 2016-09-23 00:46:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 00:46:25 --> Total execution time: 0.0099
DEBUG - 2016-09-23 10:12:14 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:12:14 --> No URI present. Default controller set.
DEBUG - 2016-09-23 10:12:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:12:15 --> Total execution time: 1.4882
DEBUG - 2016-09-23 10:12:18 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:12:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:12:18 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-09-23 10:12:20 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:12:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:12:20 --> Total execution time: 0.1036
DEBUG - 2016-09-23 10:12:23 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:12:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:12:23 --> Total execution time: 0.2108
DEBUG - 2016-09-23 10:12:23 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:12:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:12:23 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
ERROR - 2016-09-23 10:12:23 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'PRD.rate' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid='4'  GROUP BY pid;
DEBUG - 2016-09-23 10:15:20 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:15:20 --> Total execution time: 0.0080
DEBUG - 2016-09-23 10:15:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:15:36 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
DEBUG - 2016-09-23 10:15:36 --> Total execution time: 0.0428
DEBUG - 2016-09-23 10:15:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:15:36 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 10:15:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:15:36 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:15:45 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:15:45 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-23 10:15:45 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-23 10:15:45 --> Total execution time: 0.1343
DEBUG - 2016-09-23 10:15:46 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:15:46 --> UTF-8 Support Enabled
ERROR - 2016-09-23 10:15:46 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:15:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:15:46 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:15:46 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:15:46 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:15:46 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:46 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:15:46 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 10:15:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:15:46 --> 404 Page Not Found: P/12
DEBUG - 2016-09-23 10:15:46 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:46 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:15:46 --> 404 Page Not Found: P/12
DEBUG - 2016-09-23 10:15:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:15:46 --> 404 Page Not Found: P/12
DEBUG - 2016-09-23 10:15:54 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:15:54 --> Total execution time: 0.0075
DEBUG - 2016-09-23 10:15:54 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:15:54 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
DEBUG - 2016-09-23 10:15:54 --> Total execution time: 0.0058
DEBUG - 2016-09-23 10:15:54 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:15:54 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 10:15:54 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:15:54 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:15:56 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:15:56 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-23 10:15:56 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-23 10:15:56 --> Total execution time: 0.0109
DEBUG - 2016-09-23 10:15:56 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:56 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:15:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:15:56 --> 404 Page Not Found: Static/css
ERROR - 2016-09-23 10:15:56 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:15:56 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:15:56 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:15:56 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:15:56 --> 404 Page Not Found: P/12
DEBUG - 2016-09-23 10:15:56 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:15:56 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 10:15:56 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:56 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:15:56 --> 404 Page Not Found: P/12
DEBUG - 2016-09-23 10:15:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:15:56 --> 404 Page Not Found: P/12
DEBUG - 2016-09-23 10:15:59 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:15:59 --> Total execution time: 0.0076
DEBUG - 2016-09-23 10:15:59 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:15:59 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
DEBUG - 2016-09-23 10:15:59 --> Total execution time: 0.0061
DEBUG - 2016-09-23 10:15:59 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:15:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:15:59 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 10:16:00 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:16:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:16:00 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-23 10:16:00 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-23 10:16:00 --> Total execution time: 0.0087
DEBUG - 2016-09-23 10:16:00 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:16:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:16:00 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:16:00 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:16:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:16:00 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:16:00 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:16:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:16:00 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:16:01 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:16:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:16:01 --> 404 Page Not Found: P/10
DEBUG - 2016-09-23 10:16:01 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:16:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:16:01 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 10:16:01 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:16:01 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:16:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:16:01 --> 404 Page Not Found: P/10
DEBUG - 2016-09-23 10:16:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:16:01 --> 404 Page Not Found: P/10
DEBUG - 2016-09-23 10:16:16 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:16:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:16:27 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:16:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:16:27 --> Total execution time: 0.0622
DEBUG - 2016-09-23 10:16:42 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:16:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:16:42 --> Total execution time: 0.0657
DEBUG - 2016-09-23 10:17:56 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:17:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:17:56 --> The upload destination folder does not appear to be writable.
DEBUG - 2016-09-23 10:17:57 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:17:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:17:57 --> Total execution time: 0.0064
DEBUG - 2016-09-23 10:18:06 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:18:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:18:06 --> Total execution time: 0.0452
DEBUG - 2016-09-23 10:18:12 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:18:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:18:12 --> Total execution time: 0.0548
DEBUG - 2016-09-23 10:18:15 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:18:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:18:15 --> Total execution time: 0.0072
DEBUG - 2016-09-23 10:19:00 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:19:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:19:00 --> The upload destination folder does not appear to be writable.
DEBUG - 2016-09-23 10:19:00 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:19:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:19:00 --> Total execution time: 0.0058
DEBUG - 2016-09-23 10:19:10 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:19:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:19:10 --> Total execution time: 0.0052
DEBUG - 2016-09-23 10:19:18 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:19:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:19:19 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:19:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:19:19 --> Total execution time: 0.0054
DEBUG - 2016-09-23 10:19:26 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:19:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:19:26 --> Total execution time: 0.0057
DEBUG - 2016-09-23 10:19:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:19:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:19:30 --> Total execution time: 0.0064
DEBUG - 2016-09-23 10:20:43 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:20:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:20:43 --> The upload destination folder does not appear to be writable.
DEBUG - 2016-09-23 10:20:43 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:20:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:20:43 --> Total execution time: 0.0054
DEBUG - 2016-09-23 10:20:49 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:20:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:20:49 --> Total execution time: 0.0085
DEBUG - 2016-09-23 10:20:54 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:20:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:20:54 --> Total execution time: 0.0323
DEBUG - 2016-09-23 10:23:10 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:23:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:23:10 --> Total execution time: 0.0055
DEBUG - 2016-09-23 10:23:27 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:23:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:23:28 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:23:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:23:28 --> Total execution time: 0.0607
DEBUG - 2016-09-23 10:23:38 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:23:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:23:38 --> Total execution time: 0.0793
DEBUG - 2016-09-23 10:23:38 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:23:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:23:38 --> Total execution time: 0.0079
DEBUG - 2016-09-23 10:23:42 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:23:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:23:42 --> Total execution time: 0.0381
DEBUG - 2016-09-23 10:23:59 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:23:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:23:59 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-23 10:23:59 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-23 10:23:59 --> Total execution time: 0.0097
DEBUG - 2016-09-23 10:23:59 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:23:59 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:23:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:23:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:23:59 --> 404 Page Not Found: Static/css
ERROR - 2016-09-23 10:23:59 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:23:59 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:23:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:23:59 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:23:59 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:23:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:23:59 --> 404 Page Not Found: P/12
DEBUG - 2016-09-23 10:23:59 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:23:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:23:59 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 10:23:59 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:23:59 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:23:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:23:59 --> 404 Page Not Found: P/12
DEBUG - 2016-09-23 10:23:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:23:59 --> 404 Page Not Found: P/12
DEBUG - 2016-09-23 10:24:05 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:24:05 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:24:05 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-23 10:24:05 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-23 10:24:05 --> Total execution time: 0.0093
DEBUG - 2016-09-23 10:24:05 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:24:05 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:24:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:24:05 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:24:05 --> 404 Page Not Found: Static/css
ERROR - 2016-09-23 10:24:05 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:24:05 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:24:05 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:24:05 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:24:05 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:24:05 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:24:05 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:24:05 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:24:05 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:24:05 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 10:24:05 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:24:05 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:24:05 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:24:05 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:24:05 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:24:05 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:24:11 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:24:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:24:11 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-23 10:24:11 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-23 10:24:11 --> Total execution time: 0.0104
DEBUG - 2016-09-23 10:24:11 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:24:11 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:24:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:24:11 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:24:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:24:11 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:24:11 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:24:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:24:11 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:24:11 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:24:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:24:11 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:24:11 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:24:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:24:11 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 10:24:11 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:24:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:24:11 --> UTF-8 Support Enabled
ERROR - 2016-09-23 10:24:11 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:24:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:24:11 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:26:25 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:26:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:26:25 --> null
ERROR - 2016-09-23 10:26:25 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-23 10:26:25 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-23 10:26:25 --> Total execution time: 0.0165
DEBUG - 2016-09-23 10:26:26 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:26:26 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:26:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:26:26 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:26:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:26:26 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:26:26 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:26:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:26:26 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:26:26 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:26:26 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:26:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:26:26 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:26:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:26:26 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 10:26:26 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:26:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:26:26 --> UTF-8 Support Enabled
ERROR - 2016-09-23 10:26:26 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:26:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:26:26 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:27:11 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:27:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:27:11 --> {"selected":{"inventory_id":"4","user_id":"12","latitude":"11.073182","longitude":"76.073997","location":"Malappuram, Kerala, India","zemose_type":"request","quantity":"50","deposit":"10","price_hour":"1","price_day":"0","price_month":"0","p_price_hour":"10","p_price_day":null,"p_price_month":null,"skilled_labour":"1","c_skilled_labour":"0","s_price_hour":"1","s_price_day":"0","s_price_month":"0","p_s_price_hour":"10","p_s_price_day":null,"p_s_price_month":null,"provide_delivery":"1","p_delivery":"10","product_id":"13","hits":"0","currency_id":"1","active":"1","shopname":"Mandu's Shop","shopaddress":"Mandody Shop, Fix Mall junction","city":"Cherthala, Kerala, India","lat":"9.683637","lon":"76.336540"},"all":[{"inventory_id":"4","user_id":"12","latitude":"11.073182","longitude":"76.073997","location":"Malappuram, Kerala, India","zemose_type":"request","quantity":"50","deposit":"10","price_hour":"1","price_day":"0","price_month":"0","p_price_hour":"10","p_price_day":null,"p_price_month":null,"skilled_labour":"1","c_skilled_labour":"0","s_price_hour":"1","s_price_day":"0","s_price_month":"0","p_s_price_hour":"10","p_s_price_day":null,"p_s_price_month":null,"provide_delivery":"1","p_delivery":"10","product_id":"13","hits":"0","currency_id":"1","active":"1","shopname":"Mandu's Shop","shopaddress":"Mandody Shop, Fix Mall junction","city":"Cherthala, Kerala, India","lat":"9.683637","lon":"76.336540"},{"inventory_id":"3","user_id":"12","latitude":"11.073182","longitude":"76.073997","location":"Malappuram, Kerala, India","zemose_type":"request","quantity":"8","deposit":"800","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"80","p_price_day":"300","p_price_month":"4000","skilled_labour":"0","c_skilled_labour":"0","s_price_hour":"0","s_price_day":"0","s_price_month":"0","p_s_price_hour":null,"p_s_price_day":null,"p_s_price_month":null,"provide_delivery":"0","p_delivery":"0","product_id":"13","hits":"0","currency_id":"1","active":"1","shopname":"Mandu's Shop","shopaddress":"Mandody Shop, Fix Mall junction","city":"Cherthala, Kerala, India","lat":"9.683637","lon":"76.336540"}]}
ERROR - 2016-09-23 10:27:11 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-23 10:27:11 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-23 10:27:11 --> Total execution time: 0.0109
DEBUG - 2016-09-23 10:27:11 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:27:11 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:27:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:27:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:27:11 --> 404 Page Not Found: Static/css
ERROR - 2016-09-23 10:27:11 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:27:11 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:27:11 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:27:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:27:11 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:27:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:27:11 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:27:11 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:27:11 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:27:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:27:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:27:11 --> 404 Page Not Found: P/13
ERROR - 2016-09-23 10:27:11 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 10:27:11 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:27:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:27:11 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:28:03 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:28:03 --> {"selected":{"inventory_id":"4","user_id":"12","latitude":"11.073182","longitude":"76.073997","location":"Malappuram, Kerala, India","zemose_type":"request","quantity":"50","deposit":"10","price_hour":"1","price_day":"0","price_month":"0","p_price_hour":"10","p_price_day":null,"p_price_month":null,"skilled_labour":"1","c_skilled_labour":"0","s_price_hour":"1","s_price_day":"0","s_price_month":"0","p_s_price_hour":"10","p_s_price_day":null,"p_s_price_month":null,"provide_delivery":"1","p_delivery":"10","product_id":"13","hits":"0","currency_id":"1","active":"1","shopname":"Mandu's Shop","shopaddress":"Mandody Shop, Fix Mall junction","city":"Cherthala, Kerala, India","lat":"9.683637","lon":"76.336540"},"all":[{"inventory_id":"4","user_id":"12","latitude":"11.073182","longitude":"76.073997","location":"Malappuram, Kerala, India","zemose_type":"request","quantity":"50","deposit":"10","price_hour":"1","price_day":"0","price_month":"0","p_price_hour":"10","p_price_day":null,"p_price_month":null,"skilled_labour":"1","c_skilled_labour":"0","s_price_hour":"1","s_price_day":"0","s_price_month":"0","p_s_price_hour":"10","p_s_price_day":null,"p_s_price_month":null,"provide_delivery":"1","p_delivery":"10","product_id":"13","hits":"0","currency_id":"1","active":"1","shopname":"Mandu's Shop","shopaddress":"Mandody Shop, Fix Mall junction","city":"Cherthala, Kerala, India","lat":"9.683637","lon":"76.336540"},{"inventory_id":"3","user_id":"12","latitude":"11.073182","longitude":"76.073997","location":"Malappuram, Kerala, India","zemose_type":"request","quantity":"8","deposit":"800","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"80","p_price_day":"300","p_price_month":"4000","skilled_labour":"0","c_skilled_labour":"0","s_price_hour":"0","s_price_day":"0","s_price_month":"0","p_s_price_hour":null,"p_s_price_day":null,"p_s_price_month":null,"provide_delivery":"0","p_delivery":"0","product_id":"13","hits":"0","currency_id":"1","active":"1","shopname":"Mandu's Shop","shopaddress":"Mandody Shop, Fix Mall junction","city":"Cherthala, Kerala, India","lat":"9.683637","lon":"76.336540"}]}
ERROR - 2016-09-23 10:28:03 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-23 10:28:03 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-23 10:28:03 --> Total execution time: 0.0131
DEBUG - 2016-09-23 10:28:03 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:28:03 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:28:03 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:28:03 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:28:03 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:03 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:28:03 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:28:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:28:03 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:28:03 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:03 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:28:03 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 10:28:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:28:03 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:28:03 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:28:03 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:28:20 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:28:20 --> {"selected":{"inventory_id":"4","user_id":"12","latitude":"11.073182","longitude":"76.073997","location":"Malappuram, Kerala, India","zemose_type":"request","quantity":"50","deposit":"10","price_hour":"1","price_day":"0","price_month":"0","p_price_hour":"10","p_price_day":null,"p_price_month":null,"skilled_labour":"1","c_skilled_labour":"0","s_price_hour":"1","s_price_day":"0","s_price_month":"0","p_s_price_hour":"10","p_s_price_day":null,"p_s_price_month":null,"provide_delivery":"1","p_delivery":"10","product_id":"13","hits":"0","currency_id":"1","active":"1","shopname":"Mandu's Shop","shopaddress":"Mandody Shop, Fix Mall junction","city":"Cherthala, Kerala, India","lat":"9.683637","lon":"76.336540"},"all":[{"inventory_id":"4","user_id":"12","latitude":"11.073182","longitude":"76.073997","location":"Malappuram, Kerala, India","zemose_type":"request","quantity":"50","deposit":"10","price_hour":"1","price_day":"0","price_month":"0","p_price_hour":"10","p_price_day":null,"p_price_month":null,"skilled_labour":"1","c_skilled_labour":"0","s_price_hour":"1","s_price_day":"0","s_price_month":"0","p_s_price_hour":"10","p_s_price_day":null,"p_s_price_month":null,"provide_delivery":"1","p_delivery":"10","product_id":"13","hits":"0","currency_id":"1","active":"1","shopname":"Mandu's Shop","shopaddress":"Mandody Shop, Fix Mall junction","city":"Cherthala, Kerala, India","lat":"9.683637","lon":"76.336540"},{"inventory_id":"3","user_id":"12","latitude":"11.073182","longitude":"76.073997","location":"Malappuram, Kerala, India","zemose_type":"request","quantity":"8","deposit":"800","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"80","p_price_day":"300","p_price_month":"4000","skilled_labour":"0","c_skilled_labour":"0","s_price_hour":"0","s_price_day":"0","s_price_month":"0","p_s_price_hour":null,"p_s_price_day":null,"p_s_price_month":null,"provide_delivery":"0","p_delivery":"0","product_id":"13","hits":"0","currency_id":"1","active":"1","shopname":"Mandu's Shop","shopaddress":"Mandody Shop, Fix Mall junction","city":"Cherthala, Kerala, India","lat":"9.683637","lon":"76.336540"}]}
ERROR - 2016-09-23 10:28:20 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-23 10:28:20 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-23 10:28:20 --> Total execution time: 0.0084
DEBUG - 2016-09-23 10:28:20 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:20 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:28:20 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:28:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:28:20 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:28:20 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:28:20 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:28:21 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:28:21 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 10:28:21 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:21 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:28:21 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:28:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:28:21 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:28:21 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:28:21 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:28:28 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:28:28 --> {"selected":{"inventory_id":"4","user_id":"12","latitude":"11.073182","longitude":"76.073997","location":"Malappuram, Kerala, India","zemose_type":"request","quantity":"50","deposit":"10","price_hour":"1","price_day":"0","price_month":"0","p_price_hour":"10","p_price_day":null,"p_price_month":null,"skilled_labour":"1","c_skilled_labour":"0","s_price_hour":"1","s_price_day":"0","s_price_month":"0","p_s_price_hour":"10","p_s_price_day":null,"p_s_price_month":null,"provide_delivery":"1","p_delivery":"10","product_id":"13","hits":"0","currency_id":"1","active":"1","shopname":"Mandu's Shop","shopaddress":"Mandody Shop, Fix Mall junction","city":"Cherthala, Kerala, India","lat":"9.683637","lon":"76.336540"},"all":[{"inventory_id":"4","user_id":"12","latitude":"11.073182","longitude":"76.073997","location":"Malappuram, Kerala, India","zemose_type":"request","quantity":"50","deposit":"10","price_hour":"1","price_day":"0","price_month":"0","p_price_hour":"10","p_price_day":null,"p_price_month":null,"skilled_labour":"1","c_skilled_labour":"0","s_price_hour":"1","s_price_day":"0","s_price_month":"0","p_s_price_hour":"10","p_s_price_day":null,"p_s_price_month":null,"provide_delivery":"1","p_delivery":"10","product_id":"13","hits":"0","currency_id":"1","active":"1","shopname":"Mandu's Shop","shopaddress":"Mandody Shop, Fix Mall junction","city":"Cherthala, Kerala, India","lat":"9.683637","lon":"76.336540"},{"inventory_id":"3","user_id":"12","latitude":"11.073182","longitude":"76.073997","location":"Malappuram, Kerala, India","zemose_type":"request","quantity":"8","deposit":"800","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"80","p_price_day":"300","p_price_month":"4000","skilled_labour":"0","c_skilled_labour":"0","s_price_hour":"0","s_price_day":"0","s_price_month":"0","p_s_price_hour":null,"p_s_price_day":null,"p_s_price_month":null,"provide_delivery":"0","p_delivery":"0","product_id":"13","hits":"0","currency_id":"1","active":"1","shopname":"Mandu's Shop","shopaddress":"Mandody Shop, Fix Mall junction","city":"Cherthala, Kerala, India","lat":"9.683637","lon":"76.336540"}]}
ERROR - 2016-09-23 10:28:28 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-23 10:28:28 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-23 10:28:28 --> Total execution time: 0.0141
DEBUG - 2016-09-23 10:28:28 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:28 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:28 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:28:28 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:28:28 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:28:28 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:28:29 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:29 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:28:29 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:28:29 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:29 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:28:29 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:28:29 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:29 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:28:29 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 10:28:29 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:29 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:28:29 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:28:29 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:28:29 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:28:29 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:31:12 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:31:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:31:12 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-23 10:31:12 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-23 10:31:12 --> Total execution time: 0.0141
DEBUG - 2016-09-23 10:31:13 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:31:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:31:13 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:31:13 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:31:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:31:13 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:31:13 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:31:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:31:13 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:31:13 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:31:13 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:31:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:31:13 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 10:31:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:31:13 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:31:13 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:31:13 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:31:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:31:13 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:31:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:31:13 --> 404 Page Not Found: P/13
DEBUG - 2016-09-23 10:45:20 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:45:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:45:20 --> Total execution time: 0.0529
DEBUG - 2016-09-23 10:45:21 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:45:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:45:21 --> Total execution time: 0.0060
DEBUG - 2016-09-23 10:45:33 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:45:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:45:33 --> Total execution time: 0.0105
DEBUG - 2016-09-23 10:45:33 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:45:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:45:33 --> Severity: Notice --> Undefined property: stdClass::$inventory_id /var/www/zemose/public_html/application/models/ProductModel.php 1093
DEBUG - 2016-09-23 10:45:33 --> Total execution time: 0.0077
DEBUG - 2016-09-23 10:45:40 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:45:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:45:40 --> Total execution time: 0.0112
DEBUG - 2016-09-23 10:45:40 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:45:40 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:45:40 --> Severity: Notice --> Undefined property: stdClass::$inventory_id /var/www/zemose/public_html/application/models/ProductModel.php 1093
DEBUG - 2016-09-23 10:45:40 --> Total execution time: 0.0078
DEBUG - 2016-09-23 10:45:48 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:45:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:45:48 --> Total execution time: 0.0103
DEBUG - 2016-09-23 10:45:49 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:45:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:45:49 --> Total execution time: 0.0088
DEBUG - 2016-09-23 10:45:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:45:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:45:50 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
DEBUG - 2016-09-23 10:45:50 --> Total execution time: 0.0066
DEBUG - 2016-09-23 10:45:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:45:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:45:50 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 10:45:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:45:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:45:50 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:45:54 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:45:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:45:54 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-23 10:45:54 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-23 10:45:54 --> Total execution time: 0.0104
DEBUG - 2016-09-23 10:45:54 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:45:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:45:54 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:45:54 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:45:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:45:54 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:45:54 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:45:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:45:54 --> 404 Page Not Found: P/10
DEBUG - 2016-09-23 10:45:54 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:45:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:45:54 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:45:54 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:45:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:45:54 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 10:45:54 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:45:54 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:45:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:45:54 --> 404 Page Not Found: P/10
DEBUG - 2016-09-23 10:45:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:45:54 --> 404 Page Not Found: P/10
DEBUG - 2016-09-23 10:46:04 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:46:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:46:04 --> Total execution time: 0.0103
DEBUG - 2016-09-23 10:46:04 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:46:04 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:46:04 --> Severity: Notice --> Undefined property: stdClass::$inventory_id /var/www/zemose/public_html/application/models/ProductModel.php 1093
DEBUG - 2016-09-23 10:46:04 --> Total execution time: 0.0082
DEBUG - 2016-09-23 10:46:22 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:46:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:46:22 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:46:22 --> No URI present. Default controller set.
DEBUG - 2016-09-23 10:46:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:46:22 --> Total execution time: 0.0086
DEBUG - 2016-09-23 10:46:25 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:46:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:46:26 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:46:26 --> No URI present. Default controller set.
DEBUG - 2016-09-23 10:46:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:46:26 --> Total execution time: 0.0088
DEBUG - 2016-09-23 10:46:46 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:46:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:46:46 --> Total execution time: 0.0125
DEBUG - 2016-09-23 10:46:46 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:46:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:46:46 --> Severity: Notice --> Undefined property: stdClass::$inventory_id /var/www/zemose/public_html/application/models/ProductModel.php 1093
DEBUG - 2016-09-23 10:46:46 --> Total execution time: 0.0121
DEBUG - 2016-09-23 10:47:09 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:47:09 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:47:09 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:48:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:48:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:48:41 --> Total execution time: 0.0119
DEBUG - 2016-09-23 10:48:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:48:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:48:41 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:48:43 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:48:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:48:43 --> Total execution time: 0.0076
DEBUG - 2016-09-23 10:48:43 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:48:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:48:43 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 10:48:43 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:48:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:48:43 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:56:20 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:56:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:56:20 --> Total execution time: 0.0063
DEBUG - 2016-09-23 10:56:23 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:56:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:56:23 --> Total execution time: 0.0409
DEBUG - 2016-09-23 10:56:26 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:56:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:56:26 --> Total execution time: 0.0514
DEBUG - 2016-09-23 10:56:26 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:56:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:56:26 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 10:56:28 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:56:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:56:28 --> {"pid":"10","zemose_type":"volvo","quantity":"","latitude":"","longitude":"","location":"","deposit":"","p_price_hour":"","p_price_day":"","p_price_month":"","skilled_labour":"0","c_skilled_labour":"0","s_p_price_hour":"","s_p_price_day":"","s_p_price_month":"","provide_delivery":"0","p_delivery":""}
DEBUG - 2016-09-23 10:56:28 --> Total execution time: 0.0067
DEBUG - 2016-09-23 10:57:20 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:57:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:57:20 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:58:37 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:58:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:58:37 --> Total execution time: 0.0068
DEBUG - 2016-09-23 10:58:37 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:58:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:58:37 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 10:58:46 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:58:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 10:58:46 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 10:58:56 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 10:58:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 10:58:56 --> {"pid":"10","zemose_type":"volvo","quantity":"","latitude":"","longitude":"","location":"","deposit":"","p_price_hour":"","p_price_day":"","p_price_month":"","skilled_labour":"0","c_skilled_labour":"0","s_p_price_hour":"","s_p_price_day":"","s_p_price_month":"","provide_delivery":"0","p_delivery":""}
DEBUG - 2016-09-23 10:58:56 --> Total execution time: 0.0072
DEBUG - 2016-09-23 11:00:59 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:00:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:00:59 --> {"pid":"10","zemose_type":"volvo","quantity":"","latitude":"","longitude":"","location":"","deposit":"","p_price_hour":"","p_price_day":"","p_price_month":"","skilled_labour":"0","c_skilled_labour":"0","s_p_price_hour":"","s_p_price_day":"","s_p_price_month":"","provide_delivery":"0","p_delivery":""}
DEBUG - 2016-09-23 11:00:59 --> Total execution time: 0.0070
DEBUG - 2016-09-23 11:01:00 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:01:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:01:00 --> {"pid":"10","zemose_type":"volvo","quantity":"","latitude":"","longitude":"","location":"","deposit":"","p_price_hour":"","p_price_day":"","p_price_month":"","skilled_labour":"0","c_skilled_labour":"0","s_p_price_hour":"","s_p_price_day":"","s_p_price_month":"","provide_delivery":"0","p_delivery":""}
DEBUG - 2016-09-23 11:01:00 --> Total execution time: 0.0054
DEBUG - 2016-09-23 11:01:01 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:01:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:01:01 --> {"pid":"10","zemose_type":"volvo","quantity":"","latitude":"","longitude":"","location":"","deposit":"","p_price_hour":"","p_price_day":"","p_price_month":"","skilled_labour":"0","c_skilled_labour":"0","s_p_price_hour":"","s_p_price_day":"","s_p_price_month":"","provide_delivery":"0","p_delivery":""}
DEBUG - 2016-09-23 11:01:01 --> Total execution time: 0.0054
DEBUG - 2016-09-23 11:02:18 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:02:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:02:18 --> Total execution time: 0.0067
DEBUG - 2016-09-23 11:04:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:04:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:04:30 --> Total execution time: 0.0069
DEBUG - 2016-09-23 11:04:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:04:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:04:30 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:04:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:04:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:04:36 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:04:46 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:04:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:04:46 --> {"pid":"10","zemose_type":"request","quantity":"","latitude":"","longitude":"","location":"","deposit":"","p_price_hour":"","p_price_day":"","p_price_month":"","skilled_labour":"0","c_skilled_labour":"0","s_p_price_hour":"","s_p_price_day":"","s_p_price_month":"","provide_delivery":"0","p_delivery":""}
DEBUG - 2016-09-23 11:04:46 --> 
DEBUG - 2016-09-23 11:04:46 --> Total execution time: 0.0074
DEBUG - 2016-09-23 11:09:00 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:09:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:09:00 --> Total execution time: 0.0062
DEBUG - 2016-09-23 11:09:00 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:09:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:09:00 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:09:00 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:09:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:09:00 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:09:46 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:09:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:09:46 --> Total execution time: 0.0077
DEBUG - 2016-09-23 11:09:46 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:09:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:09:46 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:09:46 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:09:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:09:46 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:10:11 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:10:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:10:11 --> Total execution time: 0.0088
DEBUG - 2016-09-23 11:10:31 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:10:31 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:10:31 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-23 11:10:31 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-23 11:10:31 --> Total execution time: 0.0105
DEBUG - 2016-09-23 11:10:31 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:10:31 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:10:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:10:31 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:10:31 --> 404 Page Not Found: Static/css
ERROR - 2016-09-23 11:10:31 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:10:31 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:10:31 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:10:31 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:10:31 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:10:31 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:10:31 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:10:31 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:10:31 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:10:31 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:10:31 --> 404 Page Not Found: P/12
DEBUG - 2016-09-23 11:10:31 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:10:31 --> 404 Page Not Found: P/12
DEBUG - 2016-09-23 11:10:31 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:10:31 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:10:31 --> 404 Page Not Found: P/12
DEBUG - 2016-09-23 11:10:40 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:10:40 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:10:40 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:11:45 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:11:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:11:45 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-23 11:11:45 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-23 11:11:45 --> Total execution time: 0.0094
DEBUG - 2016-09-23 11:11:45 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:11:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:11:45 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:11:45 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:11:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:11:45 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:11:45 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:11:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:11:45 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:11:45 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:11:45 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:11:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:11:45 --> 404 Page Not Found: P/12
DEBUG - 2016-09-23 11:11:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:11:45 --> 404 Page Not Found: P/12
DEBUG - 2016-09-23 11:11:45 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:11:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:11:45 --> 404 Page Not Found: P/12
DEBUG - 2016-09-23 11:11:45 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:11:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:11:45 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:11:45 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:11:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:11:45 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:11:53 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:11:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:11:53 --> Total execution time: 0.0069
DEBUG - 2016-09-23 11:11:54 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:11:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:11:54 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:11:54 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:11:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:11:54 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:12:18 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:12:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:12:18 --> Total execution time: 0.0094
DEBUG - 2016-09-23 11:12:19 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:12:19 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:12:19 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:12:19 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:12:19 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:12:19 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:13:13 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:13:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:13:13 --> Total execution time: 0.0073
DEBUG - 2016-09-23 11:13:13 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:13:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:13:13 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:13:13 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:13:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:13:13 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:14:35 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:14:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:14:35 --> Total execution time: 0.0069
DEBUG - 2016-09-23 11:14:35 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:14:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:14:35 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:14:35 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:14:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:14:35 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:15:04 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:15:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:15:04 --> Total execution time: 0.0098
DEBUG - 2016-09-23 11:15:04 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:15:04 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:15:04 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:15:04 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:15:04 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:15:04 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:16:42 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:16:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:16:42 --> Total execution time: 0.0081
DEBUG - 2016-09-23 11:16:42 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:16:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:16:42 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:16:42 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:16:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:16:42 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:18:21 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:18:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:18:21 --> Total execution time: 0.0074
DEBUG - 2016-09-23 11:18:22 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:18:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:18:22 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:18:22 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:18:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:18:22 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:19:54 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:19:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:19:54 --> Total execution time: 0.0072
DEBUG - 2016-09-23 11:19:54 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:19:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:19:54 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:20:38 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:20:38 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:20:38 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:23:28 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:23:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:23:28 --> Total execution time: 0.0071
DEBUG - 2016-09-23 11:23:28 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:23:28 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:23:28 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:23:28 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:23:28 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:23:28 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:23:57 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:23:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:23:57 --> Total execution time: 0.0077
DEBUG - 2016-09-23 11:23:57 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:23:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:23:57 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:23:57 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:23:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:23:57 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:24:19 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:24:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:24:19 --> Total execution time: 0.0090
DEBUG - 2016-09-23 11:24:19 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:24:19 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:24:19 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:24:19 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:24:19 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:24:19 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:25:44 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:25:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:25:44 --> Total execution time: 0.0074
DEBUG - 2016-09-23 11:25:44 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:25:44 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:25:44 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:25:49 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:25:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:25:49 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:26:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:26:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:26:36 --> Total execution time: 0.0066
DEBUG - 2016-09-23 11:26:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:26:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:26:36 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:26:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:26:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:26:36 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:27:32 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:27:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:27:32 --> Total execution time: 0.0071
DEBUG - 2016-09-23 11:27:33 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:27:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:27:33 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:27:33 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:27:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:27:33 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:32:21 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:32:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:32:21 --> Total execution time: 0.0087
DEBUG - 2016-09-23 11:32:21 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:32:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:32:21 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:32:21 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:32:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:32:21 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:33:21 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:33:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:33:21 --> Total execution time: 0.0089
DEBUG - 2016-09-23 11:33:21 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:33:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:33:21 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:33:21 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:33:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:33:21 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:34:04 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:34:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:34:04 --> Total execution time: 0.0062
DEBUG - 2016-09-23 11:34:04 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:34:04 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:34:04 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:34:04 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:34:04 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:34:04 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:34:56 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:34:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:34:56 --> Total execution time: 0.0101
DEBUG - 2016-09-23 11:34:56 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:34:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:34:56 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:34:56 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:34:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:34:56 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:38:53 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:38:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:38:53 --> Total execution time: 0.0097
DEBUG - 2016-09-23 11:38:53 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:38:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:38:53 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:38:53 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:38:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:38:53 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:39:57 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:39:57 --> No URI present. Default controller set.
DEBUG - 2016-09-23 11:39:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:39:57 --> Total execution time: 0.0093
DEBUG - 2016-09-23 11:42:07 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:42:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:42:07 --> Total execution time: 0.0075
DEBUG - 2016-09-23 11:42:07 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:42:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:42:07 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:42:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:42:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:42:36 --> Total execution time: 0.0075
DEBUG - 2016-09-23 11:43:21 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:43:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:43:21 --> Total execution time: 0.0116
DEBUG - 2016-09-23 11:43:21 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:43:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:43:21 --> Total execution time: 0.0091
DEBUG - 2016-09-23 11:43:21 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:43:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:43:21 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:43:21 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:43:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:43:21 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:43:27 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:43:27 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:43:27 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:43:38 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:43:38 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:43:38 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:43:38 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:43:38 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:43:38 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:43:38 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:43:38 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:43:38 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:43:38 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:43:38 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:43:38 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:43:39 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:43:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:43:39 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:43:39 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:43:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:43:39 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:43:54 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:43:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:43:54 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:44:40 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:44:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:44:40 --> Total execution time: 0.0096
DEBUG - 2016-09-23 11:44:40 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:44:40 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:44:40 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:44:40 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:44:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:44:40 --> Total execution time: 0.0078
DEBUG - 2016-09-23 11:44:40 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:44:40 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:44:40 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:44:40 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:44:40 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:44:40 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:44:40 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:44:40 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:44:40 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:44:46 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:44:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:44:46 --> Total execution time: 0.0101
DEBUG - 2016-09-23 11:44:46 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:44:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:44:46 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:44:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:44:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:44:50 --> Total execution time: 0.0074
DEBUG - 2016-09-23 11:44:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:44:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:44:50 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:44:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:44:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:44:50 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:44:50 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:44:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:44:50 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:45:03 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:45:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:45:03 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:45:18 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:45:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:45:18 --> Total execution time: 0.0127
DEBUG - 2016-09-23 11:45:18 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:45:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:45:18 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:45:18 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:45:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:45:18 --> Total execution time: 0.0090
DEBUG - 2016-09-23 11:45:18 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:45:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:45:18 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 11:45:18 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:45:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 11:45:18 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-23 11:50:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 11:50:36 --> No URI present. Default controller set.
DEBUG - 2016-09-23 11:50:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 11:50:36 --> Total execution time: 0.0106
DEBUG - 2016-09-23 12:21:05 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 12:21:05 --> No URI present. Default controller set.
DEBUG - 2016-09-23 12:21:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 12:21:09 --> Total execution time: 4.0750
DEBUG - 2016-09-23 12:21:12 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 12:21:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 12:21:12 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-09-23 12:21:15 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 12:21:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 12:21:15 --> Total execution time: 0.1247
DEBUG - 2016-09-23 12:21:20 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 12:21:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 12:21:21 --> Total execution time: 0.1055
DEBUG - 2016-09-23 12:21:24 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 12:21:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 12:21:24 --> Total execution time: 0.0804
DEBUG - 2016-09-23 12:21:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 12:21:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 12:21:30 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 12:25:07 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 12:25:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 12:25:07 --> Total execution time: 0.0098
DEBUG - 2016-09-23 12:25:07 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 12:25:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 12:25:07 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 12:26:08 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 12:26:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 12:26:08 --> Total execution time: 0.0071
DEBUG - 2016-09-23 12:26:08 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 12:26:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 12:26:08 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 12:26:54 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 12:26:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 12:26:54 --> Total execution time: 0.0096
DEBUG - 2016-09-23 12:26:55 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 12:26:55 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 12:26:55 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 12:28:43 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 12:28:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 12:28:43 --> Total execution time: 0.0103
DEBUG - 2016-09-23 12:28:43 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 12:28:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 12:28:43 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 12:29:40 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 12:29:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 12:29:40 --> Total execution time: 0.0094
DEBUG - 2016-09-23 12:29:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 12:29:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 12:29:41 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 12:30:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 12:30:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 12:30:36 --> Total execution time: 0.0098
DEBUG - 2016-09-23 12:30:37 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 12:30:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 12:30:37 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 12:31:38 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 12:31:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 12:31:38 --> Total execution time: 0.0069
DEBUG - 2016-09-23 12:31:38 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 12:31:38 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 12:31:38 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 14:12:16 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 14:12:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 14:12:16 --> The upload destination folder does not appear to be writable.
DEBUG - 2016-09-23 14:12:16 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 14:12:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 14:12:16 --> Total execution time: 0.0067
DEBUG - 2016-09-23 14:12:16 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 14:12:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 14:12:16 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 14:12:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 14:12:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 14:12:36 --> Total execution time: 0.0385
DEBUG - 2016-09-23 14:12:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 14:12:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 14:12:36 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 14:12:42 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 14:12:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 14:12:42 --> Total execution time: 0.0078
DEBUG - 2016-09-23 14:12:42 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 14:12:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 14:12:42 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-23 14:14:03 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 14:14:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 14:14:03 --> Total execution time: 0.0066
DEBUG - 2016-09-23 14:14:19 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 14:14:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 14:14:19 --> Total execution time: 0.0085
DEBUG - 2016-09-23 14:14:23 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 14:14:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 14:14:23 --> Total execution time: 0.0097
DEBUG - 2016-09-23 14:14:26 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 14:14:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 14:14:26 --> Total execution time: 0.0885
DEBUG - 2016-09-23 14:14:32 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 14:14:32 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 14:14:32 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-23 14:14:32 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-23 14:14:32 --> {"order_id":"8","action":"0","date":"2016-09-20 10:06:38","code":null}
DEBUG - 2016-09-23 14:14:32 --> {"order_id":"8","action":"0","date":"2016-09-15 06:20:56","code":null}
DEBUG - 2016-09-23 14:14:32 --> Total execution time: 0.0893
DEBUG - 2016-09-23 14:14:43 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 14:14:43 --> No URI present. Default controller set.
DEBUG - 2016-09-23 14:14:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 14:14:43 --> Total execution time: 0.0105
DEBUG - 2016-09-23 14:14:48 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 14:14:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 14:14:48 --> Total execution time: 0.0083
DEBUG - 2016-09-23 14:14:54 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 14:14:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-23 14:14:54 --> Total execution time: 0.0723
DEBUG - 2016-09-23 14:15:03 --> UTF-8 Support Enabled
DEBUG - 2016-09-23 14:15:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-23 14:15:03 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'zemose.uw.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT * FROM user_wishlist uw LEFT JOIN products p ON (uw.product_id = p.product_id) 
                    LEFT JOIN  product_description pd ON (uw.product_id = pd.product_id AND pd.language_id = 1) 
                    LEFT JOIN product_images pi ON (uw.product_id = pi.product_id) WHERE uw.user_id = '12' GROUP BY pi.product_id
