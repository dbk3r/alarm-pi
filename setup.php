<?php
// Create database
  include "include/config.php";


  $conn = new mysqli($db_server, "root", "nulleins");
	$sql = "CREATE DATABASE IF NOT EXISTS ". $db_db;
	if ($conn->query($sql) === TRUE) {
	    echo "Database ".$db_db." created successfully\n";
	} else {
	    echo "Error creating database: " . $conn->error . "\n";
	}

	$sql = "GRANT ALL PRIVILEGES ON ".$db_db.".* TO '".$db_user."'@'%' IDENTIFIED BY '".$db_passwd."' WITH GRANT OPTION;";
	if ($conn->query($sql) === TRUE) {
		echo "user added successfully.\n";
	} else {
		echo "Error adding user: " . $conn->error . "\n";
	}

	$conn->close();

	// connecting with new db_admin
  include "include/db.php";

	// Check connection

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	// adding needed tables
	$table = $db_table_prefix."_events";
	$db = $db_db;
	$sql = "CREATE TABLE IF NOT EXISTS `$db`.`$table` (
	    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	    `event-name` VARCHAR(255) NOT NULL,
	    `event-place` VARCHAR(255) NOT NULL,
	    `event-time` VARCHAR(255) NOT NULL,
	    `event-image` VARCHAR(255) NOT NULL );
		";

	if ($conn->query($sql) === TRUE) {
	    echo "$table  created successfully\n";
	} else {
	    echo "Error creating $table: " . $conn->error . "\n";
	}

  $table = $db_table_prefix."_cams";
	$db = $db_db;
	$sql = "CREATE TABLE IF NOT EXISTS `$db`.`$table` (
	    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	    `cam-name` VARCHAR(255) NOT NULL,
	    `cam-place` VARCHAR(255) NOT NULL,
	    `cam-url` VARCHAR(255) NOT NULL,
      `cam-user` VARCHAR(255) NOT NULL,
      `cam-password` VARCHAR(255) NOT NULL,
	    `cam-record-path` VARCHAR(255) NOT NULL );
		";

	if ($conn->query($sql) === TRUE) {
	    echo "$table  created successfully\n";
	} else {
	    echo "Error creating $table: " . $conn->error . "\n";
	}

  $table = $db_table_prefix."_config";
  $db = $db_db;
  $sql = "CREATE TABLE IF NOT EXISTS `$db`.`$table` (
      `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      `config-pin` CHAR(4) NOT NULL,
      `config-sidename` VARCHAR(255) NOT NULL );
    ";

  if ($conn->query($sql) === TRUE) {
      echo "$table  created successfully\n";
  } else {
      echo "Error creating $table: " . $conn->error . "\n";
  }

  $table = $db_table_prefix."_switch";
  $db = $db_db;
  $sql = "CREATE TABLE IF NOT EXISTS `$db`.`$table` (
      `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      `switch-name` VARCHAR(255) NOT NULL,
      `switch-description` VARCHAR(255) NOT NULL,
      `switch-GPIO` INT(11) NOT NULL,
      `switch-state` TINYINT(1) NOT NULL,
      `switch-ts` VARCHAR(255) NOT NULL );
    ";

    if ($conn->query($sql) === TRUE) {
        echo "$table  created successfully\n";
    } else {
        echo "Error creating $table: " . $conn->error . "\n";
    }
  ?>
