<?php

/* NPHvZ Environment Configuration File */

  ini_set('display_errors',0);
  error_reporting(E_ALL|E_STRICT);

  /**
	 *  A string for what environment the script is executing in
	 *  dev/beta/prod -- not actually used anywhere in the source code
	 *  but I originally used this for some server environment config stuff
	 */
	define("ENV", "dev");
	
  /**
	 *  Directory location of this file, root of the application
	 *    eg:    /var/www/knoopvszombies/
	 */
	define("DOCUMENT_ROOT", "/home/spripqqq/public_html/nphvz.com");
	
  /**
	 *  Domain of the application, used for creating HTML links, etc.
	 *    eg:   localhost or muzombies.org
	 */
	define("DOMAIN", "nphvz.com");

  /**
	 *  Hostname of server
	 *    eg:    localhost or muzombies.org
	 */
	define("HOST", "nphvz.com");
	
  /**
	 *  Protocol for SSL. Used to write html links in a few places, can use this to force non ssl
	 *  	eg:    http or https
	 */
	define("HTTPS", "http");
	
  /**
	 *  Database name to use for the main game engine
	 */
	define("DATABASE", "spripqqq_nphvz_game");

  /**
	 *  Database name to use for the forums
	 */
	define("FORUM_DATABASE", "spripqqq_nphvz_forum");
	
  /**
	 *  Hostname of location for const DATABASE
	 */
	define("DATABASE_HOSTNAME", "localhost");

  /**
	 *  Database user
	 */
	define("DATABASE_USER", "spripqqq_gojira");


  /**
	 *  Database password for "Web" user
	 */
	define("DATABASE_PASS_FOR_WEB", "7wkIQ20FWcwz");
	
  /**
	 *  Database password for "cron" user (used when running cron jobs)
	 */
	define("DATABASE_PASS_FOR_CRON", "7wkIQ20FWcwz");
	
	/**
	 * Facebook application ID, get from facebook.org/developers
	 */
	define("FB_APP_ID", "298142493703580");

	/**
	 * Facebook application API Key, get from facebook.org/developers - SAME AS APP ID AS OF 2011
	 */
	define("FB_API_KEY", "298142493703580");
	
  /**
	 * Facebook application secret (pairs with API Key), get from facebook.org/developers
	 */
	define("FB_SECRET", "b5919aa658966b7315aeeed43d880b2e");

  /**
	 * Facebook Page ID
	 */
	define("FB_PAGE_ID", "169842236436987");

  /**
	 * Facebook Page Name
	 */
	define("FB_PAGE_NAME", "NPHVZ");

  /**
	 * Email Address 
	 */
	define("EMAIL", "mailer@nphvz.com");
	
  /**
	 * Reply to address (emails sent to EMAIL get forwarded to the reply to address)
	 */
	define("EMAIL_REPLY_TO", "newpaltzhvz@gmail.com");

  /**
	 * Archive Email Address
	 * a copy of all emails will be sent here
	 */
	define("ARCHIVE_EMAIL", "blackhole@localhost");
	
	/*
	 * Application Strings
	 * short abbreviation for the school or organization
	 */
	define("UNIVERSITY", "NPHVZ");

	/*
	 * Twitter Application keys
	 */
	//define("TWITTER_CONSUMER_KEY", "LLOx3VmG08hc27C6ftUZK4XA8");

	/*
	 * Twitter Application keys
	 */
	//define("TWITTER_CONSUMER_SECRET", "LPEgR4fYUaF1qxBo8HtmRa1WJeRxujYpk8qJTwl0a3uGGocwvm");

	/*
	 * Twitter Account keys
	 */
	//define("TWITTER_ACCESS_TOKEN", "2557657015-iSlluDYEOHuvvIK00gywltg6j6Ek3pJvKvbsuKe");
	/*
	 * Twitter Account keys
	 */
	//define("TWITTER_ACCESS_TOKEN_SECRET", "KwRdlQCzLYSmIEr4ub6YIEh6gbdFJGbGj5kRFp4Rp4qp7");
	
	/*
	 * Timezone setting
	 */
	date_default_timezone_set("America/New_York");
	
	/*
	 * Game Logic Settings
	 * Maximum amount of seconds a zombie can survive without 
	 * feeding (marked deceased beyond this by CRON script)
	 */
	define("ZOMBIE_MAX_FEED_TIMER", 172800);  // 48 hours

?>
