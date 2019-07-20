<?php 
require('phpmybackup.php');
$db = new MYSQL_DUMP;
$db->dbhost = 'localhost';
$db->dbuser = 'root';
$db->dbpwd = 'root';
$db->backupsToKeep = 20;
$db->showDebug = true;
$db->backupDir = '/home/backups';
// $db->ignoreDatabases = ['test','unimportant_db'];
$db->includeDatabases = ['example_database', 'example2'];
// $db->emptyTables = ['largedb.large_table1','largedb.cachetable'];
$db->dumpDatabases();

?>
