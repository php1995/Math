CREATE TABLE `posts`
(
    `id`         INT(11) AUTO_INCREMENT,
    `title`      VARCHAR(255) NOT NULL,
    `post_link`  VARCHAR(255) NOT NULL,
    `datetime`   DATETIME     NOT NULL,
    `image_link` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = INNODB
