<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-10-09 01:42:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:42:08 --> No URI present. Default controller set.
DEBUG - 2016-10-09 01:42:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:42:08 --> Total execution time: 0.2743
DEBUG - 2016-10-09 01:42:11 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:42:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:42:11 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-10-09 01:42:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:42:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:42:33 --> Total execution time: 0.2446
DEBUG - 2016-10-09 01:42:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:42:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:42:33 --> Total execution time: 0.0066
DEBUG - 2016-10-09 01:42:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:42:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:42:37 --> Total execution time: 0.0605
DEBUG - 2016-10-09 01:42:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:42:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:42:37 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 01:42:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:42:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:42:37 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 01:42:45 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:42:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:42:45 --> Total execution time: 0.0689
DEBUG - 2016-10-09 01:42:49 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:42:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:42:49 --> Total execution time: 0.0369
DEBUG - 2016-10-09 01:42:49 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:42:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:42:49 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
DEBUG - 2016-10-09 01:42:49 --> Total execution time: 0.0051
DEBUG - 2016-10-09 01:42:49 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:42:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:42:49 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 01:42:49 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:42:49 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:42:49 --> 404 Page Not Found: Static/images
DEBUG - 2016-10-09 01:42:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:42:52 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:42:52 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 01:42:52 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 01:42:52 --> Total execution time: 0.0722
DEBUG - 2016-10-09 01:42:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:42:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:42:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:42:53 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 01:42:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:42:53 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 01:42:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:42:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:42:53 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 01:42:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:42:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:42:53 --> 404 Page Not Found: P/15
DEBUG - 2016-10-09 01:42:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:42:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:42:53 --> 404 Page Not Found: P/15
DEBUG - 2016-10-09 01:42:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:42:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:42:53 --> 404 Page Not Found: P/15
DEBUG - 2016-10-09 01:43:04 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:43:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:43:04 --> {"from_date":"10\/09\/2016 00:00","type":"request","product_id":15,"pricing":"Hour","rent_for":10,"c_skill":0,"need_skill":false,"skill_pricing":0,"skill_for":0,"calculated_total":200}
DEBUG - 2016-10-09 01:43:04 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:43:04 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:43:04 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 01:43:04 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 01:43:04 --> Total execution time: 0.0205
DEBUG - 2016-10-09 01:43:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:43:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:43:10 --> Verified Login
DEBUG - 2016-10-09 01:43:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:43:10 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:43:10 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 01:43:10 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 01:43:10 --> Total execution time: 0.0062
DEBUG - 2016-10-09 01:43:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:43:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:43:15 --> Total execution time: 0.0067
DEBUG - 2016-10-09 01:43:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:43:15 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:43:15 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 01:43:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:43:15 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:43:15 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 01:43:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:43:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:43:17 --> Total execution time: 0.0075
DEBUG - 2016-10-09 01:43:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:43:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:43:17 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
DEBUG - 2016-10-09 01:43:17 --> Total execution time: 0.0091
DEBUG - 2016-10-09 01:43:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:43:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:43:17 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 01:43:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:43:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:43:17 --> 404 Page Not Found: Static/images
DEBUG - 2016-10-09 01:43:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:43:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:43:18 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 01:43:18 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 01:43:18 --> Total execution time: 0.0085
DEBUG - 2016-10-09 01:43:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:43:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:43:18 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 01:43:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:43:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:43:18 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 01:43:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:43:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:43:18 --> 404 Page Not Found: P/15
DEBUG - 2016-10-09 01:43:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:43:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:43:18 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 01:43:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:43:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:43:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:43:18 --> 404 Page Not Found: P/15
DEBUG - 2016-10-09 01:43:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:43:18 --> 404 Page Not Found: P/15
DEBUG - 2016-10-09 01:43:30 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:43:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:43:30 --> {"from_date":"10\/10\/2016 00:00","type":"request","product_id":15,"pricing":"Hour","rent_for":10,"c_skill":0,"need_skill":false,"skill_pricing":0,"skill_for":0,"calculated_total":200}
DEBUG - 2016-10-09 01:43:30 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:43:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:43:30 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 01:43:30 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 01:43:30 --> Total execution time: 0.0911
DEBUG - 2016-10-09 01:43:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:43:32 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:43:32 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 01:43:32 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 01:43:32 --> Total execution time: 0.0332
DEBUG - 2016-10-09 01:44:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:44:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:44:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:44:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:44:13 --> Total execution time: 0.0412
DEBUG - 2016-10-09 01:44:16 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:44:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:44:16 --> ORDER ID : 2
ERROR - 2016-10-09 01:44:16 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 01:44:16 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 01:44:16 --> Total execution time: 0.0073
DEBUG - 2016-10-09 01:45:00 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:45:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:45:00 --> Total execution time: 0.0502
DEBUG - 2016-10-09 01:45:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:45:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:45:03 --> Total execution time: 0.0550
DEBUG - 2016-10-09 01:45:19 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:45:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:45:20 --> Total execution time: 0.0059
DEBUG - 2016-10-09 01:45:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:45:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:45:20 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 01:45:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:45:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:45:20 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 01:45:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:45:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:45:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:45:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:45:35 --> 404 Page Not Found: Login/index
DEBUG - 2016-10-09 01:45:39 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:45:39 --> No URI present. Default controller set.
DEBUG - 2016-10-09 01:45:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:45:39 --> Total execution time: 0.0067
DEBUG - 2016-10-09 01:45:57 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:45:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:45:57 --> Total execution time: 0.1126
DEBUG - 2016-10-09 01:45:57 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:45:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:45:57 --> Total execution time: 0.0059
DEBUG - 2016-10-09 01:46:01 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:46:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:46:01 --> Total execution time: 0.0056
DEBUG - 2016-10-09 01:46:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:46:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:46:08 --> Total execution time: 0.0061
DEBUG - 2016-10-09 01:46:21 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:46:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:46:21 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 01:46:21 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 01:46:21 --> Total execution time: 0.0076
DEBUG - 2016-10-09 01:46:31 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:46:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:46:31 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:46:31 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:46:31 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 01:46:31 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 01:46:31 --> Total execution time: 0.0073
DEBUG - 2016-10-09 01:46:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:46:38 --> Total execution time: 0.0062
DEBUG - 2016-10-09 01:46:39 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:46:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:46:39 --> ORDER ID : 2
ERROR - 2016-10-09 01:46:39 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 01:46:39 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 01:46:40 --> Total execution time: 0.0069
DEBUG - 2016-10-09 01:46:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:46:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:46:42 --> Total execution time: 0.1982
DEBUG - 2016-10-09 01:49:51 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:49:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:49:51 --> {"mihpayid":"403993715515061445","mode":"CC","status":"failure","unmappedstatus":"failed","key":"gtKFFx","txnid":"ZEMPUM0IN011","amount":"200.00","cardCategory":"domestic","discount":"0.00","net_amount_debit":"0.00","addedon":"2016-10-09 01:46:48","productinfo":"Payment for Order   ZOIN002","firstname":"Sabeer","lastname":"","address1":"","address2":"","city":"","state":"","country":"","zipcode":"","email":"sabeersulaimanpv@gmail.com","phone":"8893979247","udf1":"","udf2":"","udf3":"","udf4":"","udf5":"","udf6":"","udf7":"","udf8":"","udf9":"","udf10":"","hash":"0f6c60185377d281cae0bfe38f6b60bd71e636d62019f51d946f46e55848376f74ec62e034364ce238346807db34b415bb5c14338c734f3417f1dcd864c3a0e7","field1":"","field2":"","field3":"","field4":"","field5":" !ERROR!-GV00010-Missing data typeError Code: GV00010","field6":"","field7":"","field8":"failed in enrollment","field9":" !ERROR!-GV00010-Missing data typeError Code: GV00010","payment_source":"payu","PG_TYPE":"HDFCPG","bank_ref_num":"","bankcode":"CC","error":"E500","error_Message":"Unknown Error Received from PG","name_on_card":"any","cardnum":"512345XXXXXX2346","cardhash":"This field is no longer supported in postback params.","issuing_bank":"HDFC","card_type":"MAST"}
DEBUG - 2016-10-09 01:49:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:49:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:49:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:49:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:49:52 --> ORDER ID : 2
ERROR - 2016-10-09 01:49:52 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 01:49:52 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 01:49:52 --> Total execution time: 0.0070
DEBUG - 2016-10-09 01:49:56 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:49:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:49:56 --> Total execution time: 0.2346
DEBUG - 2016-10-09 01:50:41 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:50:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:50:41 --> {"mihpayid":"403993715515061447","mode":"CC","status":"failure","unmappedstatus":"failed","key":"gtKFFx","txnid":"ZEMPUM0IN012","amount":"200.00","cardCategory":"domestic","discount":"0.00","net_amount_debit":"0.00","addedon":"2016-10-09 01:50:02","productinfo":"Payment for Order   ZOIN002","firstname":"Sabeer","lastname":"","address1":"","address2":"","city":"","state":"","country":"","zipcode":"","email":"sabeersulaimanpv@gmail.com","phone":"8893979247","udf1":"","udf2":"","udf3":"","udf4":"","udf5":"","udf6":"","udf7":"","udf8":"","udf9":"","udf10":"","hash":"4b91dc0f68131317900c2a2261b0a374b9216cd8149a91ab3e4fcb05bfdf19713f92023575d2ef849238f856ed787c0bd93c2bd9152ddba2c939c5ac852a23c0","field1":"","field2":"","field3":"","field4":"","field5":" !ERROR!-GV00010-Missing data typeError Code: GV00010","field6":"","field7":"","field8":"failed in enrollment","field9":" !ERROR!-GV00010-Missing data typeError Code: GV00010","payment_source":"payu","PG_TYPE":"HDFCPG","bank_ref_num":"","bankcode":"CC","error":"E500","error_Message":"Unknown Error Received from PG","name_on_card":"Sabeer Sulaiman","cardnum":"512345XXXXXX2346","cardhash":"This field is no longer supported in postback params.","issuing_bank":"HDFC","card_type":"MAST"}
DEBUG - 2016-10-09 01:50:41 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:50:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:50:41 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:50:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:50:41 --> ORDER ID : 2
ERROR - 2016-10-09 01:50:41 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 01:50:41 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 01:50:41 --> Total execution time: 0.0068
DEBUG - 2016-10-09 01:50:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:50:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:50:58 --> Total execution time: 0.1594
DEBUG - 2016-10-09 01:51:54 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:51:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:51:54 --> ORDER ID : 2
ERROR - 2016-10-09 01:51:54 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 01:51:54 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 01:51:54 --> Total execution time: 0.0095
DEBUG - 2016-10-09 01:51:56 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:51:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:51:56 --> Total execution time: 0.2133
DEBUG - 2016-10-09 01:52:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:52:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:52:35 --> {"mihpayid":"403993715515061449","mode":"CC","status":"failure","unmappedstatus":"failed","key":"gtKFFx","txnid":"ZEMPUM0IN014","amount":"200.00","cardCategory":"domestic","discount":"0.00","net_amount_debit":"0.00","addedon":"2016-10-09 01:51:58","productinfo":"Payment for Order   ZOIN002","firstname":"Sabeer","lastname":"","address1":"","address2":"","city":"","state":"","country":"","zipcode":"","email":"sabeersulaimanpv@gmail.com","phone":"8893979247","udf1":"","udf2":"","udf3":"","udf4":"","udf5":"","udf6":"","udf7":"","udf8":"","udf9":"","udf10":"","hash":"a83875cf88e1d29bf787c3182f5a3d838020f29ff0f9007615fa02c569259b4d3abffc95a65a7eafafbeef1b2451c01547fb2ea667b8bb335f0ae7e540332196","field1":"","field2":"","field3":"","field4":"","field5":" !ERROR!-GV00010-Missing data typeError Code: GV00010","field6":"","field7":"","field8":"failed in enrollment","field9":" !ERROR!-GV00010-Missing data typeError Code: GV00010","payment_source":"payu","PG_TYPE":"HDFCPG","bank_ref_num":"","bankcode":"CC","error":"E500","error_Message":"Unknown Error Received from PG","name_on_card":"any name","cardnum":"512345XXXXXX2346","cardhash":"This field is no longer supported in postback params.","issuing_bank":"HDFC","card_type":"MAST"}
DEBUG - 2016-10-09 01:52:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:52:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:52:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:52:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:52:35 --> ORDER ID : 2
ERROR - 2016-10-09 01:52:35 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 01:52:35 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 01:52:35 --> Total execution time: 0.0067
DEBUG - 2016-10-09 01:52:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:52:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:52:48 --> Total execution time: 0.1623
DEBUG - 2016-10-09 01:53:34 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:53:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:53:34 --> {"mihpayid":"403993715515061451","mode":"CC","status":"failure","unmappedstatus":"failed","key":"gtKFFx","txnid":"ZEMPUM0IN015","amount":"200.00","cardCategory":"domestic","discount":"0.00","net_amount_debit":"0.00","addedon":"2016-10-09 01:52:50","productinfo":"Payment for Order   ZOIN002","firstname":"Sabeer","lastname":"","address1":"","address2":"","city":"","state":"","country":"","zipcode":"","email":"sabeersulaimanpv@gmail.com","phone":"8893979247","udf1":"","udf2":"","udf3":"","udf4":"","udf5":"","udf6":"","udf7":"","udf8":"","udf9":"","udf10":"","hash":"ba0ab3bb8cfd77f068310f5a81ac21b4675e8f59851c33778ad983112a57d5a9e3204bd26c9bf0b0f0b3df611948c90bbb5960a28e0da8291e7eeefede186627","field1":"","field2":"","field3":"","field4":"","field5":" !ERROR!-GW00856-Invalid Card Verification Code.Error Code: GW00856","field6":"","field7":"","field8":"failed in enrollment","field9":" !ERROR!-GW00856-Invalid Card Verification Code.Error Code: GW00856","payment_source":"payu","PG_TYPE":"HDFCPG","bank_ref_num":"","bankcode":"CC","error":"E500","error_Message":"Unknown Error Received from PG","name_on_card":"any name","cardnum":"512345XXXXXX2346","cardhash":"This field is no longer supported in postback params.","issuing_bank":"HDFC","card_type":"MAST"}
DEBUG - 2016-10-09 01:53:34 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:53:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:53:34 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:53:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:53:34 --> ORDER ID : 2
ERROR - 2016-10-09 01:53:34 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 01:53:34 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 01:53:34 --> Total execution time: 0.0059
DEBUG - 2016-10-09 01:53:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:53:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:53:38 --> Total execution time: 0.1701
DEBUG - 2016-10-09 01:54:14 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:54:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:54:14 --> {"mihpayid":"403993715515061452","mode":"CC","status":"failure","unmappedstatus":"failed","key":"gtKFFx","txnid":"ZEMPUM0IN016","amount":"200.00","cardCategory":"domestic","discount":"0.00","net_amount_debit":"0.00","addedon":"2016-10-09 01:53:40","productinfo":"Payment for Order   ZOIN002","firstname":"Sabeer","lastname":"","address1":"","address2":"","city":"","state":"","country":"","zipcode":"","email":"sabeersulaimanpv@gmail.com","phone":"8893979247","udf1":"","udf2":"","udf3":"","udf4":"","udf5":"","udf6":"","udf7":"","udf8":"","udf9":"","udf10":"","hash":"04df25833ecc3363bbcd3a568c0d30b43a97531957183ca8c3cadb1b1831c14ee6f727514aabb4b6a40381b32cf1e97bcac9c8ed1e4938c67150ee454a987f43","field1":"","field2":"","field3":"","field4":"","field5":" !ERROR!-GV00010-Missing data typeError Code: GV00010","field6":"","field7":"","field8":"failed in enrollment","field9":" !ERROR!-GV00010-Missing data typeError Code: GV00010","payment_source":"payu","PG_TYPE":"HDFCPG","bank_ref_num":"","bankcode":"CC","error":"E500","error_Message":"Unknown Error Received from PG","name_on_card":"any anme","cardnum":"512345XXXXXX2346","cardhash":"This field is no longer supported in postback params.","issuing_bank":"HDFC","card_type":"MAST"}
DEBUG - 2016-10-09 01:54:14 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:54:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:54:14 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:54:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:54:14 --> ORDER ID : 2
ERROR - 2016-10-09 01:54:14 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 01:54:14 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 01:54:14 --> Total execution time: 0.0068
DEBUG - 2016-10-09 01:54:16 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:54:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:54:17 --> Total execution time: 0.1974
DEBUG - 2016-10-09 01:56:50 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:56:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:56:50 --> {"mihpayid":"403993715515061453","mode":"WALLET","status":"failure","unmappedstatus":"failed","key":"gtKFFx","txnid":"ZEMPUM0IN017","amount":"200.00","discount":"0.00","net_amount_debit":"0.00","addedon":"2016-10-09 01:54:17","productinfo":"Payment for Order   ZOIN002","firstname":"Sabeer","lastname":"","address1":"","address2":"","city":"","state":"","country":"","zipcode":"","email":"sabeersulaimanpv@gmail.com","phone":"8893979247","udf1":"","udf2":"","udf3":"","udf4":"","udf5":"","udf6":"","udf7":"","udf8":"","udf9":"","udf10":"","hash":"5db82d25b3295bdd30d231d93021d85591d9c64a9005cb07ded2d782553b95c437568f37013c17a9b26612eb852af514d08778ab2e8386a6df872965d52dcdde","field1":"","field2":"","field3":"","field4":"","field5":"FF1924C49B319C40AB3EB23B1CCFA808","field6":"","field7":"","field8":"failed in enrollment","field9":"!ERROR!-GV00010-Missing data typeError Code: GV00010","payment_source":"payu","PG_TYPE":"PAISA","bank_ref_num":"","bankcode":"PAYUW","error":"","error_Message":""}
DEBUG - 2016-10-09 01:56:50 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:56:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:56:50 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:56:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:56:50 --> ORDER ID : 2
ERROR - 2016-10-09 01:56:50 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 01:56:50 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 01:56:50 --> Total execution time: 0.0065
DEBUG - 2016-10-09 01:56:54 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:56:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:56:54 --> Total execution time: 0.1546
DEBUG - 2016-10-09 01:58:05 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:58:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:58:05 --> {"mihpayid":"403993715515061457","mode":"COD","status":"in progress","unmappedstatus":"in progress","key":"gtKFFx","txnid":"ZEMPUM0IN018","amount":"200.00","discount":"0.00","net_amount_debit":"0.00","addedon":"2016-10-09 01:56:56","productinfo":"Payment for Order   ZOIN002","firstname":"Sabeer","lastname":"","address1":"","address2":"","city":"","state":"","country":"","zipcode":"","email":"sabeersulaimanpv@gmail.com","phone":"8893979247","udf1":"","udf2":"","udf3":"","udf4":"","udf5":"","udf6":"","udf7":"","udf8":"","udf9":"","udf10":"","hash":"9c0c9f212ff745d20ab2160c6077431c42bcd8385ff0096c0a9f04636154b16496f6f868e02f72a2ebcfaa514ec73e8a134c8a73f58a465b8771b7eb6c58b7cb","field1":"","field2":"","field3":"","field4":"","field5":"","field6":"","field7":"","field8":"","field9":"","payment_source":"payu","PG_TYPE":"COD","bank_ref_num":"","bankcode":"COD","error":"","error_Message":"","shipping_firstname":"Sabeer","shipping_lastname":"Sulaiman","shipping_address1":"Pokal House","shipping_address2":"Vandoor","shipping_city":"malappuram","shipping_state":"Kerala","shipping_country":"India","shipping_zipcode":"679579","shipping_phone":"8893979247","shipping_phoneverified":""}
DEBUG - 2016-10-09 01:58:05 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:58:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:58:05 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:58:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:58:05 --> ORDER ID : 2
ERROR - 2016-10-09 01:58:05 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 01:58:05 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 01:58:05 --> Total execution time: 0.0058
DEBUG - 2016-10-09 01:58:26 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:58:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:58:26 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 01:58:26 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 01:58:26 --> Total execution time: 0.0064
DEBUG - 2016-10-09 01:58:34 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:58:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:58:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:58:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 01:58:35 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 01:58:35 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 01:58:35 --> Total execution time: 0.0450
DEBUG - 2016-10-09 01:59:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 01:59:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 01:59:02 --> ORDER ID : 2
ERROR - 2016-10-09 01:59:02 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 01:59:02 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 01:59:02 --> Total execution time: 0.0057
DEBUG - 2016-10-09 10:44:44 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 10:44:44 --> No URI present. Default controller set.
DEBUG - 2016-10-09 10:44:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 10:44:45 --> Total execution time: 0.6629
DEBUG - 2016-10-09 10:44:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 10:44:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 10:44:47 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-10-09 10:44:54 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 10:44:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 10:45:02 --> Severity: Warning --> explode() expects parameter 2 to be string, object given /var/www/zemose/public_html/application/models/UsersModel.php 290
DEBUG - 2016-10-09 10:45:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 10:45:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 10:45:02 --> Total execution time: 0.0129
DEBUG - 2016-10-09 10:45:09 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 10:45:09 --> No URI present. Default controller set.
DEBUG - 2016-10-09 10:45:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 10:45:09 --> Total execution time: 0.0071
DEBUG - 2016-10-09 10:45:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 10:45:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 10:45:42 --> Total execution time: 0.1920
DEBUG - 2016-10-09 10:45:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 10:45:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 10:45:42 --> Total execution time: 0.0331
DEBUG - 2016-10-09 10:45:46 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 10:45:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 10:45:46 --> Total execution time: 0.1170
DEBUG - 2016-10-09 10:45:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 10:45:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 10:45:48 --> ORDER ID : 2
ERROR - 2016-10-09 10:45:48 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 10:45:48 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 10:45:48 --> Total execution time: 0.0731
DEBUG - 2016-10-09 10:46:59 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 10:46:59 --> No URI present. Default controller set.
DEBUG - 2016-10-09 10:46:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 10:46:59 --> Total execution time: 0.3913
DEBUG - 2016-10-09 10:47:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 10:47:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 10:47:17 --> Total execution time: 0.5566
DEBUG - 2016-10-09 10:47:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 10:47:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 10:47:17 --> Total execution time: 0.0073
DEBUG - 2016-10-09 10:47:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 10:47:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 10:47:21 --> Total execution time: 0.1154
DEBUG - 2016-10-09 10:47:24 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 10:47:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 10:47:24 --> Total execution time: 0.0376
DEBUG - 2016-10-09 10:47:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 10:47:28 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 10:47:28 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 10:47:28 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 10:47:28 --> Total execution time: 0.0111
DEBUG - 2016-10-09 11:27:14 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:14 --> No URI present. Default controller set.
DEBUG - 2016-10-09 11:27:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:14 --> Total execution time: 0.0086
DEBUG - 2016-10-09 11:27:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:22 --> Total execution time: 0.0108
DEBUG - 2016-10-09 11:27:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:27 --> Total execution time: 0.0060
DEBUG - 2016-10-09 11:27:30 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:30 --> Total execution time: 0.0051
DEBUG - 2016-10-09 11:27:30 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:30 --> Total execution time: 0.0047
DEBUG - 2016-10-09 11:27:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:32 --> Total execution time: 0.0045
DEBUG - 2016-10-09 11:27:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:32 --> Total execution time: 0.0050
DEBUG - 2016-10-09 11:27:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:32 --> Total execution time: 0.0053
DEBUG - 2016-10-09 11:27:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:32 --> Total execution time: 0.0044
DEBUG - 2016-10-09 11:27:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:33 --> Total execution time: 0.0057
DEBUG - 2016-10-09 11:27:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:33 --> Total execution time: 0.0060
DEBUG - 2016-10-09 11:27:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:33 --> Total execution time: 0.0038
DEBUG - 2016-10-09 11:27:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:33 --> Total execution time: 0.0049
DEBUG - 2016-10-09 11:27:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:33 --> Total execution time: 0.0070
DEBUG - 2016-10-09 11:27:34 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:34 --> Total execution time: 0.0083
DEBUG - 2016-10-09 11:27:34 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:34 --> Total execution time: 0.0051
DEBUG - 2016-10-09 11:27:34 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:34 --> Total execution time: 0.0072
DEBUG - 2016-10-09 11:27:34 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:34 --> Total execution time: 0.0071
DEBUG - 2016-10-09 11:27:34 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:34 --> Total execution time: 0.0050
DEBUG - 2016-10-09 11:27:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:35 --> Total execution time: 0.0057
DEBUG - 2016-10-09 11:27:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:35 --> Total execution time: 0.0057
DEBUG - 2016-10-09 11:27:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:35 --> Total execution time: 0.0051
DEBUG - 2016-10-09 11:27:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:35 --> Total execution time: 0.0059
DEBUG - 2016-10-09 11:27:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:35 --> Total execution time: 0.0053
DEBUG - 2016-10-09 11:27:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:35 --> Total execution time: 0.0040
DEBUG - 2016-10-09 11:27:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:35 --> Total execution time: 0.0048
DEBUG - 2016-10-09 11:27:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:35 --> Total execution time: 0.0044
DEBUG - 2016-10-09 11:27:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:35 --> Total execution time: 0.0051
DEBUG - 2016-10-09 11:27:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:35 --> Total execution time: 0.0053
DEBUG - 2016-10-09 11:27:36 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:27:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:27:36 --> Total execution time: 0.0075
DEBUG - 2016-10-09 11:28:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:28:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:28:15 --> Total execution time: 0.0103
DEBUG - 2016-10-09 11:28:19 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:28:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:28:19 --> Total execution time: 0.0071
DEBUG - 2016-10-09 11:28:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:28:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:28:20 --> Total execution time: 0.0351
DEBUG - 2016-10-09 11:28:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:28:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 11:28:20 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 11:28:21 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:28:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 11:28:21 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 11:37:29 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:37:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:37:29 --> Total execution time: 0.0071
DEBUG - 2016-10-09 11:37:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:37:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:37:32 --> ORDER ID : 2
ERROR - 2016-10-09 11:37:32 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 11:37:32 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 11:37:32 --> Total execution time: 0.1293
DEBUG - 2016-10-09 11:37:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:37:52 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 11:37:52 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 11:37:52 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 11:37:52 --> Total execution time: 0.0065
DEBUG - 2016-10-09 11:47:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:47:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:47:18 --> ORDER ID : 2
ERROR - 2016-10-09 11:47:18 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 11:47:18 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 11:47:18 --> Total execution time: 0.0093
DEBUG - 2016-10-09 11:48:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:48:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 11:48:23 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 11:48:23 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 11:48:23 --> Total execution time: 0.0059
DEBUG - 2016-10-09 11:48:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:48:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:48:28 --> ORDER ID : 2
ERROR - 2016-10-09 11:48:28 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 11:48:28 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 11:48:28 --> Total execution time: 0.0071
DEBUG - 2016-10-09 11:49:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:49:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 11:49:47 --> Severity: Notice --> Undefined property: stdClass::$ret_code /var/www/zemose/public_html/application/models/OrdersModel.php 490
DEBUG - 2016-10-09 11:49:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:49:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:49:47 --> ORDER ID : 2
ERROR - 2016-10-09 11:49:47 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 11:49:47 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 11:49:47 --> Total execution time: 0.0066
DEBUG - 2016-10-09 11:52:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:52:10 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 11:52:10 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 11:52:10 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 11:52:10 --> Total execution time: 0.0069
DEBUG - 2016-10-09 11:52:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:52:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:52:33 --> ORDER ID : 2
ERROR - 2016-10-09 11:52:33 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 11:52:33 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 11:52:33 --> Total execution time: 0.0075
DEBUG - 2016-10-09 11:53:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:53:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:53:03 --> ORDER ID : 2
ERROR - 2016-10-09 11:53:03 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 11:53:03 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 11:53:03 --> Total execution time: 0.0083
DEBUG - 2016-10-09 11:54:06 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:54:06 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 11:54:06 --> Severity: Notice --> Undefined property: stdClass::$ret_code /var/www/zemose/public_html/application/models/OrdersModel.php 490
DEBUG - 2016-10-09 11:54:06 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:54:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:54:06 --> ORDER ID : 2
ERROR - 2016-10-09 11:54:06 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 11:54:06 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 11:54:06 --> Total execution time: 0.0074
DEBUG - 2016-10-09 11:57:36 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:57:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 11:57:36 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 11:57:36 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 11:57:36 --> Severity: Notice --> Undefined property: stdClass::$ret_code /var/www/zemose/public_html/application/views/Zemoser/order-single.php 262
DEBUG - 2016-10-09 11:57:36 --> Total execution time: 0.0077
DEBUG - 2016-10-09 11:58:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:58:25 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 11:58:25 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 11:58:25 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 11:58:25 --> Total execution time: 0.0083
DEBUG - 2016-10-09 11:59:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:59:10 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 11:59:10 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 11:59:10 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 11:59:10 --> Total execution time: 0.0068
DEBUG - 2016-10-09 11:59:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:59:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:59:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:59:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 11:59:32 --> ORDER ID : 2
ERROR - 2016-10-09 11:59:32 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 11:59:32 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 11:59:32 --> Total execution time: 0.0067
DEBUG - 2016-10-09 11:59:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 11:59:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 11:59:42 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 11:59:42 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 11:59:42 --> Total execution time: 0.0066
DEBUG - 2016-10-09 12:05:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:05:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:05:22 --> Total execution time: 0.0098
DEBUG - 2016-10-09 12:05:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:05:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:05:22 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 12:05:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:05:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:05:22 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 12:19:09 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:19:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:19:09 --> Total execution time: 0.0070
DEBUG - 2016-10-09 12:19:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:19:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:19:43 --> Total execution time: 0.1365
DEBUG - 2016-10-09 12:19:56 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:19:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:19:56 --> Total execution time: 0.0066
DEBUG - 2016-10-09 12:19:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:19:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:19:58 --> Total execution time: 0.0084
DEBUG - 2016-10-09 12:19:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:19:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:19:58 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 12:19:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:19:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:19:58 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 12:19:59 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:19:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:19:59 --> Total execution time: 0.0423
DEBUG - 2016-10-09 12:19:59 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:19:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:19:59 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
DEBUG - 2016-10-09 12:19:59 --> Total execution time: 0.0082
DEBUG - 2016-10-09 12:19:59 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:19:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:19:59 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 12:19:59 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:19:59 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:19:59 --> 404 Page Not Found: Static/images
DEBUG - 2016-10-09 12:20:01 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:20:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:20:01 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 12:20:01 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 12:20:01 --> Total execution time: 0.0570
DEBUG - 2016-10-09 12:20:01 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:20:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:20:01 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 12:20:01 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:20:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:20:01 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 12:20:01 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:20:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:20:01 --> 404 Page Not Found: P/15
DEBUG - 2016-10-09 12:20:01 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:20:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:20:01 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 12:20:01 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:20:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:20:01 --> 404 Page Not Found: P/15
DEBUG - 2016-10-09 12:20:01 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:20:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:20:01 --> 404 Page Not Found: P/15
DEBUG - 2016-10-09 12:20:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:20:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:20:22 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 12:20:22 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 12:20:22 --> Total execution time: 0.0073
DEBUG - 2016-10-09 12:20:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:20:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:20:22 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 12:20:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:20:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:20:22 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 12:20:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:20:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:20:22 --> 404 Page Not Found: P/15
DEBUG - 2016-10-09 12:20:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:20:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:20:22 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 12:20:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:20:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:20:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:20:22 --> 404 Page Not Found: P/15
DEBUG - 2016-10-09 12:20:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:20:22 --> 404 Page Not Found: P/15
DEBUG - 2016-10-09 12:20:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:20:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:20:47 --> {"from_date":"10\/12\/2016 00:00","type":"request","product_id":15,"pricing":"Month","rent_for":1,"c_skill":1,"need_skill":true,"skill_pricing":"Month","skill_for":1,"calculated_total":42810}
DEBUG - 2016-10-09 12:20:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:20:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:20:47 --> Error : Error in code!
ERROR - 2016-10-09 12:20:47 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 12:20:47 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 12:20:47 --> Total execution time: 0.0072
DEBUG - 2016-10-09 12:21:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:21:38 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:21:38 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 12:21:38 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 12:21:38 --> Total execution time: 0.0338
DEBUG - 2016-10-09 12:21:54 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:21:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:21:54 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:21:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:21:54 --> Total execution time: 0.0065
DEBUG - 2016-10-09 12:22:01 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:22:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:22:01 --> ORDER ID : 3
ERROR - 2016-10-09 12:22:01 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 12:22:01 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 12:22:01 --> Total execution time: 0.0082
DEBUG - 2016-10-09 12:23:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:23:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:23:28 --> Total execution time: 0.0054
DEBUG - 2016-10-09 12:23:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:23:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:23:32 --> Total execution time: 0.0068
DEBUG - 2016-10-09 12:30:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:30:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:30:27 --> Total execution time: 0.0074
DEBUG - 2016-10-09 12:53:01 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:53:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:53:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:53:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:53:02 --> Total execution time: 0.1166
DEBUG - 2016-10-09 12:53:05 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:53:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:53:05 --> Total execution time: 0.0086
DEBUG - 2016-10-09 12:53:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:53:10 --> No URI present. Default controller set.
DEBUG - 2016-10-09 12:53:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:53:10 --> Total execution time: 0.0168
DEBUG - 2016-10-09 12:53:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:53:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:53:12 --> Total execution time: 0.0150
DEBUG - 2016-10-09 12:53:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:53:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:53:12 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 12:53:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:53:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:53:12 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 12:53:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:53:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:53:15 --> Total execution time: 0.0202
DEBUG - 2016-10-09 12:53:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:53:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:53:15 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
DEBUG - 2016-10-09 12:53:15 --> Total execution time: 0.0114
DEBUG - 2016-10-09 12:53:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:53:15 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:53:15 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 12:53:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:53:15 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:53:15 --> 404 Page Not Found: Static/images
DEBUG - 2016-10-09 12:53:16 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:53:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:53:16 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 12:53:16 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 12:53:16 --> Total execution time: 0.0192
DEBUG - 2016-10-09 12:53:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:53:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:53:17 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 12:53:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:53:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:53:17 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 12:53:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:53:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:53:17 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 12:53:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:53:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:53:17 --> 404 Page Not Found: P/15
DEBUG - 2016-10-09 12:53:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:53:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 12:53:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 12:53:17 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 12:53:17 --> 404 Page Not Found: P/15
ERROR - 2016-10-09 12:53:17 --> 404 Page Not Found: P/15
DEBUG - 2016-10-09 15:12:51 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:12:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:12:51 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:12:51 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 15:12:51 --> 404 Page Not Found: Login/index
DEBUG - 2016-10-09 15:12:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:12:58 --> No URI present. Default controller set.
DEBUG - 2016-10-09 15:12:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:12:58 --> Total execution time: 0.0056
DEBUG - 2016-10-09 15:13:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:13:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:13:20 --> Total execution time: 0.3932
DEBUG - 2016-10-09 15:13:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:13:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:13:20 --> Total execution time: 0.0053
DEBUG - 2016-10-09 15:13:24 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:13:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:13:24 --> Total execution time: 0.0100
DEBUG - 2016-10-09 15:14:24 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:14:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:14:24 --> ORDER ID : 3
ERROR - 2016-10-09 15:14:24 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 15:14:24 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 15:14:24 --> Total execution time: 0.0110
DEBUG - 2016-10-09 15:15:34 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:15:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:15:34 --> ORDER ID : 3
ERROR - 2016-10-09 15:15:34 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 15:15:34 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 15:15:34 --> Total execution time: 0.0075
DEBUG - 2016-10-09 15:17:14 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:17:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:17:14 --> ORDER ID : 3
ERROR - 2016-10-09 15:17:14 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 15:17:14 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 15:17:14 --> Total execution time: 0.0072
DEBUG - 2016-10-09 15:17:24 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:17:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:17:24 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:17:24 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 15:17:24 --> 404 Page Not Found: Login/index
DEBUG - 2016-10-09 15:17:30 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:17:30 --> No URI present. Default controller set.
DEBUG - 2016-10-09 15:17:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:17:30 --> Total execution time: 0.0065
DEBUG - 2016-10-09 15:17:50 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:17:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:17:50 --> Total execution time: 0.4043
DEBUG - 2016-10-09 15:17:50 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:17:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:17:50 --> Total execution time: 0.0068
DEBUG - 2016-10-09 15:17:54 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:17:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:17:54 --> Total execution time: 0.0069
DEBUG - 2016-10-09 15:17:55 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:17:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:17:56 --> Total execution time: 0.0044
DEBUG - 2016-10-09 15:18:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:18:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:18:02 --> Total execution time: 0.0090
DEBUG - 2016-10-09 15:18:56 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:18:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:18:56 --> Total execution time: 0.0081
DEBUG - 2016-10-09 15:18:59 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:18:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:18:59 --> Total execution time: 0.0049
DEBUG - 2016-10-09 15:19:01 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:19:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:19:01 --> Total execution time: 0.0072
DEBUG - 2016-10-09 15:19:04 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:19:04 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 15:19:04 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 15:19:04 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 15:19:04 --> Total execution time: 0.0073
DEBUG - 2016-10-09 15:19:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:19:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:19:33 --> Exception : Class Disputes already exists and doesn't extend CI_Model
DEBUG - 2016-10-09 15:35:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:35:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:35:43 --> Exception : Class Disputes already exists and doesn't extend CI_Model
DEBUG - 2016-10-09 15:37:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:37:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:37:28 --> Exception : Class Disputes already exists and doesn't extend CI_Model
DEBUG - 2016-10-09 15:44:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:44:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:44:12 --> Exception : Class Disputes already exists and doesn't extend CI_Model
DEBUG - 2016-10-09 15:44:26 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:44:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:44:26 --> Exception : Class Disputes already exists and doesn't extend CI_Model
DEBUG - 2016-10-09 15:49:42 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:49:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:49:42 --> Exception : Class Disputes already exists and doesn't extend CI_Model
DEBUG - 2016-10-09 15:49:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:49:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:49:43 --> Exception : Class Disputes already exists and doesn't extend CI_Model
DEBUG - 2016-10-09 15:49:44 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:49:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:49:44 --> Exception : Class Disputes already exists and doesn't extend CI_Model
DEBUG - 2016-10-09 15:49:45 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:49:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:49:45 --> Exception : Class Disputes already exists and doesn't extend CI_Model
DEBUG - 2016-10-09 15:56:30 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:56:30 --> No URI present. Default controller set.
DEBUG - 2016-10-09 15:56:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:56:30 --> Total execution time: 0.0099
DEBUG - 2016-10-09 15:56:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:56:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:56:35 --> Total execution time: 0.0066
DEBUG - 2016-10-09 15:56:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:56:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 15:56:35 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 15:56:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:56:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 15:56:35 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 15:56:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:56:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:56:37 --> Total execution time: 0.0064
DEBUG - 2016-10-09 15:56:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:56:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:56:37 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
DEBUG - 2016-10-09 15:56:37 --> Total execution time: 0.0055
DEBUG - 2016-10-09 15:56:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:56:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 15:56:37 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 15:56:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:56:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 15:56:37 --> 404 Page Not Found: Static/images
DEBUG - 2016-10-09 15:56:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:56:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:56:43 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  AND HOUR BETWEEN 10 AND 9315 GROUP BY pid;
DEBUG - 2016-10-09 15:56:43 --> Total execution time: 0.0071
DEBUG - 2016-10-09 15:56:44 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:56:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:56:44 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  AND HOUR BETWEEN 10 AND 2490 GROUP BY pid;
DEBUG - 2016-10-09 15:56:44 --> Total execution time: 0.0042
DEBUG - 2016-10-09 15:56:49 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:56:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:56:49 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  AND HOUR BETWEEN 10 AND 7640 GROUP BY pid;
DEBUG - 2016-10-09 15:56:49 --> Total execution time: 0.0047
DEBUG - 2016-10-09 15:56:54 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:56:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:56:54 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  AND HOUR BETWEEN 10 AND 5245 GROUP BY pid;
DEBUG - 2016-10-09 15:56:54 --> Total execution time: 0.0066
DEBUG - 2016-10-09 15:57:04 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 15:57:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 15:57:04 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  AND HOUR BETWEEN 1855 AND 5245 GROUP BY pid;
DEBUG - 2016-10-09 15:57:04 --> Total execution time: 0.0050
DEBUG - 2016-10-09 16:00:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:00:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 16:00:10 --> Exception : Class Disputes already exists and doesn't extend CI_Model
DEBUG - 2016-10-09 16:00:11 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:00:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 16:00:11 --> Exception : Class Disputes already exists and doesn't extend CI_Model
DEBUG - 2016-10-09 16:00:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:00:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 16:00:12 --> Exception : Class Disputes already exists and doesn't extend CI_Model
DEBUG - 2016-10-09 16:00:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:00:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 16:00:13 --> Exception : Class Disputes already exists and doesn't extend CI_Model
DEBUG - 2016-10-09 16:00:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:00:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 16:00:13 --> Exception : Class Disputes already exists and doesn't extend CI_Model
DEBUG - 2016-10-09 16:00:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:00:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 16:00:13 --> Exception : Class Disputes already exists and doesn't extend CI_Model
DEBUG - 2016-10-09 16:00:36 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:00:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 16:00:36 --> Exception : Class Disputes already exists and doesn't extend CI_Model
DEBUG - 2016-10-09 16:00:50 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:00:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 16:00:50 --> Severity: error --> Exception: Class Disputes already exists and doesn't extend CI_Model /var/www/zemose/public_html/system/core/Loader.php 349
DEBUG - 2016-10-09 16:26:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:26:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 16:26:03 --> Severity: Warning --> set_exception_handler() expects the argument (HandleException) to be a valid callback /var/www/zemose/public_html/application/libraries/Exceptions.php 95
ERROR - 2016-10-09 16:26:03 --> Severity: error --> Exception: Unable to locate the model you have specified: DisputeMod /var/www/zemose/public_html/system/core/Loader.php 344
DEBUG - 2016-10-09 16:27:00 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:27:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 16:27:00 --> Exception : Unable to locate the model you have specified: DisputeMod
DEBUG - 2016-10-09 16:28:07 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:28:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 16:28:07 --> Exception : Unable to locate the model you have specified: DisputeMod
DEBUG - 2016-10-09 16:30:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:30:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 16:30:08 --> Severity: Parsing Error --> syntax error, unexpected '->' (T_OBJECT_OPERATOR) /var/www/zemose/public_html/application/controllers/Disputes.php 40
DEBUG - 2016-10-09 16:30:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:30:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 16:30:50 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:30:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 16:30:50 --> Severity: Error --> Call to undefined method DisputeModel::isAuthorizedZemose() /var/www/zemose/public_html/application/models/DisputeModel.php 39
DEBUG - 2016-10-09 16:31:46 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:31:46 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 16:31:46 --> Severity: Error --> Call to undefined method DisputeModel::isAuthorizedZemose() /var/www/zemose/public_html/application/models/DisputeModel.php 39
DEBUG - 2016-10-09 16:32:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:32:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 16:32:18 --> Severity: Error --> Call to undefined method DisputeModel::isAuthorizedZemoser() /var/www/zemose/public_html/application/models/DisputeModel.php 39
DEBUG - 2016-10-09 16:32:40 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:32:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 16:32:40 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:32:40 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 16:32:40 --> 404 Page Not Found: Disputes/index
DEBUG - 2016-10-09 16:33:31 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:33:31 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 16:33:31 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 16:33:31 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 16:33:31 --> Total execution time: 0.0079
DEBUG - 2016-10-09 16:33:36 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:33:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 16:33:36 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:33:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 16:33:36 --> 404 Page Not Found: Disputes/index
DEBUG - 2016-10-09 16:33:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:33:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 16:33:53 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 16:33:53 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 16:33:53 --> Total execution time: 0.0069
DEBUG - 2016-10-09 16:34:16 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:34:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 16:34:16 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 16:34:16 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 16:34:16 --> Total execution time: 0.0089
DEBUG - 2016-10-09 16:34:51 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:34:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 16:34:51 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:34:51 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 16:34:51 --> 404 Page Not Found: Disputes/view
DEBUG - 2016-10-09 16:35:18 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:35:18 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 16:35:18 --> 404 Page Not Found: Disputes/view
DEBUG - 2016-10-09 16:43:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:43:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 16:43:53 --> Total execution time: 0.0071
DEBUG - 2016-10-09 16:43:53 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:43:53 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 16:43:53 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 16:43:54 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:43:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 16:43:54 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 16:44:06 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:44:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 16:44:06 --> Total execution time: 0.0052
DEBUG - 2016-10-09 16:44:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:44:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 16:44:08 --> Total execution time: 0.0066
DEBUG - 2016-10-09 16:44:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:44:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 16:44:08 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 16:44:08 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:44:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 16:44:08 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 16:44:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:44:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 16:44:10 --> Total execution time: 0.0049
DEBUG - 2016-10-09 16:44:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:44:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 16:44:13 --> Total execution time: 0.0430
DEBUG - 2016-10-09 16:44:21 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:44:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 16:44:21 --> Total execution time: 0.0033
DEBUG - 2016-10-09 16:54:55 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:54:55 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 16:54:55 --> Severity: Notice --> Undefined variable: not /var/www/zemose/public_html/application/controllers/Notifications.php 63
DEBUG - 2016-10-09 16:54:55 --> Total execution time: 0.0044
DEBUG - 2016-10-09 16:55:40 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:55:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 16:55:40 --> Total execution time: 0.0077
DEBUG - 2016-10-09 16:56:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:56:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 16:56:15 --> Total execution time: 0.0045
DEBUG - 2016-10-09 16:58:54 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 16:58:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 16:58:55 --> Total execution time: 0.0063
DEBUG - 2016-10-09 17:00:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:00:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:00:20 --> Total execution time: 0.0043
DEBUG - 2016-10-09 17:02:11 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:02:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:02:11 --> Total execution time: 0.0091
DEBUG - 2016-10-09 17:02:11 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:02:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 17:02:11 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 17:02:11 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:02:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 17:02:11 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 17:02:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:02:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:02:13 --> Total execution time: 0.0066
DEBUG - 2016-10-09 17:02:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:02:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:02:13 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
DEBUG - 2016-10-09 17:02:13 --> Total execution time: 0.0059
DEBUG - 2016-10-09 17:02:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:02:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 17:02:13 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 17:02:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:02:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 17:02:13 --> 404 Page Not Found: Static/images
DEBUG - 2016-10-09 17:02:19 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:02:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:02:19 --> Total execution time: 0.0052
DEBUG - 2016-10-09 17:02:21 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:02:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:02:21 --> Total execution time: 0.0044
DEBUG - 2016-10-09 17:02:23 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:02:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:02:23 --> Total execution time: 0.0049
DEBUG - 2016-10-09 17:02:24 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:02:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:02:24 --> Total execution time: 0.0058
DEBUG - 2016-10-09 17:02:30 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:02:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:02:30 --> Total execution time: 0.0073
DEBUG - 2016-10-09 17:02:34 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:02:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:02:34 --> Total execution time: 0.0056
DEBUG - 2016-10-09 17:02:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:02:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:02:37 --> Total execution time: 0.0222
DEBUG - 2016-10-09 17:02:56 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:02:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:02:56 --> Total execution time: 0.0055
DEBUG - 2016-10-09 17:02:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:02:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:02:58 --> Total execution time: 0.0044
DEBUG - 2016-10-09 17:03:45 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:03:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:03:45 --> Total execution time: 0.0640
DEBUG - 2016-10-09 17:03:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:03:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:03:48 --> Total execution time: 0.0057
DEBUG - 2016-10-09 17:04:00 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:04:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:04:00 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:04:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:04:00 --> Total execution time: 0.0051
DEBUG - 2016-10-09 17:04:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:04:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:04:10 --> Total execution time: 0.0054
DEBUG - 2016-10-09 17:04:14 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:04:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:04:14 --> Total execution time: 0.0073
DEBUG - 2016-10-09 17:04:29 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:04:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:04:29 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:04:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:04:29 --> Total execution time: 0.0029
DEBUG - 2016-10-09 17:04:34 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:04:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:04:34 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:04:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:04:34 --> Total execution time: 0.1016
DEBUG - 2016-10-09 17:04:44 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:04:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:04:45 --> Total execution time: 0.0477
DEBUG - 2016-10-09 17:04:45 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:04:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:04:45 --> Total execution time: 0.0051
DEBUG - 2016-10-09 17:04:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:04:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:04:49 --> Total execution time: 0.0043
DEBUG - 2016-10-09 17:04:51 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:04:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:04:51 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:04:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:04:51 --> Total execution time: 0.0031
DEBUG - 2016-10-09 17:04:51 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:04:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:04:52 --> Total execution time: 0.0052
DEBUG - 2016-10-09 17:05:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:05:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:05:02 --> Total execution time: 0.0052
DEBUG - 2016-10-09 17:05:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:05:17 --> No URI present. Default controller set.
DEBUG - 2016-10-09 17:05:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:05:17 --> Total execution time: 0.0078
DEBUG - 2016-10-09 17:05:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:05:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:05:20 --> Total execution time: 0.0055
DEBUG - 2016-10-09 17:05:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:05:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:05:22 --> Total execution time: 0.0061
DEBUG - 2016-10-09 17:05:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:05:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:05:52 --> Total execution time: 0.0067
DEBUG - 2016-10-09 17:05:55 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:05:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:05:55 --> Total execution time: 0.0061
DEBUG - 2016-10-09 17:05:55 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:05:55 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 17:05:55 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 17:05:56 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:05:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 17:05:56 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 17:05:57 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:05:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:05:57 --> Total execution time: 0.0063
DEBUG - 2016-10-09 17:05:57 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:05:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:05:57 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
DEBUG - 2016-10-09 17:05:57 --> Total execution time: 0.0045
DEBUG - 2016-10-09 17:05:57 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:05:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 17:05:57 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 17:05:57 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:05:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 17:05:57 --> 404 Page Not Found: Static/images
DEBUG - 2016-10-09 17:05:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:05:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 17:05:58 --> Severity: Notice --> Undefined variable: cats /var/www/zemose/public_html/application/views/view-header2.php 51
ERROR - 2016-10-09 17:05:58 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/zemose/public_html/application/views/view-header2.php 51
DEBUG - 2016-10-09 17:05:58 --> Total execution time: 0.0074
DEBUG - 2016-10-09 17:05:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:05:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 17:05:58 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 17:05:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:05:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 17:05:58 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 17:05:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:05:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:05:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:05:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 17:05:58 --> 404 Page Not Found: P/15
ERROR - 2016-10-09 17:05:58 --> 404 Page Not Found: P/15
DEBUG - 2016-10-09 17:05:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:05:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 17:05:58 --> 404 Page Not Found: P/15
DEBUG - 2016-10-09 17:05:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:05:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 17:05:58 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 17:06:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:06:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:06:52 --> Total execution time: 0.0072
DEBUG - 2016-10-09 17:06:56 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:06:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:06:56 --> Total execution time: 0.0074
DEBUG - 2016-10-09 17:07:01 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:07:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:07:01 --> Total execution time: 0.0043
DEBUG - 2016-10-09 17:07:57 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:07:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:07:57 --> Total execution time: 0.0044
DEBUG - 2016-10-09 17:08:01 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:08:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:08:01 --> Total execution time: 0.0049
DEBUG - 2016-10-09 17:10:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:20 --> Total execution time: 0.0046
DEBUG - 2016-10-09 17:10:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:20 --> Total execution time: 0.0054
DEBUG - 2016-10-09 17:10:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:22 --> Total execution time: 0.0045
DEBUG - 2016-10-09 17:10:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:22 --> Total execution time: 0.0051
DEBUG - 2016-10-09 17:10:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:25 --> Total execution time: 0.0085
DEBUG - 2016-10-09 17:10:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:25 --> Total execution time: 0.0043
DEBUG - 2016-10-09 17:10:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:25 --> Total execution time: 0.0052
DEBUG - 2016-10-09 17:10:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:25 --> Total execution time: 0.0041
DEBUG - 2016-10-09 17:10:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:25 --> Total execution time: 0.0047
DEBUG - 2016-10-09 17:10:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:25 --> Total execution time: 0.0052
DEBUG - 2016-10-09 17:10:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:25 --> Total execution time: 0.0046
DEBUG - 2016-10-09 17:10:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:25 --> Total execution time: 0.0084
DEBUG - 2016-10-09 17:10:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:25 --> Total execution time: 0.0051
DEBUG - 2016-10-09 17:10:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:25 --> Total execution time: 0.0089
DEBUG - 2016-10-09 17:10:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:25 --> Total execution time: 0.0048
DEBUG - 2016-10-09 17:10:26 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:26 --> Total execution time: 0.0042
DEBUG - 2016-10-09 17:10:26 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:26 --> Total execution time: 0.0040
DEBUG - 2016-10-09 17:10:26 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:26 --> Total execution time: 0.0047
DEBUG - 2016-10-09 17:10:26 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:26 --> Total execution time: 0.0044
DEBUG - 2016-10-09 17:10:26 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:26 --> Total execution time: 0.0040
DEBUG - 2016-10-09 17:10:26 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:26 --> Total execution time: 0.0069
DEBUG - 2016-10-09 17:10:26 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:26 --> Total execution time: 0.0054
DEBUG - 2016-10-09 17:10:26 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:26 --> Total execution time: 0.0039
DEBUG - 2016-10-09 17:10:26 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:26 --> Total execution time: 0.0048
DEBUG - 2016-10-09 17:10:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:28 --> Total execution time: 0.0053
DEBUG - 2016-10-09 17:10:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:28 --> Total execution time: 0.0041
DEBUG - 2016-10-09 17:10:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:28 --> Total execution time: 0.0089
DEBUG - 2016-10-09 17:10:28 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:28 --> Total execution time: 0.0042
DEBUG - 2016-10-09 17:10:29 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:29 --> Total execution time: 0.0067
DEBUG - 2016-10-09 17:10:29 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:29 --> Total execution time: 0.0044
DEBUG - 2016-10-09 17:10:29 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:29 --> Total execution time: 0.0056
DEBUG - 2016-10-09 17:10:29 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:29 --> Total execution time: 0.0051
DEBUG - 2016-10-09 17:10:29 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:29 --> Total execution time: 0.0056
DEBUG - 2016-10-09 17:10:29 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:29 --> Total execution time: 0.0049
DEBUG - 2016-10-09 17:10:29 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:29 --> Total execution time: 0.0068
DEBUG - 2016-10-09 17:10:29 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:29 --> Total execution time: 0.0048
DEBUG - 2016-10-09 17:10:29 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:29 --> Total execution time: 0.0049
DEBUG - 2016-10-09 17:10:30 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:30 --> Total execution time: 0.0045
DEBUG - 2016-10-09 17:10:30 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:30 --> Total execution time: 0.0048
DEBUG - 2016-10-09 17:10:30 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:30 --> Total execution time: 0.0049
DEBUG - 2016-10-09 17:10:30 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:30 --> Total execution time: 0.0056
DEBUG - 2016-10-09 17:10:31 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:31 --> Total execution time: 0.0052
DEBUG - 2016-10-09 17:10:31 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:31 --> Total execution time: 0.0060
DEBUG - 2016-10-09 17:10:31 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:31 --> Total execution time: 0.0052
DEBUG - 2016-10-09 17:10:31 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:31 --> Total execution time: 0.0064
DEBUG - 2016-10-09 17:10:31 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:31 --> Total execution time: 0.0057
DEBUG - 2016-10-09 17:10:31 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:31 --> Total execution time: 0.0043
DEBUG - 2016-10-09 17:10:31 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:31 --> Total execution time: 0.0043
DEBUG - 2016-10-09 17:10:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:33 --> Total execution time: 0.0059
DEBUG - 2016-10-09 17:10:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 17:10:33 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 17:10:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 17:10:33 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 17:10:36 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:36 --> Total execution time: 0.0059
DEBUG - 2016-10-09 17:10:36 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:36 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 17:10:36 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 17:10:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 17:10:37 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 17:10:41 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:10:41 --> No URI present. Default controller set.
DEBUG - 2016-10-09 17:10:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:10:41 --> Total execution time: 0.0068
DEBUG - 2016-10-09 17:17:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:17:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:17:03 --> Total execution time: 0.0052
DEBUG - 2016-10-09 17:18:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:18:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 17:18:27 --> Total execution time: 0.0064
DEBUG - 2016-10-09 17:18:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:18:27 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 17:18:27 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 17:18:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 17:18:27 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 17:18:27 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 18:05:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 18:05:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 18:05:25 --> Total execution time: 0.0042
DEBUG - 2016-10-09 20:04:14 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:04:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:04:14 --> Total execution time: 0.0142
DEBUG - 2016-10-09 20:04:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:04:15 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 20:04:15 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 20:04:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:04:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 20:04:22 --> 404 Page Not Found: Static/content
DEBUG - 2016-10-09 20:04:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:04:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:04:27 --> Total execution time: 0.0064
DEBUG - 2016-10-09 20:04:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:04:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:04:27 --> 
DEBUG - 2016-10-09 20:04:27 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:04:27 --> 1
DEBUG - 2016-10-09 20:04:27 --> Total execution time: 0.0055
DEBUG - 2016-10-09 20:04:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:04:27 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:04:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:04:27 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 20:04:27 --> 404 Page Not Found: Static/css
ERROR - 2016-10-09 20:04:27 --> 404 Page Not Found: Static/images
DEBUG - 2016-10-09 20:04:29 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:04:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:04:29 --> 19
DEBUG - 2016-10-09 20:04:29 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(19)) AND active = 1 
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:04:29 --> 1
DEBUG - 2016-10-09 20:04:29 --> Total execution time: 0.0058
DEBUG - 2016-10-09 20:04:31 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:04:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:04:31 --> 19,20
DEBUG - 2016-10-09 20:04:31 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(19,20)) AND active = 1 
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:04:31 --> 1
DEBUG - 2016-10-09 20:04:31 --> Total execution time: 0.0089
DEBUG - 2016-10-09 20:04:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:04:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:04:32 --> 20
DEBUG - 2016-10-09 20:04:32 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(20)) AND active = 1 
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:04:32 --> 0
DEBUG - 2016-10-09 20:04:32 --> Total execution time: 0.0054
DEBUG - 2016-10-09 20:04:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:04:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:04:37 --> 19,20
DEBUG - 2016-10-09 20:04:37 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(19,20)) AND active = 1 
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:04:37 --> 1
DEBUG - 2016-10-09 20:04:37 --> Total execution time: 0.0055
DEBUG - 2016-10-09 20:04:43 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:04:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:04:43 --> 20
DEBUG - 2016-10-09 20:04:43 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(20)) AND active = 1 
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:04:43 --> 0
DEBUG - 2016-10-09 20:04:43 --> Total execution time: 0.0083
DEBUG - 2016-10-09 20:04:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:04:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:04:47 --> 19,20
DEBUG - 2016-10-09 20:04:47 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(19,20)) AND active = 1 
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:04:47 --> 1
DEBUG - 2016-10-09 20:04:47 --> Total execution time: 0.0053
DEBUG - 2016-10-09 20:04:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:04:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:04:52 --> 19
DEBUG - 2016-10-09 20:04:52 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(19)) AND active = 1 
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:04:52 --> 1
DEBUG - 2016-10-09 20:04:52 --> Total execution time: 0.0115
DEBUG - 2016-10-09 20:04:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:04:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:04:58 --> 19,20
DEBUG - 2016-10-09 20:04:58 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(19,20)) AND active = 1 
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:04:58 --> 1
DEBUG - 2016-10-09 20:04:58 --> Total execution time: 0.0055
DEBUG - 2016-10-09 20:04:59 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:04:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:04:59 --> 20
DEBUG - 2016-10-09 20:04:59 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(20)) AND active = 1 
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:04:59 --> 0
DEBUG - 2016-10-09 20:04:59 --> Total execution time: 0.0062
DEBUG - 2016-10-09 20:05:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:05:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:05:03 --> 19,20
DEBUG - 2016-10-09 20:05:03 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(19,20)) AND active = 1 
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:05:03 --> 1
DEBUG - 2016-10-09 20:05:03 --> Total execution time: 0.0042
DEBUG - 2016-10-09 20:05:20 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:05:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:05:20 --> Total execution time: 0.0305
DEBUG - 2016-10-09 20:05:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:05:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:05:25 --> Total execution time: 0.0033
DEBUG - 2016-10-09 20:05:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:05:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:05:33 --> Total execution time: 0.0329
DEBUG - 2016-10-09 20:05:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:05:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:05:33 --> Total execution time: 0.0047
DEBUG - 2016-10-09 20:05:35 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:05:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:05:35 --> Total execution time: 0.0064
DEBUG - 2016-10-09 20:05:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:05:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:05:58 --> 20
DEBUG - 2016-10-09 20:05:58 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(20)) AND active = 1 
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:05:58 --> 0
DEBUG - 2016-10-09 20:05:58 --> Total execution time: 0.0067
DEBUG - 2016-10-09 20:06:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:06:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:06:02 --> 19,20
DEBUG - 2016-10-09 20:06:02 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(19,20)) AND active = 1 
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:06:02 --> 1
DEBUG - 2016-10-09 20:06:02 --> Total execution time: 0.0071
DEBUG - 2016-10-09 20:06:41 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:06:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:06:41 --> 20
DEBUG - 2016-10-09 20:06:41 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(20)) AND active = 1 
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:06:41 --> 0
DEBUG - 2016-10-09 20:06:41 --> Total execution time: 0.0079
DEBUG - 2016-10-09 20:06:47 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:06:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:06:47 --> 
DEBUG - 2016-10-09 20:06:47 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:06:47 --> 1
DEBUG - 2016-10-09 20:06:47 --> Total execution time: 0.0092
DEBUG - 2016-10-09 20:08:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:08:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:08:12 --> 19
DEBUG - 2016-10-09 20:08:12 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(19)) AND active = 1 
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:08:12 --> 1
DEBUG - 2016-10-09 20:08:12 --> Total execution time: 0.0056
DEBUG - 2016-10-09 20:08:14 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:08:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:08:14 --> 19,20
DEBUG - 2016-10-09 20:08:14 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(19,20)) AND active = 1 
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:08:14 --> 1
DEBUG - 2016-10-09 20:08:14 --> Total execution time: 0.0058
DEBUG - 2016-10-09 20:08:19 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:08:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:08:19 --> 19
DEBUG - 2016-10-09 20:08:19 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(19)) AND active = 1 
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:08:19 --> 1
DEBUG - 2016-10-09 20:08:19 --> Total execution time: 0.0056
DEBUG - 2016-10-09 20:08:21 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:08:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:08:21 --> 19,20
DEBUG - 2016-10-09 20:08:21 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(19,20)) AND active = 1 
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:08:21 --> 1
DEBUG - 2016-10-09 20:08:21 --> Total execution time: 0.0057
DEBUG - 2016-10-09 20:08:22 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:08:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:08:22 --> 20
DEBUG - 2016-10-09 20:08:22 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(20)) AND active = 1 
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:08:22 --> 0
DEBUG - 2016-10-09 20:08:22 --> Total execution time: 0.0056
DEBUG - 2016-10-09 20:08:48 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:08:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:08:48 --> 20
DEBUG - 2016-10-09 20:08:48 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(20)) AND active = 1 
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:08:48 --> 0
DEBUG - 2016-10-09 20:08:48 --> Total execution time: 0.0043
DEBUG - 2016-10-09 20:08:51 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:08:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:08:51 --> 20
DEBUG - 2016-10-09 20:08:51 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(20)) AND active = 1 
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:08:51 --> 0
DEBUG - 2016-10-09 20:08:51 --> Total execution time: 0.0041
DEBUG - 2016-10-09 20:08:51 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:08:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:08:51 --> 20
DEBUG - 2016-10-09 20:08:51 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(20)) AND active = 1 
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:08:51 --> 0
DEBUG - 2016-10-09 20:08:51 --> Total execution time: 0.0055
DEBUG - 2016-10-09 20:08:52 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:08:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:08:52 --> 20
DEBUG - 2016-10-09 20:08:52 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE product_id IN( SELECT product_id FROM `product_filters` WHERE filter_id IN(20)) AND active = 1 
                    ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:08:52 --> 0
DEBUG - 2016-10-09 20:08:52 --> Total execution time: 0.0062
DEBUG - 2016-10-09 20:08:54 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:08:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:08:54 --> Total execution time: 0.0058
DEBUG - 2016-10-09 20:08:54 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:08:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:08:54 --> 
DEBUG - 2016-10-09 20:08:54 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:08:54 --> 1
DEBUG - 2016-10-09 20:08:54 --> Total execution time: 0.0074
DEBUG - 2016-10-09 20:08:54 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:08:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 20:08:54 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-09 20:08:54 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:08:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 20:08:54 --> 404 Page Not Found: Static/images
DEBUG - 2016-10-09 20:08:59 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:08:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:08:59 --> 
DEBUG - 2016-10-09 20:08:59 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:08:59 --> 1
DEBUG - 2016-10-09 20:08:59 --> Total execution time: 0.0055
DEBUG - 2016-10-09 20:09:00 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:09:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:09:00 --> 
DEBUG - 2016-10-09 20:09:00 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:09:00 --> 1
DEBUG - 2016-10-09 20:09:00 --> Total execution time: 0.0042
DEBUG - 2016-10-09 20:09:00 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:09:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:09:00 --> 
DEBUG - 2016-10-09 20:09:00 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:09:00 --> 1
DEBUG - 2016-10-09 20:09:00 --> Total execution time: 0.0052
DEBUG - 2016-10-09 20:09:01 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:09:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:09:01 --> 
DEBUG - 2016-10-09 20:09:01 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:09:01 --> 1
DEBUG - 2016-10-09 20:09:01 --> Total execution time: 0.0052
DEBUG - 2016-10-09 20:09:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:09:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:09:02 --> 
DEBUG - 2016-10-09 20:09:02 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:09:02 --> 1
DEBUG - 2016-10-09 20:09:02 --> Total execution time: 0.0051
DEBUG - 2016-10-09 20:09:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:09:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:09:02 --> 
DEBUG - 2016-10-09 20:09:02 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:09:02 --> 1
DEBUG - 2016-10-09 20:09:02 --> Total execution time: 0.0041
DEBUG - 2016-10-09 20:09:05 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:09:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:09:05 --> 
DEBUG - 2016-10-09 20:09:05 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR BETWEEN 10 AND 10 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:09:05 --> 1
DEBUG - 2016-10-09 20:09:05 --> Total execution time: 0.0046
DEBUG - 2016-10-09 20:09:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:09:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:09:15 --> 
DEBUG - 2016-10-09 20:09:15 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND DAY BETWEEN 200 AND 200 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:09:15 --> 1
DEBUG - 2016-10-09 20:09:15 --> Total execution time: 0.0052
DEBUG - 2016-10-09 20:09:19 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:09:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:09:19 --> 
DEBUG - 2016-10-09 20:09:19 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND MONTH BETWEEN 1000 AND 1000 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:09:19 --> 1
DEBUG - 2016-10-09 20:09:19 --> Total execution time: 0.0055
DEBUG - 2016-10-09 20:09:25 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:09:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:09:25 --> 
DEBUG - 2016-10-09 20:09:25 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND MONTH BETWEEN 1000 AND 1000 GROUP BY pid ORDER BY MONTH ASC LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:09:25 --> 1
DEBUG - 2016-10-09 20:09:25 --> Total execution time: 0.0079
DEBUG - 2016-10-09 20:09:26 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:09:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:09:26 --> 
DEBUG - 2016-10-09 20:09:26 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND MONTH BETWEEN 1000 AND 1000 GROUP BY pid ORDER BY MONTH DESC LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:09:26 --> 1
DEBUG - 2016-10-09 20:09:26 --> Total execution time: 0.0055
DEBUG - 2016-10-09 20:09:29 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 20:09:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 20:09:29 --> 
DEBUG - 2016-10-09 20:09:29 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND MONTH BETWEEN 1000 AND 1000 GROUP BY pid ORDER BY p.date_modified DESC LIMIT 0, 6 ;
DEBUG - 2016-10-09 20:09:29 --> 1
DEBUG - 2016-10-09 20:09:29 --> Total execution time: 0.0078
DEBUG - 2016-10-09 23:24:10 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 23:24:10 --> No URI present. Default controller set.
DEBUG - 2016-10-09 23:24:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 23:24:11 --> Total execution time: 0.8188
DEBUG - 2016-10-09 23:24:12 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 23:24:12 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 23:24:12 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-10-09 23:24:36 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 23:24:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 23:24:36 --> Total execution time: 0.2288
DEBUG - 2016-10-09 23:24:36 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 23:24:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 23:24:36 --> Total execution time: 0.0189
DEBUG - 2016-10-09 23:25:02 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 23:25:02 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 23:25:02 --> Severity: Warning --> Missing argument 1 for Test::getPpic() /var/www/zemose/public_html/application/controllers/Test.php 91
ERROR - 2016-10-09 23:25:02 --> Severity: Notice --> Undefined variable: user_id /var/www/zemose/public_html/application/controllers/Test.php 94
ERROR - 2016-10-09 23:25:02 --> Severity: Notice --> Undefined offset: 0 /var/www/zemose/public_html/application/controllers/Test.php 95
ERROR - 2016-10-09 23:25:02 --> Severity: Notice --> Trying to get property of non-object /var/www/zemose/public_html/application/models/RESTModel.php 46
DEBUG - 2016-10-09 23:25:02 --> Total execution time: 0.1837
DEBUG - 2016-10-09 23:25:56 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 23:25:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 23:25:56 --> Total execution time: 0.0060
DEBUG - 2016-10-09 23:27:13 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 23:27:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 23:27:13 --> Total execution time: 0.0075
DEBUG - 2016-10-09 23:42:14 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 23:42:14 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 23:42:14 --> 404 Page Not Found: v1/REST/index
DEBUG - 2016-10-09 23:42:19 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 23:42:19 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-09 23:42:19 --> 404 Page Not Found: v1/User/index
DEBUG - 2016-10-09 23:45:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 23:45:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 23:45:58 --> Total execution time: 0.0856
DEBUG - 2016-10-09 23:46:06 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 23:46:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 23:46:06 --> UTF-8 Support Enabled
DEBUG - 2016-10-09 23:46:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-09 23:46:06 --> Total execution time: 0.7788
DEBUG - 2016-10-09 23:46:08 --> Total execution time: 1.9499
