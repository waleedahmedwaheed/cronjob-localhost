<?php 
include 'db/dbcon.php';
include 'db/dbcon2.php';
session_start();
error_reporting(0);

		
				
				echo $insertSQLs = "INSERT INTO client_isbpos.test(col1) 
				VALUES('test')"; 
				echo $insertSQLs."<br>";
				mysql_select_db($database_dbconfig, $dbconfig);
				$Result1 = mysql_query($insertSQLs, $dbconfig) or die(mysql_error());
				
				
// ENTER FOLLOWING SCRIPT IN CMD //
// IT WILL CREATE TASK IN TASK SCHEDULER //

//** schtasks /create /tn "XamppCron4" /tr "C:\wamp64\bin\php\php5.6.16\php.exe C:\wamp64\www\isb-pos-client\cron.php" /sc minute /mo 5	**//			
		
?>