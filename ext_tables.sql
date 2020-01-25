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

);

#
# Table structure for table 'tx_ai_domain_model_gamemapregion'
#
CREATE TABLE tx_ai_domain_model_gamemapregion (

    origin int(11) unsigned DEFAULT '0',
    game   int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_ai_domain_model_gamemaplocation'
#
CREATE TABLE tx_ai_domain_model_gamemaplocation (

    region int(11) unsigned DEFAULT '0',
    origin int(11) unsigned DEFAULT '0',

);

