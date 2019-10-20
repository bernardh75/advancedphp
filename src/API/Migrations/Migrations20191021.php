<?php

namespace App\API\Migrations;

use App\API\Migrations\AbstractMigrations;

require_once 'vendor/autoload.php';

class Migrations20191021 extends AbstractMigrations
{
	protected $sql = "
		INSERT INTO destination.country
		VALUES
			(NULL, 'france', 'paris.jpg'),
			(NULL, 'japon', 'tokyo.jpg'),
			(NULL, 'angleterre', 'londres.jpg')
		;
	";
}