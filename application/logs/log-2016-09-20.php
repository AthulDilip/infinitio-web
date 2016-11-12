<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-09-20 13:48:52 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 13:48:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 13:48:53 --> Total execution time: 1.2590
DEBUG - 2016-09-20 13:48:53 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 13:48:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 13:48:53 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-09-20 13:49:26 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 13:49:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 13:49:27 --> Severity: Notice --> Trying to get property of non-object /var/www/zemose/public_html/application/models/AdminModel.php 81
ERROR - 2016-09-20 13:49:27 --> Severity: Notice --> Trying to get property of non-object /var/www/zemose/public_html/application/models/AdminModel.php 85
DEBUG - 2016-09-20 13:49:27 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 13:49:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 13:49:27 --> Total execution time: 0.0029
DEBUG - 2016-09-20 14:43:11 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:43:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:43:11 --> Total execution time: 0.0059
DEBUG - 2016-09-20 14:43:15 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:43:15 --> No URI present. Default controller set.
DEBUG - 2016-09-20 14:43:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:43:16 --> Total execution time: 0.8958
DEBUG - 2016-09-20 14:43:34 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:43:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:43:52 --> https://lh6.googleusercontent.com/-9f2yKnfzmkg/AAAAAAAAAAI/AAAAAAAAAEU/SnqlT6f4Fqk/photo.jpg?sz=50
DEBUG - 2016-09-20 14:43:52 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:43:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:43:52 --> Total execution time: 0.0169
DEBUG - 2016-09-20 14:44:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:44:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:44:49 --> https://lh6.googleusercontent.com/-9f2yKnfzmkg/AAAAAAAAAAI/AAAAAAAAAEU/SnqlT6f4Fqk/photo.jpg?sz=50
DEBUG - 2016-09-20 14:44:49 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:44:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:44:49 --> Total execution time: 0.0305
DEBUG - 2016-09-20 14:45:43 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:45:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:45:43 --> {"firstname":"Sabeer","lastname":"Sulaiman","email":"sabeersulaimanpv@gmail.com","phone":"8893979247","gender":"1","dob":"01\/26\/1994","address1":"Sulaiman","city":"Veliancode, Kerala, India","country":"1","zip":"679579","lat":"10.7277244","lon":"75.94812360000003"}
DEBUG - 2016-09-20 14:45:43 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:45:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:45:43 --> Total execution time: 0.0046
DEBUG - 2016-09-20 14:45:49 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:45:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:45:49 --> Total execution time: 0.0628
DEBUG - 2016-09-20 14:45:51 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:45:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:45:51 --> Total execution time: 0.0502
DEBUG - 2016-09-20 14:45:51 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:45:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:45:51 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
ERROR - 2016-09-20 14:45:51 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'PRD.rate' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid='5'  GROUP BY pid;
DEBUG - 2016-09-20 14:46:37 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:46:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:46:37 --> Total execution time: 0.0103
DEBUG - 2016-09-20 14:46:39 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:46:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:46:39 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
DEBUG - 2016-09-20 14:46:39 --> Total execution time: 0.0564
DEBUG - 2016-09-20 14:46:39 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:46:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:46:39 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-20 14:46:39 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:46:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:46:39 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 14:46:40 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:46:40 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:46:40 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 14:46:40 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 14:46:40 --> Total execution time: 0.1109
DEBUG - 2016-09-20 14:46:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:46:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:46:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:46:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:46:41 --> 404 Page Not Found: Static/css
ERROR - 2016-09-20 14:46:41 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 14:46:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:46:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:46:41 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 14:46:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:46:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:46:41 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 14:46:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:46:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:46:41 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-20 14:46:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:46:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:46:41 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 14:46:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:46:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:46:41 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 14:47:00 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:47:00 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:00 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:00 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 14:47:00 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 14:47:00 --> Total execution time: 0.0153
DEBUG - 2016-09-20 14:47:06 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:06 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:06 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 14:47:06 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 14:47:06 --> Total execution time: 0.0099
DEBUG - 2016-09-20 14:47:06 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:06 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:06 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 14:47:06 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:06 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:06 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 14:47:06 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:06 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:06 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 14:47:06 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:06 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:06 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 14:47:06 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:06 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:06 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-20 14:47:06 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:06 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:06 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:06 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 14:47:06 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:06 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 14:47:14 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:47:14 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:14 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:14 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 14:47:14 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 14:47:14 --> Total execution time: 0.0673
DEBUG - 2016-09-20 14:47:19 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:19 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:19 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 14:47:19 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 14:47:19 --> Total execution time: 0.0120
DEBUG - 2016-09-20 14:47:20 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:20 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 14:47:20 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:20 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 14:47:20 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:20 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 14:47:20 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:20 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:20 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 14:47:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:20 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-20 14:47:20 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:20 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:20 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 14:47:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:20 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 14:47:27 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:47:27 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:47:27 --> Error : There was an error in product data. Please try again.
ERROR - 2016-09-20 14:47:27 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 14:47:27 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 14:47:27 --> Total execution time: 0.0069
DEBUG - 2016-09-20 14:47:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:30 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 14:47:30 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 14:47:30 --> Total execution time: 0.0110
DEBUG - 2016-09-20 14:47:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:47:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:30 --> 404 Page Not Found: Static/css
ERROR - 2016-09-20 14:47:30 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 14:47:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:30 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 14:47:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:30 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 14:47:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:30 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-20 14:47:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:30 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 14:47:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:47:30 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 14:47:39 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:47:39 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:47:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:47:39 --> Error : There was an error in product data. Please try again.
ERROR - 2016-09-20 14:47:39 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 14:47:39 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 14:47:39 --> Total execution time: 0.0071
DEBUG - 2016-09-20 14:49:34 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:49:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:49:34 --> Total execution time: 0.0281
DEBUG - 2016-09-20 14:49:44 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:49:44 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:49:44 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 14:49:44 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 14:49:44 --> Total execution time: 0.0088
DEBUG - 2016-09-20 14:49:44 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:49:44 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:49:44 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:49:44 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 14:49:44 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:49:44 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 14:49:44 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:49:44 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:49:44 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 14:49:44 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:49:44 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:49:44 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 14:49:44 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:49:44 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:49:44 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-20 14:49:44 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:49:44 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:49:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:49:44 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:49:44 --> 404 Page Not Found: P/13
ERROR - 2016-09-20 14:49:44 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 14:49:51 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:49:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:49:52 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:49:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:49:52 --> Error : There was an error in product data. Please try again.
ERROR - 2016-09-20 14:49:52 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 14:49:52 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 14:49:52 --> Total execution time: 0.0675
DEBUG - 2016-09-20 14:49:57 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:49:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:49:57 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 14:49:57 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 14:49:57 --> Total execution time: 0.0438
DEBUG - 2016-09-20 14:50:07 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:50:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:50:07 --> Error : There was an error in product data. Please try again.
ERROR - 2016-09-20 14:50:07 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 14:50:07 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 14:50:07 --> Total execution time: 0.0069
DEBUG - 2016-09-20 14:50:27 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:50:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:50:27 --> Total execution time: 0.0076
DEBUG - 2016-09-20 14:50:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:50:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:50:30 --> Total execution time: 0.0074
DEBUG - 2016-09-20 14:50:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:50:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:50:30 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
DEBUG - 2016-09-20 14:50:30 --> Total execution time: 0.0052
DEBUG - 2016-09-20 14:50:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:50:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:50:30 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-20 14:50:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:50:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:50:30 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 14:50:32 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:50:32 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:50:32 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 14:50:32 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 14:50:32 --> Total execution time: 0.0089
DEBUG - 2016-09-20 14:50:32 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:50:32 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:50:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:50:32 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:50:32 --> 404 Page Not Found: Static/css
ERROR - 2016-09-20 14:50:32 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 14:50:32 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:50:32 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:50:32 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 14:50:32 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:50:32 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:50:32 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 14:50:32 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:50:32 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:50:32 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-20 14:50:32 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:50:32 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:50:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:50:32 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:50:32 --> 404 Page Not Found: P/13
ERROR - 2016-09-20 14:50:32 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 14:50:42 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:50:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:50:42 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:50:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:50:42 --> Error : There was an error in product data. Please try again.
ERROR - 2016-09-20 14:50:42 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 14:50:42 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 14:50:42 --> Total execution time: 0.0058
DEBUG - 2016-09-20 14:55:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:55:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:55:30 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 14:55:30 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 14:55:30 --> Total execution time: 0.0077
DEBUG - 2016-09-20 14:55:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:55:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:55:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:55:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:55:30 --> 404 Page Not Found: Static/css
ERROR - 2016-09-20 14:55:30 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 14:55:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:55:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:55:30 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 14:55:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:55:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:55:30 --> UTF-8 Support Enabled
ERROR - 2016-09-20 14:55:30 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 14:55:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:55:30 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-20 14:55:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:55:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:55:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:55:30 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 14:55:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:55:30 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 14:55:35 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:55:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:55:35 --> 142
DEBUG - 2016-09-20 14:55:35 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:55:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:55:35 --> Error : There was an error in product data. Please try again.
ERROR - 2016-09-20 14:55:35 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 14:55:35 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 14:55:35 --> Total execution time: 0.0675
DEBUG - 2016-09-20 14:58:35 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:58:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:58:35 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 14:58:35 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 14:58:35 --> Total execution time: 0.0120
DEBUG - 2016-09-20 14:58:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:58:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:58:36 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 14:58:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:58:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:58:36 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 14:58:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:58:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:58:36 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 14:58:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:58:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:58:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:58:36 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 14:58:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:58:36 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-20 14:58:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:58:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:58:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:58:36 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 14:58:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 14:58:36 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 14:58:40 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:58:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:58:40 --> ["13","3","2016-09-20 18:30:00","2016-09-21 04:30:00","Hour",10,null,0,null,"142","2016-09-20 14:58:40"]
DEBUG - 2016-09-20 14:58:40 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 14:58:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 14:58:40 --> Error : There was an error in product data. Please try again.
ERROR - 2016-09-20 14:58:40 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 14:58:40 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 14:58:40 --> Total execution time: 0.0075
DEBUG - 2016-09-20 15:07:52 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:07:52 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:07:52 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 15:07:52 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 15:07:52 --> Total execution time: 0.0086
DEBUG - 2016-09-20 15:07:52 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:07:52 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:07:52 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 15:07:52 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:07:52 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:07:52 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 15:07:52 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:07:52 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:07:52 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 15:07:52 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:07:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:07:52 --> UTF-8 Support Enabled
ERROR - 2016-09-20 15:07:52 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 15:07:52 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:07:52 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-20 15:07:52 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:07:52 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:07:52 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:07:52 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 15:07:52 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:07:52 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 15:07:57 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:07:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:07:57 --> HERE : 
DEBUG - 2016-09-20 15:07:57 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:07:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:07:57 --> Error : There was an error in product data. Please try again.
ERROR - 2016-09-20 15:07:57 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 15:07:57 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 15:07:57 --> Total execution time: 0.0671
DEBUG - 2016-09-20 15:09:33 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:09:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:09:33 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 15:09:33 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 15:09:33 --> Total execution time: 0.0101
DEBUG - 2016-09-20 15:09:33 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:09:33 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:09:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:09:33 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 15:09:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:09:33 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 15:09:33 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:09:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:09:33 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 15:09:33 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:09:33 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:09:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:09:33 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 15:09:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:09:33 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-20 15:09:33 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:09:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:09:33 --> UTF-8 Support Enabled
ERROR - 2016-09-20 15:09:33 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 15:09:34 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:09:34 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 15:09:40 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:09:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:09:40 --> HERE : 
DEBUG - 2016-09-20 15:09:40 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:09:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:09:40 --> Error : There was an error in product data. Please try again.
ERROR - 2016-09-20 15:09:40 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 15:09:40 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 15:09:40 --> Total execution time: 0.0063
DEBUG - 2016-09-20 15:34:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:34:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:34:36 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 15:34:36 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 15:34:36 --> Total execution time: 0.0792
DEBUG - 2016-09-20 15:34:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:34:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:34:36 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 15:34:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:34:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:34:36 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 15:34:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:34:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:34:36 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-20 15:34:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:34:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:34:36 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 15:34:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:34:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:34:36 --> 404 Page Not Found: Static/images
DEBUG - 2016-09-20 15:34:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:34:36 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:34:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:34:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:34:36 --> 404 Page Not Found: P/13
ERROR - 2016-09-20 15:34:36 --> 404 Page Not Found: P/13
DEBUG - 2016-09-20 15:34:45 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:34:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:34:45 --> {"from_date":"09\/22\/2016 00:00","type":"request","product_id":13,"pricing":"Hour","rent_for":10,"c_skill":0,"need_skill":false,"skill_pricing":0,"skill_for":0,"calculated_total":1688}
DEBUG - 2016-09-20 15:34:45 --> HERE : 24
DEBUG - 2016-09-20 15:34:45 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:34:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:34:45 --> Error : There was an error in product data. Please try again.
ERROR - 2016-09-20 15:34:45 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 15:34:45 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 15:34:45 --> Total execution time: 0.0093
DEBUG - 2016-09-20 15:34:54 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:34:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:34:54 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 15:34:54 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 15:34:54 --> Total execution time: 0.0078
DEBUG - 2016-09-20 15:35:25 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:35:25 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:35:25 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 15:35:25 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 15:35:25 --> Total execution time: 0.0063
DEBUG - 2016-09-20 15:36:05 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:36:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:36:05 --> Total execution time: 0.0060
DEBUG - 2016-09-20 15:36:08 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:36:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:36:08 --> Total execution time: 0.0312
DEBUG - 2016-09-20 15:36:24 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:36:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:36:24 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:36:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:36:24 --> Total execution time: 0.0055
DEBUG - 2016-09-20 15:36:32 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:36:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:36:32 --> Error : There was an error in product data. Please try again.
ERROR - 2016-09-20 15:36:32 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 15:36:32 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 15:36:32 --> Total execution time: 0.0115
DEBUG - 2016-09-20 15:36:34 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:36:34 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-20 15:36:34 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 15:36:34 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 15:36:34 --> Total execution time: 0.0058
DEBUG - 2016-09-20 15:36:38 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:36:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:36:38 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:36:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:36:39 --> Total execution time: 0.0248
DEBUG - 2016-09-20 15:36:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:36:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:36:41 --> ORDER ID : 8
DEBUG - 2016-09-20 15:36:41 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:36:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:36:41 --> Total execution time: 0.0065
DEBUG - 2016-09-20 15:51:04 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:51:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:51:04 --> ORDER ID : 8
DEBUG - 2016-09-20 15:51:04 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:51:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:51:04 --> Total execution time: 0.0075
DEBUG - 2016-09-20 15:51:08 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:51:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:51:08 --> ORDER ID : 8
DEBUG - 2016-09-20 15:51:08 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:51:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:51:08 --> Total execution time: 0.0059
DEBUG - 2016-09-20 15:52:37 --> UTF-8 Support Enabled
DEBUG - 2016-09-20 15:52:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-20 15:52:37 --> ORDER ID : 8
ERROR - 2016-09-20 15:52:37 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-09-20 15:52:37 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-09-20 15:52:37 --> {"order_id":"8","action":"0","date":"2016-09-20 10:06:38","code":null}
DEBUG - 2016-09-20 15:52:37 --> {"order_id":"8","action":"0","date":"2016-09-15 06:20:56","code":null}
DEBUG - 2016-09-20 15:52:37 --> Total execution time: 0.0585
