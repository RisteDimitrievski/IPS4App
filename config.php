<?php 
$config = array(
"dbName" => "forum",
"dbUsername" => "root",
"dbHost" => "localhost",
"dbPassword" => "1234".
"charset" => "UTF8",
"Site_Url" => "http://localhost/forums/",
"table" => "core_members",
"master_key" => "master-key-IPS4");
/*
If you don't know what you're doing for charset, then dont change it.
Because, some charsets are not safe for using in production servers.

NOTE: If your IPS Forum installation have custom prefix, you should change the core_members with the prefix entered in the forums database.
And the database name must be exactly like in your forums.
*/

$dsn = "mysql://host=".$config["dbHost"].";dbname=".$config["dbName"];
if(empty($config["master_key"] or $config["table"] or $config["Site_Url"] or $config["dbName"] or $config["dbUsername"] or $config["dbPassword"] or $config["dbHost"] or $config["charset"]))
{
	throw new Exception("Enter the database informations in config.php");
}

$options = array(
PDO::MYSQL_ATTR_INT_COMMAND => "SET NAMES ".$config["charset"]);

$db = new PDO($dsn,$config["dbUsername"],$config["dbPassword"]);
if(!$db)
{
	die($db->error);
}



?>

