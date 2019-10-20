<?php

namespace App\API\Migrations;

use App\API\Migrations\AbstractMigrations;

require_once 'vendor/autoload.php';

class Migrations20191021 extends AbstractMigrations
{
	protected $sql = "
		INSERT INTO destination.country
		VALUES
			(NULL, 'france', '1'),
			(NULL, 'japon', '2'),
			(NULL, 'angleterre', '3')
		;
	";
}