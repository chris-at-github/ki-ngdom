#
# Table structure for table 'tx_ai_domain_model_map'
#
CREATE TABLE tx_ai_domain_model_map (

	title varchar(255) DEFAULT '' NOT NULL,
  regions int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_ai_domain_model_mapregion'
#
CREATE TABLE tx_ai_domain_model_mapregion (

	title varchar(255) DEFAULT '' NOT NULL,
  locations int(11) unsigned DEFAULT '0',
	map int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_ai_domain_model_maplocation'
#
CREATE TABLE tx_ai_domain_model_maplocation (

	region int(11) unsigned DEFAULT '0',
	map int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_ai_domain_model_game'
#
CREATE TABLE tx_ai_domain_model_game (

	title varchar(255) DEFAULT '' NOT NULL,
	map int(11) unsigned DEFAULT '0',
	regions int(11) unsigned DEFAULT '0',
	players int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_ai_domain_model_gamemapregion'
#
CREATE TABLE tx_ai_domain_model_gamemapregion (

    origin int(11) unsigned DEFAULT '0',
    game   int(11) unsigned DEFAULT '0',
		locations int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_ai_domain_model_gamemaplocation'
#
CREATE TABLE tx_ai_domain_model_gamemaplocation (

    region int(11) unsigned DEFAULT '0',
    origin int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_ai_domain_model_gameplayer'
#
CREATE TABLE tx_ai_domain_model_gameplayer (

	title varchar(255) DEFAULT '' NOT NULL,
	game int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_ai_domain_model_queue'
#
CREATE TABLE tx_ai_domain_model_queue (

	processor varchar(255) DEFAULT '' NOT NULL,
	expiry_date int(11) DEFAULT '0' NOT NULL,
	arguments text,
	game int(11) unsigned DEFAULT '0',

);