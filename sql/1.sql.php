-- <? defined('BW') or die("Acesso negado!"); ?>


-- 
ALTER TABLE `bw_versao` ADD `com_banners_1` INT(1) NOT NULL;


--
CREATE TABLE `bw_banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `observacoes` longtext NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


--
CREATE TABLE `bw_banners_slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_banner` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` longtext NULL,
  `link` varchar(255) NULL,
  `link_target` varchar(100) NULL,
  `ordem` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

