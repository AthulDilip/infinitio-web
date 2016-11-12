<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-11-02 00:08:26 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 00:08:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 00:08:26 --> Total execution time: 0.0075
DEBUG - 2016-11-02 00:08:38 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 00:08:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 00:08:38 --> Total execution time: 0.0075
DEBUG - 2016-11-02 00:08:38 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 00:08:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 00:08:38 --> 
DEBUG - 2016-11-02 00:08:38 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-11-02 00:08:38 --> 1
DEBUG - 2016-11-02 00:08:38 --> Total execution time: 0.0057
DEBUG - 2016-11-02 00:08:38 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 00:08:38 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-02 00:08:38 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-02 00:08:38 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 00:08:38 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-02 00:08:38 --> 404 Page Not Found: Static/images
DEBUG - 2016-11-02 00:08:40 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 00:08:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 00:08:40 --> [{"inventory_id":"5","user_id":"2","latitude":"11.120298","longitude":"76.119965","location":"Manjeri, Kerala, India","zemose_type":"request","quantity":"10","deposit":"100","price_hour":"1","price_day":"0","price_month":"0","p_price_hour":"10","p_price_day":null,"p_price_month":null,"skilled_labour":"0","c_skilled_labour":"0","s_price_hour":"0","s_price_day":"0","s_price_month":"0","p_s_price_hour":null,"p_s_price_day":null,"p_s_price_month":null,"provide_delivery":"0","p_delivery":"0","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"0","row_disabled":"1","shopname":"Hello World Rental Portal","shopaddress":"Thangalpadi","city":"Thangalpadi, Kerala, India","lat":"11.057568","lon":"76.005821"},{"inventory_id":"24","user_id":"15","latitude":"45.493050","longitude":"12.417700","location":"Venice, Italy","zemose_type":"request","quantity":"10","deposit":"1000","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"10","p_price_day":"100","p_price_month":"4000","skilled_labour":"1","c_skilled_labour":"1","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"1200","p_s_price_day":"2300","p_s_price_month":"30000","provide_delivery":"1","p_delivery":"1000","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"50","row_disabled":"0","shopname":"Veliancode Hardwares","shopaddress":"Veliancode P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128"},{"inventory_id":"8","user_id":"15","latitude":"10.727724","longitude":"75.948128","location":"Veliancode, Kerala, India","zemose_type":"request","quantity":"1","deposit":"500","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"20","p_price_day":"200","p_price_month":"1000","skilled_labour":"1","c_skilled_labour":"0","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"100","p_s_price_day":"600","p_s_price_month":"5000","provide_delivery":"0","p_delivery":"0","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"0","row_disabled":"1","shopname":"Veliancode Hardwares","shopaddress":"Veliancode P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128"},{"inventory_id":"9","user_id":"22","latitude":"0.000000","longitude":"0.000000","location":"126 Princes Highway, Bolwarra, Victoria, Australia","zemose_type":"request","quantity":"10","deposit":"1000","price_hour":"1","price_day":"0","price_month":"0","p_price_hour":"100","p_price_day":null,"p_price_month":null,"skilled_labour":"0","c_skilled_labour":"0","s_price_hour":"0","s_price_day":"0","s_price_month":"0","p_s_price_hour":null,"p_s_price_day":null,"p_s_price_month":null,"provide_delivery":"0","p_delivery":"0","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"0","row_disabled":"1","shopname":"Maliyakkal Stores","shopaddress":"Veliancode, P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128"},{"inventory_id":"6","user_id":"6","latitude":"19.751480","longitude":"75.713890","location":"Maharashtra, India","zemose_type":"request","quantity":"10","deposit":"3000","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"350","p_price_day":"3500","p_price_month":"35000","skilled_labour":"1","c_skilled_labour":"1","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"300","p_s_price_day":"500","p_s_price_month":"4810","provide_delivery":"0","p_delivery":"1220","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"0","row_disabled":"1","shopname":"zemose india","shopaddress":"malappuram","city":"Malappuram, Kerala, India","lat":"11.073182","lon":"76.073997"}]
DEBUG - 2016-11-02 00:08:40 --> product id used
DEBUG - 2016-11-02 00:08:40 --> Total execution time: 0.0103
DEBUG - 2016-11-02 00:08:40 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 00:08:40 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 00:08:40 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-02 00:08:40 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-02 00:08:40 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-02 00:08:40 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-02 00:08:40 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 00:08:40 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-02 00:08:40 --> 404 Page Not Found: Static/css
DEBUG - 2016-11-02 00:08:40 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 00:08:40 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-02 00:08:40 --> 404 Page Not Found: P/15
DEBUG - 2016-11-02 00:08:40 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 00:08:40 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-02 00:08:40 --> 404 Page Not Found: P/15
DEBUG - 2016-11-02 00:08:40 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 00:08:40 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-02 00:08:40 --> 404 Page Not Found: P/15
DEBUG - 2016-11-02 12:44:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 12:44:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 12:44:33 --> Total execution time: 0.2413
DEBUG - 2016-11-02 12:44:34 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 12:44:34 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-02 12:44:34 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-11-02 12:44:45 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 12:44:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 12:44:45 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 12:44:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 12:44:45 --> Total execution time: 0.0391
DEBUG - 2016-11-02 12:46:43 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 12:46:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 12:46:43 --> Total execution time: 0.0051
DEBUG - 2016-11-02 12:46:46 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 12:46:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 12:46:46 --> Total execution time: 0.0076
DEBUG - 2016-11-02 12:50:14 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 12:50:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 12:50:14 --> Total execution time: 0.0055
DEBUG - 2016-11-02 12:50:35 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 12:50:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 12:50:35 --> Total execution time: 0.0058
DEBUG - 2016-11-02 12:50:40 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 12:50:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 12:50:40 --> Total execution time: 0.0227
DEBUG - 2016-11-02 13:08:15 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:08:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:08:15 --> Total execution time: 0.0029
DEBUG - 2016-11-02 13:08:17 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:08:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:08:17 --> Total execution time: 0.0048
DEBUG - 2016-11-02 13:09:01 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:09:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:09:01 --> Total execution time: 0.0033
DEBUG - 2016-11-02 13:09:03 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:09:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:09:03 --> Total execution time: 0.0037
DEBUG - 2016-11-02 13:09:04 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:09:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:09:04 --> Total execution time: 0.0040
DEBUG - 2016-11-02 13:09:07 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:09:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:09:07 --> Total execution time: 0.0063
DEBUG - 2016-11-02 13:09:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:09:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:09:08 --> Total execution time: 0.0033
DEBUG - 2016-11-02 13:09:10 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:09:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:09:10 --> Total execution time: 0.0032
DEBUG - 2016-11-02 13:09:11 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:09:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:09:11 --> Total execution time: 0.0033
DEBUG - 2016-11-02 13:09:15 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:09:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:09:15 --> Total execution time: 0.0042
DEBUG - 2016-11-02 13:09:18 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:09:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:09:18 --> Total execution time: 0.0071
DEBUG - 2016-11-02 13:09:19 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:09:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:09:19 --> Total execution time: 0.0031
DEBUG - 2016-11-02 13:09:22 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:09:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:09:22 --> Total execution time: 0.0034
DEBUG - 2016-11-02 13:10:29 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:10:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:10:29 --> Total execution time: 0.0033
DEBUG - 2016-11-02 13:10:29 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:10:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:10:29 --> Total execution time: 0.0068
DEBUG - 2016-11-02 13:10:34 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:10:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:10:34 --> Total execution time: 0.0058
DEBUG - 2016-11-02 13:10:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:10:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:10:37 --> Total execution time: 0.0025
DEBUG - 2016-11-02 13:10:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:10:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:10:37 --> Total execution time: 0.0037
DEBUG - 2016-11-02 13:10:39 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:10:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:10:39 --> Total execution time: 0.0029
DEBUG - 2016-11-02 13:10:40 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:10:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:10:40 --> Total execution time: 0.0029
DEBUG - 2016-11-02 13:10:40 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:10:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:10:40 --> Total execution time: 0.0041
DEBUG - 2016-11-02 13:10:42 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:10:42 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-02 13:10:42 --> 404 Page Not Found: gdf79/Coupons/remove
DEBUG - 2016-11-02 13:10:46 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:10:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:10:46 --> Total execution time: 0.0026
DEBUG - 2016-11-02 13:10:46 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 13:10:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 13:10:46 --> Total execution time: 0.0034
DEBUG - 2016-11-02 17:21:22 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:21:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:21:22 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:21:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:21:22 --> Total execution time: 0.0022
DEBUG - 2016-11-02 17:21:28 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:21:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:21:28 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:21:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:21:28 --> Total execution time: 0.0026
DEBUG - 2016-11-02 17:41:44 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:41:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:41:44 --> Total execution time: 0.0039
DEBUG - 2016-11-02 17:41:46 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:41:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:41:46 --> Total execution time: 0.0043
DEBUG - 2016-11-02 17:41:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:41:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:41:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:41:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:41:49 --> Total execution time: 0.0031
DEBUG - 2016-11-02 17:41:50 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:41:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:41:50 --> Total execution time: 0.0044
DEBUG - 2016-11-02 17:42:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:42:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:42:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:42:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:42:08 --> Total execution time: 0.0028
DEBUG - 2016-11-02 17:42:08 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:42:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:42:08 --> Total execution time: 0.0042
DEBUG - 2016-11-02 17:43:28 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:43:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:43:28 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:43:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:43:28 --> Total execution time: 0.0025
DEBUG - 2016-11-02 17:43:28 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:43:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:43:28 --> Total execution time: 0.0050
DEBUG - 2016-11-02 17:44:36 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:36 --> Total execution time: 0.0034
DEBUG - 2016-11-02 17:44:36 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:36 --> Total execution time: 0.0044
DEBUG - 2016-11-02 17:44:39 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:39 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:39 --> Total execution time: 0.0027
DEBUG - 2016-11-02 17:44:39 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:39 --> Total execution time: 0.0068
DEBUG - 2016-11-02 17:44:41 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:41 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:41 --> Total execution time: 0.0026
DEBUG - 2016-11-02 17:44:41 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:41 --> Total execution time: 0.0038
DEBUG - 2016-11-02 17:44:42 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:42 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:42 --> Total execution time: 0.0026
DEBUG - 2016-11-02 17:44:43 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:43 --> Total execution time: 0.0032
DEBUG - 2016-11-02 17:44:44 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:44 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:44 --> Total execution time: 0.0029
DEBUG - 2016-11-02 17:44:44 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:44 --> Total execution time: 0.0040
DEBUG - 2016-11-02 17:44:46 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:46 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:46 --> Total execution time: 0.0034
DEBUG - 2016-11-02 17:44:46 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:46 --> Total execution time: 0.0044
DEBUG - 2016-11-02 17:44:47 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:47 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:47 --> Total execution time: 0.0027
DEBUG - 2016-11-02 17:44:47 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:47 --> Total execution time: 0.0044
DEBUG - 2016-11-02 17:44:48 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:48 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:48 --> Total execution time: 0.0027
DEBUG - 2016-11-02 17:44:48 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:48 --> Total execution time: 0.0042
DEBUG - 2016-11-02 17:44:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:49 --> Total execution time: 0.0025
DEBUG - 2016-11-02 17:44:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:49 --> Total execution time: 0.0041
DEBUG - 2016-11-02 17:44:51 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:51 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:51 --> Total execution time: 0.0025
DEBUG - 2016-11-02 17:44:51 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:51 --> Total execution time: 0.0038
DEBUG - 2016-11-02 17:44:52 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:52 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:52 --> Total execution time: 0.0027
DEBUG - 2016-11-02 17:44:52 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:52 --> Total execution time: 0.0047
DEBUG - 2016-11-02 17:44:53 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:53 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:53 --> Total execution time: 0.0026
DEBUG - 2016-11-02 17:44:53 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:44:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:44:53 --> Total execution time: 0.0039
DEBUG - 2016-11-02 17:46:09 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:46:09 --> No URI present. Default controller set.
DEBUG - 2016-11-02 17:46:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:46:10 --> Total execution time: 0.7646
DEBUG - 2016-11-02 17:46:19 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:46:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:46:19 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:46:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:46:19 --> Total execution time: 0.0030
DEBUG - 2016-11-02 17:46:19 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:46:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:46:19 --> Total execution time: 0.0043
DEBUG - 2016-11-02 17:46:23 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:46:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:46:23 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:46:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:46:23 --> Total execution time: 0.0028
DEBUG - 2016-11-02 17:46:23 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 17:46:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 17:46:23 --> Total execution time: 0.0042
DEBUG - 2016-11-02 21:19:28 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:19:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:19:29 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:19:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:19:29 --> Total execution time: 0.0230
DEBUG - 2016-11-02 21:19:29 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:19:29 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-02 21:19:29 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-11-02 21:19:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:19:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:19:33 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:19:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:19:33 --> Total execution time: 0.0353
DEBUG - 2016-11-02 21:22:57 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:22:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:22:57 --> Total execution time: 0.0034
DEBUG - 2016-11-02 21:23:02 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:23:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:23:02 --> Total execution time: 0.0349
DEBUG - 2016-11-02 21:23:03 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:23:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:23:03 --> Total execution time: 0.0132
DEBUG - 2016-11-02 21:23:06 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:23:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:23:06 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:23:06 --> No URI present. Default controller set.
DEBUG - 2016-11-02 21:23:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:23:06 --> Total execution time: 0.1916
DEBUG - 2016-11-02 21:23:22 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:23:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:23:22 --> Total execution time: 0.0031
DEBUG - 2016-11-02 21:23:30 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:23:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:23:30 --> []
DEBUG - 2016-11-02 21:23:30 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:23:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:23:30 --> Total execution time: 0.0028
DEBUG - 2016-11-02 21:23:38 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:23:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:23:38 --> [{"id":"1","username":"zemose","password":"a3310e985390d1c8f049701cc682e622","access":"ALL","email":"admin@zemose.com","last_login":"2016-11-02 03:49:33","failed_login":"5","active":"1"}]
DEBUG - 2016-11-02 21:23:38 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:23:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:23:38 --> Total execution time: 0.0030
DEBUG - 2016-11-02 21:25:48 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:25:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:25:48 --> SELECT  * FROM visitors WHERE visitor_id = ?
DEBUG - 2016-11-02 21:25:48 --> Total execution time: 0.0302
DEBUG - 2016-11-02 21:25:50 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:25:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:25:50 --> SELECT  * FROM visitors WHERE visitor_id = ?
DEBUG - 2016-11-02 21:25:50 --> SELECT * FROM filter_group fg LEFT JOIN filter_group_description fgd ON (fg.filter_group_id = fgd.filter_group_id) WHERE language_id = 1 LIMIT ?,?
DEBUG - 2016-11-02 21:25:50 --> SELECT COUNT(*) as total FROM filter_group fg LEFT JOIN filter_group_description fgd ON (fg.filter_group_id = fgd.filter_group_id) WHERE language_id = 1
DEBUG - 2016-11-02 21:25:50 --> Total execution time: 0.0053
DEBUG - 2016-11-02 21:25:53 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:25:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:25:53 --> SELECT  * FROM visitors WHERE visitor_id = ?
DEBUG - 2016-11-02 21:25:53 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:25:53 --> No URI present. Default controller set.
DEBUG - 2016-11-02 21:25:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:25:53 --> SELECT  * FROM visitors WHERE visitor_id = ?
DEBUG - 2016-11-02 21:25:53 --> SELECT * FROM category c LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1 AND c.parent_id = 0;
DEBUG - 2016-11-02 21:25:53 --> SELECT * FROM featured_products fp LEFT JOIN products p ON (fp.product_id = p.product_id) 
                LEFT JOIN product_description pd ON (pd.product_id = p.product_id) LEFT JOIN product_images pi ON (pi.product_id = p.product_id)
                 WHERE pd.language_id = 1
DEBUG - 2016-11-02 21:25:53 --> SELECT * FROM category c LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1 AND c.parent_id = ?;
DEBUG - 2016-11-02 21:25:53 --> SELECT * FROM category c LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1 AND c.parent_id = ?;
DEBUG - 2016-11-02 21:25:53 --> SELECT * FROM category c LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1 AND c.parent_id = ?;
DEBUG - 2016-11-02 21:25:53 --> SELECT * FROM category c LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1 AND c.parent_id = ?;
DEBUG - 2016-11-02 21:25:53 --> SELECT * FROM users WHERE id = ?
DEBUG - 2016-11-02 21:25:53 --> Total execution time: 0.0071
DEBUG - 2016-11-02 21:25:58 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:25:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:25:58 --> SELECT  * FROM visitors WHERE visitor_id = ?
DEBUG - 2016-11-02 21:25:58 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:25:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:25:58 --> SELECT  * FROM visitors WHERE visitor_id = ?
DEBUG - 2016-11-02 21:25:58 --> Total execution time: 0.0027
DEBUG - 2016-11-02 21:26:06 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:26:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:26:06 --> SELECT  * FROM visitors WHERE visitor_id = ?
DEBUG - 2016-11-02 21:26:06 --> SELECT * FROM admins WHERE username = ? AND password = ?
DEBUG - 2016-11-02 21:26:06 --> [{"id":"1","username":"zemose","password":"a3310e985390d1c8f049701cc682e622","access":"ALL","email":"admin@zemose.com","last_login":"2016-11-02 03:53:38","failed_login":"5","active":"1"}]
DEBUG - 2016-11-02 15:56:06 --> UPDATE admins SET last_login = ? WHERE id = ?
DEBUG - 2016-11-02 21:26:06 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:26:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:26:06 --> SELECT  * FROM visitors WHERE visitor_id = ?
DEBUG - 2016-11-02 21:26:06 --> Total execution time: 0.0028
DEBUG - 2016-11-02 21:30:58 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:30:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:30:58 --> Total execution time: 0.0056
DEBUG - 2016-11-02 21:31:01 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:31:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:31:01 --> Total execution time: 0.0042
DEBUG - 2016-11-02 21:31:05 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:31:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:31:05 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:31:05 --> No URI present. Default controller set.
DEBUG - 2016-11-02 21:31:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:31:05 --> Total execution time: 0.0060
DEBUG - 2016-11-02 21:34:13 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:34:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:34:13 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:34:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:34:13 --> Total execution time: 0.0029
DEBUG - 2016-11-02 21:34:20 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:34:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:34:20 --> [{"id":"1","username":"zemose","password":"a3310e985390d1c8f049701cc682e622","access":"ALL","email":"admin@zemose.com","last_login":"2016-11-02 03:56:06","failed_login":"5","active":"1"}]
DEBUG - 2016-11-02 21:34:21 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:34:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:34:21 --> Total execution time: 0.0026
DEBUG - 2016-11-02 21:34:28 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:34:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:34:28 --> Total execution time: 0.0035
DEBUG - 2016-11-02 21:34:28 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:34:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:34:28 --> Total execution time: 0.0042
DEBUG - 2016-11-02 21:34:32 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:34:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:34:32 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:34:32 --> No URI present. Default controller set.
DEBUG - 2016-11-02 21:34:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:34:32 --> Total execution time: 0.0048
DEBUG - 2016-11-02 21:36:34 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:36:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:36:34 --> SELECT  * FROM visitors WHERE visitor_id = '189'
DEBUG - 2016-11-02 21:36:34 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:36:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:36:34 --> SELECT  * FROM visitors WHERE visitor_id = '189'
DEBUG - 2016-11-02 21:36:34 --> Total execution time: 0.0024
DEBUG - 2016-11-02 21:36:44 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:36:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:36:44 --> SELECT  * FROM visitors WHERE visitor_id = '189'
DEBUG - 2016-11-02 21:36:44 --> SELECT * FROM admins WHERE username = 0 AND password = 'a3310e985390d1c8f049701cc682e622'
DEBUG - 2016-11-02 21:36:44 --> [{"id":"1","username":"zemose","password":"a3310e985390d1c8f049701cc682e622","access":"ALL","email":"admin@zemose.com","last_login":"2016-11-02 04:04:20","failed_login":"5","active":"1"}]
DEBUG - 2016-11-02 16:06:44 --> UPDATE admins SET last_login = '2016/11/02 04:06:44' WHERE id = 1
DEBUG - 2016-11-02 21:36:45 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:36:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:36:45 --> SELECT  * FROM visitors WHERE visitor_id = '189'
DEBUG - 2016-11-02 21:36:45 --> Total execution time: 0.0027
DEBUG - 2016-11-02 21:38:29 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:38:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:38:29 --> SELECT  * FROM visitors WHERE visitor_id = '189'
DEBUG - 2016-11-02 21:38:29 --> Total execution time: 0.0281
DEBUG - 2016-11-02 21:38:29 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:38:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:38:29 --> SELECT  * FROM visitors WHERE visitor_id = '189'
DEBUG - 2016-11-02 21:38:29 --> SELECT * FROM featured_category fc LEFT JOIN category c ON (fc.cid = c.cid) LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1
DEBUG - 2016-11-02 21:38:29 --> Total execution time: 0.0043
DEBUG - 2016-11-02 21:38:32 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:38:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:38:32 --> SELECT  * FROM visitors WHERE visitor_id = '189'
DEBUG - 2016-11-02 21:38:32 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:38:32 --> No URI present. Default controller set.
DEBUG - 2016-11-02 21:38:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:38:32 --> SELECT  * FROM visitors WHERE visitor_id = '189'
DEBUG - 2016-11-02 21:38:32 --> SELECT * FROM category c LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1 AND c.parent_id = 0;
DEBUG - 2016-11-02 21:38:32 --> SELECT * FROM featured_products fp LEFT JOIN products p ON (fp.product_id = p.product_id) 
                LEFT JOIN product_description pd ON (pd.product_id = p.product_id) LEFT JOIN product_images pi ON (pi.product_id = p.product_id)
                 WHERE pd.language_id = 1
DEBUG - 2016-11-02 21:38:32 --> SELECT * FROM category c LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1 AND c.parent_id = '7';
DEBUG - 2016-11-02 21:38:32 --> SELECT * FROM category c LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1 AND c.parent_id = '8';
DEBUG - 2016-11-02 21:38:32 --> SELECT * FROM category c LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1 AND c.parent_id = '9';
DEBUG - 2016-11-02 21:38:32 --> SELECT * FROM category c LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1 AND c.parent_id = '10';
DEBUG - 2016-11-02 21:38:32 --> SELECT * FROM users WHERE id = NULL
DEBUG - 2016-11-02 21:38:32 --> Total execution time: 0.0068
DEBUG - 2016-11-02 21:38:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:38:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:38:37 --> SELECT  * FROM visitors WHERE visitor_id = '189'
DEBUG - 2016-11-02 21:38:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:38:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:38:37 --> SELECT  * FROM visitors WHERE visitor_id = '189'
DEBUG - 2016-11-02 21:38:37 --> Total execution time: 0.0025
DEBUG - 2016-11-02 21:38:47 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:38:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:38:47 --> SELECT  * FROM visitors WHERE visitor_id = '189'
DEBUG - 2016-11-02 21:38:47 --> USERNAME : kflkf
DEBUG - 2016-11-02 21:38:47 --> SELECT * FROM admins WHERE username = 0 AND password = 'a3310e985390d1c8f049701cc682e622'
DEBUG - 2016-11-02 21:38:47 --> [{"id":"1","username":"zemose","password":"a3310e985390d1c8f049701cc682e622","access":"ALL","email":"admin@zemose.com","last_login":"2016-11-02 04:06:44","failed_login":"5","active":"1"}]
DEBUG - 2016-11-02 16:08:47 --> UPDATE admins SET last_login = '2016/11/02 04:08:47' WHERE id = 1
DEBUG - 2016-11-02 21:38:47 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:38:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:38:47 --> SELECT  * FROM visitors WHERE visitor_id = '189'
DEBUG - 2016-11-02 21:38:47 --> Total execution time: 0.0029
DEBUG - 2016-11-02 21:39:27 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:39:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:39:27 --> SELECT  * FROM visitors WHERE visitor_id = '189'
DEBUG - 2016-11-02 21:39:27 --> Total execution time: 0.0027
DEBUG - 2016-11-02 21:39:27 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:39:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:39:27 --> SELECT  * FROM visitors WHERE visitor_id = '189'
DEBUG - 2016-11-02 21:39:27 --> SELECT * FROM attribute_group ag LEFT JOIN attribute_group_description agd ON (ag.attribute_group_id = agd.attribute_group_id) WHERE agd.language_id = 1 LIMIT 0,10
DEBUG - 2016-11-02 21:39:27 --> SELECT COUNT(*) AS count FROM attribute_group
DEBUG - 2016-11-02 21:39:27 --> Total execution time: 0.0068
DEBUG - 2016-11-02 21:39:30 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:39:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:39:30 --> SELECT  * FROM visitors WHERE visitor_id = '189'
DEBUG - 2016-11-02 21:39:30 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:39:30 --> No URI present. Default controller set.
DEBUG - 2016-11-02 21:39:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:39:30 --> SELECT  * FROM visitors WHERE visitor_id = '189'
DEBUG - 2016-11-02 21:39:30 --> SELECT * FROM category c LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1 AND c.parent_id = 0;
DEBUG - 2016-11-02 21:39:30 --> SELECT * FROM featured_products fp LEFT JOIN products p ON (fp.product_id = p.product_id) 
                LEFT JOIN product_description pd ON (pd.product_id = p.product_id) LEFT JOIN product_images pi ON (pi.product_id = p.product_id)
                 WHERE pd.language_id = 1
DEBUG - 2016-11-02 21:39:30 --> SELECT * FROM category c LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1 AND c.parent_id = '7';
DEBUG - 2016-11-02 21:39:30 --> SELECT * FROM category c LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1 AND c.parent_id = '8';
DEBUG - 2016-11-02 21:39:30 --> SELECT * FROM category c LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1 AND c.parent_id = '9';
DEBUG - 2016-11-02 21:39:30 --> SELECT * FROM category c LEFT JOIN category_description cd ON (c.cid = cd.cid) WHERE cd.language_id = 1 AND c.parent_id = '10';
DEBUG - 2016-11-02 21:39:30 --> SELECT * FROM users WHERE id = NULL
DEBUG - 2016-11-02 21:39:30 --> Total execution time: 0.0064
DEBUG - 2016-11-02 21:39:35 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:39:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:39:35 --> SELECT  * FROM visitors WHERE visitor_id = '189'
DEBUG - 2016-11-02 21:39:35 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:39:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:39:35 --> SELECT  * FROM visitors WHERE visitor_id = '189'
DEBUG - 2016-11-02 21:39:35 --> Total execution time: 0.0024
DEBUG - 2016-11-02 21:39:51 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:39:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:39:51 --> SELECT  * FROM visitors WHERE visitor_id = '189'
DEBUG - 2016-11-02 21:39:51 --> USERNAME : lnjk
DEBUG - 2016-11-02 21:39:51 --> SELECT * FROM admins WHERE username = 'lnjk' AND password = 'a3310e985390d1c8f049701cc682e622'
DEBUG - 2016-11-02 21:39:51 --> []
DEBUG - 2016-11-02 21:39:51 --> SELECT * FROM admins WHERE username = 'lnjk'
DEBUG - 2016-11-02 21:39:51 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 21:39:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 21:39:51 --> SELECT  * FROM visitors WHERE visitor_id = '189'
DEBUG - 2016-11-02 21:39:51 --> Total execution time: 0.0023
DEBUG - 2016-11-02 22:05:45 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 22:05:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 22:05:45 --> Total execution time: 0.0237
DEBUG - 2016-11-02 23:21:54 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:21:54 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-02 23:21:54 --> 404 Page Not Found: v1/InventoryM/getProductByCategory
DEBUG - 2016-11-02 23:22:11 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:22:11 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-11-02 23:22:11 --> 404 Page Not Found: v1/InventoryM/getProductsByCategory
DEBUG - 2016-11-02 23:22:50 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:22:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:22:50 --> Total execution time: 0.1041
DEBUG - 2016-11-02 23:23:03 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:23:03 --> No URI present. Default controller set.
DEBUG - 2016-11-02 23:23:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:23:03 --> Total execution time: 0.0060
DEBUG - 2016-11-02 23:23:05 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:23:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:23:05 --> Total execution time: 0.0447
DEBUG - 2016-11-02 23:23:23 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:23:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:23:23 --> Total execution time: 0.0036
DEBUG - 2016-11-02 23:23:27 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:23:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:23:27 --> Total execution time: 0.0029
DEBUG - 2016-11-02 23:23:51 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:23:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:23:51 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:23:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:23:51 --> Total execution time: 0.0027
DEBUG - 2016-11-02 23:23:56 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:23:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:23:57 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:23:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:23:57 --> Total execution time: 0.0027
DEBUG - 2016-11-02 23:24:04 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:24:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:24:04 --> Total execution time: 0.0297
DEBUG - 2016-11-02 23:24:04 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:24:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:24:04 --> Total execution time: 0.0057
DEBUG - 2016-11-02 23:24:15 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:24:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:24:15 --> Total execution time: 0.0041
DEBUG - 2016-11-02 23:24:45 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:24:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:24:45 --> Total execution time: 0.0030
DEBUG - 2016-11-02 23:24:55 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:24:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:24:55 --> Total execution time: 0.0033
DEBUG - 2016-11-02 23:26:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:26:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:26:37 --> Total execution time: 0.0046
DEBUG - 2016-11-02 23:30:35 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:30:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:30:36 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:30:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:30:36 --> Total execution time: 0.0127
DEBUG - 2016-11-02 23:31:24 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:31:24 --> No URI present. Default controller set.
DEBUG - 2016-11-02 23:31:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:31:24 --> Total execution time: 0.0060
DEBUG - 2016-11-02 23:31:40 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:31:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:31:41 --> Total execution time: 0.2380
DEBUG - 2016-11-02 23:31:41 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:31:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:31:41 --> Total execution time: 0.0070
DEBUG - 2016-11-02 23:31:43 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:31:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:31:43 --> Total execution time: 0.0442
DEBUG - 2016-11-02 23:31:46 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:31:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:31:46 --> Total execution time: 0.0102
DEBUG - 2016-11-02 23:31:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:31:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:31:49 --> Total execution time: 0.0041
DEBUG - 2016-11-02 23:31:49 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:31:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:31:49 --> Total execution time: 0.0039
DEBUG - 2016-11-02 23:32:29 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:32:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:32:29 --> Total execution time: 0.0029
DEBUG - 2016-11-02 23:33:11 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:33:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:33:11 --> Total execution time: 0.0079
DEBUG - 2016-11-02 23:33:11 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:33:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:33:11 --> []
DEBUG - 2016-11-02 23:33:11 --> Total execution time: 0.0048
DEBUG - 2016-11-02 23:33:12 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:33:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:33:12 --> Total execution time: 0.0040
DEBUG - 2016-11-02 23:33:12 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:33:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:33:12 --> [{"zuid":"ZU100510","product_id":"15","active":"1","category_path":"7_","cid":"7","date_added":"2016-09-21 08:13:00","date_modified":"2016-10-08 10:44:40","is_request":"0","hits":"0","url":"Power_Mixerid15","row_disabled":"0","name":"Power Mixer","brand":"Draper","description":"Suitable for mixing plasters,mortar,floor sceed","video":"www.youtube.com\/microsoft","meta_title":"MIxer","meta_description":"Suitable for mixing plasters,mortar,floor sceed","meta_keywords":"concrete mixer ","language_id":"1"}]
DEBUG - 2016-11-02 23:33:12 --> Total execution time: 0.0044
DEBUG - 2016-11-02 23:34:00 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:34:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:34:00 --> Total execution time: 0.0032
DEBUG - 2016-11-02 23:34:47 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:34:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:34:47 --> Total execution time: 0.0072
DEBUG - 2016-11-02 23:36:16 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:36:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:36:16 --> X : [{"zuid":"ZU100510","product_id":"15","active":"1","category_path":"7_","cid":"7","date_added":"2016-09-21 08:13:00","date_modified":"2016-10-08 10:44:40","is_request":"0","hits":"0","url":"Power_Mixerid15","row_disabled":"0","name":"Power Mixer","brand":"Draper","description":"Suitable for mixing plasters,mortar,floor sceed","video":"www.youtube.com\/microsoft","meta_title":"MIxer","meta_description":"Suitable for mixing plasters,mortar,floor sceed","meta_keywords":"concrete mixer ","language_id":"1"}]
DEBUG - 2016-11-02 23:36:16 --> Total execution time: 0.0064
DEBUG - 2016-11-02 23:36:37 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:36:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:36:37 --> X : [{"zuid":"ZU100510","product_id":"15","active":"1","category_path":"7_","cid":"7","date_added":"2016-09-21 08:13:00","date_modified":"2016-10-08 10:44:40","is_request":"0","hits":"0","url":"Power_Mixerid15","row_disabled":"0","name":"Power Mixer","brand":"Draper","description":"Suitable for mixing plasters,mortar,floor sceed","video":"www.youtube.com\/microsoft","meta_title":"MIxer","meta_description":"Suitable for mixing plasters,mortar,floor sceed","meta_keywords":"concrete mixer ","language_id":"1"}]
DEBUG - 2016-11-02 23:36:37 --> Total execution time: 0.0045
DEBUG - 2016-11-02 23:40:01 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:40:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:40:01 --> X : [{"zuid":"ZU100510","product_id":"15","active":"1","category_path":"7_","cid":"7","date_added":"2016-09-21 08:13:00","date_modified":"2016-10-08 10:44:40","is_request":"0","hits":"0","url":"Power_Mixerid15","row_disabled":"0","name":"Power Mixer","brand":"Draper","description":"Suitable for mixing plasters,mortar,floor sceed","video":"www.youtube.com\/microsoft","meta_title":"MIxer","meta_description":"Suitable for mixing plasters,mortar,floor sceed","meta_keywords":"concrete mixer ","language_id":"1"}]
DEBUG - 2016-11-02 23:40:01 --> Total execution time: 0.0072
DEBUG - 2016-11-02 23:41:55 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:41:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:41:55 --> X : [{"zuid":"ZU100510","product_id":"15","active":"1","category_path":"7_","cid":"7","date_added":"2016-09-21 08:13:00","date_modified":"2016-10-08 10:44:40","is_request":"0","hits":"0","url":"Power_Mixerid15","row_disabled":"0","name":"Power Mixer","brand":"Draper","description":"Suitable for mixing plasters,mortar,floor sceed","video":"www.youtube.com\/microsoft","meta_title":"MIxer","meta_description":"Suitable for mixing plasters,mortar,floor sceed","meta_keywords":"concrete mixer ","language_id":"1"}]
DEBUG - 2016-11-02 23:41:55 --> Total execution time: 0.0054
DEBUG - 2016-11-02 23:43:59 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:43:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:43:59 --> X : [{"zuid":"ZU100510","product_id":"15","active":"1","category_path":"7_","cid":"7","date_added":"2016-09-21 08:13:00","date_modified":"2016-10-08 10:44:40","is_request":"0","hits":"0","url":"Power_Mixerid15","row_disabled":"0","name":"Power Mixer","brand":"Draper","description":"Suitable for mixing plasters,mortar,floor sceed","video":"www.youtube.com\/microsoft","meta_title":"MIxer","meta_description":"Suitable for mixing plasters,mortar,floor sceed","meta_keywords":"concrete mixer ","language_id":"1"}]
DEBUG - 2016-11-02 23:43:59 --> Total execution time: 0.0046
DEBUG - 2016-11-02 23:52:07 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:52:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:52:07 --> X : [{"zuid":"ZU100510","product_id":"15","active":"1","category_path":"7_","cid":"7","date_added":"2016-09-21 08:13:00","date_modified":"2016-10-08 10:44:40","is_request":"0","hits":"0","url":"Power_Mixerid15","row_disabled":"0","name":"Power Mixer","brand":"Draper","description":"Suitable for mixing plasters,mortar,floor sceed","video":"www.youtube.com\/microsoft","meta_title":"MIxer","meta_description":"Suitable for mixing plasters,mortar,floor sceed","meta_keywords":"concrete mixer ","language_id":"1"}]
DEBUG - 2016-11-02 23:52:07 --> Total execution time: 0.0073
DEBUG - 2016-11-02 23:52:15 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:52:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:52:15 --> Total execution time: 0.0039
DEBUG - 2016-11-02 23:52:44 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:52:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:52:44 --> Total execution time: 0.0035
DEBUG - 2016-11-02 23:52:52 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:52:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:52:52 --> Total execution time: 0.0040
DEBUG - 2016-11-02 23:55:44 --> UTF-8 Support Enabled
DEBUG - 2016-11-02 23:55:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-11-02 23:55:44 --> Total execution time: 0.0040
