<?php>
//defining paths
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR)
defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_fRONT" . ds . "templates/front")
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_fRONT" . ds . "templates/back")
echo __DIR__

defined("DB_HOST") ? null : define("DB_HOST", "localhost")
defined("DB_USER") ? null : define("DB_USER", "root")
defined("DB_PASS") ? null : define("DB_PASS", "")
defined("DB_NAME") ? null : define("DB_NAME" "ecom_db")



<?>