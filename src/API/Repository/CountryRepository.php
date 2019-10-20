<?php

namespace App\API\Repository;

use App\API\Core\Database;

class CountryRepository
{
    private $database;
    private $connection;

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->connection = $this->database->connect();
    }

    public function findAll(): array
    {
        $sql = "
        SELECT country.* FROM destination.country ;";

        $query = $this->connection->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(\PDO::FETCH_CLASS, 'App\API\Entity\Country');
        $tab = [];

        foreach ($results as &$country) {
            $cityId = $country->getCityId();

            $sql = "
            SELECT city.* FROM destination.city where city.city_id = " . $cityId;

            $query = $this->connection->prepare($sql);
            $query->execute();
            $res = $query->fetchAll(\PDO::FETCH_CLASS, 'App\API\Entity\City');
            $country->setCity($res);
        }
        return  $results;
    }
}