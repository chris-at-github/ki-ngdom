#
# Table structure for table 'tx_ki_domain_model_map'
#
CREATE TABLE tx_ki_domain_model_map (

	title varchar(255) DEFAULT '' NOT NULL,
  regions int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_ki_domain_model_mapregion'
#
CREATE TABLE tx_ki_domain_model_mapregion (

	title varchar(255) DEFAULT '' NOT NULL,
  coordinates int(11) unsigned DEFAULT '0',
	map int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_ki_domain_model_mapcoordinate'
#
CREATE TABLE tx_ki_domain_model_mapcoordinate (

	region int(11) unsigned DEFAULT '0',
	map int(11) unsigned DEFAULT '0',
	x int(11) DEFAULT '0' NOT NULL,
	y int(11) DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_ki_domain_model_game'
#
CREATE TABLE tx_ki_domain_model_game (

	title varchar(255) DEFAULT '' NOT NULL,
	map int(11) unsigned DEFAULT '0',
	regions int(11) unsigned DEFAULT '0',
	players int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_ki_domain_model_gamemapregion'
#
CREATE TABLE tx_ki_domain_model_gamemapregion (

    origin int(11) unsigned DEFAULT '0',
    game   int(11) unsigned DEFAULT '0',
		coordinates int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_ki_domain_model_gamemapcoordinate'
#
CREATE TABLE tx_ki_domain_model_gamemapcoordinate (

    region int(11) unsigned DEFAULT '0',
    origin int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_ki_domain_model_gameplayer'
#
CREATE TABLE tx_ki_domain_model_gameplayer (

	title varchar(255) DEFAULT '' NOT NULL,
	game int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_ki_domain_model_queue'
#
CREATE TABLE tx_ki_domain_model_queue (

	processor varchar(255) DEFAULT '' NOT NULL,
	expiry_date int(11) DEFAULT '0' NOT NULL,
	arguments text,
	game int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_ki_domain_model_settlement'
#
CREATE TABLE tx_ki_domain_model_settlement (

	title varchar(255) DEFAULT '' NOT NULL,
	coordinate int(11) unsigned DEFAULT '0',
	record_type varchar(255) DEFAULT '' NOT NULL,

);