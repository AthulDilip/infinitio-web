<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2016-09-21 11:08:43 --> UTF-8 Support Enabled
DEBUG - 2016-09-21 11:08:43 --> No URI present. Default controller set.
DEBUG - 2016-09-21 11:08:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-21 11:08:45 --> Total execution time: 1.4708
DEBUG - 2016-09-21 11:08:45 --> UTF-8 Support Enabled
DEBUG - 2016-09-21 11:08:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-21 11:08:45 --> 404 Page Not Found: Faviconico/index
DEBUG - 2016-09-21 11:45:37 --> UTF-8 Support Enabled
DEBUG - 2016-09-21 11:45:37 --> Global POST, GET and COOKIE data sanitized
ERROR - 2016-09-21 11:45:37 --> 404 Page Not Found: Static/css
DEBUG - 2016-09-21 12:19:29 --> UTF-8 Support Enabled
DEBUG - 2016-09-21 12:19:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-21 12:19:29 --> Total execution time: 0.0747
DEBUG - 2016-09-21 12:19:30 --> UTF-8 Support Enabled
DEBUG - 2016-09-21 12:19:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-21 12:19:30 --> Total execution time: 0.0720
DEBUG - 2016-09-21 12:19:31 --> UTF-8 Support Enabled
DEBUG - 2016-09-21 12:19:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2016-09-21 12:19:31 --> SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid=?  GROUP BY pid;
ERROR - 2016-09-21 12:19:31 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'PRD.rate' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT * FROM (
                    SELECT DISTINCT product_id AS pid,
                        (SELECT AVG(rating) AS ar FROM user_reviews WHERE user_id = i.user_id) AS rate,
                        (SELECT image_id FROM product_images WHERE product_id = i.product_id LIMIT 0,1) AS main_image,
                        (SELECT MIN(p_price_hour) FROM inventory WHERE product_id = i.product_id AND active=1) AS HOUR,
                        (SELECT MIN(p_price_day) FROM inventory WHERE product_id = i.product_id AND active=1) AS DAY,
                        (SELECT MIN(p_price_month) FROM inventory WHERE product_id = i.product_id AND active=1) AS MONTH
                    FROM inventory i WHERE active = 1 ORDER BY rate DESC) AS PRD LEFT JOIN product_description pd ON (pd.product_id = PRD.pid AND language_id = 1 ) 
                    LEFT JOIN products p ON (p.product_id = PRD.pid AND language_id = 1 )  LEFT JOIN product_images PI ON (PRD.main_image = PI.image_id) WHERE p.cid='4'  GROUP BY pid;
