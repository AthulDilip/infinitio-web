CREATE TABLE `coupons` (
  `coupon_id` int(255) NOT NULL,
  `coupon_name` varchar(1024) NOT NULL,
  `coupon_code` varchar(10) NOT NULL,
  `coupon_type` varchar(100) NOT NULL,
  `recur` int(255) DEFAULT NULL,
  `value` double NOT NULL,
  `start_date` datetime DEFAULT NULL,
  `expiry_date` datetime DEFAULT NULL,
  `maximum_uses` int(255) DEFAULT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupon_id`);

ALTER TABLE `coupons`
  MODIFY `coupon_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;



CREATE TABLE IF NOT EXISTS `coupon_categories` ( `coupon_id` INT(255) NOT NULL , `cid` INT(255) NOT NULL ) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `coupon_products` ( `coupon_id` INT(255) NOT NULL , `product_id` INT(255) NOT NULL ) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(255) NOT NULL,
  `page_url` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- pages
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);
ALTER TABLE `pages`
  MODIFY `page_id` int(255) NOT NULL AUTO_INCREMENT;

CREATE TABLE IF NOT EXISTS `page_content` (
  `page_id` int(255) NOT NULL,
  `name` varchar(1024) NOT NULL,
  `content` text NOT NULL,
  `language_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `products` ADD `featured_image` INT(255) NOT NULL AFTER `row_disabled`;
ALTER TABLE cart ADD quantity INT(255) DEFAULT 1 NOT NULL;

CREATE TABLE IF NOT EXISTS safety
(
  safety_id INT(255) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  image VARCHAR(1024) NOT NULL,
  row_disabled INT(1) DEFAULT 0 NOT NULL
);

CREATE TABLE IF NOT EXISTS safety_data
(
  safety_id INT(255) NOT NULL,
  name INT(255) NOT NULL,
  language_id INT(255) NOT NULL
);