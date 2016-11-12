<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-10-31 12:12:56 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:12:56 --> No URI present. Default controller set.
DEBUG - 2016-10-31 12:12:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-31 12:12:57 --> Total execution time: 1.5732
DEBUG - 2016-10-31 12:12:58 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:12:58 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-31 12:12:58 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-10-31 12:13:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:13:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-31 12:13:15 --> Total execution time: 0.0687
DEBUG - 2016-10-31 12:13:16 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:13:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-31 12:13:17 --> Total execution time: 0.1663
DEBUG - 2016-10-31 12:13:17 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:13:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-31 12:13:17 --> 
DEBUG - 2016-10-31 12:13:17 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid LIMIT 0, 6 ;
ERROR - 2016-10-31 12:13:17 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'PRD.rate' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid='7' AND HOUR > 0 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-31 12:13:32 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:13:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-31 12:13:32 --> Total execution time: 0.3178
DEBUG - 2016-10-31 12:13:36 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:13:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-31 12:13:37 --> Total execution time: 0.0066
DEBUG - 2016-10-31 12:13:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:13:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-31 12:13:37 --> 
DEBUG - 2016-10-31 12:13:37 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-31 12:13:37 --> 1
DEBUG - 2016-10-31 12:13:37 --> Total execution time: 0.0217
DEBUG - 2016-10-31 12:13:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:13:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-31 12:13:37 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-31 12:13:37 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:13:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-31 12:13:37 --> 404 Page Not Found: Static/images
DEBUG - 2016-10-31 12:13:38 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:13:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-31 12:13:38 --> [{"inventory_id":"5","user_id":"2","latitude":"11.120298","longitude":"76.119965","location":"Manjeri, Kerala, India","zemose_type":"request","quantity":"10","deposit":"100","price_hour":"1","price_day":"0","price_month":"0","p_price_hour":"10","p_price_day":null,"p_price_month":null,"skilled_labour":"0","c_skilled_labour":"0","s_price_hour":"0","s_price_day":"0","s_price_month":"0","p_s_price_hour":null,"p_s_price_day":null,"p_s_price_month":null,"provide_delivery":"0","p_delivery":"0","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"0","row_disabled":"1","shopname":"Hello World Rental Portal","shopaddress":"Thangalpadi","city":"Thangalpadi, Kerala, India","lat":"11.057568","lon":"76.005821"},{"inventory_id":"24","user_id":"15","latitude":"45.493050","longitude":"12.417700","location":"Venice, Italy","zemose_type":"request","quantity":"10","deposit":"1000","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"10","p_price_day":"100","p_price_month":"4000","skilled_labour":"1","c_skilled_labour":"1","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"1200","p_s_price_day":"2300","p_s_price_month":"30000","provide_delivery":"1","p_delivery":"1000","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"50","row_disabled":"0","shopname":"Veliancode Hardwares","shopaddress":"Veliancode P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128"},{"inventory_id":"8","user_id":"15","latitude":"10.727724","longitude":"75.948128","location":"Veliancode, Kerala, India","zemose_type":"request","quantity":"1","deposit":"500","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"20","p_price_day":"200","p_price_month":"1000","skilled_labour":"1","c_skilled_labour":"0","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"100","p_s_price_day":"600","p_s_price_month":"5000","provide_delivery":"0","p_delivery":"0","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"0","row_disabled":"1","shopname":"Veliancode Hardwares","shopaddress":"Veliancode P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128"},{"inventory_id":"9","user_id":"22","latitude":"0.000000","longitude":"0.000000","location":"126 Princes Highway, Bolwarra, Victoria, Australia","zemose_type":"request","quantity":"10","deposit":"1000","price_hour":"1","price_day":"0","price_month":"0","p_price_hour":"100","p_price_day":null,"p_price_month":null,"skilled_labour":"0","c_skilled_labour":"0","s_price_hour":"0","s_price_day":"0","s_price_month":"0","p_s_price_hour":null,"p_s_price_day":null,"p_s_price_month":null,"provide_delivery":"0","p_delivery":"0","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"0","row_disabled":"1","shopname":"Maliyakkal Stores","shopaddress":"Veliancode, P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128"},{"inventory_id":"6","user_id":"6","latitude":"19.751480","longitude":"75.713890","location":"Maharashtra, India","zemose_type":"request","quantity":"10","deposit":"3000","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"350","p_price_day":"3500","p_price_month":"35000","skilled_labour":"1","c_skilled_labour":"1","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"300","p_s_price_day":"500","p_s_price_month":"4810","provide_delivery":"0","p_delivery":"1220","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"0","row_disabled":"1","shopname":"zemose india","shopaddress":"malappuram","city":"Malappuram, Kerala, India","lat":"11.073182","lon":"76.073997"}]
DEBUG - 2016-10-31 12:13:39 --> product id used
DEBUG - 2016-10-31 12:13:39 --> Total execution time: 0.2485
DEBUG - 2016-10-31 12:13:39 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:13:39 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:13:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-31 12:13:39 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-31 12:13:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-31 12:13:39 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-31 12:13:39 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:13:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-31 12:13:39 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-31 12:13:39 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:13:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-31 12:13:39 --> 404 Page Not Found: P/15
DEBUG - 2016-10-31 12:13:39 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:13:39 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:13:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-31 12:13:39 --> 404 Page Not Found: P/15
DEBUG - 2016-10-31 12:13:39 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-31 12:13:39 --> 404 Page Not Found: P/15
DEBUG - 2016-10-31 12:15:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:15:03 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-31 12:15:03 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-31 12:17:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:17:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-31 12:17:33 --> [{"inventory_id":"5","user_id":"2","latitude":"11.120298","longitude":"76.119965","location":"Manjeri, Kerala, India","zemose_type":"request","quantity":"10","deposit":"100","price_hour":"1","price_day":"0","price_month":"0","p_price_hour":"10","p_price_day":null,"p_price_month":null,"skilled_labour":"0","c_skilled_labour":"0","s_price_hour":"0","s_price_day":"0","s_price_month":"0","p_s_price_hour":null,"p_s_price_day":null,"p_s_price_month":null,"provide_delivery":"0","p_delivery":"0","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"0","row_disabled":"1","shopname":"Hello World Rental Portal","shopaddress":"Thangalpadi","city":"Thangalpadi, Kerala, India","lat":"11.057568","lon":"76.005821"},{"inventory_id":"24","user_id":"15","latitude":"45.493050","longitude":"12.417700","location":"Venice, Italy","zemose_type":"request","quantity":"10","deposit":"1000","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"10","p_price_day":"100","p_price_month":"4000","skilled_labour":"1","c_skilled_labour":"1","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"1200","p_s_price_day":"2300","p_s_price_month":"30000","provide_delivery":"1","p_delivery":"1000","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"50","row_disabled":"0","shopname":"Veliancode Hardwares","shopaddress":"Veliancode P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128"},{"inventory_id":"8","user_id":"15","latitude":"10.727724","longitude":"75.948128","location":"Veliancode, Kerala, India","zemose_type":"request","quantity":"1","deposit":"500","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"20","p_price_day":"200","p_price_month":"1000","skilled_labour":"1","c_skilled_labour":"0","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"100","p_s_price_day":"600","p_s_price_month":"5000","provide_delivery":"0","p_delivery":"0","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"0","row_disabled":"1","shopname":"Veliancode Hardwares","shopaddress":"Veliancode P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128"},{"inventory_id":"9","user_id":"22","latitude":"0.000000","longitude":"0.000000","location":"126 Princes Highway, Bolwarra, Victoria, Australia","zemose_type":"request","quantity":"10","deposit":"1000","price_hour":"1","price_day":"0","price_month":"0","p_price_hour":"100","p_price_day":null,"p_price_month":null,"skilled_labour":"0","c_skilled_labour":"0","s_price_hour":"0","s_price_day":"0","s_price_month":"0","p_s_price_hour":null,"p_s_price_day":null,"p_s_price_month":null,"provide_delivery":"0","p_delivery":"0","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"0","row_disabled":"1","shopname":"Maliyakkal Stores","shopaddress":"Veliancode, P.O","city":"Veliancode, Kerala, India","lat":"10.727724","lon":"75.948128"},{"inventory_id":"6","user_id":"6","latitude":"19.751480","longitude":"75.713890","location":"Maharashtra, India","zemose_type":"request","quantity":"10","deposit":"3000","price_hour":"1","price_day":"1","price_month":"1","p_price_hour":"350","p_price_day":"3500","p_price_month":"35000","skilled_labour":"1","c_skilled_labour":"1","s_price_hour":"1","s_price_day":"1","s_price_month":"1","p_s_price_hour":"300","p_s_price_day":"500","p_s_price_month":"4810","provide_delivery":"0","p_delivery":"1220","product_id":"15","hits":"0","currency_id":"1","active":"1","delivery_area":"0","row_disabled":"1","shopname":"zemose india","shopaddress":"malappuram","city":"Malappuram, Kerala, India","lat":"11.073182","lon":"76.073997"}]
DEBUG - 2016-10-31 12:17:33 --> product id used
DEBUG - 2016-10-31 12:17:33 --> Total execution time: 0.0114
DEBUG - 2016-10-31 12:17:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:17:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:17:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-31 12:17:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-31 12:17:33 --> 404 Page Not Found: Static/css
ERROR - 2016-10-31 12:17:33 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-31 12:17:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:17:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-31 12:17:33 --> 404 Page Not Found: P/15
DEBUG - 2016-10-31 12:17:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:17:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-31 12:17:33 --> 404 Page Not Found: P/15
DEBUG - 2016-10-31 12:17:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:17:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-31 12:17:33 --> 404 Page Not Found: P/15
DEBUG - 2016-10-31 12:17:33 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:17:33 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-10-31 12:17:33 --> 404 Page Not Found: Static/css
DEBUG - 2016-10-31 12:31:59 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:31:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-31 12:31:59 --> Total execution time: 0.0061
DEBUG - 2016-10-31 12:32:01 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:32:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-31 12:32:01 --> Total execution time: 0.0081
DEBUG - 2016-10-31 12:32:01 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:32:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-31 12:32:01 --> 
DEBUG - 2016-10-31 12:32:01 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-31 12:32:01 --> 0
DEBUG - 2016-10-31 12:32:01 --> Total execution time: 0.0040
DEBUG - 2016-10-31 12:32:03 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:32:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-31 12:32:03 --> Total execution time: 0.0077
DEBUG - 2016-10-31 12:32:04 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:32:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-31 12:32:04 --> 
DEBUG - 2016-10-31 12:32:04 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-31 12:32:04 --> 0
DEBUG - 2016-10-31 12:32:04 --> Total execution time: 0.0067
DEBUG - 2016-10-31 12:32:14 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:32:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-31 12:32:14 --> Total execution time: 0.0057
DEBUG - 2016-10-31 12:32:14 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:32:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-31 12:32:14 --> 
DEBUG - 2016-10-31 12:32:14 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=? AND HOUR > 0 GROUP BY pid LIMIT 0, 6 ;
DEBUG - 2016-10-31 12:32:14 --> 0
DEBUG - 2016-10-31 12:32:14 --> Total execution time: 0.0069
DEBUG - 2016-10-31 12:32:15 --> UTF-8 Support Enabled
DEBUG - 2016-10-31 12:32:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-10-31 12:32:15 --> Total execution time: 0.0054
