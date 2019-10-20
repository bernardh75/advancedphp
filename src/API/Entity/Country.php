<?php
//TODO fichier quasi douteux
namespace App\API\Entity;

class Country implements \JsonSerializable
{
    private $id;
    private $name;
    private $city_id;
    private $capitale;

    public function jsonSerialize():array
    {
        return  [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'city_id' => $this->getCityID(),
            'capitale' => $this->getCity()
        ];
    }

    public function getId():?int { return $this->id;}
	public function setId(?int $id):void { $this->id = $id; }
	
    public function getName():string { return $this->name;}
	public function setName(string $name):void { $this->name = $name; }
	
    public function getCityId():string { return $this->city_id;}
    public function setCityId(string $cityId):void { $this->city_id = $cityId; }
    public function getCity()
    {
        return $this->capitale;
    }
    public function setCity($capitale)
    {
        $this->capitale = $capitale;
    }

}