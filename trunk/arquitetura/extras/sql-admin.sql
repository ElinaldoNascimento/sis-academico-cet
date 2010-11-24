/*  usuário do admin
	
	login:elinaldo
	senha:root

     */




CREATE TABLE /*!32312 IF NOT EXISTS*/ `usuario` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nome` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `ativo` tinyint(3) unsigned NOT NULL default '0',
  `nivel` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB /*!40100 DEFAULT CHARSET=latin1*/;


LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS*/;
REPLACE INTO `usuario` (`id`, `nome`, `login`, `senha`, `ativo`, `nivel`) VALUES
	('1','Administrador','admin','21232f297a57a5a743894a0e4a801fc3',1,'super'),
	('2','elinaldo','elinaldo','63a9f0ea7bb98050796b649e85481845',1,'comum');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS*/;
UNLOCK TABLES;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS*/;
