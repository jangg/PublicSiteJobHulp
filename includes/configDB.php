<?php
//***********************************************************************
//  CONSTS voor de local server jhm-public:8880
//  
//***********************************************************************
// Consts voor de lokale database
define("DB_DSN", "mysql:host=localhost;port=8889;dbname=jhcintradb");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("EMAIL_SENDER", "info@jobhulpculemborg.nl");
define("ADMINISTRATOR", "admin");
define("ADMIN_PASSW", "admin");
// smtp gegevens voor forum email local
define("MAIL_SMTP_SERVER", "mail.axc.nl");
define("MAIL_USERID", "intra@jobhulpculemborg.nl");
define("MAIL_PASSWORD", "Opgep1st!");
define("MAIL_SMTPSECURE", "ssl");
define("MAIL_SENDEREMAIL", "intra@jobhulpculemborg.nl");
// DEBUG: 0 = none, 2 = normal, 3 = a lot 
define("MAIL_DEBUG_IND", "0");
// Overige CONSTANTS
// JobHulpMaatje local 
define("LOC_INFO_EMAIL", "info@jobhulpculemborg.nl");
define("LOC_NOREPLY_EMAIL", "no-reply@jobhulpculemborg.nl");
define("LOC_COORD_EMAIL", "coordinator@jobhulpculemborg.nl");
define("LOC_NAME", "JobHulp Culemborg");
define("LOC_LOGO", "stichtingjobhulpculemborg4.png");
define("LOC_DOMAIN", "jhcpubdev:8880");
define("LOC_DOMAIN_INTRA", "jhcintradev:8880");
define("LOC_DOMAIN_PUB", "jhcpubdev:8880");
define("LOC_WEBSITE", "https://jhcpubdev:8880");
define("LOC_PUBLIC_WEBSITE", "https://jhc.machunter.nl:8880");
define("LOC_TELEFOON1", "+ 31 6 4194 1431");
define("LOC_LOCATION", "Culemborg");

?>