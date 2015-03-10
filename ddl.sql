CREATE TABLE IF NOT EXISTS `geometories` (
    `id` int(11) NOT NULL,
    `hoge_id` int(11) NOT NULL,
    `latlng` geometry NOT NULL,
    `created` datetime NOT NULL,
    `modified` datetime NOT NULL
) ENGINE=INNODB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO `geometories` (`id`, `hoge_id`, `latlng`, `created`, `modified`)
VALUES
	(1, 1, X'00000000010100000033333333332361409A99999999994140', '2015-03-10 23:35:00', '2015-03-10 23:35:00');
